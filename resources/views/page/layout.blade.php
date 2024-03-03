<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Cheerpen | *ﾟ+</title>
    <link rel="icon" href="{{ asset('/img/mainLogo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

  
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid" id="wrap">
          <a class="navbar-brand" href="/page/dashboard">
            <img
              src="{{ asset('img/logo.svg') }}"
            />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('/page/dashboard') ? 'active' : '' }}" href="/page/dashboard">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('genres*') ? 'active' : '' }}" href="/genres">Genres</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Browse
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/page/aboutus">About Us</a></li>
                </ul>
              </li>
              <li>
                {{-- <form action="/posts">
                  @if (request('genre'))
                      <input type="hidden" name="genre" value="{{ request('genre') }}">
                  @endif
                  @if (request('author'))
                      <input type="hidden" name="author" value="{{ request('author') }}">
                  @endif
  
                  <form action="/page/dashboard">
                  <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search" name="search"
                          value="{{ request('search') }}">
                      <button class="btn btn-primary" type="submit">Search</button>
                  </div>
                </form>
  
              </form> --}}
              </li>
            </ul>
            
            <ul class="navbar-nav ms-auto">
              @auth
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Selamat datang author, {{ auth()->user()->name }}
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/dashboard"><i
                                      class="bi bi-layout-text-sidebar-reverse"></i> My
                                  Cheerpen</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>

                          {{-- Logout --}}
                          <li>
                              <form action="/logout" method="post">
                                  @csrf
                                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i>
                                      Logout</button>
                              </form>
                          </li>
                      </ul>
                  </li>
              @else    
                      <li class="nav-item">
                          <a href="{{ route('login') }}" class="nav-link align-items-center">
                          <button class="btn btn-outline-primary">Login</button>
                          </a>
                      </li>
              </ul>
          @endauth
            
          </div>
        </div>
      </nav>

      <br>

      @yield('content')

      <br>
      <br>
      
    </div>

    <br>
    <br>
    
      <footer>
      <div class="footer-dark">
        
            <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-md-2 item" >
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>

                    <div class="col-md-8 item text">
                      <h3>CHEERPEN *ﾟ+</h3>
                      <p>
                        Cheer Pen adalah website yang menyediakan cerpen gratis untuk anda baca dengan berbagai macam genre tentunya. Kamu juga tentunya dapat menulis cerpen mu sendiri disini. Ayo buruan kepoin sekarang
                      </p>
                    </div>

                    <div class="col-sm-6 col-md-2 item" >
                      <a class="" href="#">
                        <img
                          src="{{ asset('img/logo.svg') }}"
                          height="200px"
                          margin-top=2px;
                          alt=""
                          loading="lazy"
                        />
                      </a>
                    </div>
          
                </div>
                  
                    <div class="col item social">
                      <a href="#">
                        <i class="fa-brands fa-facebook fa-shake"></i>
                      </a>
                      <a href="#">
                        <i class="fa-brands fa-twitter fa-shake"></i>
                      </a>
                      <a href="#">
                        <i class="fa-brands fa-whatsapp fa-shake"></i>
                      </a>
                      <a href="#">
                        <i class="fa-brands fa-instagram fa-shake"></i>
                      </a>
                    </div>
                <p class="copyright">Cheer Pen © 2023</p>
            </div>
        
    </div>
  </footer>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/d8ca2bfebc.js" crossorigin="anonymous"></script>

@yield('script')

</body>
</html>