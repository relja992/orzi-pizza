<?php $__env->startSection('body'); ?>

<body class="show-nav nav-center home-page yo-anim-enabled">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
			<a href="<?php echo e(url('/')); ?>">
				<figure>
					<img src="img/logo2.png" class="light-logo" alt="ORZI"/>
					<img src="img/logo2.png" class="dark-logo" alt="ORZI"/>
				</figure>
			</a>
		</div>
		<div class="main-nav">
			<ul class="pull-right">
				<li>
					<a href="<?php echo e(url('/')); ?>" class="active active2 active3 active4 active5">Početna</a>
					
				</li>				
				<li>
					<a href="<?php echo e(route('menu')); ?>" class="hover-subnav ">meni</a>
					<div class="subnav image-subnav">
						<ul class="subnav-wrapper">			
							<li>
								<a href="<?php echo e(route('menu')); ?>#grill" style="color: white;">roštilj</a>
								<div>
									<a href="<?php echo e(route('menu')); ?>#grill" class="menu-img" style="background-image: url('img/demo/nav/grill.jpg')"></a>
								</div>
							</li>			
							<li>
								<a href="<?php echo e(route('menu')); ?>#salad" style="color: white;">salate</a>
								<div>
									<a href="<?php echo e(route('menu')); ?>#salad" class="menu-img" style="background-image: url('img/demo/nav/salads.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="<?php echo e(route('menu')); ?>#pasta" style="color: white;">paste</a>
								<div>							
									<a href="<?php echo e(route('menu')); ?>#pasta" class="menu-img" style="background-image: url('img/demo/nav/pasta.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="<?php echo e(route('menu')); ?>#tortilla" style="color: white;">tortilje</a>
								<div>
									<a href="<?php echo e(route('menu')); ?>#tortilla" class="menu-img" style="background-image: url('img/demo/nav/tortilla.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="<?php echo e(route('menu')); ?>#pizza" style="color: white;">pizza</a>
								<div>
									<a href="<?php echo e(route('menu')); ?>#pizza" class="menu-img" style="background-image: url('img/demo/nav/pizza.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="<?php echo e(route('menu')); ?>#pancake" style="color: white;">palačinke</a>
								<div>
									<a href="<?php echo e(route('menu')); ?>#pancake" class="menu-img" style="background-image: url('img/demo/nav/pancake.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="<?php echo e(route('menu')); ?>#sandwich" style="color: white;">sendviči</a>
								<div>							
									<a href="<?php echo e(route('menu')); ?>#sandwich" class="menu-img" style="background-image: url('img/demo/nav/sandwich.jpg')"></a>
								</div>
							</li>
						</ul>
					</div>
				</li>	
				
				<li>
					<a href="<?php echo e(route('contact')); ?>" class="">kontakt</a>	
				</li>
				<!--
				<li>
					<a href="<?php echo e(url('/narucite_online')); ?>" class="">naručite online</a>	
				</li>
				-->
				<li>
					<a href="<?php echo e(route('gallery')); ?>" class="hover-subnav">galerija</a>
					

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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>