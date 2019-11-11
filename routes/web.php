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
Route::get('/','IndexController@index');

Route::get('/post/{slug}','PostController@index');
	

Route::get('/category/{slug}', function($slug)
	{	
		$category=App\Category::where('slug','=',$slug)->firstOrFail();
		$posts=$category->posts()->orderBy('created_at','desc')->simplePaginate(50);
		$popular=$posts=$category->posts()->orderBy('views','desc')->simplePaginate(50);
		return view('category',compact('category','posts','popular'));
	});

