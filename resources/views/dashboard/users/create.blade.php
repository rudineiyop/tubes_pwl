@extends('dashboard.layouts.main')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between my-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah User Baru</h1>
    </div>

    <a href="/dashboard/users" class="btn btn-primary">Kembali</a>

    <br><br>
    <div class="col 10">
        <form action="/dashboard/store_akun" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" required
                    name="name" value="{{old('name')}}">
                @error('name')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" required
                    name="username" value="{{old('username')}}">
                @error('username')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" required
                    name="email" value="{{old('email')}}">
                @error('email')
                <div class=" text-danger">{{$message}}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    required name="password" value="{{old('password')}}">
                @error('password')
                <div class=" text-danger">{{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<!-- /.container-fluid -->
@endsection('content')