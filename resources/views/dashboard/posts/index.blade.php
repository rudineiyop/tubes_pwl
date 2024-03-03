@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Cheerpen</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success col-lg-10" role="alert">
       {{ session('success')  }}
    </div>
    @endif

    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Tambah Cerpen Baru</a>

    <br><br>

    <table class="table col">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Genre</th>
                <th scope="col">Excerpt</th>
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
                <td>{!! $post->excerpt!!}</td>
                <td>
                    <div class=" row">
                        <div class="col-3">
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                        </div>

                        <div class="col-3">
                            <a href="{{ route('cetak', ['id' => $post->id]) }}" class="badge bg-warning"><span data-feather="archive"></span></a>
                        </div>

                        <div class="col-3">
                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                        </div>
                        
                        <div class="col-3">
                            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
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
