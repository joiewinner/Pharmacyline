<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

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

Route::get('admin/drugs', ['as'=>'drugs', 'uses'=>'App\Http\Controllers\ProduitController@index']);

Route::post('/admin/sign',['as'=>'sign', 'uses'=>'App\Http\Controllers\ProduitController@store']);

//Route::post('/admin/sign',['as'=>'sign', 'uses'=>'App\Http\Controllers\ImageUploadController@imageUploadPost']);

Route::get('/admin/sign', function(){

	return view('admin/sign');
})->name('sign_path');

Route::get('/admin/edit/{id}', ['as'=>'edit', 'uses'=>'App\Http\Controllers\ProduitController@edit']);

Route::post('/admin/edit/{id}',['as'=>'edit', 'uses'=>'App\Http\Controllers\ProduitController@update']);

Route::get('/admin/drugs/{id}', ['as'=>'drugs_sup', 'uses'=>'App\Http\Controllers\ProduitController@destroy']);

Route::get('/admin/show/{id}', ['as'=>'show','uses'=>'App\Http\Controllers\ProduitController@show']);

Route::get('/search', ['as'=>'search_path','uses'=>'App\Http\Controllers\ProduitController@search']);

//Route::post('/search',['as'=>'search_path', 'uses'=>'App\Http\Controllers\SearchController@search']);


Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [App\Http\Controllers\UserController::class, 'adminhome'])->name('admin.home')->middleware('is_admin');

Route::get('/', ['as'=>'user.home', 'uses'=>'App\Http\Controllers\UserController@userhome']);

Route::get('/drugs', ['as'=>'drugs_path', 'uses'=>'App\Http\Controllers\UserController@index']);

Route::get('/show/{id}', ['as'=>'show_path', 'uses'=>'App\Http\Controllers\UserController@show']);

Route::get('/contact', ['as'=>'contact', 'uses'=>'App\Http\Controllers\UserController@contact']);

Route::post('/send-message', ['as'=>'contact_send', 'uses'=>'App\Http\Controllers\UserController@sendEmail']);



