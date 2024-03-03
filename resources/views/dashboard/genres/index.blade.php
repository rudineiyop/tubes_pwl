@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Genres</h1>
    </div>

    <a href="/dashboard/create_genre" class="btn btn-primary mb-3">Create New Genre</a>

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

    <br><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Genres Name</th>
                    <th scope="col">Genres slug</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp
                @foreach ($genres as $genre)
                    <tr>
                        <td scope="row">{{$i}}</td>
                        <td>{{ $genre->name }}</td>
                        <td>{{ $genre->slug }}</td>
                        <td>
                            <div class=" row">
                                <div class="col-3">
                                    <a href="{{route('genre.edit', ['id' => $genre->id])}}" class="btn btn-warning">Edit</a>
                                </div>
                                <div class="col-3">
                                    <form action="{{route('genre.delete', ['id' => $genre->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"
                                            onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                        {{-- <td class="d-flex flex-column flex-sm-row gap-1">
                            
                            <a href="/dashboard/genres/{{ $genre->slug }}/edit" class="badge bg-warning p-1"><span
                                    data-feather="edit"></span></a>
                            
                            <form class="d-inline" action="/dashboard/genres/{{ $genre->slug }}" method="genre">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger p-1 border-0" onclick="return confirm('Are you sure?')">
                                    <span data-feather="trash"></span>
                                </button>
                            </form>
                        </td> --}}
                    </tr>
                    @php
                        $i++
                    @endphp
                @endforeach
            </tbody>
        </table>
    
@endsection
