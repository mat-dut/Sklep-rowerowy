<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center justify-content-between">
        
              <h1 class="logo"><a href="{{ route("main") }}">{{ config('app.name', 'Laravel') }}</a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        
              <nav id="navbar" class="navbar">
                <ul>
                  <li><a class="nav-link active" href="{{ route("main") }}">Strona główna</a></li>
                  <li><a class="nav-link" href="{{ route('contact') }}">Kontakt</a></li>
                  <li><a class="nav-link" href="{{ route('about') }}">O nas</a></li>
                  @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link getstarted" href="{{ route('login') }}">Zaloguj</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link getstarted" href="{{ route('register') }}">Zarejestruj</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle getstarted scrollto" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  @if(Auth::user()->admin)
                                    <a class="dropdown-item" href="{{ route('admin') }}">Panel admina</a>
                                    <a class="dropdown-item" href="{{ route('create_product') }}">Utwórz produkt</a>
                                    <a class="dropdown-item" href="{{ route('products_table') }}">Zobacz produkty</a>
                                  @endif
                                    <a class="dropdown-item" href="{{ route('see_orders') }}">Zamówienia</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Wyloguj') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="justify-content-end"><a class="nav-link" href="{{ route('cart') }}"><img class="img-fluid" height="48" width="48" src="{{ asset('assets/img/cart_img.png') }}">Koszyk<h5><span id="cart_items" class="badge bg-success ml-1">@if (session('cart') !== null) {{ count(session('cart')) }} @else 0 @endif</span></h5></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
              </nav><!-- .navbar -->
        
            </div>
          </header><!-- End Header -->

            @yield('content')
            
        <!-- ======= Footer ======= -->
  <footer id="footer" style="z-index: 2;" class="text-center">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto">
        <div class="copyright">
          &copy; <strong><span>SklepRowerowy</span></strong> Wszelkie prawa zastrzeżone
        </div>
      </div>
      <div class="justify-content-end">
        <a href="#" style="text-decoration: none; color: #4267B2;"><i class="bi bi-facebook" style="font-size: 1.5rem;"></i></a>
        <a href="#" style="text-decoration: none; color: #C13584;"><i class="bi bi-instagram ml-2" style="font-size: 1.5rem;"></i></a>
        <a href="#" style="text-decoration: none; color: #FF0000;"><i class="bi bi-youtube ml-2" style="font-size: 1.5rem;"></i></a>
        <a href="#" style="text-decoration: none; color: #1DA1F2;"><i class="bi bi-twitter ml-2" style="font-size: 1.5rem;"></i></a>
        <a href="#" style="text-decoration: none; color: #0072b1;"><i class="bi bi-linkedin ml-2" style="font-size: 1.5rem;"></i></a>
      </div>
    </div>
    </footer><!-- End Footer -->

    <div id="preloader">
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      <script src="{{ asset('assets/js/main.js') }}"></script>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
    
