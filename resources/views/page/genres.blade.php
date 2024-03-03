@extends('page.layout')

@section('content')

{{-- <div class="container">

        <h1 class="title-genres">All Genres</h1>
        <p class = "desc-genres">CheerPen menyediakan banyak genre novel untuk dibaca loh!</p>
        
        @foreach ($genres as $genre)
        <div class="frame">

        <a href="/genres/{{ $genre->slug }}">
        <button class="custom-btn btn-12"><span>Click!</span><span>{{ $genre->name }}</span></button>
        </a>

        </div>

        @endforeach

</div> --}}


<div class="container">
  <div class="row">
    <h1 class="title-genres">All Genres</h1>
    <p class = "desc-genres">CheerPen menyediakan banyak genre novel untuk dibaca loh!</p>
      @foreach ($genres as $genre)
          <div class="col-md-4 my-2">
              <a href="/genres/{{ $genre->slug }}">
                  <div class="card bg-dark text-white " >
                      <img src="https://source.unsplash.com/500x500?{{ $genre->name }}" alt="{{ $genre->name }}"
                          class="card-img">
                      <div class="card-img-overlay d-flex align-items-center p-0">
                          <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7) ">
                              {{ $genre->name }}
                          </h5>
                      </div>
                  </div>
              </a>
          </div>
      @endforeach
  </div>

</div>

@endsection