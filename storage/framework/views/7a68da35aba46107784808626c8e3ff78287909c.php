<?php $__env->startSection('body'); ?>

<body class="intro-fullscreen fixed-footer yo-anim-enabled">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!--content-->
<nav id="main-navbar" class="hidden-xs hidden-sm">
	<div class="nav hidden-xs">
		<div class="main-reorder pull-right">
			<a href="#">
				<i class="fa fa-bars"></i>
			</a>
		</div>

		<div class="logo pull-left">
			<a href="<?php echo e(url('/')); ?>">
				<figure></figure>
			</a>
		</div>
		<div class="main-nav">
			<ul class="pull-right">
				
				<li>
					<a href="<?php echo e(url('/')); ?>" class="    ">Početna</a>	
				</li>				
				<li>
					<a href="<?php echo e(url('/menu')); ?>" class="hover-subnav">meni</a>
					<div class="subnav image-subnav">
						<ul class="subnav-wrapper">
							<li>
								<a href="<?php echo e(url('/menu')); ?>#grill" style="color: white;">roštilj</a>
								<div>
									<a href="<?php echo e(url('/menu')); ?>#grill" class="menu-img" style="background-image: url('img/demo/nav/grill.jpg')"></a>
								</div>
							</li>			
							<li>
								<a href="<?php echo e(url('/menu')); ?>#salad" style="color: white;">salate</a>
								<div>
									<a href="<?php echo e(url('/menu')); ?>#salad" class="menu-img" style="background-image: url('img/demo/nav/starters.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="<?php echo e(url('/menu')); ?>#pasta" style="color: white;">paste</a>
								<div>							
									<a href="<?php echo e(url('/menu')); ?>#pasta" class="menu-img" style="background-image: url('img/demo/nav/salads.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="<?php echo e(url('/menu')); ?>#tortilla" style="color: white;">tortilje</a>
								<div>
									<a href="<?php echo e(url('/menu')); ?>#tortilla" class="menu-img" style="background-image: url('img/demo/nav/mains.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="<?php echo e(url('/menu')); ?>#pizza" style="color: white;">pizza</a>
								<div>
									<a href="<?php echo e(url('/menu')); ?>#pizza" class="menu-img" style="background-image: url('img/demo/nav/soup.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="<?php echo e(url('/menu')); ?>#pancake" style="color: white;">slatke palačinke</a>
								<div>
									<a href="<?php echo e(url('/menu')); ?>#pancake" class="menu-img" style="background-image: url('img/demo/nav/deserts.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="<?php echo e(url('/menu')); ?>#pancake_salted" style="color: white;">slane palačinke</a>
								<div>
									<a href="<?php echo e(url('/menu')); ?>#pancake_salted" class="menu-img" style="background-image: url('img/demo/nav/deserts.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="<?php echo e(url('/menu')); ?>#sandwich" style="color: white;">sendviči</a>
								<div>							
									<a href="<?php echo e(url('/menu')); ?>#sandwich style="color: white;"" class="menu-img" style="background-image: url('img/demo/nav/drinks.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="<?php echo e(url('/menu')); ?>#other" style="color: white;">ostalo</a>
								<div>							
									<a href="<?php echo e(url('/menu')); ?>#other style="color: white;"" class="menu-img" style="background-image: url('img/demo/nav/drinks.jpg')"></a>
								</div>
							</li>
						</ul>
					</div>
				</li>	
				
				<li>
					<a href="<?php echo e(url('/contact')); ?>" class="">kontakt</a>	
				</li>
				
				<li>
					<a href="<?php echo e(url('/gallery')); ?>" class="hover-subnav">galerija</a>
					
				</li>
				<li>
                        <a href="<?php echo e(route('cart.index')); ?>">
                            <i class="fa fa-shopping-basket fa-2x" aria-hidden="true" style="color:#EA4623" >
                            </i>
                            Korpa
                            <span class="badge" style="background-color: #EA4623;">
                                <?php echo e(Cart::count()); ?>

                            </span>
                        </a>
                </li>				
			</ul>		</div>
	</div>
