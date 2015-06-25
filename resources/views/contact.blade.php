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
						<h4>Jenny</h4>
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
		<section class="module module-parallax bg-light-30" data-background="images/sky.jpg">

			<!-- HERO TEXT -->
			<div class="container">

				<div class="row">
					<div class="col-sm-12 text-center">
						<h1 class="mh-line-size-3 font-alt m-b-20">{{$contact->first_title}}</h1>
						<h5 class="mh-line-size-4 font-alt">{{$contact->first_caption}}</h5>
					</div>
				</div>

			</div>
			<!-- /HERO TEXT -->

		</section>
		<!-- /HERO -->

		<!-- CONTACT -->
		<section class="module">

			<div class="container">

				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<h2 class="module-title font-alt">{{$contact->second_title}}</h2>
						<div class="module-subtitle font-serif">{{$contact->second_caption}}</div>
					</div>
				</div>

				<div class="row">

					<div class="col-sm-6 col-sm-offset-1">

						<form id="contact-form" role="form" novalidate="">

							<div class="form-group">
								<label class="sr-only" for="cname">Name</label>
								<input type="text" id="cname" class="form-control" name="cname" placeholder="Name*" required="" data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>

							<div class="form-group">
								<label class="sr-only" for="cemail">Your Email</label>
								<input type="email" id="cemail" name="cemail" class="form-control" placeholder="Your E-mail*" required="" data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>

							<div class="form-group">
								<textarea class="form-control" id="cmessage" name="cmessage" rows="7" placeholder="Message*" required="" data-validation-required-message="Please enter your message."></textarea>
								<p class="help-block text-danger"></p>
							</div>

							<div class="text-center">
								<button type="submit" class="btn btn-block btn-round btn-d">Submit</button>
							</div>

						</form>

						<!-- Ajax response -->
						<div id="contact-response" class="ajax-response font-alt"></div>

					</div>

					<div class="col-sm-4">

						<!-- ALT CONTENT BOX -->
						<div class="alt-content-box m-t-0 m-t-sm-30">
							<div class="alt-content-box-icon">
								<i class="ion-paper-airplane"></i>
							</div>
							<h5 class="alt-content-box-title font-alt">
								{{$contact->extra_1}}
							</h5>
							Email: {{$entity->email}}<br>
							Phone: {{$contact->phone}}
						</div>
						<!-- /ALT CONTENT BOX -->

						<!-- ALT CONTENT BOX -->
						<div class="alt-content-box">
							<div class="alt-content-box-icon">
								<i class="ion-map"></i>
							</div>
							<h5 class="alt-content-box-title font-alt">
								{{$contact->extra_2}}
							</h5>
							{{$contact->address}}
						</div>
						<!-- /ALT CONTENT BOX -->

					</div>

				</div>

			</div>
		</section>
		<!-- /CONTACT -->

		<!-- GOOGLE MAP -->
		<section id="module-maps">

			<div id="map"></div>

		</section>
		<!-- /GOOGLE MAP -->

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
