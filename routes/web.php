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

Route::group(['prefix' => 'article'], function () {

    Route::get('/', 'ArticleController@index');
    Route::any('detail/{article}', 'ArticleController@detail');
    Route::post('detail/{article}/comments', 'CommentsController@create');


});

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', 'AdminController@index');
    Route::any('add', 'AdminController@add');
    Route::any('modify/{article}', 'AdminController@modify');
    Route::any('delete/{article}', 'AdminController@delete');

});



    Route::get('/login');






Auth::routes();

Route::get('/home', 'HomeController@index');
