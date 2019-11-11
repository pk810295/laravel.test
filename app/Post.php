<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable=['views'];

   public function author()
    {
        return $this->belongsTo('App\User');
    }
    public function category(){
    	return $this->belongsTo('App\Category');
    }
}
