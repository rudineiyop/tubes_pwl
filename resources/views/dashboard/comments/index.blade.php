@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Administrasi Comment</h1>
    </div>

    <br><br>

    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong>{{session('status')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    
    @elseif(session('update_status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil! </strong>{{session('update_status')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @elseif(session('delete_status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil! </strong>{{session('delete_status')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Si Author</th>
                <th scope="col">Di Cheerpen</th>
                <th scope="col">Isi Komentar</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
            @foreach ($comments as $comment)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$comment->author->name}}</td>
                <td>{{$comment->post->title}}</td>
                <td>{{$comment->comment_body}}</td>
                <td>
                    <div class=" row">
                        <div class="col-6">
                            <form action="{{route('comment.delete', ['id' => $comment->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
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
