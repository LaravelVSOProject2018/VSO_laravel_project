@extends('layouts.all_master')

@section('content')

<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="hero-text text-white">
					<h2>Candidate Student Admissions System</h2>
					<p>Donec id mattis est. Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa scelerisque id. Nullam vulputate a lectus non molestie. </p>
					<div class="hero-author">
						<div class="hero-author-pic set-bg" data-setbg="img/hero-author.jpg"></div>
						<h5>By Sebastian Smith, <span>Senior Lecturer</span></h5>
						<a href="{{ route('students.index') }}" class="site-btn">See Details <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Services section -->
	<section class="services-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 service-item">
					<div class="si-icon">
						<i class="flaticon-apple"></i>
					</div>
					<div class="si-content">
						<h5>Training Center</h5>
						<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus ele ifend, et auctor lorem hendrerit. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service-item">
					<div class="si-icon">
						<i class="flaticon-mortarboard"></i>
					</div>
					<div class="si-content">
						<h5>Training Center</h5>
						<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus ele ifend, et auctor lorem hendrerit. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service-item">
					<div class="si-icon">
						<i class="flaticon-idea"></i>
					</div>
					<div class="si-content">
						<h5>Training Center</h5>
						<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus ele ifend, et auctor lorem hendrerit. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service-item">
					<div class="si-icon">
						<i class="flaticon-medal"></i>
					</div>
					<div class="si-content">
						<h5>Training Center</h5>
						<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus ele ifend, et auctor lorem hendrerit. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service-item">
					<div class="si-icon">
						<i class="flaticon-question"></i>
					</div>
					<div class="si-content">
						<h5>Training Center</h5>
						<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus ele ifend, et auctor lorem hendrerit. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service-item">
					<div class="si-icon">
						<i class="flaticon-learning"></i>
					</div>
					<div class="si-content">
						<h5>Training Center</h5>
						<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus ele ifend, et auctor lorem hendrerit. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->
@endsection