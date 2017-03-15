<?php $__env->startSection('body'); ?>
    
<body class="intro-fullscreen fixed-footer scroll-down yo-anim-enabled">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



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
									<a href="<?php echo e(url('/menu')); ?>#pancake" style="color: white;">palačinke</a>
									<div>
										<a href="<?php echo e(url('/menu')); ?>#pancake" class="menu-img" style="background-image: url('img/demo/nav/deserts.jpg')"></a>
									</div>
								</li>
								<li>
									<a href="<?php echo e(url('/menu')); ?>#sandwich" style="color: white;">sendviči</a>
									<div>							
										<a href="<?php echo e(url('/menu')); ?>#sandwich style="color: white;"" class="menu-img" style="background-image: url('img/demo/nav/drinks.jpg')"></a>
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
	                            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true" style >
	                            </i>
	                            Korpa
	                            <span class="badge" style="background-color: red;">
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







<section class="section-scroll main-section">
    <div class="row"><br><br><br><br><br>
    	<div class="col-md-8 col-md-offset-2">
	        <h3 style="text-align:left; font-weight: 900; color:#69340f;">Narudžbina</h3><br>


	        <table class="table table-hover" style="border-style:solid; border-width:1px;">
	            <thead>
	            <tr>
	                <th style="width:200px; text-align:center">Jelo</th>
	                <th style="width:100px; text-align:center">Cena</th>
	                <th style="text-align:center; width:80px">Količina</th>
	                <th style="text-align:center">Prilozi</th>
	                <th style="text-align:center;  width:120px">Tip</th>
	                <th style="text-align:center; width:100px">Akcija</th>
	            </tr>
	            </thead>
	            <tbody>
		            <?php foreach($cartItems as $cartItem): ?>
		                <tr>
		                    <td style="vertical-align:middle; text-align:center"><?php echo e($cartItem->name); ?></td>
		                    <td style="vertical-align:middle; text-align:center"><?php echo e($cartItem->price); ?></td>
		                    <td style="vertical-align:middle; text-align:center; ">
		                        <?php echo Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']); ?>

		                        <input style="width:50%; text-align:center" name="qty" type="text" value="<?php echo e($cartItem->qty); ?>">
		                    </td>
		                    <td style="vertical-align:middle; text-align:center; "></td>
		                    <?php if($cartItem->options->size == 'small' || $cartItem->options->size == 'medium' || $cartItem->options->size == 'large'): ?>
			                    <td style="vertical-align:middle; text-align:center; width:80px">
			                        <div > 
			                        	<?php echo Form::select('size', ['small'=>'24 cm','medium'=>'32 cm','large'=>'45 cm'] , $cartItem->options->has('size')?$cartItem->options->size:'' ); ?>

			                        </div>
			                    </td>
		                    <?php elseif($cartItem->options->size == 'pene' || $cartItem->options->size == 'fusili'): ?>
								<td style="vertical-align:middle; text-align:center; width:80px">
			                        <div > 
			                        	<?php echo Form::select('size', ['pene'=>'Pene','fusili'=>'Fusili'] , $cartItem->options->has('size')?$cartItem->options->size:'' ); ?>

			                        </div>
			                    </td>
		                    <?php else: ?>
		                    	<td style="vertical-align:middle; text-align:center; width:80px">
									<span class="label label-default">Standard</span>
		                    	</td>
		                    <?php endif; ?>

		                    <td style="vertical-align:middle; text-align:center">
		                        <input style="float: left"  type="submit" class="button btn-success small" value="Ok">
		                        <?php echo Form::close(); ?>


		                        <form action="<?php echo e(route('cart.destroy',$cartItem->rowId)); ?>"  method="POST">
		                           <?php echo e(csrf_field()); ?>

		                           <?php echo e(method_field('DELETE')); ?>

		                           <i class="fa fa-trash-o" aria-hidden="true"><input class="button small btn-danger" type="submit" value=""></i>
		                        </form>
		                    </td>
		                </tr>
		            <?php endforeach; ?>
	            </tbody>
	        </table>
	        <div class="col-md-6 col-md-offset-3" style="text-align:center; border-style:solid; border-width:1px;">
		        <div class="form-group">
                <?php echo e(Form::label('oblast', 'Oblast')); ?>

                <?php echo e(Form::select('oblast', $oblasti, null, ['class' => 'form-control','placeholder'=>'Odaberi oblast'])); ?>

				</div>
			</div>
	        <div class="col-md-6 col-md-offset-3" id="hiddenDiv" style="text-align:center; border-style:solid; border-width:1px; margin-top:20px">
                <h4>Ukupno</h4>
                <div class="form-group">
                    <span class="label label-warning"><?php echo e(Cart::subtotal()); ?></span>
                </div>
                <a href="<?php echo e(route('shipping')); ?>" class="btn btn-success" style="width:80%">Podaci za dostavu</a>
                <br><br>
            </div><br><br><br><br>
        </div>
    </div><br><br>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>