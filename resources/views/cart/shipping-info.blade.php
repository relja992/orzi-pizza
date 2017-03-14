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

<br><br><br><br><br>
<section class="section-scroll main-section">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3 style="text-align:center;">Podaci za dostavu</h3>

            {!! Form::open(['route' => 'orderstore', 'method' => 'post']) !!}

            <div class="form-group">
                {{ Form::label('name', 'Ime') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('surname', 'Prezime') }}
                {{ Form::text('surname', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('address', 'Ulica i broj') }}
                {{ Form::text('address', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('sprat', 'Sprat') }}
                {{ Form::text('sprat', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('stan', 'Stan') }}
                {{ Form::text('stan', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('telephone', 'Telefon') }}
                {{ Form::text('telephone', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('email', 'E-mail') }}
                {{ Form::text('email', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('napomena', 'Napomena') }}
                {{ Form::textarea('napomena', null, array('class' => 'form-control')) }}
            </div>
            <div class="col-md-8 col-md-offset-2" id="hiddenDiv" style="text-align:center;">
            {{ Form::submit('Naruči', array('class' => 'btn btn-success', 'style' => 'width:100%')) }}
            </div>
            {!! Form::close() !!}
        </div>

    </div><br>
</section>

@endsection