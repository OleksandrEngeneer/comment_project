<?php

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

Route::get('/', 'CommentController@index')->name('form.create'); // Виводить форму для створення коммента
Route::post('/', 'CommentController@store')->name('form.store'); //Зберігає комент
Route::get('update', 'AdminController@index')->name('admin.update'); //Виводить форму для редагування комента
Route::post('update', 'AdminController@update_store')->name('admin.update_store');//Зберігає зміни внесені адміном