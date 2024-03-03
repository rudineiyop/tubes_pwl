<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="{{ asset('img/mainLogo.png')}}">
</head>
<body>

    <div class="container">

    <form method="POST" action="{{ route('password.store') }}">
        @csrf
        <div class="form-box">
            <img src="{{ asset('img/logo2.png') }}" > 
            <h1>Reset Password</h1>
            <h4>Creative and Magical CheerPen*ﾟ+</h4>


        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

       <!-- Email Address -->
<div class="mb-4 mx-4">
    <x-input-label for="email" :value="__('')" />
    <div class="input-group">
        <x-text-input id="email" class="form-control" type="email" placeholder="Masukkan Email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
    </div>
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<!-- Password -->
<div class="mb-4 mx-4">
    <x-input-label for="password" :value="__('')" />
    <div class="input-group">
        <x-text-input id="password" class="form-control" type="password" placeholder="Masukkan Password Baru" name="password" required autocomplete="new-password" />
    </div>
    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<!-- Confirm Password -->
<div class="mb-4 mx-4">
    <x-input-label for="password_confirmation" :value="__('')" />
    <div class="input-group">
        <x-text-input id="password_confirmation" class="form-control" type="password" placeholder="Confirmation Password" name="password_confirmation" required autocomplete="new-password" />
    </div>
    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>

<div class="d-flex justify-content-center mx-4 mt-4">
    <button class="btn btn-primary">
        {{ __('Reset Password') }}
    </button>
</div>


        </div>
    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


