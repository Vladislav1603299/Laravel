<?php

use App\Http\Controllers\User\IndexController as UserIndexController;
use App\Http\Controllers\User\NewsController as UserNewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
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

//User
Route::group(['prefix' => 'page'], function () {
    Route::get('/', [UserIndexController::class, 'index'])->name('page.index');
    Route::get('category/{category}', [
        UserNewsController::class,
        'index',
    ])->name('page.category.index');
    Route::get('news/{newsId}', [UserNewsController::class, 'show'])->name(
        'page.news.show'
    );
});

//Admin
Route::group(['prefix' => 'admin'], function () {
    //home
    Route::get('/', [AdminIndexController::class, 'index'])->name(
        'admin.index'
    );
    //news
    Route::resource('news', AdminNewsController::class);
    Route::resource('category', AdminCategoryController::class);
});
