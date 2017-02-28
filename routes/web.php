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

    Route::any('', 'ArticleController@index');
    Route::any('detail/{id}', 'ArticleController@detail');


});

Route::group(['prefix' => 'admin'], function () {

    Route::any('index', 'AdminController@index');
    Route::any('add', 'AdminController@add');
    Route::any('modify/{id}', 'AdminController@modify');
    Route::any('delete/{id}', 'AdminController@delete');

});



    Route::get('/login');






Auth::routes();

Route::get('/home', 'HomeController@index');
