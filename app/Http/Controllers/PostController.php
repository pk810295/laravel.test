<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Auth;

class PostController extends Controller
  {	
      public function index($slug){
          $post=App\Post::where('slug','=',$slug)->firstOrFail();
          $user=App\User::where('id','=',$post->author_id)->firstOrFail();
          $category=App\Category::where('id','=',$post->category_id)->firstOrFail();
          if(Auth::User()){
            $post->views=$post->views+1;
              $post->save();
          }
        
          return view('post',compact('post','user','category'));
      }
    
}
