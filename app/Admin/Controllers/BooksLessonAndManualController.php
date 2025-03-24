<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Book\SendBook;
use App\Models\Authors;
use App\Models\Books;
use App\Models\BooksLessonAndManual;
use App\Models\CategoriesBooks;
use App\Models\Department;
use App\Models\EducationYears;
use App\Models\Langs;
use App\Models\Publishing;
use App\Models\Science;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Helpers\ApiHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BooksLessonAndManualController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = "Darslik va o'quv qo'llanmalar";

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BooksLessonAndManual());

//        $grid->column('id', __('Id'));
//        $grid->column('title', __('Title'));
//        $grid->column('isbn', __('Isbn'));
//        $grid->column('author', __('Author'));
//        $grid->column('desc', __('Desc'));
//        $grid->column('img', __('Img'));
//        $grid->column('b_size', __('B size'));
//        $grid->column('b_page_count', __('B page count'));
//        $grid->column('category_id', __('Category id'));
//        $grid->column('user_id', __('User id'));
//        $grid->column('b_lang', __('B lang'));
//        $grid->column('b_read_lang', __('B read lang'));
//        $grid->column('b_published_year', __('B published year'));
//        $grid->column('b_publishing', __('B publishing'));
//        $grid->column('file_path', __('File path'));
//        $grid->column('telegram_msg_id', __('Telegram msg id'));
//        $grid->column('view_count', __('View count'));
//        $grid->column('data', __('Data'));
//        $grid->column('created_at', __('Created at'));
//        $grid->column('updated_at', __('Updated at'));
//
//        return $grid;

        $grid->actions(function ($actions) {
            $actions->add(new SendBook);
        });
        $grid->column('id', __('Id'));
        $grid->column('title', __('Nomi'));
        // $grid->column('isbn', __('Isbn'));
        $grid->column('author', __('Muallif'))->display(function ($model) {
            return $this->muallif->name;
        });
        $grid->column('img', __('Muqova'))->image('/storage/uploads/', 100, 100);
        // $grid->column('b_size', __('B size'));
        // $grid->column('b_page_count', __('B page count'));
        $grid->column('category_id', __('Kategoriya'))->display(function ($model) {
            return $this->category->name;
        });
        $grid->column('user_id', __('Foydalanuvchi'))->display(function ($model) {
            return $this->user->name;
        });
        $grid->column('b_lang', __('Til'))->display(function ($model) {
            return $this->lang->name;
        });
        // $grid->column('b_read_lang', __('B read lang'));
        $grid->column('b_published_year', __('Chop etilgan'));
        $grid->column('b_publishing', __('Nashiryot'))->display(function ($model) {
            return $this->publishing->name;
        });
        $grid->column('file_path', __('File'))->downloadable();
        // $grid->column('telegram_msg_id', __('Telegram msg id'));
        $grid->column('view_count', __('soni'));
        $grid->column('created_at', __('vaqti'))->date('Y-m-d H:i:s');
        // $grid->column('updated_at', __('Updated at'));
        $grid->model()->orderBy('id', 'desc');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(BooksLessonAndManual::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('isbn', __('Isbn'));
        $show->field('author', __('Author'));
        $show->field('desc', __('Desc'));
        $show->field('img', __('Img'));
        $show->field('b_size', __('B size'));
        $show->field('b_page_count', __('B page count'));
        $show->field('category_id', __('Category id'));
        $show->field('user_id', __('User id'));
        $show->field('b_lang', __('B lang'));
        $show->field('course', __('Course'));
        $show->field('lib_subject', __('Fanlar'));
        $show->field('b_read_lang', __('B read lang'));
        $show->field('b_published_year', __('B published year'));
        $show->field('b_publishing', __('B publishing'));
        $show->field('file_path', __('File path'));
        $show->field('telegram_msg_id', __('Telegram msg id'));
        $show->field('view_count', __('View count'));
        $show->field('data', __('Data'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BooksLessonAndManual());

        $form->column(1 / 2, function ($form) {
            $form->text('title', __('Nomi'))->required();
            $form->select('author', 'Muallif')->options(function ($id) {
                $Authors = Authors::find($id);
                if ($Authors) {
                    return [$Authors->id => $Authors->name];
                }
            })->ajax('/admin/api/authors')->required();

            $form->select('category_id', __('Kategoriya'))->options(CategoriesBooks::where('sts', 1)->whereIn('id', [40, 41])->pluck('name', 'id'))->required();

            $form->select('b_publishing', 'Nashiryot')->options(function ($id) {
                $publishings = Publishing::find($id);
                if ($publishings) {
                    return [$publishings->id => $publishings->name];
                }
            })->ajax('/admin/api/publishings')->required();

            $form->multipleSelect('course', 'Kursni tanlang')->options([
                '1' => '1 - kurs',
                '2' => '2 - kurs',
                '3' => '3 - kurs',
                '4' => '4 - kurs',
                '5' => '5 - kurs',
                '6' => '6 - kurs'
            ])->required();

            $form->select('department', 'Kafedralar')->options(Department::pluck('name', 'id'))->load('lib_subject', '/admin/api/sciences')->required();

            $form->select('education_years', 'O`quv yilli')->options(EducationYears::orderBy('code')->pluck('name', 'id'))->required();


            $form->select('lib_subject', 'Fanlar')->options(Science::pluck('name', 'id'))->required();

            $form->image('img', __('Muqova'))->thumbnail('small', $width = 300, $height = 420)->required();
            $form->select('b_lang', __('Til'))->options(Langs::all()->pluck('name', 'id'))->required();
            $form->select('b_read_lang', __('Yozuv'))->options(Books::reads())->required();
            $form->file('file_path', __('File'))->required();
            $form->textarea('desc', __('Anatatsiya'))->rows(5)->required();
        });

        $form->column(1 / 2, function ($form) {
            $form->text('isbn', __('Isbn'));
            $form->text('b_size', __('Hajmi'));
            $form->number('b_page_count', __('Sahifalar soni'));
            $form->number('user_id', __('User id'))->default(1)->required();
            $form->date('b_published_year', __('Nashr yili'))->format('YYYY')->default(date('Y'));
            $form->text('telegram_msg_id', __('TELEGRAM ID'));
            $form->number('view_count', __('Ko\'rishlar soni'));
        });
        $form->saved(function (Form $form) {
            // Insert data into another table, for example, a `book_departments` table

            if ($form->department != null) {

                DB::table('book_departments')->insert([
                    'book_id' => $form->model()->id,
                    'department_id' => $form->department,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            if ($form->model()->course) {
                $form->model()->course = json_decode($form->model()->course, true);
            }
            // Insert data into another table, for example, a `book_courses` table
            foreach ($form->course as $courseId) {
                if ($courseId != null) {
                    DB::table('book_courses')->insert([
                        'book_id' => $form->model()->id,
                        'course_id' => $courseId,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        });
        $form->editing(function (Form $form) {
            if ($form->model()->course) {
                $form->model()->course = json_decode($form->model()->course, true);
            }
        });

        return $form;

//        $form->text('title', __('Title'));
//        $form->number('isbn', __('Isbn'));
//        $form->number('author', __('Author'));
//        $form->text('desc', __('Desc'));
//        $form->image('img', __('Img'));
//        $form->text('b_size', __('B size'));
//        $form->number('b_page_count', __('B page count'));
//        $form->number('category_id', __('Category id'));
//        $form->number('user_id', __('User id'));
//        $form->number('b_lang', __('B lang'));
//        $form->text('b_read_lang', __('B read lang'));
//        $form->date('b_published_year', __('B published year'))->default(date('Y-m-d'));
//        $form->text('b_publishing', __('B publishing'));
//        $form->text('file_path', __('File path'));
//        $form->text('telegram_msg_id', __('Telegram msg id'));
//        $form->number('view_count', __('View count'));
//        $form->text('data', __('Data'));
//
//        return $form;
    }
}
