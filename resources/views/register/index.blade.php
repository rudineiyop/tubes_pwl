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

 <form action="{{ route('register') }}" method="post">
    @csrf
  <div class="form-box">
    <img src="{{ asset('img/logo2.png') }}" > 
    <h1>Sign Up</h1>
    <h4>Creative and Magical CheerPen*ﾟ+</h4>

    <div class="input-box">
        <label for="name"></label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
            id="name" placeholder="Your name" required value="{{ old('name') }}">
        
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="input-box">
        <label for="username"></label>
        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
            id="username" placeholder="Username" required value="{{ old('username') }}">
        
        @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="input-box">
        <label for="email"></label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
            id="email" placeholder="name@example.com" required value="{{ old('email') }}">
        
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="input-box">
        <label for="password"></label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
            id="password" placeholder="Password" required>
        
        @error('password')
            <div class="invalid-feedback" style="margin-top: -10px">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="input-box">
        <label for="password_confirmation"></label>
        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"
            id="password_confirmation" placeholder="Password_Confirmation" required>
        
        @error('password_confirmation')
            <div class="invalid-feedback" style="margin-top: -10px">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign-Up</button>
</form>

    <div>
    <p align="center">Already registered?<a  href="{{ route('login') }}" class="sign-up"> Sign In</a></a></p>
    </div>

  </div>

      <script>
        function myFunction(){
          var x = document.getElementById("myInput");
          var y = document.getElementById("hide1");
          var z = document.getElementById("hide2");

          if(x.type === 'password') {
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
          }

          else{
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";
          }

        }
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>

    
    
    
    
    
  









    