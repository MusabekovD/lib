<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Members;
use App\Models\LikeBooks;
use App\Models\Books;
use App\KitobBuyurtma;
use App\Models\BooksLessonAndManual;
use App\Models\CategoriesBooks;
use App\Models\Menus;
use App\Models\MenuFrontend;
use Response;

class MainController extends Controller
{
    public function index(Request $request)
    {


        $membersCount = Members::count();
        $booksCount = Books::count();
        $likesCount = LikeBooks::count();
        $menus =  MenuFrontend::nested()->get();

        return view('layouts.newmain', compact('membersCount', 'booksCount', 'likesCount', 'menus'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fio' => 'required',
            'tell' => 'required',
            'kitobnomi' => 'required',
            'muallif' => 'required',
            'nashryili' => 'required',
        ]);
        KitobBuyurtma::create($request->all());
        return response("OK");
    }


    public function library(Request $request)
    {
        $books = Books::filter($request->all())->paginateFilter();
        $categories =  \App\Models\CategoriesBooks::withCount('books')->get();
        return view('library.newindex', compact('categories', 'books'));
    }

    public function viewbook($id)
    {
        $books = Books::findOrFail($id);
        $viewedPosts = session()->get('viewed_book', []);

        if (!in_array($id, $viewedPosts)) {
            $books->view_count = $books->view_count + 1;
            $books->save();
            $viewedPosts[] = $id;
            session()->put('viewed_book', $viewedPosts);
        }
        $categories =  \App\Models\CategoriesBooks::withCount('books')->get();

        return view('library.newview', compact('categories', 'books'));
    }
    public function download($id)
    {
        $books = Books::findOrFail($id);
        $books->download_count = $books->download_count + 1;
        $books->save();
        return response()->file($books->getFile());
    }


    public function page($slug)
    {
        $page = \App\Models\Pages::where('slug', $slug)->firstOrFail();
        return view('frontend.page', compact('page'));
    }

    public function viewnews($slug)
    {
        $news = \App\Models\News::where('slug', $slug)->firstOrFail();
        return view('frontend.viewnews', compact('news'));
    }

    public function newsall()
    {
        $news = \App\Models\News::orderBy('pubdate', 'desc')->simplePaginate(16);
        return view('frontend.newsall', compact('news'));
    }
    public function searchContent(Request $request){
        $query = $request->input('q');

        $books=Books::where('title','like','%'. $query . '%')
                ->orWhere('desc','like','%' . $query . '%')
                ->orderBy('created_at','desc')
                ->paginate(9);

        $categories =  \App\Models\CategoriesBooks::withCount('books')->get();
        return view('frontend.search',compact('books','categories'));

    }


    public function pdf($id){

        $book = Books::findOrFail($id);

        return view('pdf.pdf_viewer',compact('book'));

    }
    public function pdfManual($id){
        $book = BooksLessonAndManual::findOrFail($id);
        return view('pdf.pdf_viewer',compact('book'));
    }
}
