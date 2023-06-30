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
Route::get('/admin', 'App\Http\Controllers\AdminPostController@show')->name("admin.index");
Route::get('/admin/addpost', 'App\Http\Controllers\AdminPostController@addView')->name("admin.addpost");
Route::post('/admin/newpost', 'App\Http\Controllers\AdminPostController@addPost')->name("admin.newpost");
Route::delete('/admin/deletepost/{id}', 'App\Http\Controllers\AdminPostController@deletePost')->name("admin.deletepost");
Route::get('/admin/editpost/{id}', 'App\Http\Controllers\AdminPostController@editView')->name("admin.editpost");
Route::put('/admin/submitedit/{id}', 'App\Http\Controllers\AdminPostController@editPost')->name("admin.submitedit");
Route::get('/', 'App\Http\Controllers\PostController@index')->name("welcome");

Auth::routes();

