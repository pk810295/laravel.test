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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/','postController@index');

Route::get('/post/{slug}',function($slug){
	$post=App\Post::where('slug','=',$slug)->firstOrFail();
	$user=App\User::where('id','=',$post->author_id)->firstOrFail();
	return view('post',compact('post','user'));
});


Route::get('/{slug}', function($slug)
	{
	$page=App\Category::where('slug','=',$slug)->firstOrFail();
		return view($slug,compact('page'));
	});
Route::view('/page/good-news','good-news');
