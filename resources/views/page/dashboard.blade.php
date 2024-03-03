@extends('page.layout')

@section('content')

<div class="container-fluid">
    <div class="wrapper" id="karol">
    {{-- carousel --}}
    <div class="owl-carousel owl-theme" id="one">
        <div class="item"> <img src="{{ asset('img/1.png') }}"></div>
        <div class="item"> <img src="{{ asset('img/2.png') }}"></div>
        <div class="item"> <img src="{{ asset('img/3.png') }}"></div>
        <div class="item"> <img src="{{ asset('img/4.png') }}"></div>
    </div>
    </div>

    <div class="container">

        <br>

        <div class="row">
          <div class="col-lg-8 col-md-12">

            <div class="col-lg-12">
              <h4>All your cheerpen</h4>
            </div> 
            

        <div class="col-md-6 my-3">
            <form action="/page/dashboard">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search anything you want" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>

            @if ($posts->count())

            @foreach($posts as $post) 

            <div class="card mb-3" style="max-width: 700px;" id="card-main">
              <div class="row no-gutters">
                <div class="col-lg-4 col-md-12" id="item-img">

                @if ($post->image)
                    <div style="max-height:400px; max-width:500px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid my-3 mx-3">
                    </div>
                @else
                    <img src="">
                @endif
                  {{-- <img src="{{ asset('img/card2.jpg') }}" class="card-img"> --}}
                </div>

                <div class="col-lg-8 col-md-12">
                  <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <a href="/genres/{{ $post->genre->slug }}" class="card-genre"><h6 style="color: rgb(13, 63, 156)">{{ $post->genre->name }}</h6></a>
                    <a href="/author/{{ $post->author->username }}" class="card-author"><h6 style="color: rgb(13, 63, 156)">Written By. {{ $post->author->name }}</h6></a>
                    <p class="card-text">{!! $post->excerpt !!}</p>
                    <a href="{{ route('detail',$post->slug) }}">
                        <h6 class="card-title">Selengkapnya
                            <i class="fa-solid fa-arrow-right fa-bounce"></i>
                        </h6>
                    </a>
                  </div>
                </div>
              </div>
            </div>

          @endforeach

          <br>

          {{ $posts->links() }}

          </div>


          <div class="col-md-4">

              <div class="latest-product__text">
                  <h4>Latest Update</h4>
                  @foreach($latestPosts as $post) 
                          <a href="{{ route('detail',$post->slug) }}" class="latest-product__item" style="border: 2px solid grey; border-radius:6px">
                              <div class="latest-product__item__pic">
                                @if ($post->image)
                                <div style="max-height:400px; max-width:500px; overflow:hidden;">
                                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid my-3 mx-3">
                                </div>
                                @else
                                <img src="">
                                @endif
                              </div>
                              <div class="latest-product__item__text">
                                  <h6>{{ $post->genre->name }}</h6>
                                  <span>{{ $post->title }}</span>
                                  <h6>{{ $post->created_at->diffForHumans() }}</h6>
                              </div>
                          </a>
                  @endforeach
               
                      </div>
 
          </div>

        </div>

          <br>
          <br>

          <div class="row">
            <div class="col-lg-12">
                <h4>Most Popular</h4>
            </div>
          </div>

        <br>
      
        <div class="row">
            <div class="col-lg-12">
              <div class="owl-carousel owl-theme" id="two">
                @foreach ($popularPosts as $post)
                <div class="item" id="item-img">
                  <div class="card" style="max-height:380px; max-width:500px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top"/>
                    <div class="card-body">
                      <i class="fa-solid fa-fire fa-bounce"> : {{ $post->post_view }}</i>
                      <a href="{{ route('detail',$post->slug) }}"><h5 class="card-title">{{ $post->title }}</h5></a>
                      <h6 class="card-genre">{{ $post->genre->name }}</h6>
                    </div>
                  </div>
                </div>
                @endforeach

              </div>
            </div>
        </div>

          <br>
          <br>

          <div class="row">
            <div class="col-lg-12">
                <h4><b>Search With Genre</b></h4>
            </div>
         </div>

         <div class="row">

            <a href="/genres"><button class="button" >See more ></button></a>
        
         </div>

  
     </div>

</div>

    @else
        <p class="text-center fs-4">No cheerpen found.</p>
    @endif

@endsection

@section('script')

    <script>
      $(document).ready(function(){
        $('#one').owlCarousel({
    loop:true,
    margin:14,
    autoplay:true,
    autoplayTimeout:10000,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
    
  });

  $('#two').owlCarousel({
    loop:false,
    margin:14,
    autoplay:true,
    autoplayTimeout:10000,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
  });

  

 
      })
    </script>

@endsection