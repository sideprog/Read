<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/article1', function () {
        return view('article1');
    });
    Route::get('/new', function () {
        return view('new_article');
    });
    Route::get('/articles', function () {
        return view('articles');
    });

});
