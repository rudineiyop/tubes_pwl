@extends('dashboard.layouts.main')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Halaman Edit Akun</h1>
    </div>
    <br><br>

    <a href="/dashboard/users" class="btn btn-primary">Kembali</a>

    <br><br>
    <div class="col 10">
        <form action="{{route('akun.update', ['id' => $user->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" required
                    name="name" autocomplete="off" value="{{$user->name}}">
                @error('name')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" required
                    name="username" value="{{$user->username}}">
                @error('username')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" required
                    name="email" value="{{$user->email}}">
                @error('email')
                <div class=" text-danger">{{$message}}</div>
                @enderror
            </div>


            {{-- <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    required name="password" value="{{$user->password}}">
                @error('password')
                <div class=" text-danger">{{$message}}</div>
                @enderror
            </div> --}}

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<!-- /.container-fluid -->
@endsection('content')