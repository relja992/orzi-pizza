@extends('layout.main')

@section('body')
    
<body class="intro-fullscreen fixed-footer scroll-down yo-anim-enabled">

@endsection

@section('content')



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
										<a href="{{ url('/menu') }}#sandwich style="color: white;"" class="menu-img" style="background-image: url('img/demo/nav/drinks.jpg')"></a>
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
	                        <a href="{{ route('cart.index') }}">
	                            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true" style >
	                            </i>
	                            Korpa
	                            <span class="badge" style="background-color: red;">
	                                {{ Cart::count() }}
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
    		<div class="panel panel-success">
    			<div class="panel-heading"><strong style="font-size:20px"><i class="glyphicon glyphicon-edit"></i>&nbsp;&nbsp;Narudžbina</strong></div>
				  <div class="panel-body">
				    <table class="table table-hover" style="">
			            <thead>
			            <tr>
			                <th style="width:200px; text-align:center">Jelo</th>
			                <th style="width:100px; text-align:center">Cena</th>
			                <th style="text-align:center; width:80px">Količina</th>
			                <th style="text-align:center">Prilozi</th>
			                <th style="text-align:center;  width:120px">Tip</th>
			                <th style="text-align:center; width:150px">Akcija</th>
			            </tr>
			            </thead>
			            <tbody>
				            @foreach($cartItems as $cartItem)
				                <tr>
				                    <td style="vertical-align:middle; text-align:center">{{$cartItem->name}}</td>
				                    <td style="vertical-align:middle; text-align:center">{{$cartItem->price}}</td>

				                    <td style="vertical-align:middle; text-align:center; ">
				                        {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
				                        <input style="width:50%; text-align:center" name="qty" type="text" value="{{$cartItem->qty}}">
				                    </td>
				                    <td style="vertical-align:middle; text-align:center; ">{{$cartItem->options->prilozi}}</td>
				                    @if($cartItem->options->size == 'small' || $cartItem->options->size == 'medium' || $cartItem->options->size == 'large')
					                    <td style="vertical-align:middle; text-align:center; width:80px">
					                        <div > 
					                        	{!! Form::select('size', ['small'=>'24 cm','medium'=>'32 cm','large'=>'45 cm'] , $cartItem->options->has('size')?$cartItem->options->size:'' ) !!}
					                        </div>
					                    </td>
					            @elseif($cartItem->options->size == '200g' || $cartItem->options->size == '300g' || $cartItem->options->size == '500g' || $cartItem->options->size == '1kg')
					                    <td style="vertical-align:middle; text-align:center; width:80px">
					                        <div > 
					                        	{!! Form::select('size', ['200g'=>'200g','300g'=>'300g','500g'=>'500g','1kg'=>'1kg'] , $cartItem->options->has('size')?$cartItem->options->size:'' ) !!}
					                        </div>
					                    </td>
				                    @elseif($cartItem->options->size == 'pene' || $cartItem->options->size == 'fusili')
										<td style="vertical-align:middle; text-align:center; width:80px">
					                        <div > 
					                        	{!! Form::select('size', ['pene'=>'Pene','fusili'=>'Fusili'] , $cartItem->options->has('size')?$cartItem->options->size:'' ) !!}
					                        </div>
					                    </td>
					                @elseif($cartItem->options->size == '200g' || $cartItem->options->size == '300g' || $cartItem->options->size == '500g' || $cartItem->options->size == '1kg')
										<td style="vertical-align:middle; text-align:center; width:80px">
					                        <div > 
					                        	{!! Form::select('size', ['200g'=>'200g','300g'=>'300g','500g'=>'500g','1kg'=>'1kg'] , $cartItem->options->has('size')?$cartItem->options->size:'' ) !!}
					                        </div>
					                    </td>
				                    @else
				                    	<td style="vertical-align:middle; text-align:center; width:80px">
											<h5>Standard</h5>
				                    	</td>
				                    @endif

				                    <td style="vertical-align:middle; text-align:center">
				                        <input style="float: left; border-radius: 3px;"  type="submit" class="button btn-success" value="Ažuriraj">
				                        {!! Form::close() !!}

				                        <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
				                           {{csrf_field()}}
				                           {{method_field('DELETE')}}
				                           <input style="border-radius: 3px;" class="button btn-danger" type="submit" value="Obriši">
				                        </form>
				                    </td>
				                </tr>
				            @endforeach
			            </tbody>
			        </table>
				  </div>
			</div>
    		
	        <div class="col-md-6 col-md-offset-3" style="text-align:center">
		        <div class="form-group">
                <h3>{{ Form::label('oblast', 'Oblast') }}</h3>
                {{ Form::select('oblast', $oblasti, null, ['class' => 'form-control','placeholder'=>'Odaberite oblast','onChange' => 'mojaFunkcija(this);']) }}
                <br>
                <div class="alert alert-danger" role="alert" id="labela" style="visibility:hidden"></div>
				</div>
			</div><br>

	        <div class="col-md-6 col-md-offset-3" id="hiddenDiv" style="text-align:center; border-style:solid; border-width:1px; margin-top:20px">
                <div class="form-group"><br>
                   <span class="label-lg label" style="font-size:18px; color:black">Ukupna cena sa PDV-om:</span><br><br>
                   <span style="font-size:18px" id="ukupnaCena" class="label-lg label label-warning">{{Cart::subtotal(2, ',', '')}}&nbsp; RSD</span>
                </div><br>
                <a href="{{route('shipping')}}" id="submit-button" class="btn btn-success btn-lg" style="width:80%; font-size:20px;" disabled="disabled">Podaci za dostavu</a>
                <br><br>
            </div><br><br><br><br>
        </div>
    </div><br><br>
</section>


@endsection

@section('javascript')
	<script src="{!! asset('js/mojJS/script.js') !!}"></script>
@endsection