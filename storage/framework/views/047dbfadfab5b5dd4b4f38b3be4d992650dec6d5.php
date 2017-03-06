<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>ORZI PIZZERIA</title>
		<meta name="description" content="pica, dostava, zvezdara, vojislava ilica, tortilja, sendvic, pljeskavica, cevapi, pizza, paste, beograd, Orzi, piletina, hrana, dostava, crveni krst, vracar">
		<meta name="msapplication-tap-highlight" content="yes" />

		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
		<link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,600,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<!--		 Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="stylesheet" href="<?php echo e(asset("css/custom.css")); ?>">
		<script src="<?php echo e(asset("js/jquery-2.1.0.min.js")); ?>"></script>
		<script src="<?php echo e(asset("js/modernizr-2.6.2.min.js")); ?>"></script>
		<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?sensor=false&amp;ver=3.0'></script>

    </head>
    <body class="show-nav nav-center home-page yo-anim-enabled">

		<!--content-->


    <span class="loading-wrapper"><img src="img/logo2.png" alt="Loading"/></span>
    <nav id="main-navbar" class="hidden-xs hidden-sm">
	<div class="nav hidden-xs">
		<div class="main-reorder pull-right">
			<a href="#">
				<i class="fa fa-bars"></i>
			</a>
		</div>

		<div class="logo pull-left">
			<a href="index.html">
				<figure>
					<img src="img/logo2.png" class="light-logo" alt="ORZI"/>
					<img src="img/logo2.png" class="dark-logo" alt="ORZI"/>
				</figure>
			</a>
		</div>
		<div class="main-nav">
			<ul class="pull-right">
				<li>
					<a href="index.html" class="active active2 active3 active4 active5">Početna</a>
					
				</li>				
				
				
				<li>
					<a href="<?php echo e(url('/menu')); ?>" class="hover-subnav ">meni</a>
					<div class="subnav image-subnav">
						<ul class="subnav-wrapper">			
							<li>
								<a href="<?php echo e(url('/menu')); ?>#starters">salate</a>
								<div>
									<a href="<?php echo e(url('/menu')); ?>#starters" class="menu-img" style="background-image: url('img/demo/nav/starters.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="<?php echo e(url('/menu')); ?>#salads">paste</a>
								<div>							
									<a href="<?php echo e(url('/menu')); ?>#salads" class="menu-img" style="background-image: url('img/demo/nav/salads.jpg')"></a>
								</div>
							
							</li>
							<li>
								<a href="<?php echo e(url('/menu')); ?>#soups">pizza</a>
								<div>
									<a href="<?php echo e(url('/menu')); ?>#soups" class="menu-img" style="background-image: url('img/demo/nav/soup.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="<?php echo e(url('/menu')); ?>#mains">pizza</a>
								<div>
									<a href="<?php echo e(url('/menu')); ?>#mains" class="menu-img" style="background-image: url('img/demo/nav/mains.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="<?php echo e(url('/menu')); ?>#desserts">palačinke</a>
								<div>
									<a href="<?php echo e(url('/menu')); ?>#desserts" class="menu-img" style="background-image: url('img/demo/nav/deserts.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="<?php echo e(url('/menu')); ?>#drinks">sendviči</a>
								<div>							
									<a href="<?php echo e(url('/menu')); ?>#drinks" class="menu-img" style="background-image: url('img/demo/nav/drinks.jpg')"></a>
								</div>
							</li>
						</ul>
					</div>
				</li>	
				
				<li>
					<a href="<?php echo e(url('/contact')); ?>" class="">kontakt</a>	
				</li>

				<li>
					<a href="<?php echo e(url('/narucite_online')); ?>" class="">naručite online</a>	
				</li>
				
				<li>
					<a href="<?php echo e(url('/gallery')); ?>" class="hover-subnav">galerija</a>
					


							</div>
						</nav>

						<div id="mobile-nav" class="visible-xs visible-sm">
							<header>
								<div class="container-fluid">
									<ul class="menu-header">
										<li class="pull-left">
											<a href="index-2.html" class="logo">
												<figure>
													<img src="img/logo2.png" alt="ORZI PIZZA"/>
												</figure>
											</a>
										</li>
										<li class="reorder pull-right"><a href="#" title=""><i class="fa fa-bars"></i></a></li>
									</ul>
								</div>
							</header>	
							<div class="" id="flyout-container">
								<ul id="mobile-navbar" class="nav flyout-menu main-nav nav-height">
									<li class="nav-item">
										<a title="" href="index-2.html">početna</a>
									</li>
									
									</li>
									<li class="nav-item">
										<a title="" href="menu.html" class="">Meni</a>
										<span class="open-children"><i class="fa fa-angle-down"></i></span>
				
				

			
				</li>
				<li class="nav-item">
					<a title="" href="<?php echo e(url('/contact')); ?>">Kontakt</a>
				</li>
				<li class="nav-item">
					<a title="" href="shop.html">Akcije</a>
				</li>
				<li class="nav-item">
					<a title="" href="<?php echo e(url('/gallery')); ?>">Galerija</a>
				</li>
				<li class="nav-item">
					<a title="" href="<?php echo e(url('/narucite_online')); ?>">Naručite online</a>
				</li>
			</ul>
		</div>
	</div>



