@extends('layouts.app')
@section('content')
<div class="container mt-5">
	<div class="row ">
		<div class="col-sm-2 text-center">
			<p>Author Details:</p>
			<img src="{{Voyager::image($user->avatar)}}" class="rounded-circle" height="100px" width="100px">
			<h3>{{$user->name}}</h3>
			<p>Followers:</p><a href="" onclick="">Follow</a>
			<div class="to-follow col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
		    <button id="follow" class="btn btn-primary btn-block" data-toggle="button">Follow</button>
		    <button id="unfollow" class=" hidden btn btn-danger btn-block hidden">Unfollow</button>
		    <style type="text/css">
		    	.hidden {
				    display: none;
				}
		    </style>
		    <script type="text/javascript">
		    	$("#follow, #unfollow").click(function () {
    			$("#follow, #unfollow").toggleClass('hidden');
				});
		    </script>
		   

</div>
		</div>
		<div class="col-sm-8">
			<table class="table table-striped">
				<th class="text-center font-italic"><h1>{{$post->title}}</h1></th>
				<tr>
					<td>
						<blockquote class="blockquote-footer">{!!$post->excerpt!!}</blockquote>
					</td>
				</tr>
				<tr>
					<td>
						<p class="text-danger">Updated on {{$post->created_at}}</p>
					</td>
				</tr>
				<tr>
					<td>
						<img src="{{Voyager::image($post->image)}}" style="width:100%;height:40%;" >
						<p class="font-italic tiny-text">Image Source</p>
					</td>
				</tr>
				<tr>
					<td>
						{!!$post->body!!}
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
@stop