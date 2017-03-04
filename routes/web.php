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

    Route::get('/index', 'AdminController@index');

    /*
    -------------------------------------------------
    方法      路径               动作      路由名称
    --------------------------------------------------
    GET     /photos             index      photos.index
    GET     /photos/create      create     photos.create
    POST    /photos             store      photos.store
    GET     /photos/{photo}     show       photos.show
    GET     /photos/{photo}/edit    edit        photos.edit
    PUT/PATCH  /photos/{photo}      update      photos.update
    DELETE  /photos/{photo}         destroy     photos.destroy
    */
    Route::resource('article', 'AdminController');

});



    Route::get('/login');






Auth::routes();

Route::get('/home', 'HomeController@index');
