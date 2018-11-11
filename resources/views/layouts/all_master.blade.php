<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>

<link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/flaticon.css')}} ">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }} ">

<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }} ">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="container">
				<a href="{{ url('/') }}" class="site-logo">
					<img src="img/logo.png" alt="">
				</a>
				@if (Route::has('login'))
                <div class="user-panel">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <span>/</span>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
           		 @endif
		<ul class="main-menu">
			<li>
				<a href="{{ url('/') }}">
					Home
				</a>
			</li>
			<li>
				<a href="{{ route('students.index') }}">
					Programs
				</a>
			</li>
			<li>
				<a href="{{-- {{ route('sessions.index') }} --}}">
					Exams
				</a>
			</li>
			<li>
				<a href="{{-- {{ route('sessions.index') }} --}}">
					About US
				</a>
			</li>
		</ul>
		</div>
	</div>
</header>
	@yield('content')
<footer>
</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/circle-progress.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>