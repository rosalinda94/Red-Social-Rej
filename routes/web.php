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

Route::get('/welcome', function () {
    return view('home.index');
});

Route::post('/post/{id}/like', 'LikeController@create');

Route::delete('/post/{id}/like', 'LikeController@destroy');

Route::delete('/post/{id}', 'PostController@destroy');

Route::delete('/comment/{id}', 'CommentsController@destroy');


Route::post('/comment/create', 'CommentsController@create');


Route::get('/filtrarCategoria', 'PostController@filter');

Route::get('/filtrarNotificacion', 'PostController@notificacion');

Route::get('/labels', 'PostController@etiqueta');


Route::get('/reaction_type', 'ReactionTypeController@reactionType');

Route::get('/person', 'PersonController@index');

Route::get('/group', 'GroupController@index');


Route::post('/index', 'PostController@create');

Route::get('/index', 'PostController@index');

Route::get('/profile', 'PostController@show');


Route::get('/profile/create', 'AdditionalController@create');

Route::post('/profile/portada', 'AdditionalController@update');


Route::get('/post/create', 'PostController@create');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::get('/sl', function(){
  Artisan::call('storage:link');
});

Route::get('/correrMigracion', function(){
  Artisan::call('migrate:fresh --seed');
});
