<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navController extends Controller
{
    // https://stackoverflow.com/questions/33003097/dynamic-routing-in-laravel-5-application
	public function index()
	{
		$page = App\Page::where('slug', '/')->where('active', 1)->first();
		return view('page')->with('page', $page);
	}

	public function getPage($slug = null)
	{
		$page = App\Page::where('slug', $slug)->where('status', 'active');
		$page = $page->firstOrFail();

		// return view($page->template)->with('page', $page);
		return view('page')->with('page', $page);
	}
}
