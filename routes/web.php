<?php

use App\Http\Controllers\Admin\UserController;
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
//главная страница
Route::get('/','App\Http\Controllers\MainController@index')->name('main.index');

Route::get('/farm','App\Http\Controllers\Farm@get');

Route::get('/parse/news', App\Http\Controllers\ParsersController::class)->name('queue.parse');
Route::group(['prefix'=>'category'],function ()
{
    //страница категорий
    Route::get('/', 'App\Http\Controllers\News\NewsController@index')->name('news.index');
    //страница выбранной категории с новостями
    Route::get('/{item}/news', 'App\Http\Controllers\News\NewsController@showNews')->name('category.news');
});




Route::group(['middleware'=>'auth'],function ()
    {
        Route::get('/logout', function (){Auth::logout(); return redirect('/login');
    });
    //account
    Route::get('/account','App\Http\Controllers\Account\IndexController@index')->name('account');
    //admin
    Route::group(['prefix'=>'admin',
        "middleware"=>["auth","is_admin"]],function ()
    {
        Route::get('/', 'App\Http\Controllers\Admin\IndexController@index')->name('admin');
        Route::resource('/user',App\Http\Controllers\Admin\UserController::class);
        Route::resource('/category',App\Http\Controllers\Admin\CategoryController::class);
    });
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
