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
  <title>@yield("title")</title>

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
          <a class="nav-link" href="schedule.html">Schedule<span>/</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sponsors.html">Sponsors<span>/</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
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
					<h3>@yield("title")</h3>
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
					<div class="widget search p-0">
						<div class="input-group">
						    <input type="text" class="form-control main m-0" id="expire" placeholder="Search...">
						    <span class="input-group-addon"><i class="fa fa-search"></i></span>
					    </div>
					</div>
					<!-- Category Widget -->
					<x-category-widget/>
					<!-- Latest post -->
					<x-latest-news/>
					<!-- Popular Tag Widget -->
					<div class="widget tags">
						<!-- Widget Header -->
						<h5 class="widget-header">Popular Tags</h5>
						<ul class="list-inline">
							<li class="list-inline-item"><a href="#">Culture</a></li>
							<li class="list-inline-item"><a href="#">Social</a></li>
							<li class="list-inline-item"><a href="#">News</a></li>
							<li class="list-inline-item"><a href="#">Events</a></li>
							<li class="list-inline-item"><a href="#">Sports</a></li>
							<li class="list-inline-item"><a href="#">Music</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="block">
					@yield("content")
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of News Posts  ====-->

<!--==============================================
=            Call to Action Subscribe            =
===============================================-->

<section class="cta-subscribe bg-subscribe overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mr-auto">
				<!-- Subscribe Content -->
				<div class="content">
					<h3>Subscribe to Our <span class="alternate">Newsletter</span></h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor</p>
				</div>
			</div>
			<div class="col-md-6 ml-auto align-self-center">
				<!-- Subscription form -->
				<form action="#" class="row">
					<div class="col-lg-8 col-md-12">
						<input type="email" class="form-control main white mb-lg-0" placeholder="Email">
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="subscribe-button">
							<button class="btn btn-main-md">Subscribe</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!--====  End of Call to Action Subscribe  ====-->

<!--================================
=            Google Map            =
=================================-->
<section class="map">
	<!-- Google Map -->
	<div id="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/icon/marker.png" data-marker-name="Eventre"></div>
	<div class="address-block">
		<h4>Docklands Convention</h4>
		<ul class="address-list p-0 m-0">
			<li><i class="fa fa-home"></i><span>Street Address, Location, <br>City, Country.</span></li>
			<li><i class="fa fa-phone"></i><span>[00] 000 000 000</span></li>
		</ul>
		<a href="#" class="btn btn-white-md">Get Direction</a>
	</div>
</section>
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
          <p><a href="index.html">Eventre</a> &copy; 2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a></p>
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
  <!-- Google Mapl -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
  <script src="{{ asset('/frontend-theme/plugins/google-map/gmap.js') }}"></script>
  <!-- Custom Script -->
  <script src="{{ asset('/frontend-theme/js/script.js') }}"></script>
</body>

</html>