</nav>
						<div id="mobile-nav" class="visible-xs visible-sm">
							<header>
								<div class="container-fluid">
									<ul class="menu-header">
										<li class="pull-left">
											<a href="<?php echo e(url('/')); ?>" class="logo">
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
										<a title="" href="<?php echo e(url('/')); ?>">početna</a>
									</li>
									
									</li>
									<li class="nav-item">
										<a title="" href="<?php echo e(route('menu')); ?>" class="">Meni</a>
										<!--<span class="open-children"><i class="fa fa-angle-down"></i></span>-->
				
									</li>

									<!--
									<li class="nav-item">
										<a title="" href="shop.html">Akcije</a>
									</li>
									-->
									<li class="nav-item">
										<a title="" href="<?php echo e(route('gallery')); ?>">Galerija</a>
									</li>
									<li class="nav-item">
										<a title="" href="<?php echo e(route('contact')); ?>">Kontakt</a>
									</li>
									<li>
				                        <a href="<?php echo e(route('cart.index')); ?>">
				                            <i class="fa fa-shopping-basket fa-2x" aria-hidden="true" style="color:#EA4623" >
				                            </i>
				                            <strong style="color:#ee6344">Korpa</strong>
				                            <span class="badge" style="background-color: #EA4623;">
				                                <?php echo e(Cart::count()); ?>

				                            </span>
				                        </a>
					                </li>
									<!--
									<li class="nav-item">
										<a title="" href="<?php echo e(url('/narucite_online')); ?>">Naručite online</a>
									</li>
									-->
								</ul>
							</div>
						</div>



<div class="section-intro section-intro-parallax contact-fullscreen mobile-height" data-opacity-start="30" data-opacity-end="100">
	<div class="bg-section map" id="map"><span class="logo pull-left"><a href="index-2.html"><img src="img/logo2.png" class="dark-logo" alt="ORZI PIZZERIA"/></a></span></div>
	<div class="mapMarkerColor"></div>
	<div class="container-fluid pre-content hidden-xs">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<h1 class="yo-anim yo-anim-fade" data-animation-delay="100">GDE SE NALAZIMO</h1>
				<p class="yo-anim yo-anim-fade" data-animation-delay="500">Pizzeria Orzi se nalazi na Zvezdari u ulici Vojislava Ilića 73a...</p>
			</div>
		</div>
	</div>
	<a class="arrow1 arrow-section hidden-xs" href="#">
		<i class="fa fa-angle-down"></i>
	</a>
	<a class="arrow2 arrow-section hidden-xs" href="#" style="">
		<i class="fa fa-angle-up"></i>
	</a>
</div>

<div class="section-space"></div>

<section id="contact" class="section-scroll main-section">
		<header class="section-header">
			<h2>ORZI PIZZERIA</h2>
		</header> 
	<div class="contact-content container section-padding">
		<div class="row">
			<div class="col-xs-12 col-md-5 v-card">
				<h3>Informacije</h3>
				<p></p>


				<div class="row">
					<div class="col-sm-6">
						<h3>Adresa</h3>
						<address>
							<strong>ORZI PIZZERIA</strong><br/>
							Vojislava Ilića 73a<br/>
							11000 Beograd<br/>
							<!-- <abbr title="Phone">P:</abbr> (123) 456-7890 -->
						</address>
					</div>
					<div class="col-sm-6">
						<h3>Kontakt</h3>
						<p>
							<a href="#" class="contact-email">office@orzipizzeria.rs</a><br/>
							<a href="tel:0616561301">061-6561-301</a><br/>
							<a href="tel:0114053208">0114053208</a><br/>
						<p/>
					</div>

				</div>
			</div>
			<div class="col-xs-12 col-md-7">
				<h3>Kontakt forma</h3>
				<form class="row" role="form" name="contact-form" id="contact-form" action="http://mail.orzipizzeria.rs/html/ORZI PIZZERIA/contact-send.php" method="POST">
					<div class="col-md-6">
						<div class="form-group">
							<input type="name" class="form-control contact-form " id="contact-name" placeholder="Ime" name="contact[name]">
						</div>
						<div class="form-group">
							<input class="contact-form form-control " type="text" placeholder="Email" name="contact[email]" id="contact-email">
						</div>
						<div class="form-group">
							<input class="contact-form form-control " type="text" placeholder="Tema" name="contact[subject]" id="contact-subject">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group message">
							<textarea class="form-control input-row-3 contact-form " rows="6" placeholder="Poruka" name="contact[message]" id="contact-message"></textarea>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group text-right button-submit btn-submit">
							<button type="submit" class="btn btn-dark button-send">POŠALJITE</button>
							<div class="message-success alert-success alert hidden"><i class="fa fa-check"></i></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>