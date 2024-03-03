@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Cheerpen</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success col-lg-10" role="alert">
       {{ session('success')  }}
    </div>
    @endif

    <br><br>

    <table class="table col">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Genre</th>
                <th scope="col">Author</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->genre->name }}</td>
                <td>{{$post->author->username }}</td>
                <td><img src="{{asset('storage/'. $post->image)}}" style="height:100px; width:100px;"></td> 
                <td>
                    <div class=" row">       

                        <div class="col-4"> 
                            <form action="{{route('post.delete', ['id' => $post->id])}}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="badge bg-danger border-0" type="submit" onclick="return confirm('Yakin ingin menghapus cerpen ini?')">
                                    <span data-feather="x-circle"></span></button>
                            </form>
                        </div>

                    </div>
                </td>
            </tr>
            @php
            $i++
            @endphp
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
