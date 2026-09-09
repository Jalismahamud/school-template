@extends('layouts.eduleb')

@section('title', 'পাশ্চিম ডাগরী আইডিয়াল স্কুল')

@section('content')

		<!-- START HOME -->
		<section class="home_bg hb_height" style="background-image: url({{ asset('assets/img/bg/home-bg.jpg') }});  background-size:cover; background-position: center center;">
			<div class="container">
				<div class="row">
				  <div class="col-lg-6 col-sm-12 col-xs-12">
					<div class="hero-text ht_top">
						<h1><span>Pashchim Dagori Ideal School</span></h1>
						<p>নিরাপদ, সহায়ক ও আনন্দময় পরিবেশে মানসম্মত শিক্ষা প্রদানে আমরা প্রতিশ্রুতিবদ্ধ।</p>
					</div>
				  </div><!--- END COL -->
				  <div class="col-lg-6 col-sm-12 col-xs-12">
					<div class="hero-text-img">
						<img src="{{ asset('assets/img/home-img2.png') }}" class="img-fluid" alt="" />
						<div class="home_ps">
							<span class="ti-user"></span>
							<h2>শিক্ষা</h2>
							<p>জীবনের ভিত্তি</p>
						</div>
					</div>
				  </div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END  HOME -->

		<!-- START COUNTER -->
		<section class="count_area counter_feature">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-folder sc_one"></span>
										<h2 class="counter-num">1</h2>
										<p>শিক্ষার পরিবেশ</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-medall-alt sc_two"></span>
										<h2 class="counter-num">1</h2>
										<p>নৈতিক মূল্যবোধ</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-id-badge sc_three"></span>
										<h2 class="counter-num">1</h2>
										<p>শিক্ষার্থী সহায়তা</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-user sc_four"></span>
										<h2 class="counter-num">1</h2>
										<p>অভিভাবক যোগাযোগ</p>
						</div>
					</div><!-- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END COUNTER -->

	<!-- START CATEGORY -->
	<section class="top_cat__area section-padding" style="background-image: url({{ asset('assets/img/bg/shape-1.png') }});  background-size:cover; background-position: center center;">
		<div class="container">
			<div class="section-title text-center">
						<h2>শিক্ষার পথে আমাদের সঙ্গে</h2>
						<p>পাশ্চিম ডাগরী আইডিয়াল স্কুলে শিক্ষার্থীদের নিয়মিত পাঠদান, শৃঙ্খলা, নৈতিকতা এবং সৃজনশীল বিকাশকে সমান গুরুত্ব দেওয়া হয়।</p>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="single_tp">
						<span class="sc_one">01</span>
						<h3>দক্ষ <br />শিক্ষক</h3>
						<p>অভিজ্ঞ শিক্ষকরা পাঠ্যবিষয় সহজভাবে বোঝান এবং শিক্ষার্থীদের নিয়মিত অগ্রগতি পর্যবেক্ষণ করেন।</p>
					</div>
				</div><!-- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
					<div class="single_tp">
						<span class="sc_two">02</span>
						<h3>মানসম্মত <br />শিক্ষা</h3>
						<p>জাতীয় শিক্ষাক্রম অনুসরণ করে পাঠ্যজ্ঞান, শিষ্টাচার ও দায়িত্ববোধ গড়ে তোলার চেষ্টা করা হয়।</p>
					</div>
				</div><!-- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
					<div class="single_tp">
						<span class="sc_three">03</span>
						<h3>নিরাপদ <br />পরিবেশ</h3>
						<p>শিক্ষার্থীরা যেন মনোযোগ দিয়ে পড়াশোনা করতে পারে, সে জন্য সহায়ক ও যত্নশীল পরিবেশ বজায় রাখা হয়।</p>
					</div>
				</div><!-- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
					<div class="single_tp">
						<span class="sc_four">04</span>
						<h3>অভিভাবক <br />সহযোগিতা</h3>
						<p>শিক্ষার্থী ও অভিভাবকদের সঙ্গে নিয়মিত যোগাযোগের মাধ্যমে পড়াশোনা ও আচরণগত উন্নয়নকে সমর্থন করা হয়।</p>
					</div>
				</div><!-- END COL -->
			</div><!-- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END CATEGORY -->

	<!-- START ABOUT US -->
	<section class="ab_area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="ab_img">
								<img src="{{ asset('assets/img/about1.png') }}" class="img-fluid" alt="বিদ্যালয়ের শিক্ষার পরিবেশ">
					</div>
				</div><!--- END COL -->
				<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
					<div class="ab_content">
						<h2>উন্নত ভবিষ্যতের জন্য মানসম্মত শিক্ষা</h2>
						<p>পাশ্চিম ডাগরী আইডিয়াল স্কুল শিক্ষার্থীদের একাডেমিক উৎকর্ষ, সৃজনশীলতা, আত্মবিশ্বাস ও নৈতিক মূল্যবোধ বিকাশে কাজ করে।</p>
						<ul>
							<li><span class="ti-check"></span> নিরাপদ ও সহায়ক শিক্ষার পরিবেশ</li>
							<li><span class="ti-check"></span> অভিজ্ঞ ও দায়িত্বশীল শিক্ষক</li>
							<li><span class="ti-check"></span> মেধা ও নৈতিক মূল্যবোধের সমন্বিত বিকাশ</li>
						</ul>
						<a class="btn_one" href="{{ route('about') }}">আরও জানুন <i class="ti-arrow-top-right"></i></a>
					</div>
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END ABOUT US -->

		@include('partials.teachers')

		@include('partials.talent-pool')

	<!-- START PROMO -->
	<section class="ab_area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
					<div class="ab_content">
						<h2>কেন পাশ্চিম ডাগরী আইডিয়াল স্কুল?</h2>
						<p>প্রতিটি শিক্ষার্থীর জন্য মানসম্মত শিক্ষা, যত্নশীল পরিবেশ এবং উন্নতির নিয়মিত সুযোগ তৈরি করাই আমাদের অঙ্গীকার।</p>
						<ul>
							<li><span class="ti-check"></span> একাডেমিক উৎকর্ষ ও সৃজনশীলতার চর্চা</li>
							<li><span class="ti-check"></span> আত্মবিশ্বাস ও নৈতিক মূল্যবোধ গঠন</li>
							<li><span class="ti-check"></span> প্রতিটি শিক্ষার্থীর সম্ভাবনা বিকাশে সহায়তা</li>
						</ul>
						<a class="btn_one" href="{{ route('about') }}">আরও জানুন <i class="ti-arrow-top-right"></i></a>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="ab_img">
								<img src="{{ asset('assets/img/about3.png') }}" class="img-fluid" alt="শিক্ষার্থীদের অগ্রগতি">
					</div>
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END PROMO -->

		<!-- START TESTIMONIALS -->
		<section class="testi_area section-padding">
			<div class="container">
						<div class="section-title">
							<h2>অভিভাবক ও শিক্ষার্থীদের <br />কথা</h2>
				</div>
				<div class="row">
					<div class="col-lg-6 col-sm-12 col-xs-12">
						<div class="ab_img">
							<img src="{{ asset('assets/img/review.png') }}" class="img-fluid" alt="image">
						</div>
					</div><!-- END COL -->
					<div class="col-lg-6 col-sm-12 col-xs-12">
						<div id="testimonial-slider" class="owl-carousel">
							@foreach ([
													['name' => 'একজন অভিভাবক', 'company' => 'পশ্চিম ডাগরী', 'image' => 'testimonial/1.png'],
													['name' => 'একজন শিক্ষার্থী', 'company' => 'পাশ্চিম ডাগরী আইডিয়াল স্কুল', 'image' => 'testimonial/2.png'],
													['name' => 'একজন অভিভাবক', 'company' => 'গাজীপুর সদর', 'image' => 'testimonial/3.png'],
							] as $testimonial)
							<div class="testimonial">
								<img src="{{ asset('assets/img/quote.png') }}" alt="" />
								<div class="testimonial_content">
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
													<p>বিদ্যালয়ের শিক্ষকরা নিয়মিত পড়াশোনার খোঁজ রাখেন এবং শিক্ষার্থীদের ভালো ফলাফলের পাশাপাশি শৃঙ্খলা ও নৈতিকতার দিকে গুরুত্ব দেন।</p>
								</div>
								<div class="testi_pic_title">
									<img src="{{ asset('assets/img/'.$testimonial['image']) }}" alt="">
									<h4>{{ $testimonial['name'] }}</h4>
									<p>{{ $testimonial['company'] }}</p>
								</div>
							</div><!-- END TESTIMONIAL -->
							@endforeach
						</div><!-- END TESTIMONIAL SLIDER -->
					</div><!-- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END TESTINUNIALS -->

		@if (($posts ?? collect())->isNotEmpty())
		<!-- START BLOG -->
		<section id="blog" class="blog_area section-padding">
			<div class="container">
				<div class="section-title text-center">
							<h2>সর্বশেষ সংবাদ ও কার্যক্রম</h2>
				</div>
				<div class="row">
					@foreach ($posts as $post)
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
					@endforeach
				</div><!-- / END ROW -->
			</div><!-- END CONTAINER  -->
		</section>
		<!-- END BLOG -->
		@endif

@endsection
