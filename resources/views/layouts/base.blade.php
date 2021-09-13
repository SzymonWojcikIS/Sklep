<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    @livewireStyles
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu right-menu">
							<ul>							
								@if(Route::has('login'))
								    @auth
                                        @if(Auth::user()->utype === 'ADM')
										    <li class="menu-item menu-item-has-children parent" >
									            <a title="My Account" href="#">Moje konto ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									            <ul class="submenu curency" >

												   <li class="menu-item">
													   <a title="Categories" href="{{route('admin.cates')}}">Kategorie</a>
												   </li>
												   <li class="menu-item">
													   <a title="Prods" href="{{route('admin.prods')}}">Produkty</a>
												   </li>
												   <li class="menu-item">
													   <a title="Fakturas" href="{{route('admin.fakturas')}}">Faktury</a>
												   </li>
												   <li class="menu-item">
												        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Wyloguj</a>
												    </li>
												   <form id="logout-form" method="POST" action="{{ route('logout') }}">
													   @csrf
												   </form>
									        	</ul>
							            	</li>
										@else
										<li class="menu-item menu-item-has-children parent" >
									            <a title="My Account" href="#">Konto ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									            <ul class="submenu curency" >

												   <li class="menu-item">
												        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
												    </li>
												   <form id="logout-form" method="POST" action="{{ route('logout') }}">
													   @csrf
												   </form>
									        	</ul>
							            	</li>
										@endif      
									@else
									    <li class="menu-item" ><a title="Register or Login" href="{{route('login')}}">Logowanie</a></li>
								        <li class="menu-item" ><a title="Register or Login" href="{{route('register')}}">Rejestracja</a></li>
									@endif

								@endif
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="index.html" class="link-to-home"><img src="{{ asset('assets/images/logo.png')}}" width="130" height="70" alt="mercado"></a>
						</div>
						<div >
							<a href="index.html" class="link-to-home"><img src="{{ asset('assets/images/ozdb.png')}}" width="#" height="#" alt="mercado"></a>
						</div>
						
						<div class="wrap-icon right-section">						
							<div class="wrap-icon-section minicart">
								<a href="/cart" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="left-info">
										@if(Cart::count() > 0)
										<span class="index">{{Cart::count()}} produkty</span>
										@endif
										<span class="title">Koszyk</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="/cart" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>
						
					</div>
				</div>
					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="/aboutus" class="link-term mercado-item-title">O nas</a>
								</li>
								<li class="menu-item">
									<a href="/menu" class="link-term mercado-item-title">Menu</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">Koszyk</a>
								</li>
								<li class="menu-item">
									<a href="/kontakt" class="link-term mercado-item-title">Kontakt</a>
								</li>																
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

    {{$slot}}

	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-money" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Gotówka</h4>
								<p class="fc-desc">Możliwość zapłaty gotówką</p>
							</div>
						</li>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Karta</h4>
								<p class="fc-desc">Możliwość zapłaty kartą</p>
							</div>
						</li>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-mobile" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Zbliżeniowo</h4>
								<p class="fc-desc">Możliwość zapłaty telefonem/zegarkiem</p>
							</div>
						</li>
						<li class="fc-info-item">
							<i class="fa fa-barcode" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Blik</h4>
								<p class="fc-desc">Możliwość zapłaty kodem blik</p>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Dane kontaktowe</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">Nowy Sącz, ul.Szkolna 12</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">(+18) 456 789 - (+48) 555 777 888</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">Contact@hotelresto.com</p>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>			
						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Używamy bezpiecznych metod płatności:</h3>
								<div class="item-content">
									<div class="wrap-list-item wrap-gallery">
										<img src="assets/images/payment.png" style="max-width: 260px;">
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Media społecznościowe</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2020 Surfside Media. All rights reserved</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	<script src="{{asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{asset('assets/js/jquery.flexslider.js') }}"></script>

	<script src="{{asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{asset('assets/js/functions.js') }}"></script>
    @livewireScripts
</body>
</html>