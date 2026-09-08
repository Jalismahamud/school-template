@extends('layouts.eduleb')

@section('title', 'Our Blog - Eduleb')

@section('content')

		<!-- START SECTION TOP -->
		<section class="section-top">
			<div class="container">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h1>Our Blog</h1>
						<ul>
							<li><a href="{{ route('home') }}">Home</a></li>
							<li> / Blog</li>
						</ul>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END SECTION TOP -->

		<!-- START BLOG -->
		<section id="blog" class="blog_area section-padding">
			<div class="container">
				<div class="row">
					@foreach ($posts as $post)
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_blog">
							<img src="{{ asset('assets/img/'.$post['image']) }}" class="img-fluid" alt="image" />
							<div class="content_box">
								<span>{{ $post['date'] }} | <a href="{{ route('blog.single', $post['id']) }}">{{ $post['category'] }}</a></span>
								<h2><a href="{{ route('blog.single', $post['id']) }}">{{ $post['title'] }}</a></h2>
								<a class="btn_one" href="{{ route('blog.single', $post['id']) }}">Read More <i class="ti-arrow-top-right"></i></a>
							</div>
						</div>
					</div><!-- END COL-->
					@endforeach
				</div><!-- / END ROW -->
			</div><!-- END CONTAINER  -->
		</section>
		<!-- END BLOG -->

@endsection
