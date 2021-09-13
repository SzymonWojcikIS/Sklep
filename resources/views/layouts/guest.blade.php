<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
      </div>
  </body>
</html> -->


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
						<div class="topbar-menu left-menu">
						</div>
						<div class="topbar-menu right-menu">
							<ul>								
								@if(Route::has('login'))
								    @auth
                                        @if(Auth::user()->utype === 'ADM')
										    <li class="menu-item menu-item-has-children parent" >
									            <a title="My Account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									            <ul class="submenu curency" >
									            	<li class="menu-item" >
										            	<a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
									    	       </li>
												   <li class="menu-item">
												        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
												    </li>
												   <form id="logout-form" method="POST" action="{{ route('logout') }}">
													   @csrf
												   </form>
									        	</ul>
							            	</li>
										@else
										<li class="menu-item menu-item-has-children parent" >
									            <a title="My Account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									            <ul class="submenu curency" >
									            	<li class="menu-item" >
										            	<a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
									    	       </li>
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

				
</body>
</html>