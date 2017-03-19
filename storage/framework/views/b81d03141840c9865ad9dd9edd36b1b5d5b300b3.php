<?php $__env->startSection('skripta'); ?>
	<link rel="stylesheet" href="<?php echo e(asset("css/modal.css")); ?>"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('parsley'); ?>
	
	<script src="js/parsley2.min.js"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    
<body class="intro-fullscreen fixed-footer scroll-down yo-anim-enabled">

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
				<figure>
					<img src="img/logo1.png" class="light-logo" alt="ORZI PIZZERIA"/>
					<img src="img/logo2.png" class="dark-logo" alt="ORZI PIZZERIA"/>
				</figure>
			</a>
		</div>
		<div class="main-nav">
			<ul class="pull-left">
				<li>
					<h4><strong><div id="message-holder" style="text-align:center; vertical-align:middle; hover-subnav; padding-top:20px;color:red; font-size:20px"></div></strong></h4>
				</li>	
			</ul>
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
				<span class="open-children"><i class="fa fa-angle-down"></i></span>
				
			<li class="nav-item">
				<a title="" href="contact.html">Kontakt</a>
			</li>
			<li class="nav-item">
				<a title="" href="shop.html">Akcije</a>
			</li>
			<li class="nav-item">
				<a title="" href="gallery.html">Galerija</a>
			</li>
		</ul>
	</div>
</div>



<div class="section-intro section-intro-parallax close-on-click"  data-opacity-start="30" data-opacity-end="100">
	<div class="bg-section menu-fullscreen" data-ht-parallax="300"></div>
	<div class="pre-content">
		<div class="container"> 
			<div class="row">   
				<div class="col-xs-12">
					<h1 class="yo-anim yo-anim-fade" data-animation-delay="100">ORZI PIZZERIA</h1>
					<p class="yo-anim yo-anim-fade" data-animation-delay="500"></p>
				</div>
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

