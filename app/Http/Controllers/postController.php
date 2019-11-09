<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class postController extends Controller
{	
    public function index(){
    	$posts=App\Post::orderBy('created_at','desc')->paginate(10);
    	$gnews=App\Post::where('category_id', 11)
               ->orderBy('created_at', 'desc')
               ->paginate(4);
        $facts=App\Post::where('category_id', 1)
               ->orderBy('created_at', 'desc')
               ->paginate(4);
    	return view('index',compact('posts','gnews','facts'));
    }
}
