@extends('layouts.eduleb')

@section('title', $post->title.' - পাশ্চিম ডাগরী আইডিয়াল স্কুল')

@section('content')

		<!-- START SECTION TOP -->
		<section class="section-top">
			<div class="container">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h1>{{ $post->title }}</h1>
						<ul>
							<li><a href="{{ route('home') }}">হোম</a></li>
							<li> / {{ $post->title }}</li>
						</ul>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END SECTION TOP -->

	<!-- START BLOG -->
	<section class="blog-page section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-sm-12 col-xs-12">
					<div class="arti_single">
						@if ($post->featured_image)
							<div class="arti_img_two">
								<img src="{{ asset('storage/'.$post->featured_image) }}" class="img-fluid" alt="{{ $post->title }}" />
							</div>
						@endif
						<div class="arti_content">
							<span>{{ optional($post->published_at)->format('d/m/Y') }} @if($post->category) | {{ $post->category }} @endif @if($post->author_name) | {{ $post->author_name }} @endif</span>
							{!! nl2br(e($post->content)) !!}
						</div>
					</div><!-- END ARTI SINGLE  -->
				</div><!-- END COL-->
				<div class="col-lg-4 col-sm-12 col-xs-12">
					@if ($recentPosts->isNotEmpty())
					<div class="sidebar-post">
						<div class="sidebar_title"><h4>সাম্প্রতিক সংবাদ</h4></div>
						@foreach ($recentPosts as $recent)
						<div class="single_popular">
							@if ($recent->featured_image)
								<a href="{{ route('blog.single', $recent->slug) }}"><img src="{{ asset('storage/'.$recent->featured_image) }}" alt="{{ $recent->title }}" /></a>
							@endif
							<h5><a href="{{ route('blog.single', $recent->slug) }}">{{ $recent->title }}</a></h5>
						</div><!-- END SINGLE POPULAR POST -->
						@endforeach
					</div><!-- END SIDEBAR POST -->
					@endif
				</div><!--- END COL -->
			</div><!-- END ROW-->
		</div><!-- END CONTAINER-->
	</section>
	<!-- END BLOG -->

@endsection
