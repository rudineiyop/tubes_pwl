@extends('page.layout')

@section('content')

<div class="container" id="detail">
  <div class="detail">
    <div class="middle-align">
        <div class="row">
            <div class="col-md-8 col-sm-8">
            <div class="cover-cerpen">
              @if ($post->image)
              <div style="max-height:400px; max-width:500px; overflow:hidden;">
              <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid my-3">
              </div>
          @else
              <img src="https://source.unsplash.com/1200x600/?{{ $post->genre->name }}" class="img-fluid my-3">
          @endif
            </div>
            <div class="Judul my-3 mx-5">
                <h2>{{ $post->title }}</h2>
                <span class="entry-date">{{ $post->created_at->diffForHumans() }}</span> <span>|</span>
                <span class="entry-author">{{ $post->genre->name }}</span><span> |</span>
                <span class="entry-viewers"><i class="fa-solid fa-eye"> : @if (!empty($post->post_view))
                  {{ $post->post_view }}
              @else
                  0
              @endif
            </i></span>
            </div>
            </div>
            <hr>
            <p style="padding-left: 40px; text-align: left;"><strong>Oleh: {{ $post->author->name }} |</strong></p>
            <p style="padding-left: 40px; text-align: left;"><em>{{ $post->author->bio }}</em></p>

            <hr/>
        </div>
    </div>

    <div class="content mx-3">
        <p class="">
          {!! $post->body !!}
        </p>

        <!-- Bagian end konten -->
        <div class="the-end">
            <p>The End</p>
        </div>
        
    </div>
    <hr>

    <div class="card-container">
    <h2 class="text-center">Rekomendasi Cerpen Lainnya</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach($recommendedPosts->take(3) as $recommendedPost) 
        <div class="col">
          <div class="card h-100">
            <a href="{{ route('detail', $recommendedPost->slug) }}" target="_blank">
            <img src="{{ asset('storage/' . $recommendedPost->image) }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title" style="color: beige">{{ $recommendedPost->title }}</h5>
            </a>
              <p class="card-text">{!! $recommendedPost->excerpt !!}</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Oleh : {{ $recommendedPost->author->name }}</small>
            </div>
          </div>
        </div>
        @endforeach
      
        </div>
      </div>

        
    <hr>
  <div class="comment-form comment-area mt-4">

    @if(session('message'))
      <h6 class="alert alert-warning mb-3 col-6">{{ session('message') }}</h6>
    @endif

    <div class="detail-area card card-body">
      <label for="komentar">Komentar Anda?</label>
        <form action="{{ url('comments') }}" method="POST">
          @csrf
            <input type="hidden" name="post_slug" value="{{ $post->slug }}">
            <textarea id="komentar" name="comment_body" class="form-control" rows="4" required placeholder="Tuliskan Komentar Anda Disini....."></textarea>
            <br>
            <button type="submit">Kirim Komentar</button>
          </form>          
    </div>


    <br>

    @forelse ($post->Comments as $comment)
        
    <div class="comment-widgets">
      <!-- Comment Row -->
      <div class="d-flex flex-row comment-row m-t-0">
          <div class="comment-text w-100">
              <h6 class="font-medium">
                @if ($comment->author)
                    {{ $comment->author->name }}         
                @endif
                </h6> 
              <span class="m-b-15 d-block">{!! $comment->comment_body !!}
              </span>
              <small class="text-muted float-right">Commented on : {{ $comment->created_at->format('d-m-Y') }}</small> 

              {{-- @if(Auth::check() && Auth::id() == $comment->author_id)
              <div class="comment-footer mt-2">        
                <button type="button" class="btn btn-primary btn-sm">Edit</button> 
                <button type="button" class="btn btn-danger btn-sm">Delete</button> 
              </div>
              @endif --}}

          </div>
      </div>
  </div>

    @empty
    <h6>No Comments Yet.</h6>
    @endforelse

</div>
</div>


@endsection
