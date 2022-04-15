<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\MainController@home')->name('home');

Route::get('/about', 'App\Http\Controllers\MainController@about')->name('about');

Route::get('/contact', 'App\Http\Controllers\MainController@contact')->name('contact');

Route::get('/{category}/article/{id}', 'App\Http\Controllers\MainController@article')->name('article');

Route::get('/{category}/{id}', 'App\Http\Controllers\MainController@category')->name('category');

Route::name('user.')->group(function() {

  Route::get('/private', 'App\Http\Controllers\MainController@private')->middleware('auth')->name('private');

  Route::get('/my_articles', 'App\Http\Controllers\MainController@my_articles')->name('my_articles');

  Route::get('/add_article', 'App\Http\Controllers\MainController@view_add_article')->name('add_article');

  Route::post('/add_article', 'App\Http\Controllers\ArticleController@add');

  Route::get('/my_articles/{id}/update_article', 'App\Http\Controllers\ArticleController@update_article')->name('update_article');

  Route::post('/my_articles/{id}/update_article','App\Http\Controllers\ArticleController@update_article_submit');

  Route::get('/my_articles/{id}/delete','App\Http\Controllers\ArticleController@delete_article')->name('delete_article');


  Route::get('/login', function() {
    if (Auth::check()) {
      return redirect(route('user.private'));
    }
    return view('login');
  })->name('login');

  Route::post('/login', 'App\Http\Controllers\LoginController@login');

  Route::get('/logout', function() {
    Auth::logout();
    return redirect('/');
  })->name('logout');

  Route::post('/registration', 'App\Http\Controllers\RegisterController@save');

  Route::get('/registration', function() {
    if (Auth::check()) {
      return redirect(route('user.private'));
    }
    return view('registration');
  })->name('registration');


});
