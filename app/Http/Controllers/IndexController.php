<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use \Carbon\Carbon;

class IndexController extends Controller
{
 public function index(){
    	$posts=App\Post::orderBy('created_at','desc')->simplePaginate(15);
    	$gnews=App\Post::where('category_id', 11)
               ->orderBy('views', 'desc')
               ->simplePaginate(4);

        $facts=App\Post::where('category_id', 1)
               ->orderBy('created_at', 'desc')
               ->paginate(4);
        $popular=App\Post::orderBy('views','desc')->simplePaginate(10);
      	
    	return view('index',compact('posts','gnews','facts','popular'));
    }
   
}
