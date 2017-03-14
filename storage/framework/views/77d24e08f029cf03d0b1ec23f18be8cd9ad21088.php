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

<br><br><br><br><br>
<section class="section-scroll main-section">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3 style="text-align:center;">Podaci za dostavu</h3>

            <?php echo Form::open(['route' => 'orderstore', 'method' => 'post']); ?>


            <div class="form-group">
                <?php echo e(Form::label('name', 'Ime')); ?>

                <?php echo e(Form::text('name', null, array('class' => 'form-control'))); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('surname', 'Prezime')); ?>

                <?php echo e(Form::text('surname', null, array('class' => 'form-control'))); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('address', 'Ulica i broj')); ?>

                <?php echo e(Form::text('address', null, array('class' => 'form-control'))); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('sprat', 'Sprat')); ?>

                <?php echo e(Form::text('sprat', null, array('class' => 'form-control'))); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('stan', 'Stan')); ?>

                <?php echo e(Form::text('stan', null, array('class' => 'form-control'))); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('telephone', 'Telefon')); ?>

                <?php echo e(Form::text('telephone', null, array('class' => 'form-control'))); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('email', 'E-mail')); ?>

                <?php echo e(Form::text('email', null, array('class' => 'form-control'))); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('napomena', 'Napomena')); ?>

                <?php echo e(Form::textarea('napomena', null, array('class' => 'form-control'))); ?>

            </div>
            <div class="col-md-8 col-md-offset-2" id="hiddenDiv" style="text-align:center;">
            <?php echo e(Form::submit('Naruči', array('class' => 'btn btn-success', 'style' => 'width:100%'))); ?>

            </div>
            <?php echo Form::close(); ?>

        </div>

    </div><br>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>