<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>ORZI PIZZERIA</title>
		<meta name="description" content="pica, dostava, zvezdara, vojislava ilica, tortilja, sendvic, pljeskavica, cevapi, pizza, paste, beograd, Orzi, piletina, hrana, dostava hrane, crveni krst, vracar">
		<meta name="msapplication-tap-highlight" content="yes" />

		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
		<link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,600,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<!--		 Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="<?php echo e(asset("css/foundation.css")); ?>"/>
		<link rel="stylesheet" href="<?php echo e(asset("css/app.css")); ?>"/>
		<link rel="stylesheet" href="<?php echo e(asset("css/parsley.css")); ?>"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/modernizr-2.6.2.min.js"></script>
		<?php echo $__env->yieldContent('skripta'); ?>
		<?php echo $__env->yieldContent('parsley'); ?>
		
		<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?sensor=false&amp;ver=3.0'></script>

		<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

    </head>

		<?php echo $__env->yieldContent('body'); ?>



		<!--content-->
		<?php echo $__env->yieldContent('content'); ?>


		<div id="footer-spacer"></div>
		<footer id="footer" class="text-center">
					<h4><div id="message-holder" style="text-align:center"></div></h4>
			<a href="#" class="to-the-top">
				<i class="fa fa-arrow-circle-o-up"></i>
			</a>

			<h2>PIZZERIA ORZI</h2>
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
									<span class="mobile"><a href="#">061-6561-301   011-405-32-08</a></span>
									<span class="email"><a href="#">office@orzipizzeria.rs</a></span>
								</div>
							</div>
					</div>
				</div>
			</div>
					<ul class="social-icon clearfix">
						<li>
							<a href="https://www.facebook.com/OrziPizzeria" target="_blank"><i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="https://twitter.com/OrziPizzeria" target="_blank"><i class="fa fa-twitter"></i></a>
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


			<p class="copyrights">© 2015 <a href="index.html">Orzi Pizzeria</a>. All Rights Reserved. </p>
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

		<script src="js/browser.js"></script>
		<script src="js/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.smooth-scroll.js"></script>
		<script src="js/matchmedia.js"></script>
		<script src="js/enquire.min.js"></script>
		<script src="js/jquery.velocity.min.js"></script>
		<script src="js/waypoints.js"></script>		
		<script src="js/owl.carousel.js"></script>
		<script src="js/jquery.mb.YTPlayer.js"></script>
		<script src="js/jquery.parallaxify.js"></script>
		<script src="js/jquery.imagesloaded.js"></script>
		<script src="js/jquery.unveil.min.js"></script>
		<script src="js/jquery.superslides.min.js"></script>
		<script src="js/jquery.fullPage.min.js"></script>
		<script src="js/jquery.mixitup.js"></script>
		<script src="js/main.js"></script>

		<?php echo $__env->yieldContent('javascript'); ?>
		
	</body>
</html>