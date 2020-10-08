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

Route::get('/', 'IndexController@index')->name('home');

Route::get('/about', 'AboutController@index')->name('about');

Route::resource('blog', 'ArticleController')->parameters(['blog' => 'alias']);
Route::resource('breed', 'DogsController')->parameters(['breed' => 'alias']);
Route::resource('people', 'PeopleController')->parameters(['people' => 'alias']);
Route::get('/contact', 'ContactController@index')-> name('contact');
Route::post('/contact', 'ContactController@mail');
