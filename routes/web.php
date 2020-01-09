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

Route::get('/member/info/{name}', function($name) {
	return view("member/intro", [
		"name" => $name
	]);
});


Route::group(['prefix' => 'blog',
			  'as' => 'blog/',
			  'namespace' => 'Blog'],
			  function(){
					Route::resource('/post',"PostController");
			  		//Route::get('/post/{post_id}', "ExamplePostController@show");
			  });