@extends('layouts.app')
@section('content')
@include('nav')

    
<!-- --- -----  -------- latest posts ----- --- ------ -->
                
<section class="container fourth"> 
  <h2>Latest</h2>
  <div class="row">
    <div class="col-lg-9 col-md-3 col-sm-3 col-12 d-block m-auto">
      @foreach ($posts as $post)

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
          <div class="card-header border-white">Popular</div>
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

        <!--   Good News Section ------>    
<section class="Good news">
  <div class="container"><h2>Good News</h2>
    <div class="row">
      @foreach ($gnews as $gn)
    
        <div class="col-lg-3 col-md-3 col-sm-12 col-12 d-block m-auto">
          <div class="card border-white" style="width: 16rem;">
            <img src="{{Voyager::image($gn->image)}}" class="card-img-top" alt="..." >
            <div class="card-body">
            <a href="/post/{{$gn->slug}}" class="text-decoration-none text-dark">
              <h5 class="card-title">{!!Str::limit($gn->title,80)!!}</h5>
            </a>
            <div class="row">
              <div class="col-sm-3">
                <img src="{{Voyager::image($gn->author->avatar)}}" style="border-radius: 50%;width: 50px;height: 50px">
              </div>
              <div class="col-sm-12">
                <small>{{$gn->author->name}}</small><br>
                <small>{{$gn->views}} Views | {{\Carbon\Carbon::parse($gn->created_at)->diffForHumans()}} </small>
              </div>
            </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <hr style="border-top-color: #C0C0C0;">
</section>


<!-- fact check -->
<section class="Good news">
  <div class="container"><h2>Fact Check</h2>
    <div class="row">
      @foreach ($facts as $fact)
    
        <div class="col-lg-3 col-md-3 col-sm-12 col-12 d-block m-auto">
          <div class="card border-white" style="width: 16rem;">
            <img src="{{Voyager::image($fact->image)}}" class="card-img-top" alt="..." >
            <div class="card-body">
            <a href="/post/{{$gn->slug}}" class="text-decoration-none text-dark">
              <h5 class="card-title">{!!Str::limit($fact->title,80)!!}</h5>
            </a>
            <div class="row">
              <div class="col-sm-3">
                <img src="{{Voyager::image($fact->author->avatar)}}" style="border-radius: 50%;width: 50px;height: 50px">
              </div>
              <div class="col-sm-12">
                <small>{{$fact->author->name}}</small><br>
                <small>{{$fact->views}} Views | {{\Carbon\Carbon::parse($fact->created_at)->diffForHumans()}} </small>
              </div>
            </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <hr style="border-top-color: #C0C0C0;">
</section>

        <!-- Editorial chosen section --->

  <section class=" Chosenones" style="margin-top: 30px;">
    <div class="container"><h2>Chosen Ones</h2>
    <div class="row" style="margin-top: 20px;">
    <div class="col-lg-9 col-md-3 col-sm-12 col-12 d-block m-auto">
       <div class="card" style="height: 25rem;">
    <img src="image/diwali.jpg" class="card-img-top" alt="..."> <div class="card-img-overlay">
   
    <a href="#"><p class="card-text text-white" style="margin-top: 300px;"><h4>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>></p></a>
    <p class="card-text">Last updated 3 mins ago</p>
  </div>
  </div>
    </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-12 d-block m-auto">
        <div class="card border-white" style="height: 25rem;">
    <img src="image/vertical3.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
      </div>
  </div>
      <div class="row" style="margin-top: 10px;">
        <div class="col-lg-3 col-md-3 col-sm-12 col-12 d-block m-auto">
          <div class="card border-white" style="height: 25rem;">
    <img src="image/vertical3.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      
    </div>
  </div>
        </div>
          <div class="col-lg-6 col-md-3 col-sm-12 col-12 d-block m-auto">
            <div class="card" style="height: 25rem;">
    <img src="image/diwali.jpg" class="card-img-top" alt="..." style="height: 25rem;"><div class="card-img-overlay">
   
    <a href="#"><p class="card-text text-white" style="margin-top: 300px;"><h5>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h5></p></a>
    
  </div>
  </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-12 d-block m-auto">
            <div class="card border-white" style="height: 25rem;">
    <img src="image/vertical3.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      
    </div>
  </div>
          </div>
      </div><hr style="border-top-color: #C0C0C0;">
</section>


<!-- arrow key ----->
<section class="arrow" style="margin-top: 10px;margin-bottom: 10px; float: right;margin-right: 70px;"><a class="gotop" href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
</section>
<!-- arrow key --->

<!-- fact check section ---->

  

<script>
  $(document).ready(function(){
    $('col-lg-3').hover(
             function(){
              $(this).animate({
                marginTop:"-=1%",
              },200);
             },

             function(){
              $(this).animate({
                marginTop: "0%"
              },200);
             }
      );
  });
</script>
@stop