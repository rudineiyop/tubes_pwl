@extends('page.layout')

@section('content')

<div class="container">
   
    <h1 class="title">Cheerpen Bergenre : {{ $genre }}</h1>

    {{-- <div class="btn-group" role="group">
        <button type="button" class="btn btn-dark" id="dark-btn">Fantasy</button>
        <button type="button" class="btn btn-dark" id="dark-btn">Horror</button>
        <button type="button" class="btn btn-dark" id="dark-btn">Slice-of-Life</button>
        <button type="button" class="btn btn-dark" id="dark-btn">Romance</button>
        <button type="button" class="btn btn-dark" id="dark-btn">Comedy</button>
        <button type="button" class="btn btn-dark" id="dark-btn">History</button>
        <button type="button" class="btn btn-dark" id="dark-btn">Adventure</button>
        <button type="button" class="btn btn-dark" id="dark-btn">Action</button>
    </div> --}}

      <br>
      <br>

    @foreach($posts as $post) 

    <div class="card mb-3" style="max-width: 700px;">
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

 




</div>

@endsection