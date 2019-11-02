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
Route::get('/',function(){
	$posts=App\Post::all();
	return view('index',compact('posts'));
});

Route::get('/post/{slug}',function($slug){
	$post=App\Post::where('slug','=',$slug)->firstOrFail();
	$user=App\User::where('id','=',$post->author_id)->firstOrFail();
	return view('post',compact('post','user'));
});

Route::get('/{slug}', function($slug)
	{
	$page=App\Page::where('slug','=',$slug)->firstOrFail();
		return view('page',compact('page'));
	});






