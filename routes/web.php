<?php

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::group(['prefix' => ''], function() {
    Route::get('home', 'UserController@UserHome')->name('user.home');
    Route::get('professorlist', 'UserController@professorlist')->name('user.professorlist');
});



Route::group(['middleware' => ['is_admin'], 'prefix' =>"admin"], function () {
    Route::get('home', 'AdminController@adminHome')->name('admin.home');

    Route::prefix('professor')->group(function () {
        Route::get('', function(){
            return redirect()->route('admin.professor.list');
        })->name('admin.professor.index');
        Route::get('create', 'ProfessorController@create')->name('admin.professor.create');
        Route::post('add', 'ProfessorController@add')->name('admin.professor.add');
        Route::get('edit/{professor}', 'ProfessorController@edit')->name('admin.professor.edit');
        Route::post('update', 'ProfessorController@update')->name('admin.professor.update');
        Route::get('list', 'ProfessorController@list')->name('admin.professor.list');
        Route::get('delete/{professor}', 'ProfessorController@delete')->name('admin.professor.delete');
    });    
    
});