<header id="home" class="main-section home hidden-xs"> 
	<div class="home-fullscreen"> 
		<div class="container-fluid">
			<div class="basic-info ">
				<div class="clearfix"></div>
				<div class="open-daily yo-anim yo-anim-fade-ltr" data-animation-delay="200">
					<span class="day">Ponedeljak - Subota </span>
					<span class="hours">09.00 - 23.00</span>
				</div>
				<div class="open-daily yo-anim yo-anim-fade-ltr" data-animation-delay="500">
					<span class="day">Nedelja</span>
					<span class="hours">16.00 - 23.00</span>
				</div>
				<div class="simple-contact yo-anim yo-anim-fade-ltr" data-animation-delay="800">
					<span class="address">Vojislava Ilića 73a</span>
					<span class="postal-code">11000 Beograd</span>
				</div>
				<div class="simple-contact yo-anim yo-anim-fade-ltr" data-animation-delay="1100">
					<span class="mobile"><a href="#">061-6561-301  011-405-32-08</a></span>
					<span class="email"><a href="#">office@orzipizzeria.rs</a></span>
				</div>
				<ul class="social-icon yo-anim yo-anim-fade-ltr" data-animation-delay="1400">
					<li>
						<a href="#"><i class="fa fa-facebook"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-twitter"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="home-parallax opacity-50">
			<div data-parallaxify-range="100" class="parallax-layer" style="background-image: url(img/demo/paralax-berg.jpg); "></div>
		</div>
	</div>
</header>
<div class="visible-xs mobile-basic-info">
	<div id="footer-spacer"></div>
<footer id="footer" class="text-center">

	<a href="#" class="to-the-top">
		<i class="fa fa-arrow-circle-o-up"></i>
	</a>

	<h2>ORZI PIZZERIA</h2>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center v-card">

					<div class="col-sm-6 col-lg-3">
						<div class="open-daily">
							<span class="day">Ponedeljak - Subota</span>
							<span class="hours">09.00 - 23.00</span>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">	
						<div class="open-daily">
							<span class="day">Nedelja</span>
							<span class="hours">16.00 - 23.00</span>
						</div>
					</div>	
					<div class="col-sm-6 col-lg-3">	
						<div class="simple-contact">
							<span class="address">Vojislava Ilića 73a</span>
							<span class="postal-code">11000 Beograd </span>
						</div>
					</div>	
					<div class="col-sm-6 col-lg-3">	
						<div class="simple-contact">
							<span class="mobile"><a href="#">061-6561-301</a></span>
							<span class="email"><a href="#">office@orzipizzeria.rs</a></span>
						</div>
					</div>
			</div>
		</div>
	</div>
			<ul class="social-icon clearfix">
				<li>
					<a href="https://www.facebook.com/OrziPizzeria"><i class="fa fa-facebook"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-pinterest"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-google-plus"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-instagram"></i></a>
				</li>
			</ul>


	<p class="copyrights">© 2015 <a href="">ORZI PIZZERIA</a>. All Rights Reserved. </p>
</footer>
	<div class="home-bg-image"></div>
</div>


		<div class="gallery-wrapper"></div>

		<div id="preloader">
			<div id="status">
				<div class="loading-wrapper"></div>
			</div>
			<div id="status-loaded"></div>
		</div>

		<script src="<?php echo e(asset('js/browser.js')); ?>"></script>
		<script src="<?php echo e(asset('js/jquery.ba-throttle-debounce.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/jquery.smooth-scroll.js')); ?>"></script>
		<script src="<?php echo e(asset('js/matchmedia.js')); ?>"></script>
		<script src="<?php echo e(asset('js/enquire.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/jquery.velocity.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/waypoints.js')); ?>"></script>		
		<script src="<?php echo e(asset('js/owl.carousel.js')); ?>"></script>
		<script src="<?php echo e(asset('js/jquery.mb.YTPlayer.js')); ?>"></script>
		<script src="<?php echo e(asset('js/jquery.parallaxify.js')); ?>"></script>
		<script src="<?php echo e(asset('js/jquery.imagesloaded.js')); ?>"></script>
		<script src="<?php echo e(asset('js/jquery.unveil.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/jquery.superslides.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/jquery.fullPage.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/jquery.mixitup.js')); ?>"></script>
		<script src="<?php echo e(asset('js/main.js')); ?>"></script>
	</body>
</html>
