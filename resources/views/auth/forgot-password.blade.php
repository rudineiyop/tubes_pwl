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
    
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-box">
            <img src="{{ asset('img/logo2.png') }}" > 
            <h1>Forgot Password</h1>
            <h4>Creative and Magical CheerPen*ﾟ+</h4>

            <div class="mb-4 mx-4">
                <x-input-label for="email" :value="__('')" />
                <div class="d-flex justify-content-center align-items-center">
                    <div class="input-group">
                        <x-text-input id="email" class="form-control" placeholder="Masukkan Email Anda" type="email" name="email" :value="old('email')" required autofocus  />
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <button class="btn btn-primary">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            
        </div>

    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

