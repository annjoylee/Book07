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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('admin')->middleware('role:curator|administrator|librarian|assistant|member')->group(function() {
  Route::get('/', 'AdminController@dashboard')->name('admin');
  Route::resource('/books', 'BookController');
  Route::resource('/persons', 'PersonController');
  Route::resource('/users', 'UserController');
  Route::resource('/roles', 'RoleController');
  Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
});

Route::get('/home', 'HomeController@index')->name('home');
