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

    {{-- If login success, flash --}}
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    {{-- If login failed, flash --}}
    @if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

 <form action="{{ route('login') }}" method="post">
    @csrf
  <div class="form-box">
    <img src="{{ asset('img/logo2.png') }}" > 
    <h1>Sign In</h1>
    <h4>Creative and Magical CheerPen*ﾟ+</h4>

    
    <div class="input-box">
        {{-- <i class="fa fa-envelope"></i> --}}
        <label for="email"></label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
          id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
          @error('email')
          <div class="invalid-feedback">
          {{ $message }}
          </div>
      @enderror
      </div>


    <div class="input-box">
      
      <i class="fa fa-key"></i>
      <label for="password"></label>
      <input type="password" name="password" id="password" placeholder="Password"
        required>
        <span class="eye" onclick="togglePassword()">
        <i id="eyeOpen" class="fa fa-eye"></i>
        <i id="eyeClosed" class="fa fa-eye-slash"></i>
      </span>
      
    </div>
    <div>
      @if (Route::has('password.request'))
      <a  href="{{ route('password.request') }}" class="forgot-password" style="text-decoration: none">Forgot Password</a> 
      @endif
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
</form>

    <div class="mt-2">
    <p align="center">Don't Have an Account?<a  href="{{ route('register') }}" class="sign-up" style="text-decoration: none"> Sign Up</a></p>
    </div>

  </div>

  <script>
    function togglePassword() {
        var passwordInput = document.getElementById("password");
        var eyeOpen = document.getElementById("eyeOpen");
        var eyeClosed = document.getElementById("eyeClosed");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeOpen.style.display = "block";
            eyeClosed.style.display = "none";
        } else {
            passwordInput.type = "password";
            eyeOpen.style.display = "none";
            eyeClosed.style.display = "block";
        }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>