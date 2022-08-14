<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\HelloController;
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
