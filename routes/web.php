<?php

use Illuminate\Http\Request;
use App\Mail\NewUserWelcomeMail;
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

Auth::routes();

Route::get('/email', function () {
	return new NewUserWelcomeMail();
});

Route::post('follow/{user}', 'FollowsController@store');

Route::get('/', 'PostsController@index');

Route::get('/p/create', 'PostsController@create');

Route::get('/p/{post}', 'PostsController@show');

Route::post('/p', 'PostsController@store');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

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

Route::get('/images/upload', function(){
	return view('image/upload');
});

Route::post('/images/upload', function(Request $request) {
	Validator::make($request->all(), [
        'file' => 'required|image',
    ])->validate();
    /*
    $validate = $request->validate([
        'file' => 'required|image',
    ]);
    */
	if($request->hasFile('file')){
		$image = $request->file('file');
		$file_path = $image->store('public');
	}
	return redirect(Storage::url($file_path));
})->name('image.upload');

Route::get('/header', function (){
    return response('测试响应头')
        ->header('X-Header-One', 'Laravel学院')
        ->header('X-Header-Two', 'HTTP 功能测试');
});