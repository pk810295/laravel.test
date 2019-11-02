@extends('layouts.app')

@section('content')
        <nav class="navbar shadow navbar-expand-md  justify-content-center">
            <div class="container">
              <a href="/" class="navbar-brand font-weight-bold">OT</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
                  <span class="navbar-toggler-icon"></span>
                        </button>
              <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                  <ul class="navbar-nav m-auto justify-content-center">
                    <div class="dropdown">
                      <li class="nav-item1">
                        <a href="home-page" class="nav-link text-dark">Good News</a>
                        <div class="dropdown-content"><img src="/image/diwali.jpg" alt="Cinque Terre" width="300" height="200">
                          <div class="desc">Beautiful Cinque Terre</div>
                        </div>
                      </li>
                    </div>

                    <div class="dropdown">
                      <li class="nav-item1">
                     <a href="" class="nav-link text-dark">Fact check</a><div class="dropdown-content"><img src="/image/factcheck.jpg" alt="Cinque Terre" width="300" height="200">
                    <div class="desc">Beautiful Cinque Terre</div>
                    </div>
                              </li></div>
                              <div class="dropdown"><li class="nav-item1">
                                <a href="" class="nav-link text-dark">Life</a><div class="dropdown-content"><img src="/image/life.jpg" alt="Cinque Terre" width="300" height="200">
                    <div class="desc">Beautiful Cinque Terre</div>
                    </div>
                              </li></div>
                              <div class="dropdown"><li class="nav-item1">
                                <a href="" class="nav-link text-dark">Social</a><div class="dropdown-content"><img src="/image/social.jpg" alt="Cinque Terre" width="300" height="200">
                    <div class="desc">Beautiful Cinque Terre</div>
                    </div>
                                </li></div>
                              <div class="dropdown"><li class="nav-item1">
                                <a href="" class="nav-link text-dark">Scientific</a><div class="dropdown-content"><img src="/image/scientific.jpg" alt="Cinque Terre" width="300" height="200">
                    <div class="desc">Beautiful Cinque Terre</div>
                    </div>
                              </li></div>
                              <div class="dropdown"><li class="nav-item1">
                                <a href="" class="nav-link text-dark">Artistic</a><div class="dropdown-content"><img src="/image/artistic.jpg" alt="Cinque Terre" width="300" height="200">
                    <div class="desc">Beautiful Cinque Terre</div>
                    </div>
                              </li></div>
                              <div class="dropdown"><li class="nav-item1">
                                <a href="" class="nav-link text-dark">Literature</a><div class="dropdown-content"><img src="/image/literature.jpg" alt="Cinque Terre" width="300" height="200">
                    <div class="desc">Beautiful Cinque Terre</div>
                    </div>
                              </li></div>
                              <div class="dropdown"><li class="nav-item1">
                                <a href="" class="nav-link text-dark">Green</a><div class="dropdown-content"><img src="/image/green.jpg" alt="Cinque Terre" width="300" height="200">
                    <div class="desc">Beautiful Cinque Terre</div>
                    </div>
                              </li></div>
                              <div class="dropdown"><li class="nav-item1">
                                <a href="" class="nav-link text-dark">Politics</a><div class="dropdown-content"><img src="/image/politics.png" alt="Cinque Terre" width="300" height="200">
                    <div class="desc">Beautiful Cinque Terre</div>
                    </div>
                                </li></div>
                              <div class="dropdown">
                                <li class="nav-item1">
                                <a href="" class="nav-link text-dark">Self help</a>

                          <div class="dropdown-content"><img src="/image/self.jpg" alt="Cinque Terre" width="300" height="200">
                            <div class="desc">Beautiful Cinque Terre</div>
                          </div>
                          </li>
                        </div>
                  </ul>
              </div>
              
            </div>
          </nav>

       <!-- center -->

      <section class="container ourservices text-center">
          <h1>Center Pieces</h1>
              <div class="row">
                <div class=" bord col-lg-3 col-md-3         col-sm-3 col-10 d-block m-auto">
              <div class="card" style="width: 16rem;">
                        <div class="inner"><img src="/image/factcheck.jpg" class="card-img-top" alt="...">
                      </div>
                <div class="card-body">
                  <h5 class="card-title">Fact Check</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Read More..</a>
                </div>
          </div>
              </div>

              <div class=" bord1 col-lg-6 col-md-6 col-sm-6 col-10 d-block m-auto">
                <div class="card shadow" style="width: 33.7rem;">
                  <div class="inner"><img src="/image/good.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body">
            <h5 class="card-title">Good News</h5>
            <p class="card-text">An initiative to spread positivity.</p>
            <a href="#" class="btn btn-primary">Read More..</a>
          </div>
              </div>
          </div>
              <div class=" bord2 col-lg-3 col-md-3 col-sm-3 col-10 d-block m-auto">
                <div class="card" style="width: 16rem;">
                        <div class="inner"><img src="/image/11.jpg" class="card-img-top" alt="..."></div>
          <div class="card-body">
            <h5 class="card-title">Misc</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Read More..</a>
          </div>
            </div>
          </div>
        </div>
      </section>

           <!--end center -->
<div class="row">
  <div class="container text-left">
  <div class="card-deck mt-4">
    @foreach ($posts as $post)
  <div class=" col-sm-3 mb-5">
    <img class="card-img-top" src="{{Voyager::image($post->image)}}" alt="Card image cap" height="100px" width="200px">
    <div class="card-body">
      <h5 class="card-title">{!!$post->title!!}</h5>
      <p class="card-text">
        {!!mb_substr($post->body,0,50)!!}
      </p>
      <a href="/post/{{$post->slug}}" class="btn btn-primary ">Read More..</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated {{$post->updated_at}}
      </small>
    </div>
  </div>
  @endforeach
  
  </div>
</div>
</div>

</div>


@endsection