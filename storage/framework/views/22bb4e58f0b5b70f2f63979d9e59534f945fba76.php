<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>ORZI PIZZERIA</title>
		<meta name="description" content="">
		<meta name="msapplication-tap-highlight" content="yes" />

		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
		<link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,600,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<!--		 Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
		<script src="<?php echo e(asset('js/jquery-2.1.0.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/modernizr-2.6.2.min.js')); ?>"></script>
		<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?sensor=false&amp;ver=3.0'></script>

    </head>
    <body class="intro-top fixed-footer scrollable yo-anim-enabled">

		<!--content-->


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
					<img src="img/logo2.png" class="light-logo" alt="ORZI PIZZERIA"/>
					<img src="img/logo2.png" class="dark-logo" alt="ORZI PIZZERIA"/>
				</figure>
			</a>
		</div>
		<div class="main-nav">
			<ul class="pull-right">
				<li>
					<a href="index.html" class="    ">početna</a>
					
				</li>				
				
				<li>
					<a href="menu.html" class="hover-subnav ">meni</a>
					<div class="subnav image-subnav">
						<ul class="subnav-wrapper">			
							<li>
								<a href="menu.html#starters">salate</a>
								<div>
									<a href="menu.html#starters" class="menu-img" style="background-image: url('img/demo/nav/starters.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="menu.html#salads">pizza</a>
								<div>							
									<a href="menu.html#salads" class="menu-img" style="background-image: url('img/demo/nav/salads.jpg')"></a>
								</div>
							
							</li>
							<li>
								<a href="menu.html#soups">roštilj</a>
								<div>
									<a href="menu.html#soups" class="menu-img" style="background-image: url('img/demo/nav/soup.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="menu.html#mains">paste</a>
								<div>
									<a href="menu.html#mains" class="menu-img" style="background-image: url('img/demo/nav/mains.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="menu.html#desserts">palačinke</a>
								<div>
									<a href="menu.html#desserts" class="menu-img" style="background-image: url('img/demo/nav/deserts.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="menu.html#drinks">piće</a>
								<div>							
									<a href="menu.html#drinks" class="menu-img" style="background-image: url('img/demo/nav/drinks.jpg')"></a>
								</div>
							</li>
						</ul>
					</div>
				</li>	
				
				<li>
					<a href="contact.html" class="">kontakt</a>	
				</li>
				
				<li>
					<a href="gallery.html" class="hover-subnav">galerija</a>
					
									
							
							
						</ul>
					</div>
				</li>				
			</ul>
		</div>
	</div>
</nav>
<div id="mobile-nav" class="visible-xs visible-sm">
	<header>
		<div class="container-fluid">
			<ul class="menu-header">
				<li class="pull-left">
					<a href="index-2.html" class="logo">
						<figure>
							<img src="img/logo2.png" alt="ORZI PIZZERIA"/>
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
			
			
			<li class="nav-item">
				<a title="" href="menu.html" class="">Meni</a>
				
			<li class="nav-item">
				<a title="" href="contact.html">Kontakt</a>
			</li>
			
			<li class="nav-item">
				<a title="" href="gallery.html">Galerija</a>
			</li>
		</ul>
	</div>
</div>



<div class="section-intro section-intro-parallax" data-opacity-start="100" data-opacity-end="100">
	<div class="bg-section  menu-fullscreen"></div>

