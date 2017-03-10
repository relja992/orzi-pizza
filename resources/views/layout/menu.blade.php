@extends('layout.main')

@section('body')
    
<body class="intro-fullscreen fixed-footer scroll-down yo-anim-enabled">

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
					<img src="img/logo1.png" class="light-logo" alt="ORZI PIZZERIA"/>
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
					<a href="{{ url('/menu') }}" class="hover-subnav active">meni</a>
					<div class="subnav image-subnav">
						<ul class="subnav-wrapper">
							<li>
								<a href="{{ url('/menu') }}#grill">roštilj</a>
								<div>
									<a href="{{ url('/menu') }}#grill" class="menu-img" style="background-image: url('img/demo/nav/grill.jpg')"></a>
								</div>
							</li>			
							<li>
								<a href="{{ url('/menu') }}#salad">salate</a>
								<div>
									<a href="{{ url('/menu') }}#salad" class="menu-img" style="background-image: url('img/demo/nav/starters.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="{{ url('/menu') }}#pasta">paste</a>
								<div>							
									<a href="{{ url('/menu') }}#pasta" class="menu-img" style="background-image: url('img/demo/nav/salads.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="{{ url('/menu') }}#tortilla">tortilje</a>
								<div>
									<a href="{{ url('/menu') }}#tortilla" class="menu-img" style="background-image: url('img/demo/nav/mains.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="{{ url('/menu') }}#pizza">pizza</a>
								<div>
									<a href="{{ url('/menu') }}#pizza" class="menu-img" style="background-image: url('img/demo/nav/soup.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="{{ url('/menu') }}#pancake">palačinke</a>
								<div>
									<a href="{{ url('/menu') }}#pancake" class="menu-img" style="background-image: url('img/demo/nav/deserts.jpg')"></a>
								</div>
							</li>
							<li>
								<a href="{{ url('/menu') }}#sandwich">sendviči</a>
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
				<li>
                        <a href="#">
                            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true" style >
                            </i>
                            Korpa
                            <span class="alert badge">
                                3
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
			<span class="filter" data-filter=".pancake">palačinke</span>
		</li>
		<li>
			<span class="filter" data-filter=".sandwich">sendviči</span>
		</li>
	</ul>

	<!--			</div>
			</div>
		</div> -->
	<div class="container-fluid menu-content mixitup">

		<div class="mix grill" data-myorder="1">
			<div class="row">
				<div class="col-xs-12 menu-category sticky-header sticky-header first-header fixed visible">
					<h2>Roštilj</h2>
				</div>
			</div>
			<div class="row">
				<div class="menu-item">
					<a href="img/demo/food/1.jpg" class="hidden-xs open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/1.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>CHEESEBURGER 120 GR</h6>
								<p>JUNETINA, SUSAM KAJZERICA, KAČKAVALJ, ZELENA PARADAJZ </p>
								
								<span class="new-price item-price">170</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/22.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/22.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>ORZI BURGER 240 GR</h6>
								<p>DUPLA JUNETINA, SLANINICA, KAČKAVALJ, PARADAJZ, ZELENA
                              </p>
								
								<span class="new-price item-price">310</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/11.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/11.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Uštipci  250 gr</h6>
								<p>roštilj meso, kačkavalj, slaninica, kulen, šunka  </p>
								
								<span class="new-price item-price">250</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/28.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/28.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Punjeni ćevap 200 gr</h6>
						<p>roštilj meso, domaća lepinja , prilozi..</p>
								
								<span class="new-price item-price">230</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/32.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/32.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Orzi kroketi 180 gr</h6>
							<p>šunka, pečurke, sir, sve to rolovano i pohovano.</p>
								
								<span class="new-price item-price">230</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/18.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/18.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6></h6>
						<p></p>
								
								
							</div>
                            
						</div>
					</div>
                    
                    <div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Pljeskavica 180 gr</h6>
								<p>roštilj meso, domaća lepinja prolozi </p>
								
								<span class="new-price item-price">190</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/44.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/44.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Punjena pljeskavica</h6>
								<p>roštilj meso, kačkavalj, slaninica, kulen, šunka 
                              </p>
								
								<span class="new-price item-price">250</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/55.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/55.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Gurmanska</h6>
								<p>roštilj meso, kačkavalj, slaninica, kulen, šunka  </p>
								
								<span class="new-price item-price">250</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/66.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/66.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Ćevapi 150 gr</h6>
						<p>roštilj meso, domaća lepinja , prilozi..</p>
								
								<span class="new-price item-price">170</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/77.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/77.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Šiš ćevap 150 gr</h6>
							<p>ćevap meso, domaća lepinja, prilozi...</p>
								
								<span class="new-price item-price">170</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/88.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/88.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Rolovani ćevap 200 gr</h6>
						<p>ćevap meso, domaća kifla, prilozi</p>
								
								<span class="new-price item-price">230</span>
							</div>
						</div>
					</div>
                    
                    
				</div>
                
			</div>
            <div class="row">
				<div class="menu-item">
					<a href="img/demo/food/99.jpg" class="hidden-xs open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/99.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Kobasica dimljena 200 gr</h6>
						<p>domaća pikant kobasica, domaća kifla </p>
								
								<span class="new-price item-price">230</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/33.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/33.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Pohovano pileće belo  200 gr</h6>
					<p>pileći file pohovan, domaća lepinja, prilozi
                              </p>
								
								<span class="new-price item-price">230</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/111.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/111.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Pohovani pileći susam štapići 180 gr</h6>
				<p>pohovano belo meso u susamu, domaća lepinja, prilozi </p>
								
								<span class="new-price item-price">210</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/112.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/112.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Pileći file 200 gr</h6>
						<p>pileći file, domaća lepinja, prilozi...</p>
								
								<span class="new-price item-price">230</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/113.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/113.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Punjeni pileći file 250 gr</h6>
							<p>pileći file punjen slaninicom, kulenom, šunkom i sirom...</p>
								
								<span class="new-price item-price">270</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/114.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/114.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Pileći batak 200 gr</h6>
						<p>pileći batak, domaća lepinja, prilozi</p>
								
								<span class="new-price item-price">220</span>
							</div>
                            
						</div>
                        
					</div>
                    <div class="item-description">
						<div class="">
							<div class=""> 
								<h6></h6>
						<p></p>
								
								<span class="new-price item-price"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/222.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/222.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Punjeni pileći batak 250 gr</h6>
					<p>punjeni pileći batak , domaća lepinja, prilozi
                              </p>
								
								<span class="new-price item-price">270</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/2222.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/2222.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Pohovani batak 230 gr</h6>
				<p>pohovano batak, domaća lepinja, prilozi </p>
								
								<span class="new-price item-price">210</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/333.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/333.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Pileći rol ražnjići 230 gr</h6>
						<p>pileći ražnjići rolovani slaninicom, domaća lepinja, prilozi...</p>
								
								<span class="new-price item-price">250</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/444.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/444.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Dimljeni vrat 150 gr</h6>
							<p>dimljeni svinjski vrat, domaća lepinja, prilozi</p>
								
								<span class="new-price item-price">270</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/555.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/555.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Pohovani kačkavalj 180 gr</h6>
						<p>pohovani kačkavalj, domaća lepinja, prilozi</p>
								
								<span class="new-price item-price">200</span>
							</div>
                            
                            
						</div>
                        
                        
                        
					</div>
                    
                    </div>
                        
					</div>
                    

                    

		</div>
        

		<div class="mix salad" data-myorder="2">

			<div class="">
				<div class="col-xs-12 menu-category sticky-header">
					<h2>Salate</h2>
				</div>
			</div>
			<div class="row">
				<div class="menu-item">
					<a href="img/demo/food/1211.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/1211.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Cezar 400 gr</h6>
								<p>zelena salata, čeri, iceberg, pančeta, parmezan, dresing, piletina, pecivo</p>
								<span class="item-price">330</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/1313.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/1313.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Sa piletinom 400 gr</h6>
								<p>pileće belo meso, zelena salata, paradajz, paprika, krastavac, krutoni</p>
								<span class="item-price">330</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/3232.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/3232.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Balsamico 400 gr</h6>
								<p>zelena salata, iceberg, jabuka, acceto balsamico, orasi</p>
								<span class="item-price">330</span>
											
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="mix pasta" data-myorder="3">

			<div class="row">
				<div class="col-xs-12 menu-category sticky-header">
					<h2>Paste</h2>
				</div>
			</div>
			<div class="row">
				<div class="menu-item">
					<a href="img/demo/food/3636.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/3636.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Sa piletinom 500 gr</h6>
								<p>spiletina, pečurke, beli sos, začini, </p>
								<span class="item-price">250</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/3637.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/3637.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Piletina pesto 500 gr</h6>
								<p>piletina, pečurke, tikvice, beli sos, pesto sos</p>
								<span class="item-price">250</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/3638.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/3638.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Carbonara 500 gr</h6>
								<p>beli sos, pančeta, jaje, beli luk, začini</p>
								<span class="item-price">250</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/11111.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/11111.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Bolognese 500 gr</h6>
								<p>junetina, crveni sos, začini</p>
								<span class="item-price">250</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/999.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/999.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Amatricciana 500 gr</h6>
								<p>dimljeno meso, crveni sos, sveža paprika, začini</p>
								<span class="item-price">250</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/000.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/000.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Vegetarijanska 500 gr</h6>
								<p>mešano povrće, crveni sos, začini</p>
								<span class="item-price">250</span>
                                
							</div>
						</div>
					</div>
				</div>						
			</div>

		</div>
        <div class="mix tortilla" data-myorder="2">

			<div class="">
				<div class="col-xs-12 menu-category sticky-header">
					<h2>Tortilje 370 gr</h2>
				</div>
			</div>
			<div class="row">
				<div class="menu-item">
					<a href="img/demo/food/353.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/353.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Pizza </h6>
								<p>kečap, kačkavalj, šunka, origanoo</p>
								<span class="item-price">200</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/933.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/933.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Sa šunkom</h6>
								<p>dresing, kačkavalj, šunka, sezonsko povrće</p>
								<span class="item-price">250</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/656.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/656.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Vegetarijanska</h6>
								<p>dresing, kačkavalj, mešano sezonsko povrće</p>
								<span class="item-price">200</span>
											
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="mix salads" data-myorder="3">

			<div class="row">
				<div class="col-xs-12 menu-category sticky-header">
					<h2>Tortilje (wrap) 370 gr</h2>
				</div>
			</div>
			<div class="row">
				<div class="menu-item">
					<a href="img/demo/food/626.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/626.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Sa piletinom </h6>
								<p>dresing, kačkavalj, belo meso, sezonsko povrće </p>
								<span class="item-price">250</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/78.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/78.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Sa pečenicom</h6>
								<p>dresing, kačkavalj, pečenica, sezonsko povrće</p>
								<span class="item-price">250</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/94.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/94.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Sa kulenom</h6>
								<p>dresing, kačkavalj, kulen, sezonsko povrće</p>
								<span class="item-price">250</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/22222.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/22222.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Hot</h6>
								<p>dresing, kačkavalj, kulen, feferone, sezonsko povrće</p>
								<span class="item-price">250</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/888.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/888.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Grčka tortilja</h6>
								<p>tzatziki sos, kačkavalj, belo meso, sezonsko povrće</p>
								<span class="item-price">250</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/5555.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/5555.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Sa suvim vratom</h6>
								<p>dresing, kačkavalj, suvi vrat, sezonsko povrće</p>
								<span class="item-price">250</span>
                                
							</div>
						</div>
					</div>
				</div>						
			</div>

		</div>
		<!--
		<div class="mix soups" data-myorder="4">

			<div class="row">
				<div class="col-xs-12 menu-category sticky-header">
					<h2>Pizza  32 cm / 45 cm </h2>
				</div>
			</div>
			<div class="">
				<div class="menu-item">
					<a href="img/demo/food/100.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/100.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Margherita 32 / 45</h6>
								<p>pelat, kačkavalj, paradajz, masline, origano</p>
								<span class="item-price">400 / 520</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/102.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/102.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Vesuvio 32 cm / 45 cm</h6>
								<p>pelat, kačkavalj, šunka, masline, origano</p>
								<span class="item-price">430 / 560</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/103.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/103.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Vegetarijana 32 cm / 45 cm</h6>
								<p>pelat, kačkavalj, sveža paprika, paradajz, masline</p>
								<span class="item-price">440 / 580</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/101.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/101.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Capricciosa 32 cm / 45 cm</h6>
								<p>pelat, kačkavalj, šunka, pečurke, origano, masline</p>
								<span class="item-price">440 / 560</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/104.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/104.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Indiana 32 cm / 45 cm</h6>
								<p>pelat, kačkavalj, šunka, pečurke, slaninica, jaje, masline, origano</p>
								<span class="item-price">480 / 620</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/105.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/105.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Srbijana 32 cm / 45 cm</h6>
								<p>pelat, kačkavalj, šunka, pečurke, kulen, feferone, masline, origano</p>
								<span class="item-price">482 / 620 </span>
                                  
							</div>
						</div>
					</div>
				</div>
			</div>
		</div-->

		<div class="mix pizza" data-myorder="5">
			<div class="row">
				<div class="col-xs-12 menu-category sticky-header">
					<h2>Pizza</h2>
				</div>
			</div>
			<div class="row">


				

				<div class="menu-item">
					<a href="img/demo/food/100.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/100.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Margherita 32 / 45</h6>
								<p>pelat, kačkavalj, paradajz, masline, origano</p>
								<span class="item-price">400 / 520</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/102.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/102.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Vesuvio 32 cm / 45 cm</h6>
								<p>pelat, kačkavalj, šunka, masline, origano</p>
								<span class="item-price">430 / 560</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/103.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/103.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Vegetarijana 32 cm / 45 cm</h6>
								<p>pelat, kačkavalj, sveža paprika, paradajz, masline</p>
								<span class="item-price">440 / 580</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/101.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/101.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Capricciosa 32 cm / 45 cm</h6>
								<p>pelat, kačkavalj, šunka, pečurke, origano, masline</p>
								<span class="item-price">440 / 560</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/104.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/104.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Indiana 32 cm / 45 cm</h6>
								<p>pelat, kačkavalj, šunka, pečurke, slaninica, jaje, masline, origano</p>
								<span class="item-price">480 / 620</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/105.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/105.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Srbijana 32 cm / 45 cm</h6>
								<p>pelat, kačkavalj, šunka, pečurke, kulen, feferone, masline, origano</p>
								<span class="item-price">482 / 620 </span>
                                  
							</div>
						</div>
					</div>
				</div>




				<div class="menu-item">
					<a href="img/demo/food/1091.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/1091.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>ORZI PIZZA 32 cm / 45 cm</h6>
								<p>pelat, kačkavalj, pečurke, suvi vrat, pavlaka, jaje, masline, origano</p>
								<span class="item-price">520 / 700</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/106.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/106.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Salsiccia (kulen) 32 cm / 45 cm</h6>
								<p>pelat, kačkavalj, kulen, šunka, pečurke, masline, origano</p>
								<span class="item-price">480 / 620 </span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/107.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/107.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Quattro Stagioni 32 cm / 45 cm</h6>
								<p>pelat, kačkavalj, šunka,pečurke, kulen, jaje, masline, origano</p>
								<span class="item-price">480 / 620 </span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/108.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/108.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Tuna 32 cm / 45 cm </h6>
								<p>pelat, kačkavalj, tuna, crbi luk, masline, origano</p>
								<span class="item-price">510 / 660</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/109.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/109.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Pršuto 32 cm / 45 cm</h6>
								<p>pelat, kačkavalj, pršut, pavlaka, sveža paprika, luk, parmezan</p>
								<span class="item-price">520 / 700</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/110.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/110.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>ORZI PILETINA 32 cm / 45 cm</h6>
								<p>pelat, kačkavalj, belo meso, sveža paprika, masline, origano</p>
								<span class="item-price">480 / 620 </span>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="mix pancake" data-myorder="6">

			<div class="row">
				<div class="col-xs-12 menu-category sticky-header">
					<h2>Palačinke</h2>
				</div>
			</div>
			<div class="row">
				<div class="menu-item">
					<a href="img/demo/food/1092.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/1092.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Eurokrem </h6>
								<p>svi dodaci su po 30 din ( plazma, lešnik, badem, banana, višnja...)</p>
								<span class="item-price">140</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/1093.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/1093.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Nutela</h6>
								<p>svi dodaci su po 30 din ( plazma, lešnik, badem, banana, višnja...)</p>
								<span class="item-price">150</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/10.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/10.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Džem</h6>
								<p>svi dodaci su po 30 din ( plazma, lešnik, badem, banana, višnja...)</p>
								<span class="item-price">130</span>
							</div>
						</div>
					</div>
				</div>	
				<div class="menu-item">
					<a href="img/demo/food/2323.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/2323.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Med</h6>
								<p>svi dodaci su po 30 din ( plazma, lešnik, badem, banana, višnja...)</p>
								<span class="item-price">100</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/0303.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/0303.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Slana sa šunkom </h6>
								<p>šunka, kačkavalj, pavlaka</p>
								<span class="item-price">200</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/2020.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/2020.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Slana sa pečenicom, kulenom ili vratom</h6>
								<p>pavlaka, kačkavalj....</p>
								<span class="item-price">220</span>
							</div>
						</div>
					</div>
				</div>					
			</div>
		</div>

		<div class="mix sandwich" data-myorder="7">	

			<div class="row">
				<div class="col-xs-12 menu-category sticky-header">
					<h2>Sendviči</h2>
				</div>
			</div>
			<div class="row">
				<div class="menu-item">
					<a href="img/demo/food/1099.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/1099.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Sa šunkom</h6>
								<p></p>
								<span class="item-price">200</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/1456.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/1456.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Sa pečenicom</h6>
								<p></p>
								<span class="item-price">220</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/1236.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/1236.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Sa kulenom</h6>
								<p></p>
								<span class="item-price">220</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/0101.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/0101.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class="">
								<h6>Sa vratom</h6>
								<p></p>
								<span class="item-price">220</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/03033.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/03033.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>Grčki </h6>
								<p></p>
								<span class="item-price">250</span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<a href="img/demo/food/0202.jpg" class="hidden-xs  open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="img/demo/food/0202.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						<div class="">
							<div class=""> 
								<h6>ORZI SENDVIČ</h6>
								<p></p>
								<span class="item-price">250</span>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

@endsection