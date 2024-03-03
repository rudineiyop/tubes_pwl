@extends('dashboard.layouts.main')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Halaman Edit Genre</h1>
    </div>
    <br><br>

    <a href="/dashboard/genres" class="btn btn-primary">Kembali</a>

    <br><br>
    <div class="col 10">
        <form action="{{route('genre.update', ['id' => $genre->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Genre Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" required
                    name="name" autocomplete="off" value="{{$genre->name}}">
                @error('name')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Genre slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" required
                    name="slug" value="{{$genre->slug}}">
                @error('slug')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<!-- /.container-fluid -->
@endsection('content')