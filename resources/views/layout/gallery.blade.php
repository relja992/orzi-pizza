@extends('layout.main')

@section('body')

<body class="intro-top fixed-footer scrollable yo-anim-enabled">

@endsection

@section('content')

<!--content-->
<nav id="main-navbar" class="hidden-xs hidden-sm">
	<div class="nav hidden-xs">
		<div class="main-reorder pull-right">
			<a href="#">
			
				<i class="fa fa-bars"></i>
			</a>
		</div>

		<div class="logo pull-left">
			<a href="{{ url('/') }}">
				<figure>
					<img src="img/logo2.png" class="light-logo" alt="ORZI PIZZERIA"/>
					<img src="img/logo2.png" class="dark-logo" alt="ORZI PIZZERIA"/>
				</figure>
			</a>
		</div>
		<div class="main-nav">
			<ul class="pull-right">
				<li>
					<a href="{{ url('/') }}" class="    ">Početna</a>	
				</li>				
				<li>
					<a href="{{ url('/menu') }}" class="hover-subnav">meni</a>
					<div class="subnav image-subnav">
						<ul class="subnav-wrapper">
							<li>
								<a href="{{ url('/menu') }}#grill" style="color: white;">roštilj</a>
								<div>
									<a href="{{ url('/menu') }}#grill" class="menu-img" style="background-image: url('img/demo/nav/grill.jpg')"></a>
								</div>
							</li>			
							<li>
								<a href="{{ url('/menu') }}#salad" style="color: white;">salate</a>
								<div>
									<a href="{{ url('/menu') }}#salad" class="menu-img" style="background-image: url('img/demo/nav/starters.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="{{ url('/menu') }}#pasta" style="color: white;">paste</a>
								<div>							
									<a href="{{ url('/menu') }}#pasta" class="menu-img" style="background-image: url('img/demo/nav/salads.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="{{ url('/menu') }}#tortilla" style="color: white;">tortilje</a>
								<div>
									<a href="{{ url('/menu') }}#tortilla" class="menu-img" style="background-image: url('img/demo/nav/mains.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="{{ url('/menu') }}#pizza" style="color: white;">pizza</a>
								<div>
									<a href="{{ url('/menu') }}#pizza" class="menu-img" style="background-image: url('img/demo/nav/soup.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="{{ url('/menu') }}#pancake" style="color: white;">palačinke</a>
								<div>
									<a href="{{ url('/menu') }}#pancake" class="menu-img" style="background-image: url('img/demo/nav/deserts.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="{{ url('/menu') }}#sandwich" style="color: white;">sendviči</a>
								<div>							
									<a href="{{ url('/menu') }}#sandwich" class="menu-img" style="background-image: url('img/demo/nav/drinks.jpg')"></a>
								</div>
							</li>
						</ul>
					</div>
				</li>	
				
				<li>
					<a href="{{ url('/contact') }}" class="">kontakt</a>	
				</li>
				
				<li>
					<a href="{{ url('/gallery') }}" class="hover-subnav">galerija</a>
					
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

@endsection