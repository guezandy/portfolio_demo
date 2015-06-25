<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>{{$user->name}}</title>

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
						<h4>{{$entity->company_name}}</h4>
						<!--<img src="assets/images/logo-dark.png" width="95" alt="">-->
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
		<section class="module module-parallax bg-light-30" data-background="images/section-7.jpg">

			<!-- HERO TEXT -->
			<div class="container">

				<div class="row">
					<div class="col-sm-12 text-center">
						<h1 class="mh-line-size-3 font-alt m-b-20">{{$about->first_title}}</h1>
						<h5 class="mh-line-size-4 font-alt">{{$about->first_caption}}</h5>
					</div>
				</div>

			</div>
			<!-- /HERO TEXT -->

		</section>
		<!-- /HERO -->

		<!-- ABOUT -->
		<section class="module">

			<div class="container">

				<div class="row">

					<!-- ABOUT STUDIO  -->
					<div class="col-sm-4">

						<h4 class="font-alt m-t-0 m-b-20">{{$about->second_title}}</h4>
						<p>{{$about->second_caption}}</p>
					</div>
					<!-- /ABOUT STUDIO  -->

					<!-- WHAT WE DO -->
					<div class="col-sm-4">

						<h4 class="font-alt m-t-0 m-b-20">{{$about->third_title}}</h4>
						<p>{{$about->third_caption}}</p>

						<p><a href="#services" class="section-scroll">Our Services →</a></p>

					</div>
					<!-- /WHAT WE DO -->

					<!-- SKILLS -->
					<div class="col-sm-4">
						@foreach($skill_slider as $single_skill_slider)
						<h6 class="progress-title font-alt">{{$single_skill_slider->skill_title}}</h6>
						<div class="progress">
							<div class="progress-bar pb-dark" aria-valuenow="{{$single_skill_slider->value}}" role="progressbar" aria-valuemin="0" aria-valuemax="100">
								<span class="font-alt"></span>
							</div>
						</div>
						@endforeach
					</div>
					<!-- /SKILLS -->

				</div>

			</div>

		</section >
		<!-- /ABOUT -->

		<!-- COUNTERS -->
		<section class="module module-video bg-dark" data-background="images/section-10.jpg">

			<div class="container">

				<div class="row">

					<!-- COUNTER -->
					<div class="col-sm-3 m-b-md-20">
						<div class="counter-item">
							<div class="counter-title font-alt">
								<h5 class="font-alt counter-number" data-number="680"><span></span></h5>
								Cups of coffee
							</div>
						</div>
					</div>
					<!-- /COUNTER -->

					<!-- COUNTER -->
					<div class="col-sm-3 m-b-md-20">
						<div class="counter-item">
							<div class="counter-title font-alt">
								<h5 class="font-alt counter-number" data-number="1234"><span></span></h5>
								Total clients
							</div>
						</div>
					</div>
					<!-- /COUNTER -->

					<!-- COUNTER -->
					<div class="col-sm-3 m-b-md-20">
						<div class="counter-item">
							<div class="counter-title font-alt">
								<h5 class="font-alt counter-number" data-number="68"><span></span>k</h5>
								Photos made
							</div>
						</div>
					</div>
					<!-- /COUNTER -->

					<!-- COUNTER -->
					<div class="col-sm-3 m-b-md-20">
						<div class="counter-item">
							<div class="counter-title font-alt">
								<h5 class="counter-number" data-number="98"><span></span>%</h5>
								Happy clients
							</div>
						</div>
					</div>
					<!-- /COUNTER -->

				</div>

			</div>

			<!-- YOUTUBE VIDEO-->
			<div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=0pXYp72dwl0', containment:'.module-video', quality:'large', startAt:0, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:0, mute:true}"></div>
			<!-- /YOUTUBE VIDEO-->

		</section>
		<!-- /COUNTERS -->

		<!-- SERVICES -->
		<section id="services" class="module">

			<div class="container">

				<!-- MODULE TITLE -->
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<h2 class="module-title font-alt">Services</h2>
					</div>
				</div>
				<!-- /MODULE TITLE -->

				<div class="row multi-columns-row">
					@foreach($skill as $single_skill)
					<!-- CONTENT BOX -->
					<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="content-box">
							<div class="content-box-icon">
								<i class="{{$single_skill->icon}}"></i>
							</div>
							<h5 class="content-box-title font-alt">{{$single_skill->title}}</h5>
							<div class="content-box-text">
								{{$single_skill->caption}}
							</div>
						</div>
					</div>
					<!-- /CONTENT BOX -->
					@endforeach
				</div>
			</div>

		</section>
		<!-- /SERVICES -->

		<!-- TESTIMONIALS -->
		@if($quote != NULL)
		<section class="module module-parallax bg-light-30" data-background="images/section-3.jpg">

			<div class="container">

				<div class="row">

					<div class="col-sm-6 col-sm-offset-3">

						<!-- TESTIMONIALS CAROUSEL -->
						<div class="owl-carousel slider-testimonials text-center">
							@foreach($quote as $single_quote)
							<!-- SLIDE 1 -->
							<div class="item">
								<h5 class="module-icon m-b-20">
									<i class="ion-ios-chatboxes-outline"></i>
								</h5>
								<div class="font-serif m-b-20">
									{{$single_quote->text}}
								</div>
								<div class="quote-author font-alt">{{$single_quote->author}}</div>
							</div>
							<!-- /SLIDE 1 -->
							@endforeach

						</div>
						<!-- /TESTIMONIALS CAROUSEL -->

					</div>

				</div>

			</div>

		</section>
		<!-- /TESTIMONIALS -->
		@endif
		<!-- FOOTER -->
		<footer class="module bg-light">

			<div class="container">

				<div class="row">

					<div class="col-sm-12">

						<ul class="social-text-links font-alt text-center m-b-20">
							<li><a href="{{$entity->facebook}}">Facebook</a></li>
							<li><a href="{{$entity->twitter}}">Twitter</a></li>
							<li><a href="{{$entity->linkedin}}">Linkedin</a></li>
							<li><a href="{{$entity->dribble}}">Dribbble</a></li>
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
