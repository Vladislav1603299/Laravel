<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\Admin\AdminHelloController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//news

Route::get('/news', [HelloController::class, 'welcome']);
Route::get('/news/category', [NewsController::class, 'index']);
Route::get('/news/category/{idCategory}', [
    NewsController::class,
    'categoryNews',
]);
Route::get('/news/category/{idCategory}/{id}', [NewsController::class, 'show']);
Route::get('/news/feedback', [NewsController::class, 'feedback']);
Route::get('/news/uploading', [NewsController::class, 'uploading']);


Route::get('/admin/main', [AdminHelloController::class, 'welcome']);
Route::get('/admin/category', [AdminCategoryController::class, 'index']);
Route::get('/admin/news', [AdminNewsController::class, 'index']);
Route::get('/admin/category/add', [AdminCategoryController::class, 'create']);
Route::get('/admin/news/add', [AdminNewsController::class, 'create']);
//Route::get('/admin/news/edit/{$keyCategory}/{ $keyNews }', [AdminNewsController::class, 'edit']);
Route::get('/admin/news/edit/{keyCategory}/{keyNews}', [AdminNewsController::class, 'edit']);