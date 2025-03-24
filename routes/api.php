<?php

use App\Http\Controllers\Api\LibraryController;
use App\Http\Controllers\lessonLibraryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/library', [LibraryController::class, 'library']);
Route::get('/library/{id}', [LibraryController::class, 'viewbook']);
        
Route::get('sciences/{id}', [lessonLibraryController::class, 'statistic']);

