<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>{{$entity->company_name}}</title>

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Plugins -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/ionicons.min.css" rel="stylesheet">
	<link href="css/simpletextrotator.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/superslides.css" rel="stylesheet">
	<link href="css/vertical.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">

	<!-- Template core CSS -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>

	<!-- PRELOADER -->
	<div class="page-loader">
		<div class="loader">Loading...</div>
	</div>
	<!-- /PRELOADER -->

	<!-- OVERLAY MENU -->
	<div id="overlay-menu" class="overlay-menu">

		<a href="#" id="overlay-menu-hide" class="navigation-hide"><i class="ion-close-round"></i></a>

		<div class="overlay-menu-inner">
			<nav class="overlay-menu-nav">

				<ul id="nav">
					<li><img src="images/JHlogo.png" width="70"></li><br>

					<li><a href="{{url('home')}}">Home</a></li>

					<li><a href="{{url('about')}}">About</a></li>

					<li><a href="{{url('contact')}}">Contact</a></li>

				</ul>

			</nav>
		</div>

		<div class="overlay-navigation-footer">

			<div class="container">

				<div class="row">

					<div class="col-sm-12 text-center">
						<p class="copyright font-alt m-b-0">© 2015 <a href="http://lunadeveloper.com">Luna Developer</a>, All Rights Reserved.</p>
					</div>

				</div>

			</div>

		</div>

	</div>
	<!-- /OVERLAY MENU -->

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- NAVIGATION -->
		<nav class="navbar navbar-custom navbar-transparent navbar-light navbar-fixed-top">

			<div class="container">

				<div class="navbar-header">
					<!-- YOU LOGO HERE -->
					<a class="navbar-brand" href="index.html">
						<!-- IMAGE OR SIMPLE TEXT -->
						<div class="">
							<h5><img src="images/JHlogo.png" width="50">&nbsp;{{$entity->company_name}}</h5>
						</div>
					</a>
				</div>

				<!-- ICONS NAVBAR -->
				<ul id="icons-navbar" class="nav navbar-nav navbar-right">
					<li>
						<a href="#" id="toggle-menu" class="show-overlay" title="Menu">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
					</li>
				</ul>
				<!-- /ICONS NAVBAR -->

				<ul class="extra-navbar nav navbar-nav navbar-right">
					<li><a href="{{url('home')}}" title="Home">Home</a></li>
					<li><a href="{{url('about')}}" title="About">About</a></li>
					<li><a href="{{url('contact')}}" title="Contact">Contact</a></li>
				</ul>

			</div>

		</nav>
		<!-- /NAVIGATION -->

		<!-- HERO -->
		<section id="hero" class="module-hero module-video module-full-height bg-light-30" data-background="images/section-11.jpg">

			<!-- HERO TEXT -->
			<div class="hero-caption">
				<div class="hero-text">

					<h1 class="mh-line-size-1 font-alt m-b-50">{{$home->title}}</h1>
					<h5 class="mh-line-size-4 font-alt">{{$home->caption}}</h5>

				</div>
			</div>
			<!-- /HERO TEXT -->

			<!-- YOUTUBE VIDEO-->
			<div class="video-player" data-property="{videoURL:'{{$home->video_url}}', containment:'.module-video', quality:'large', startAt:3, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:0, mute:true}"></div>
			<!-- /YOUTUBE VIDEO-->

		</section>
		<!-- /HERO -->

		<!-- PORTFOLIO -->
		<section id="portfolio" class="module">

			<div class="container">

				<!-- FILTER -->
				<div class="row">

					<div class="col-sm-12">
						<ul id="filters" class="filters font-alt">
							<li><a href="#" data-filter="*" class="current">All</a></li>
              @foreach($portfolio_category as $single_portfolio_category)
							<li><a href="#" data-filter=".{{$single_portfolio_category->name}}">{{$single_portfolio_category->name}}</a></li>
              @endforeach
						</ul>
					</div>

				</div>
				<!-- /FILTER -->

				<!-- WORKS GRID -->
				<div class="row">

					<div id="works-grid" class="works-grid works-hover-w">

						<!-- DO NOT DELETE THIS DIV -->
						<div class="grid-sizer"></div>
            @foreach($portfolio_piece as $single_portfolio_piece)
						<!-- PORTFOLIO ITEM -->
						<div class="work-item design">
							<a href="{{url('/piece')}}">
								<img src="images/portfolio/img-2.jpg" alt="">
								<div class="work-caption font-alt">
									<h3 class="work-title">{{$single_portfolio_piece->title}}</h3>
									<div class="work-descr">
										Design
									</div>
								</div>
							</a>
						</div>
						<!-- /PORTFOLIO ITEM -->
            @endforeach
					</div>
				</div>
				<!-- /WORKS GRID -->
			</div>

		</section>
		<!-- /PORTFOLIO -->

		<!-- FOOTER -->
		<footer class="module bg-light">

			<div class="container">

				<div class="row">

					<div class="col-sm-12">

						<ul class="social-text-links font-alt text-center m-b-20">
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Instagram</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Linkedin</a></li>
							<li><a href="#">Dribbble</a></li>
						</ul>

					</div>

				</div>

				<div class="row">

					<div class="col-sm-12">

						<p class="copyright text-center m-b-0">© 2015 <a href="http://lunadeveloper.com">Luna Developer</a>, All Rights Reserved.</p>

					</div>

				</div>

			</div>

		</footer>
		<!-- /FOOTER -->

	</div>
	<!-- /WRAPPER -->

	<!-- SCROLLTOP -->
	<div class="scroll-up">
		<a href="#totop"><i class="fa fa-angle-double-up"></i></a>
	</div>

	<!-- Javascript files -->
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/jquery.mb.YTPlayer.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.simple-text-rotator.min.js"></script>
	<script src="js/imagesloaded.pkgd.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/packery-mode.pkgd.min.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jqBootstrapValidation.js"></script>
	<script src="js/jquery.fitvids.js"></script>
	<script src="js/jquery.parallax-1.1.3.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>
