<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/blog/1-2-1/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/blog/1-2-1/css/custom.css">
</head>
    <body class="antialiased">
        <header class="header">
            <!-- Main Navbar-->
            <nav class="navbar navbar-expand-lg">
              <div class="container">
                <!-- Navbar Brand -->
                <div class="navbar-header d-flex align-items-center justify-content-between">
                  <!-- Navbar Brand --><a href="{{ route('home') }}" class="navbar-brand">Bootstrap Blog</a>
                  <!-- Toggle Button-->
                  <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
                </div>
                <!-- Navbar Menu -->
                <div id="navbarcollapse" class="collapse navbar-collapse">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{ route('posts.index') }}" class="nav-link ">Blog</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link ">About</a>
                    </li>
                    @auth
                      <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link btn btn-info">ADMIN</a>
                      </li>
                    @endauth
                  </ul>
                </div>
              </div>
            </nav>
          </header>
          
          @yield('content')
          
          <!-- Page Footer-->
          <footer class="main-footer" style="padding: 0;">
            <div class="copyrights">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <p>&copy; {{ date('Y') }}. All rights reserved. Your great site.</p>
                  </div>
                  <div class="col-md-6 text-right">
                    <p>Template By <a href="https://bootstrapious.com/p/bootstrap-carousel" class="text-white">Bootstrapious</a>
                      <!-- Please do not remove the backlink to Bootstrap Temple unless you purchase an attribution-free license @ Bootstrap Temple or support us at http://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :)                         -->
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </footer>
    </body>
</html>
