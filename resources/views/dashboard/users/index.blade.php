@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah dan Edit Akun</h1>
    </div>

    <a href="/dashboard/create_akun" class="btn btn-primary">Tambah Akun Baru</a>
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

    <br><br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                {{-- <th scope="col">Password</th> --}}
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td class="col-lg-3">{{$user->email}}</td>
                
                {{-- <td style="max-width: 150px; overflow: hidden; text-overflow: ellipsis;">{{$user->password}}</td> --}}
                <td>
                    <div class=" row">
                        <div class="col-6">
                            <a href="{{route('akun.edit', ['id' => $user->id])}}" class="btn btn-warning">Edit</a>
                        </div>
                        <div class="col-6">
                            <form action="{{route('akun.delete', ['id' => $user->id])}}" method="POST">
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
