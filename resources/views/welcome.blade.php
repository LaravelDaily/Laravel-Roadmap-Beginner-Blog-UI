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
                  <!-- Navbar Brand --><a href="index.html" class="navbar-brand">Bootstrap Blog</a>
                  <!-- Toggle Button-->
                  <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
                </div>
                <!-- Navbar Menu -->
                <div id="navbarcollapse" class="collapse navbar-collapse">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="blog.html" class="nav-link ">Blog</a>
                    </li>
                    <li class="nav-item"><a href="post.html" class="nav-link ">About</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link ">ADMIN</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </header>
          <!-- Hero Section-->
          <section style="background: url(https://d19m59y37dris4.cloudfront.net/blog/1-2-1/img/hero.jpg); background-size: cover; background-position: center center" class="hero">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <h1>Laravel Roadmap: Beginner Project Blog</h1>
                </div>
              </div>
            </div>
          </section>
          <!-- Latest Posts -->
          <section class="latest-posts"> 
            <div class="container">
              <header> 
                <h2>Latest from the blog</h2>
                <p class="text-big">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </header>
              <div class="row">
                <div class="post col-md-4">
                  <div class="post-thumbnail"><a href="post.html"><img src="https://d19m59y37dris4.cloudfront.net/blog/1-2-1/img/blog-1.jpg" alt="..." class="img-fluid"></a></div>
                  <div class="post-details">
                    <div class="post-meta d-flex justify-content-between">
                      <div class="date">20 May | 2016</div>
                      <div class="category"><a href="#">Business</a></div>
                    </div><a href="post.html">
                      <h3 class="h4">Ways to remember your important ideas</h3></a>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  </div>
                </div>
                <div class="post col-md-4">
                  <div class="post-thumbnail"><a href="post.html"><img src="https://d19m59y37dris4.cloudfront.net/blog/1-2-1/img/blog-2.jpg" alt="..." class="img-fluid"></a></div>
                  <div class="post-details">
                    <div class="post-meta d-flex justify-content-between">
                      <div class="date">20 May | 2016</div>
                      <div class="category"><a href="#">Technology</a></div>
                    </div><a href="post.html">
                      <h3 class="h4">Diversity in Engineering: Effect on Questions</h3></a>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  </div>
                </div>
                <div class="post col-md-4">
                  <div class="post-thumbnail"><a href="post.html"><img src="https://d19m59y37dris4.cloudfront.net/blog/1-2-1/img/blog-3.jpg" alt="..." class="img-fluid"></a></div>
                  <div class="post-details">
                    <div class="post-meta d-flex justify-content-between">
                      <div class="date">20 May | 2016</div>
                      <div class="category"><a href="#">Financial</a></div>
                    </div><a href="post.html">
                      <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="logo">
                    <h6 class="text-white">Bootstrap Blog</h6>
                  </div>
                  <div class="contact-details">
                    <p>53 Broadway, Broklyn, NY 11249</p>
                    <p>Phone: (020) 123 456 789</p>
                    <p>Email: <a href="mailto:info@company.com">Info@Company.com</a></p>
                    <ul class="social-menu">
                      <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="menus d-flex">
                    <ul class="list-unstyled">
                      <li> <a href="#">My Account</a></li>
                      <li> <a href="#">Add Listing</a></li>
                      <li> <a href="#">Pricing</a></li>
                      <li> <a href="#">Privacy &amp; Policy</a></li>
                    </ul>
                    <ul class="list-unstyled">
                      <li> <a href="#">Our Partners</a></li>
                      <li> <a href="#">FAQ</a></li>
                      <li> <a href="#">How It Works</a></li>
                      <li> <a href="#">Contact</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="latest-posts"><a href="#">
                      <div class="post d-flex align-items-center">
                        <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/blog/1-2-1/img/small-thumbnail-1.jpg" alt="..." class="img-fluid"></div>
                        <div class="title"><strong>Hotels for all budgets</strong><span class="date last-meta">October 26, 2016</span></div>
                      </div></a><a href="#">
                      <div class="post d-flex align-items-center">
                        <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/blog/1-2-1/img/small-thumbnail-2.jpg" alt="..." class="img-fluid"></div>
                        <div class="title"><strong>Great street atrs in London</strong><span class="date last-meta">October 26, 2016</span></div>
                      </div></a><a href="#">
                      <div class="post d-flex align-items-center">
                        <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/blog/1-2-1/img/small-thumbnail-3.jpg" alt="..." class="img-fluid"></div>
                        <div class="title"><strong>Best coffee shops in Sydney</strong><span class="date last-meta">October 26, 2016</span></div>
                      </div></a></div>
                </div>
              </div>
            </div>
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
