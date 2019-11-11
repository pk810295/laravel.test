@extends('layouts.app')
@section('content')


<section class="gnsf">
		<div class="text-center text-uppercase"><h1>{{$category->name}}</h1><hr></div>
	</section>
	<section class="gnss" style="margin-top: 20px;">
		<div class="container justify-content-center">
			<div class="row">
				<div class="col-lg-10 col-md-3 col-sm-12 col-12 d-block m-auto">
					<h3>{!!$post->title!!}</h3><p><h4>‘{{$post->excerpt}}’</h4>
					<small>By {{$user->name}} |{{\Carbon\Carbon::Parse($post->created_at)->toFormattedDateString()}}</small></p><br>
					<div class="card" style="width: 54rem;">
					  	<img src="{{Voyager::image($post->image)}}" class="card-img-top" alt="..." style="height: 30rem;">
						<div class="card-body">
					    	<p class="card-text"><small>Source:</small></p>
					    	<p>{!!$post->body!!}</p>
	  					</div>
					</div>
		    	</div>
            </div>
		</div>
	</section>

@stop
