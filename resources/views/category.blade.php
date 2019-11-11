@extends('layouts.app')
@section('content')

<section class="goodnews" style="margin-top: 100px; text-align: center;">
	<h1>{{$category->name}}</h1><br>
	An initiative to spread positivity.
</section>
  <table class="table">
  </table>
<section class="container" style="margin-top: 50px; margin-bottom: 10px;">
	<div class="row">
		<div class="col-lg-9 col-md-3 col-sm-12 col-12 d-block m-auto">
		   <div class="card" style="height: 25rem;">
    <img src="/image/diwali.jpg" class="card-img-top" alt="...">
  </div>
		</div>
	    <div class="col-lg-3 col-md-3 col-sm-12 col-12 d-block m-auto">
	    	<div class="card" style="height: 25rem;">
    <img src="{{Voyager::image($posts[0]->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href="/post/{{$posts[0]->slug}}">{!!Str::limit($posts[0]->title,50)!!}</a></h5>
      <p class="card-text">{!!$posts[0]->excerpt!!}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last Updated:{{\Carbon\Carbon::parse($posts[0]->created_at)->diffForHumans()}}</small>
    </div>
  </div>
	    </div>
	</div>
	    <div class="row" style="margin-top: 10px;">
	    	<div class="col-lg-3 col-md-3 col-sm-12 col-12 d-block m-auto">
	    		<div class="card" style="height: 25rem;">
    <img src="{{Voyager::image($posts[1]->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href="/post/{{$posts[1]->slug}}">{{Str::limit($posts[1]->title,50)}}</a></h5>
      <p class="card-text">{{$posts[1]->excerpt}}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated:{{\Carbon\Carbon::parse($posts[1]->created_at)->diffForHumans()}}</small>
    </div>
  </div>
	    	</div>
	        <div class="col-lg-6 col-md-3 col-sm-12 col-12 d-block m-auto">
	        	<div class="card" style="height: 25rem;">
    <img src="{{Voyager::image($posts[2]->image)}}" class="card-img-top" alt="..." style="height: 25rem;">
  </div>
	        </div>
	        <div class="col-lg-3 col-md-3 col-sm-12 col-12 d-block m-auto">
	        	<div class="card" style="height: 25rem;">
    <img src="{{Voyager::image($posts[2]->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href="/post/{{$posts[2]->slug}}">{!!Str::limit($posts[2]->title,50)!!}</a></h5>
      <p class="card-text">{!!$posts[2]->excerpt!!}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated: {{\Carbon\Carbon::parse($posts[0]->created_at)->diffForHumans()}}</small>
    </div>
  </div>
	        </div>
	    </div>
</section>


<section class="container fourth"> 
  <h2>Latest In {{ucfirst($category->name)}}</h2>
  <div class="row">
    <div class="col-lg-9 col-md-3 col-sm-3 col-12 d-block m-auto">
      @foreach($posts as $post)

        <div class="card mb-3 border-white">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="{{Voyager::image($post->image)}}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body border-white">
                <h5><a href="/post/{{$post->slug}}">{!!$post->title!!}</a></h5>
                <div class="row mt-3">
                  <div class="col-sm-2">
                    <img src="{{Voyager::image($post->author->avatar)}}" style="border-radius: 50%;width: 50px;height: 50px">
                  </div>
                  <div class="col-md-4">
                    <p><a href="#"class="card-text "><small class="text-muted">{{$post->author->name}}</a> <br> 
                      {{$post->views}} Views |
                      {{ \Carbon\Carbon::parse($post->created_at)->toFormattedDateString()}}</small></p>
                  
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
       @endforeach 
    </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-12 d-block m-auto">
        <div class="card border-white" style="height: 43rem;">
          <div class="card-header border-white">Popular In {{ucfirst($category->name)}}</div>
            <ul class="list-group list-group-flush">
              @foreach ($popular as $popular)
              <li class="list-group-item">
                <a  href="/post/{{$popular->slug}}">{!!Str::limit($popular->title,40)!!}
                </a>
              </li>
              @endforeach
            </ul>
        </div>
      </div>
  </div>
  <hr style="border-top-color: #C0C0C0;">
</section>

{{$posts->links()}}


@stop
