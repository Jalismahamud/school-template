@extends('layouts.eduleb')

@section('title', 'আমাদের শিক্ষক - পাশ্চিম ডাগরী আইডিয়াল স্কুল')

@section('content')

		<!-- START SECTION TOP -->
		<section class="section-top">
			<div class="container">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h1>আমাদের শিক্ষক</h1>
						<ul>
							<li><a href="{{ route('home') }}">হোম</a></li>
							<li> / শিক্ষক</li>
						</ul>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END SECTION TOP -->

		@include('partials.teachers')

@endsection
