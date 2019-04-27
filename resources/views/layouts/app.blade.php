<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>O.a!</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="OA Team" />

		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="favicon.ico">

		<!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'> -->

		<!-- Animate.css -->
		
		<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
		<!-- Owl Carousel -->
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

		<link rel="stylesheet" href="{{ asset('css/style.css') }}">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- or -->
		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="js/respond.min.js"></script>
		<![endif]-->
		

	</head>
	<body>
		@include('inc.navbar')
			
			@if(Request::is('/'))
        		@include ('inc.showcase')
      		@endif
		@yield('content')
		@include('inc.footer')

		<!-- jQuery -->
		<script src="{{ asset('/js/jquery.min.js') }}"></script>
		<!-- jQuery Easing -->
		<script src="{{ asset('/js/jquery.easing.1.3.js') }}"></script>
		<!-- Bootstrap -->
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		<!-- Waypoints -->
		<script src="{{ asset('/js/jquery.waypoints.min.js') }}"></script>
		<!-- Owl carousel -->
		<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
		<!-- Stellar -->
		<script src="{{ asset('/js/jquery.stellar.min.js') }}"></script>

		<!-- Main JS (Do not remove) -->
		<script src="{{ asset('/js/main.js') }}"></script>
		<script src="{{ asset('/js/hover.js') }}"></script>

		{{-- js for scolling effect --}}
		<script src="{{ asset('/js/style.js') }}"></script>
	</body>
</html>