</div>
<div class="section-space"></div>
<div id="gallery" class="section-scroll main-section">
	<section id="gallery-wrapper" class="">
		<ul class="list-category">
			<li>
				<span class="filter" data-filter="all">Prikaži sve</span>
			</li>
			<li>
				<span class="filter" data-filter=".category-1">tortilje i pizza </span>
			</li>
			<li>
				<span class="filter" data-filter=".category-2">salate</span>
			</li>
			<li>
				<span class="filter" data-filter=".category-3">roštilj</span>
			</li>
		</ul>
		<header class="section-header">
			<h2>Galerija</h2>
		</header> 
		<div class="gallery-content three-columns" data-columns="3">

			<a class="mix category-1 open-overlay" href="img/demo/blog/blog1.jpg" >
				<img src="img/placeholder2.png" data-src="img/demo/blog/blog1.jpg"/>
				<div class="hidden-xs">
					<div>
						<span>						
							<h3></h3>
							<p></p>
						</span>
					</div>
				</div>
			</a>
			<a class="mix category-3 open-overlay" href="img/demo/blog/blog2.jpg" >
				<img src="img/placeholder2.png" data-src="img/demo/blog/blog2.jpg" />
				<div class="hidden-xs">
					<div>
						<span>
							<h3></h3>
							<p></p>
						</span>
					</div>				
				</div>	
			</a>
			<a class="mix category-2 open-overlay" href="ajax-gallery.html">
				<img src="img/placeholder2.png" data-src="img/demo/blog/blog3.jpg" />
				<div class="hidden-xs">
					<div>
						<span>
							<h3></h3>
							<p></p>
						</span>
					</div>
				</div>
			</a>
			<a class="mix category-1 open-overlay" href="img/demo/blog/blog4.jpg">
				<img src="img/placeholder2.png" data-src="img/demo/blog/blog4.jpg" />
				<div class="hidden-xs">
					<div>
						<span>
							<h3></h3>
							<p></p>
						</span>
					</div>
				</div>				
			</a>

			<a class="mix category-3 open-overlay" href="img/demo/blog/blog5.jpg">
				<img src="img/placeholder2.png" data-src="img/demo/blog/blog5.jpg" />
				<div class="hidden-xs">
					<div>
						<span>
							<h3></h3>
							<p></p>
						</span>
					</div>
				</div>
			</a>
			<a class="mix category-1 open-overlay" href="img/demo/blog/blog6.jpg">
				<img src="img/placeholder2.png" data-src="img/demo/blog/blog6.jpg" />
				<div class="hidden-xs">
					<div>
						<span>
							<h3></h3>
							<p></p>
						</span>
					</div>				
				</div>
			</a>

			<a class="mix category-2 open-overlay" href="img/demo/blog/blog7.jpg">
				<img src="img/placeholder2.png" data-src="img/demo/blog/blog7.jpg" />
				<div class="hidden-xs">
					<div>
						<span>

							<h3></h3>

							<p></p>
						</span>
					</div>		
				</div>		

			</a>

			<a class="mix category-3 open-overlay" href="img/demo/blog/blog8.jpg">
				<img src="img/placeholder2.png" data-src="img/demo/blog/blog8.jpg" />
				<div class="hidden-xs">
					<div>
						<span>

							<h3></h3>

							<p></p>
						</span>
					</div>		
				</div>		

			</a>

			<a class="mix category-2 open-overlay" href="img/demo/blog/blog9.jpg">
				<img src="img/placeholder2.png" data-src="img/demo/blog/blog9.jpg" />
				<div class="hidden-xs">
					<div>
						<span>
							<h3></h3>
							<p></p>
						</span>
					</div>		
				</div>		
			</a>
		</div>

	</section>
	<div class="new-content hidden"></div>
	<div class="load-more post" data-href="gallery-content-2.html">
		<div class="load-more-text">
			<span class="hidden-xs"></span>
			<button class="visible-xs"></button>
		</div>
	</div>	
</div>

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
							<span class="hours">7.00 - 23.00</span>
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
							<span class="postal-code">11000 Beograd</span>
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
					<a href="#"><i class="fa fa-instagram"></i></a>
				</li>
			</ul>


	<p class="copyrights">© 2015 <a href="index.html">ORZI PIZZERIA</a>. All Rights Reserved. </p>
</footer>
		<div class="gallery-wrapper"></div>

		<div id="preloader">
			<div id="status">
				<div class="loading-wrapper">
					<img src="img/logo2.png" alt="Loading"/>
				</div>
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
