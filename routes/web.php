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

  
Route::get('/','HomeController@home');

//route home
Route::get('home','HomeController@home');

//route about
Route::get('about','AboutController@about');

//route datail about
Route::get('datailabout','AboutController@datailabout');

//route news
Route::get('news','NewsController@news');

//route datailnews
Route::get('datailnews','NewsController@datailnews');

//route product
Route::get('product','ProductController@product');

//route datil product
Route::get('datailproduct','ProductController@datailproduct');

//route contact
Route::get('contact','HomeController@contact');