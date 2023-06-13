<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>@yield('title')</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Event and Conference Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Eventre HTML Template v1.0">

  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="{{ asset('/frontend-theme/plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ asset('/frontend-theme/plugins/font-awsome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="{{ asset('/frontend-theme/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="{{ asset('/frontend-theme/plugins/slick/slick.css') }}" rel="stylesheet">
  <link href="{{ asset('/frontend-theme/plugins/slick/slick-theme.css') }}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{ asset('/frontend-theme/css/style.css') }}" rel="stylesheet">

  <!-- FAVICON -->
  <link href="{{ asset('/frontend-theme/images/favicon.png') }}" rel="shortcut icon">

</head>

<body class="body-wrapper">


  <!--========================================
=            Navigation Section            =
=========================================-->
  <nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
    <div class="container-fluid p-0">
      <!-- logo -->
      <a class="navbar-brand" href="index.html">
        <img src="{{ asset('/frontend-theme/images/logo.png') }}" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index') }}">News<span>/</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="speakers.html">Speakers
              <span>/</span>
            </a>
          </li>



          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact<span>/</span></a>

          </li>
          @auth
          @can('isAdmin')
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/adminpanel') }}">Admin Panel<span>/</span></a>
          </li>
          @endcan
            <li class="nav-item">
                <form method="post" action="{{ route('logout') }}" id="logoutForm" name="logoutForm">
                    @csrf
                    <a class="nav-link" href="javascript:void();" onclick="$('#logoutForm').submit()">Logout</a>
                </form>

            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Sign In<span>/</span></a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
            </li>
          @endauth

        </ul>
        <a href="contact.html" class="ticket">
          <img src="{{ asset('/frontend-theme/images/icon/ticket.png') }}" alt="ticket">
          <span>Buy Ticket</span>
        </a>

      </div>
    </div>
  </nav>

  <!--====  End of Navigation Section  ====-->


  <!--================================
=            Page Title            =
=================================-->

  <section class="page-title bg-title overlay-dark">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <div class="title">
            <h3>@yield('title')</h3>
          </div>
          <!--<ol class="breadcrumb justify-content-center p-0 m-0">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active">Our News</li>
    </ol>-->
        </div>
      </div>
    </div>
  </section>

  <!--====  End of Page Title  ====-->


  <!--================================
=            News Posts            =
=================================-->

  <section class="news section">
    <div class="container">
      <div class="row mt-30">
        <div class="col-lg-4 col-md-10 mx-auto">
          <div class="sidebar">
            <!-- Search Widget -->
            <x-search-widget/>
            <!-- Category Widget -->
            <x-category-widget />
            <!-- Latest post -->
            <x-latest-news />
            <!-- Popular Tag Widget -->
            <div class="widget tags">
              <!-- Widget Header -->
              <x-popular-tags-widget/>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="block">
            <x-flash-message/>
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====  End of News Posts  ====-->

  <!--==============================================
=            Call to Action Subscribe            =
===============================================-->

  <x-newsletter/>

  <!--====  End of Call to Action Subscribe  ====-->

  <!--================================
=            Google Map            =
=================================-->

  <!--====  End of Google Map  ====-->

  <!--============================
=            Footer            =
=============================-->

  <footer class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <div class="footer-logo">
              <img src="{{ asset('/frontend-theme/images/footer-logo.png') }}" alt="logo" class="img-fluid">
            </div>
            <ul class="social-links-footer list-inline">
              <li class="list-inline-item">
                <a href="https://themefisher.com/"><i class="fa fa-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://themefisher.com/"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://themefisher.com/"><i class="fa fa-instagram"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://themefisher.com/"><i class="fa fa-rss"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://themefisher.com/"><i class="fa fa-vimeo"></i></a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </footer>
  <!-- Subfooter -->
  <footer class="subfooter">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="copyright-text">
            <p><a href="index.html">Eventre</a> &copy; 2021, Designed &amp; Developed by <a
                href="https://themefisher.com/">Themefisher</a></p>
          </div>
        </div>
        <div class="col-md-6">
          <a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
        </div>
      </div>
    </div>
  </footer>


  <!-- JAVASCRIPTS -->
  <!-- jQuey -->
  <script src="{{ asset('/frontend-theme/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('/frontend-theme/plugins/bootstrap/bootstrap.min.js') }}"></script>
  <!-- Shuffle -->
  <script src="{{ asset('/frontend-theme/plugins/shuffle/shuffle.min.js') }}"></script>
  <!-- Magnific Popup -->
  <script src="{{ asset('/frontend-theme/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
  <!-- Slick Carousel -->
  <script src="{{ asset('/frontend-theme/plugins/slick/slick.min.js') }}"></script>
  <!-- SyoTimer -->
  <script src="{{ asset('/frontend-theme/plugins/syotimer/jquery.syotimer.min.js') }}"></script>

  <!-- Custom Script -->
  <script src="{{ asset('/frontend-theme/js/script.js') }}"></script>
</body>

</html>