<section id="menu" class="section-scroll main-section menu">
	<ul class="list-category">
		<li> 
			<span class="filter" data-filter="all">Prikaži sve</span>
		</li>
		<li>    
			<span class="filter" data-filter=".grill">Roštilj</span>
		</li>
		<li>
			<span class="filter" data-filter=".salad">salate</span>
		</li>
		<li>
			<span class="filter" data-filter=".pasta">paste</span>
		</li>
		<li>
			<span class="filter" data-filter=".tortilla">tortilje</span>
		</li>
		<li>
			<span class="filter" data-filter=".pizza">Pizza</span>
		</li>
		<li>
			<span class="filter" data-filter=".pancake">slatke palačinke</span>
		</li>
		<li>
			<span class="filter" data-filter=".pancake_salted">slane palačinke</span>
		</li>
		<li>
			<span class="filter" data-filter=".sandwich">sendviči</span>
		</li>
		<li>
			<span class="filter" data-filter=".grill-kg">roštilj na kilo</span>
		</li>
		<li>
			<span class="filter" data-filter=".drink">Piće</span>
		</li>
		<li>
			<span class="filter" data-filter=".other">ostalo</span>
		</li>
	</ul>

	<!--			</div>
			</div>
		</div> -->

	<div class="container-fluid menu-content mixitup">
		<?php if(Session::has('success')): ?>
			<div class="col-md-12">
				<h5 class="alert alert-success" style="text-align:center"><?php echo e(Session::get('success')); ?></h5>
			</div>
		<?php endif; ?>

	





	<?php foreach($categories as $category): ?>
		<div class="mix <?php echo e($category->slug); ?>" data-myorder="0">
			<div class="row">
				<div class="col-xs-12 menu-category sticky-header sticky-header first-header fixed visible">
					
					<h2><?php echo e($category->name); ?></h2>
						
				</div>
				<div class="row">
					<?php foreach($products as $product): ?>
					<?php if($product->category_id == $category->id): ?>
					<div class="menu-item">
						<a href="<?php echo e(url('images', $product->image)); ?>" class="hidden-xs open-overlay">
							<figure>
								<img src="img/placeholder.png" data-src="<?php echo e(url('images', $product->image)); ?>" alt="Menu item"/>
								<div class="actions">
									<i class="icon-magnifier-add"></i>
								</div>
							</figure>
						</a>
						<div class="item-description" style="height:300px;">
							<div class="">
								<div class="">
									<h4 class="name"><?php echo e($product->name); ?></h4>
									<p><?php echo e($product->description); ?></p>
									<?php echo Form::open(['route' => ['cart.addItem',$product->id], 'method' => 'POST', 'data-parsley-validate' => '', 'class' => 'forma']); ?>

									
									<?php if($category->slug == 'pasta'): ?>
										<br><h9 style="font-size:9px">Odaberi veličinu</h9><br>
										<div class="btn-group" role="group" aria-label="...">
											<label class="radio-inline"><input data-parsley-multiple data-parsley-errors-container="#message-holder" required type="radio" value="4" name="optradio">Pene</label>
											<label class="radio-inline"><input data-parsley-multiple type="radio" value="5" name="optradio">Fusili</label>
										</div><br><br>&nbsp;
									
									<?php elseif($category->slug == 'pizza'): ?>
										<br><h9 style="font-size:9px">Odaberi veličinu</h9><br>
										<div class="btn-group" role="group" aria-label="...">
											<label class="radio-inline"><input data-parsley-multiple data-parsley-errors-container="#message-holder" required type="radio" value="1" name="optradio">24 cm</label>
											<label class="radio-inline"><input data-parsley-multiple type="radio" value="2" name="optradio">32 cm</label>
											<label class="radio-inline"><input data-parsley-multiple type="radio" value="3" name="optradio">45 cm</label>
										</div><br>&nbsp;

										<span class="new-price item-price"><?php echo e($product->price); ?></span><h8>RSD</h8>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<span class="new-price item-price"><?php echo e($product->price2); ?></span><h8>RSD</h8>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<span class="new-price item-price"><?php echo e($product->price3); ?></span>RSD<br><br>

									<?php elseif($category->slug == 'grill-kg'): ?>
										<br><h9 style="font-size:9px">Odaberi veličinu</h9><br>
										<div class="btn-group" role="group" aria-label="...">
											<label class="radio-inline"><input data-parsley-multiple data-parsley-errors-container="#message-holder" required type="radio" value="6" name="optradio">200g</label>
											<label class="radio-inline"><input data-parsley-multiple type="radio" value="7" name="optradio">300g</label>
											<label class="radio-inline"><input data-parsley-multiple type="radio" value="8" name="optradio">500g</label>
											<label class="radio-inline"><input data-parsley-multiple type="radio" value="9" name="optradio">1kg</label>
										</div><br>&nbsp;

										<span class="new-price item-price"><?php echo e($product->price); ?></span><h8>RSD</h8>&nbsp;&nbsp;&nbsp;
										<span class="new-price item-price"><?php echo e($product->price2); ?></span><h8>RSD</h8>&nbsp;&nbsp;&nbsp;
										<span class="new-price item-price"><?php echo e($product->price3); ?></span><h8>RSD</h8>&nbsp;&nbsp;&nbsp;
										<span class="new-price item-price"><?php echo e($product->price4); ?></span>RSD<br><br>
									<?php else: ?>
										<span class="new-price item-price"><?php echo e($product->price); ?> RSD</span><br><br>
									<?php endif; ?>



									<!-- The Modal -->
									<div id="myModal" class="modal myModal" >

									  <!-- Modal content -->
									  	<div class="modal-content">
										    <div class="modal-header">
										      <span class="close">&times;</span>
										      <h3 style="font-size:24px" name="modalDiv">Dodavanje priloga</h3>
										    </div> 
									    <div class="modal-body">
										        <h3 ><?php echo e($product->name); ?></h3><br>
										        <h4><?php echo e($product->description); ?></h4><br>
										        <?php if($category->slug != "grill"): ?>
											      	<div class="row">
											      	<div class="col-md-4 col-md-offset-4">
											      	<table class="table table-striped">
											      		<thead>
											            <tr>
											                <th style="width:200px; text-align:center">Prilog</th>
											                <th style="width:200px; text-align:center">Cena</th>
											            </tr>
											            </thead>
											      		<tbody>
														<?php foreach($prilozi as $prilog): ?>
															<?php if(($category->slug == 'grill' || $category->slug == 'pancake_salted' || $category->slug == 'tortilla' || $category->slug == 'pizza' || $category->slug == 'sandwich') && $prilog->tip == 'roštilj' && $prilog->price != 0): ?>
																<tr>
																	<td style="width:200px; text-align:left">
																      	<div class="has-error">
																		  <div class="checkbox">
																		    <label>
																		      <?php echo Form::checkbox('ch[]', $prilog->namePrice, false);; ?> 
																		     
																		      <?php echo e($prilog->name); ?>

																		    </label>
																		  </div>
																		</div>
																	</td>
																	<td style="width:200px; text-align:center; vertical-align:middle;">
																	    <label style="text-align:center">
																	      <?php echo e($prilog->price); ?>,00&nbsp;RSD
																	    </label>
																	</td>
																</tr>
															<?php elseif($category->slug == 'pancake' && $prilog->tip == 'slatka' && $prilog->price != 0): ?>
																<tr>
																	<td style="width:200px; text-align:left">
																      	<div class="has-error">
																		  <div class="checkbox">
																		    <label>
																		      <?php echo Form::checkbox('ch[]', $prilog->namePrice, false);; ?> 
																		     
																		      <?php echo e($prilog->name); ?>

																		    </label>
																		  </div>
																		</div>
																	</td>
																	<td style="width:200px; text-align:center; vertical-align:middle;">
																	    <label style="text-align:center">
																	      <?php echo e($prilog->price); ?>,00&nbsp;RSD
																	    </label>
																	</td>
																</tr>
															<?php elseif(($category->slug == 'grill' || $category->slug == 'grill-kg') && $prilog->tip == 'roštilj' && $prilog->price == 0): ?>
																<tr>
																	<td style="width:200px; text-align:left">
																      	<div class="has-error">
																		  <div class="checkbox">
																		    <label>
																		      <?php echo Form::checkbox('ch[]', $prilog->namePrice, false);; ?> 
																		     
																		      <?php echo e($prilog->name); ?>

																		    </label>
																		  </div>
																		</div>
																	</td>
																	<td style="width:200px; text-align:center; vertical-align:middle;">
																	    <label style="text-align:center">
																	      
																	    </label>
																	</td>
																</tr>
															<?php elseif($category->slug != 'grill' && $category->slug != 'grill-kg' && $prilog->tip == 'ostalo' && $category->slug != 'pancake'): ?>
																<tr>
																	<td style="width:200px; text-align:left">
																      	<div class="has-error">
																		  <div class="checkbox">
																		    <label>
																		      <?php echo Form::checkbox('ch[]', $prilog->namePrice, false);; ?> 
																		     
																		      <?php echo e($prilog->name); ?>

																		    </label>
																		  </div>
																		</div>
																	</td>
																	<td style="width:200px; text-align:center; vertical-align:middle;">
																	    <label style="text-align:center">
																	      
																	    </label>
																	</td>
																</tr>
															<?php endif; ?>
														<?php endforeach; ?>
														</tbody>
													</table>
													</div>
													
													</div>
											<?php else: ?>
												<div class="row">

										      	<div class="col-md-8 col-md-offset-2">
										      	<div class="col-md-6">
										      	<table class="table table-striped">
										      		<thead>
										            <tr>
										                <th style="width:200px; text-align:center">Prilog</th>
										                <th style="width:200px; text-align:center">Cena</th>
										            </tr>
										            </thead>
										      		<tbody>
													<?php foreach($prilozi as $prilog): ?>
														<?php if(($category->slug == 'grill' || $category->slug == 'tortilla' || $category->slug == 'pizza' || $category->slug == 'sandwich') && $prilog->tip == 'roštilj' && $prilog->price != 0): ?>
															<tr>
																<td style="width:200px; text-align:left">
															      	<div class="has-error">
																	  <div class="checkbox">
																	    <label>
																	      <?php echo Form::checkbox('ch[]', $prilog->namePrice, false);; ?> 
																	     
																	      <?php echo e($prilog->name); ?>

																	    </label>
																	  </div>
																	</div>
																</td>
																<td style="width:200px; text-align:center; vertical-align:middle;">
																    <label style="text-align:center">
																      <?php echo e($prilog->price); ?>,00&nbsp;RSD
																    </label>
																</td>
															</tr>
														<?php endif; ?>
													<?php endforeach; ?>
													</tbody>
												</table>
												</div>



											<div class="col-md-6">
										      	<table class="table table-striped">
										      		<thead>
										            <tr>
										                <th style="width:200px; text-align:center">Prilog</th>
										                <th style="width:200px; text-align:center">Cena</th>
										            </tr>
										            </thead>
										      		<tbody>
													<?php foreach($prilozi as $prilog): ?>
														<?php if(($category->slug == 'grill' || $category->slug == 'grill-kg') && $prilog->tip == 'roštilj' && $prilog->price == 0): ?>
															<tr>
																<td style="width:200px; text-align:left">
															      	<div class="has-error">
																	  <div class="checkbox">
																	    <label>
																	      <?php echo Form::checkbox('ch[]', $prilog->namePrice, false);; ?> 
																	     
																	      <?php echo e($prilog->name); ?>

																	    </label>
																	  </div>
																	</div>
																</td>
																<td style="width:200px; text-align:center; vertical-align:middle;">
																    <label style="text-align:center">
																      
																    </label>
																</td>
															</tr>
														<?php endif; ?>
													<?php endforeach; ?>
													</tbody>
												</table>
												</div>




											</div>

											</div>
											<?php endif; ?>



										</div>
											<div class="modal-footer"><br>
											    <input class="btn btn-default btn-lg active col-md-4 col-md-offset-4" type="submit" value="Dodaj u korpu">
											</div>
										</div>

									</div>
									<?php if($category->slug == 'pasta' || $category->slug == 'drink' || $category->slug == 'salad' || $category->slug == 'other'): ?>
										<input class="btn btn-danger btn-lg active" type="submit" value="Dodaj u korpu">
									<?php else: ?>
										<br>
										<input class="btn btn-danger btn-lg active myBtn" type="button" value="Dodaj priloge" onClick="openModal(this);">
									<?php endif; ?>

									


									

									<?php echo Form::close(); ?>

								</div>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
	<script src="js/mojJS/script.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>