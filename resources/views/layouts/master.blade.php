<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">

	@yield('style')
</head>

<body>
	<h1>Univresity Profile</h1>
	<header class="header-section">
		<div class="header-warp">
			<div class="container">
				<a href="#" class="site-logo">
					<img src="img/logo.png" alt="">
				</a>
				<div class="user-panel">
					<a href="#">Login</a><span>/</span><a href="">Register</a>
				</div>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				<ul class="main-menu">
					<li><a href="index.html">Home</a></li>
					<li><a href="course.html">Courses</a></li>
					<li><a href="exsamen.html">Examens</a></li>
					<li><a href="evaluation.html">Evaluation</a></li>
					<li><a href="student.html">students</a></li>
				</ul>
			</div>
		</div>
	</header>
	<nav>
		<ul>
			<li>
				<a href=" {{ route('programs.index') }} ">
				Add Programs
				</a>
			</li>
			<li>
				<a href=" {{ route('exsams.index') }} ">
				Evaluate Exsams
				</a>
			</li>
			<li>
				<a href=" {{ route('scores.index') }} ">
				Evaluate Scores
				</a>
			</li>
		</ul>
	</nav>
	<hr>
	@yield('content')
</body>
</html>