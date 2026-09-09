@extends('layouts.eduleb')

@section('title', 'বিদ্যালয় সংবাদ - পাশ্চিম ডাগরী আইডিয়াল স্কুল')

@section('content')

		<!-- START SECTION TOP -->
		<section class="section-top">
			<div class="container">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h1>বিদ্যালয় সংবাদ</h1>
						<ul>
							<li><a href="{{ route('home') }}">হোম</a></li>
							<li> / সংবাদ</li>
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
					@forelse ($posts as $post)
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_blog">
							@if ($post->featured_image)
								<img src="{{ asset('storage/'.$post->featured_image) }}" class="img-fluid" alt="{{ $post->title }}" />
							@else
								<img src="{{ asset('assets/img/blog/1.jpg') }}" class="img-fluid" alt="{{ $post->title }}" />
							@endif
							<div class="content_box">
								<span>{{ optional($post->published_at)->format('d/m/Y') }} @if($post->category) | <a href="{{ route('blog') }}">{{ $post->category }}</a>@endif</span>
								<h2><a href="{{ route('blog.single', $post->slug) }}">{{ $post->title }}</a></h2>
								<a class="btn_one" href="{{ route('blog.single', $post->slug) }}">বিস্তারিত পড়ুন <i class="ti-arrow-top-right"></i></a>
							</div>
						</div>
					</div><!-- END COL-->
					@empty
					<div class="col-12 text-center">
						<p>বিদ্যালয়ের সংবাদ ও কার্যক্রমের তথ্য শিগগিরই প্রকাশ করা হবে।</p>
					</div>
					@endforelse
				</div><!-- / END ROW -->
				<div class="row">
					<div class="col-12">
						{{ $posts->links() }}
					</div>
				</div>
			</div><!-- END CONTAINER  -->
		</section>
		<!-- END BLOG -->

@endsection
