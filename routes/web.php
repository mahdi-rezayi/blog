<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->name('admin.')->group(function (){
   Route::controller(App\Http\Controllers\Admin\CategoryController::class)->prefix('/category')->name('category.')->group(function (){
      Route::get('/list','index')->name('list');
      Route::get('/create','create')->name('create');
      Route::get('/edit/{id}','edit')->name('edit');
      Route::post('/update/{id}','update')->name('update');
      Route::post('/store','store')->name('store');
      Route::delete('/delete/{id}','destroy')->name('delete');

   });

   Route::controller(App\Http\Controllers\Admin\ArticleController::class)->prefix('/article')->name('article.')->group(function (){
      Route::get('/list','index')->name('list');
      Route::get('/create','create')->name('create');
      Route::get('/edit/{id}','edit')->name('edit');
      Route::post('/update/{id}','update')->name('update');
      Route::post('/store','store')->name('store');
      Route::post('/status','status')->name('status');

   });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
