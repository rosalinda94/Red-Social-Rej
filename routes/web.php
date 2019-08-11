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

Route::get('/home/profile', function () {
    return view('home.profile');
});

Route::delete('/post/{id}', 'PostController@destroy');
/**------------------------*/


/**------------------------*/

Route::get('/filtrarCategoria', 'PostController@filter');


Route::get('/reaction_type', 'ReactionTypeController@reactionType');

Route::get('/person', 'PersonController@index');

Route::get('/group', 'GroupController@index');


Route::post('/index', 'PostController@create');
Route::get('/index', 'PostController@index');



Route::get('/post/create', 'PostController@create');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/{id}', 'PostsController@show')->name('posts.show');

Route::resource('terceros' , 'TerceroController');

Auth::routes();


Route::get('/install', function(){
  Artisan::call('storage:link');
});

Route::get('/correrMigracion', function(){
  Artisan::call('migrate');
});
