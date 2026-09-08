@extends('layouts.eduleb')

@section('title', 'All Course - Eduleb')

@section('content')

		<!-- START SECTION TOP -->
		<section class="section-top">
			<div class="container">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h1>All Course</h1>
						<ul>
							<li><a href="{{ route('home') }}">Home</a></li>
							<li> / Course</li>
						</ul>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END SECTION TOP -->

		<!-- START COURSE -->
		<section class="home_course section-padding">
			<div class="container">
				<div class="row">
					@foreach ($courses as $course)
					<div class="col-lg-4 col-sm-6 col-xs-12">
						<div class="single_course">
							<div class="single_c_img">
								<img src="{{ asset('assets/img/'.$course['image']) }}" class="img-fluid" alt="course-image" />
								<span>{{ $course['category'] }}</span>
							</div>
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
							<h4><a href="{{ route('course.details', $course['id']) }}">{{ $course['title'] }}</a></h4>
							<p><span class="ti-book"> </span> {{ $course['lessons'] }} Course</p>
							<p><span class="ti-alarm-clock"> </span>{{ $course['duration'] }}</p>
							<div class="price">Course Fee - {{ $course['price'] }}</div>
						</div>
					</div><!-- END COL -->
					@endforeach
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END COURSE -->

@endsection
