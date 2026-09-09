@extends('layouts.eduleb')

@section('title', 'আমাদের সম্পর্কে - পাশ্চিম ডাগরী আইডিয়াল স্কুল')

@section('content')

		<!-- START SECTION TOP -->
		<section class="section-top">
			<div class="container">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h1>আমাদের সম্পর্কে</h1>
						<ul>
							<li><a href="{{ route('home') }}">হোম</a></li>
							<li> / আমাদের সম্পর্কে</li>
						</ul>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END SECTION TOP -->

	<!-- START CATEGORY -->
	<section class="top_cat__area section-padding" style="background-image: url({{ asset('assets/img/bg/shape-1.png') }});  background-size:cover; background-position: center center;">
		<div class="container">
			<div class="section-title text-center">
						<h2>পাশ্চিম ডাগরী আইডিয়াল স্কুল সম্পর্কে</h2>
						<p>গাজীপুর সদর এলাকার শিক্ষার্থীদের জন্য একটি শৃঙ্খলাপূর্ণ, নিরাপদ ও মানবিক শিক্ষার পরিবেশ গড়ে তোলাই আমাদের লক্ষ্য।</p>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="single_tp">
						<span class="sc_one">01</span>
						<h3>অভিজ্ঞ <br />শিক্ষক</h3>
						<p>শিক্ষার্থীর বয়স ও বোঝার ক্ষমতা অনুযায়ী পাঠদান ও অনুশীলনে গুরুত্ব দেওয়া হয়।</p>
					</div>
				</div><!-- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
					<div class="single_tp">
						<span class="sc_two">02</span>
						<h3>মানসম্মত <br />পাঠদান</h3>
						<p>পাঠ্যবইভিত্তিক জ্ঞানের সঙ্গে ব্যবহারিক বোঝাপড়া ও নিয়মিত মূল্যায়ন যুক্ত করা হয়।</p>
					</div>
				</div><!-- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
					<div class="single_tp">
						<span class="sc_three">03</span>
						<h3>সহায়ক <br />পরিবেশ</h3>
						<p>প্রতিটি শিক্ষার্থীকে সম্মান ও যত্নের সঙ্গে শেখার সুযোগ দেওয়ার চেষ্টা করা হয়।</p>
					</div>
				</div><!-- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
					<div class="single_tp">
						<span class="sc_four">04</span>
						<h3>নৈতিক <br />শিক্ষা</h3>
						<p>সততা, সময়ানুবর্তিতা, দায়িত্ববোধ ও পারস্পরিক সম্মানকে শিক্ষার গুরুত্বপূর্ণ অংশ হিসেবে দেখা হয়।</p>
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
						<p>পাশ্চিম ডাগরী আইডিয়াল স্কুলে শিক্ষার্থীদের একাডেমিক উৎকর্ষ, সৃজনশীলতা, আত্মবিশ্বাস ও নৈতিক মূল্যবোধ বিকাশে গুরুত্ব দেওয়া হয়।</p>
						<ul>
							<li><span class="ti-check"></span> নিরাপদ ও সহায়ক শিক্ষার পরিবেশ</li>
							<li><span class="ti-check"></span> অভিজ্ঞ ও দায়িত্বশীল শিক্ষক</li>
							<li><span class="ti-check"></span> একাডেমিক উৎকর্ষ ও নৈতিক মূল্যবোধ</li>
						</ul>
						<a class="btn_one" href="{{ route('instructor') }}">শিক্ষকদের দেখুন <i class="ti-arrow-top-right"></i></a>
					</div>
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END ABOUT US -->

		<!-- START COUNTER -->
		<section class="count_area counter_feature">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-folder sc_one"></span>
							<h2 class="counter-num">134</h2>
							<p>শ্রেণিভিত্তিক পাঠদান</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-medall-alt sc_two"></span>
							<h2 class="counter-num">299</h2>
							<p>নিয়মিত মূল্যায়ন</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-id-badge sc_three"></span>
							<h2 class="counter-num">684</h2>
							<p>শিক্ষার্থী উন্নয়ন</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-user sc_four"></span>
							<h2 class="counter-num">941</h2>
							<p>অভিভাবক সহযোগিতা</p>
						</div>
					</div><!-- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END COUNTER -->

	<!-- START INSTRUCTOR+FREE COURSE -->
	<section class="insfreecourse section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="single_ins" style="background-image: url({{ asset('assets/img/ins1.png') }});  background-size:cover; background-position: center center;">
						<div class="single_ins_content">
							<h4>শিক্ষক ও অভিভাবকের সহযোগিতা</h4>
							<h1>শিক্ষার্থীর অগ্রগতি</h1>
							<p>শিক্ষার্থীর পড়াশোনা ও আচরণগত উন্নয়নে বিদ্যালয় ও পরিবারের সমন্বিত সহযোগিতা গুরুত্বপূর্ণ।</p>
							<a class="btn_one" href="{{ route('contact') }}">যোগাযোগ করুন <i class="ti-arrow-top-right"></i></a>
						</div>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="single_ins" style="background-image: url({{ asset('assets/img/ins2.png') }});  background-size:cover; background-position: center center;">
						<div class="single_ins_content">
							<h4>ভর্তি ও তথ্য</h4>
							<h1>বিদ্যালয়ের সঙ্গে কথা বলুন</h1>
							<p>ভর্তি, শ্রেণি, সময়সূচি ও প্রয়োজনীয় তথ্যের জন্য সরাসরি বিদ্যালয়ের সঙ্গে যোগাযোগ করুন।</p>
							<a class="btn_one" href="{{ route('contact') }}">যোগাযোগ করুন <i class="ti-arrow-top-right"></i></a>
						</div>
					</div>
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END INSTRUCTOR+FREE COURSE -->

		<!-- START TESTIMONIALS -->
		<section class="testi_area section-padding">
			<div class="container">
				<div class="section-title">
					<h2>আমাদের শিক্ষার্থী ও অভিভাবকদের <br />অভিজ্ঞতা</h2>
				</div>
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-xs-12">
						<div id="testimonial-slider2" class="owl-carousel">
							@foreach ([
									['name' => 'একজন অভিভাবক', 'company' => 'পশ্চিম ডাগরী', 'image' => 'testimonial/1.png'],
									['name' => 'একজন শিক্ষার্থী', 'company' => 'গাজীপুর সদর', 'image' => 'testimonial/2.png'],
							] as $testimonial)
							<div class="testimonial">
								<img src="{{ asset('assets/img/quote.png') }}" alt="" />
								<div class="testimonial_content">
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<p>বিদ্যালয়ের নিয়মিত পাঠদান, শিক্ষকদের যত্ন এবং অভিভাবকদের সঙ্গে যোগাযোগ শিক্ষার্থীদের আত্মবিশ্বাসী হয়ে উঠতে সহায়তা করে।</p>
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

@endsection
