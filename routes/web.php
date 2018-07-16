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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', ['as' => 'about', function(){
    return view('about');
}]);
Route::get('/contact', ['as' => 'contact', function(){
    return view('contact');
}]);

// Route::get('/blog', ['as' => 'blog.index']);
Route::resource('blog', 'BlogController');
Route::get('/blog', ['as' => 'blog.index', 'uses' => 'BlogController@index']);
Route::get('/blog/create', ['as' => 'blog.create', 'uses' => 'BlogController@create']);
Route::post('/blog', ['as' => 'blog.store', 'uses' => 'BlogController@store']);
Route::get('/blog/{blog}', ['as' => 'blog.show', 'uses' => 'BlogController@show']);
Route::post('/blog/{blog}/update', ['as' => 'blog.update', 'uses' => 'BlogController@update']);
Route::delete('/blog/{blog}', ['as' => 'blog.delete', 'uses' => 'BlogController@destroy']);