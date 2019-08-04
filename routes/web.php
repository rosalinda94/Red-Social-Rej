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
//-----------------------------------------//
//Route::get('/persons', 'PersonController@index');

//Route::resource('/persons','PersonController');
//-----------------------------------------//
Route::get('/person/welcome', function () {
    return view('welcome');
});

Route::get('/reaction_type', 'ReactionTypeController@reactionType');

Route::get('/person', 'PersonController@index');

Route::get('/group', 'GroupController@show');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/comentarios', 'CommentController@comment');

Route::get('/posteos','PostController@post');
