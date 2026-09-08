@extends('layouts.eduleb')

@section('title', 'Eduleb - Education HTML Template (Home 02)')

@section('content')

		<!-- START HOME -->
		<section class="home_bg hb_height" style="background-image: url({{ asset('assets/img/bg/home-bg2.jpg') }});  background-size:cover; background-position: center center;">
			<div class="container">
				<div class="row">
				  <div class="col-lg-6 col-sm-12 col-xs-12">
					<div class="hero-text-img2">
						<img src="{{ asset('assets/img/home-img1.png') }}" class="img-fluid" alt="" />
					</div>
				  </div><!--- END COL -->
				  <div class="col-lg-6 col-sm-12 col-xs-12">
					<div class="hero-text2 ht_top">
						<h1>Explore Our <span>14000+</span> Online courses for all</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, consectetur adipiscing elit tempor ut labore</p>
					</div>
					<div class="home_sb2">
						<form action="{{ route('course') }}" method="GET" class="banner_subs2">
							<input type="text" name="q" class="form-control home_si2" placeholder="Search your course here" required="required">
							<button type="submit" class="subscribe__btn">Search <i class="fa fa-paper-plane-o"></i></button>
						</form>
					</div>
					<div class="home_tag">
						<span>Popular Topic:</span>
						<a href="#">Design, </a>
						<a href="#">Development, </a>
						<a href="#">Graphics, </a>
						<a href="#">Marketing </a>
					</div>
				  </div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END  HOME -->

		<!-- START COMPANY PARTNER LOGO  -->
		<div class="partner-logo section-padding">
			<div class="container">
				<div class="row part_bg">
					<div class="col-lg-4 col-sm-4 col-xs-12">
						<div class="partner_title">
							<h3>Helping <span>86,000+</span> global companies take the gloves off </h3>
						</div>
					</div><!-- END COL  -->
					<div class="col-lg-8 col-sm-8 col-xs-12 text-center">
						<div class="partner">
							<a href="#"><img src="{{ asset('assets/img/clients/1.png') }}" alt="image"></a>
							<a href="#"><img src="{{ asset('assets/img/clients/2.png') }}" alt="image"></a>
							<a href="#"><img src="{{ asset('assets/img/clients/3.png') }}" alt="image"></a>
							<a href="#"><img src="{{ asset('assets/img/clients/4.png') }}" alt="image"></a>
							<a href="#"><img src="{{ asset('assets/img/clients/5.png') }}" alt="image"></a>
							<a href="#"><img src="{{ asset('assets/img/clients/2.png') }}" alt="image"></a>
							<a href="#"><img src="{{ asset('assets/img/clients/1.png') }}" alt="image"></a>
							<a href="#"><img src="{{ asset('assets/img/clients/3.png') }}" alt="image"></a>
							<a href="#"><img src="{{ asset('assets/img/clients/4.png') }}" alt="image"></a>
						</div>
					</div><!-- END COL  -->
				</div><!--END  ROW  -->
			</div><!-- END CONTAINER  -->
		</div>
		<!-- END COMPANY PARTNER LOGO -->

		<!-- START CATEGORY TWO -->
		<section class="category_two_area section-padding">
			<div class="container">
				<div class="section-title text-center">
					<h2>Popular Courses by category</h2>
					<p>We offer a brand new approach to the most basic learning paradigms. Choose from a wide range of learning options and gain new skills! Our school is know.</p>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="cat_list_two">
							<img src="{{ asset('assets/img/cat1.jpg') }}" alt="" />
							<span>02 Courses</span>
							<h4><a href="{{ route('course') }}">Digital Marketing</a></h4>
							<p>We offer a brand new approach to the most basic learning paradigms.</p>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="cat_list_two">
							<img src="{{ asset('assets/img/cat2.jpg') }}" alt="" />
							<span>04 Courses</span>
							<h4><a href="{{ route('course') }}">Ui/UX Design</a></h4>
							<p>We offer a brand new approach to the most basic learning paradigms.</p>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="cat_list_two">
							<img src="{{ asset('assets/img/cat3.jpg') }}" alt="" />
							<span>01 Courses</span>
							<h4><a href="{{ route('course') }}">Content Marketing</a></h4>
							<p>We offer a brand new approach to the most basic learning paradigms.</p>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="cat_list_two">
							<img src="{{ asset('assets/img/cat4.jpg') }}" alt="" />
							<span>05 Courses</span>
							<h4><a href="{{ route('course') }}">Photo lifestyle</a></h4>
							<p>We offer a brand new approach to the most basic learning paradigms.</p>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="cat_list_two">
							<img src="{{ asset('assets/img/cat5.jpg') }}" alt="" />
							<span>03 Courses</span>
							<h4><a href="{{ route('course') }}">Graphic Design</a></h4>
							<p>We offer a brand new approach to the most basic learning paradigms.</p>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="cat_list_two">
							<img src="{{ asset('assets/img/cat6.jpg') }}" alt="" />
							<span>04 Courses</span>
							<h4><a href="{{ route('course') }}">Interior Design</a></h4>
							<p>We offer a brand new approach to the most basic learning paradigms.</p>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="cat_list_two">
							<img src="{{ asset('assets/img/cat7.jpg') }}" alt="" />
							<span>02 Courses</span>
							<h4><a href="{{ route('course') }}">Arts & Design</a></h4>
							<p>We offer a brand new approach to the most basic learning paradigms.</p>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="cat_list_two">
							<img src="{{ asset('assets/img/cat8.jpg') }}" alt="" />
							<span>01 Courses</span>
							<h4><a href="{{ route('course') }}">Visual design</a></h4>
							<p>We offer a brand new approach to the most basic learning paradigms.</p>
						</div>
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END CATEGORY TWO -->

		<!-- START COURSE -->
		<section class="home_course section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-sm-6 col-xs-12">
						<div class="section-title">
							<h2>Join with more than <b>80,000+ </b> <br />Courses & Learning creators.</h2>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-4 col-sm-6 col-xs-12">
						<div class="cour_btn">
							<a href="{{ route('course') }}" class="btn_one">View all Courses <i class="ti-arrow-top-right"></i></a>
						</div>
					</div><!--- END COL -->
				</div><!--- END ROW -->
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

		<!-- START VIDEO -->
		<section class="vid_area va2" style="background-image: url({{ asset('assets/img/bg/video.jpg') }});  background-size:cover; background-position: center center;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 vp_top wow fadeInUDown" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="video-area2">
							<a href="https://www.youtube.com/watch?v=RXv_uIN6e-Y" class="magnific_popup video-button"><i class="fa fa-play"></i></a>
						</div>
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END VIDEO -->

		<!-- START COUNTER -->
		<section class="count_area counter_feature">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-folder sc_one"></span>
							<h2 class="counter-num">134</h2>
							<p>Our Online Course</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-medall-alt sc_two"></span>
							<h2 class="counter-num">299</h2>
							<p>Academic Programs</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-id-badge sc_three"></span>
							<h2 class="counter-num">684</h2>
							<p>Certified Students</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-user sc_four"></span>
							<h2 class="counter-num">941</h2>
							<p>Enrolled Students</p>
						</div>
					</div><!-- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END COUNTER -->

		<!-- START ABOUT US -->
		<section class="ab_area section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="ab_img">
							<img src="{{ asset('assets/img/about1.png') }}" class="img-fluid" alt="image">
						</div>
					</div><!--- END COL -->
					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="ab_content">
							<h2>We Are Providing The Online Course In Global World</h2>
							<p>We offer a brand new approach to the most basic learning paradigms. Choose from a wide range of learning options and gain new skills! Our school is know.</p>
							<p>We offer a brand new approach to the most basic learning paradigms. Choose from a wide range of learning options and gain new skills! Our school is know.</p>
							<ul>
								<li><span class="ti-check"></span> Get access to <b>12,000+</b> of our top courses</li>
								<li><span class="ti-check"></span> Popular topic to learn now in our online courses for student</li>
								<li><span class="ti-check"></span> Find the right instructor for you</li>
							</ul>
							<a class="btn_one" href="{{ route('course') }}">View All Courses <i class="ti-arrow-top-right"></i></a>
						</div>
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END ABOUT US -->

		<!-- START TEAM -->
		<section class="team_area section-padding">
			<div class="container">
				<div class="section-title text-center">
					<h2>Meet our Instructors</h2>
					<p>We offer a brand new approach to the most basic learning paradigms. Choose from a wide range of learning options and gain new skills! Our school is know.</p>
				</div>
				<div class="row">
					@foreach ($instructors as $member)
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="our-team">
							<div class="team-content">
								<a href="{{ route('instructor.details', $member['id']) }}"><img src="{{ asset('assets/img/'.$member['image']) }}" alt=""></a>
								<ul class="social-links">
									<li><a href="#"><i class="fa-solid fa-x"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="team-prof">
								<h3>{{ $member['name'] }}</h3>
								<span>{{ $member['role'] }}</span>
							</div>
							<div class="sth_det2">
								<span class="ti-file"> <u>{{ $member['courses'] }} Course</u></span>
								<span class="ti-user"> <u>{{ $member['students'] }} Student</u></span>
							</div>
						</div>
					</div><!--- END COL -->
					@endforeach
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END TEAM -->

	<!-- START INSTRUCTOR+FREE COURSE -->
	<section class="insfreecourse section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="single_ins" style="background-image: url({{ asset('assets/img/ins1.png') }});  background-size:cover; background-position: center center;">
						<div class="single_ins_content">
							<h4>Build Your Career</h4>
							<h1>Become an Instructor</h1>
							<p>Learn at your own pace, move the between multiple courses. </p>
							<a class="btn_one" href="#">Apply now <i class="ti-arrow-top-right"></i></a>
						</div>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="single_ins" style="background-image: url({{ asset('assets/img/ins2.png') }});  background-size:cover; background-position: center center;">
						<div class="single_ins_content">
							<h4>Build Your Career</h4>
							<h1>Get Free Courses</h1>
							<p>Learn at your own pace, move the between multiple courses. </p>
							<a class="btn_one" href="#">Contact now <i class="ti-arrow-top-right"></i></a>
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
					<h2>What Student&rsquo;s Say To Do <br />Their Online Course</h2>
				</div>
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-xs-12">
						<div id="testimonial-slider2" class="owl-carousel">
							@foreach ([
								['name' => 'Ajmain Adil', 'company' => 'Groton Inc', 'image' => 'testimonial/1.png'],
								['name' => 'Sharukh Khan', 'company' => 'Red Chili Inc', 'image' => 'testimonial/2.png'],
								['name' => 'Anushka sharma', 'company' => 'Naika Company', 'image' => 'testimonial/3.png'],
								['name' => 'Ajmain Adil', 'company' => 'Groton Inc', 'image' => 'testimonial/4.png'],
								['name' => 'Ajmain Adil', 'company' => 'Groton Inc', 'image' => 'testimonial/5.png'],
							] as $testimonial)
							<div class="testimonial">
								<img src="{{ asset('assets/img/quote.png') }}" alt="" />
								<div class="testimonial_content">
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
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

		<!-- START BLOG -->
		<section id="blog" class="blog_area section-padding">
			<div class="container">
				<div class="section-title text-center">
					<h2>Latest Blog & news</h2>
					<p>We offer a brand new approach to the most basic learning paradigms. Choose from a wide range of learning options and gain new skills! Our school is know.</p>
				</div>
				<div class="row">
					@foreach ($posts as $post)
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_blog">
							<img src="{{ asset('assets/img/'.$post['image']) }}" class="img-fluid" alt="image" />
							<div class="content_box">
								<span>{{ $post['date'] }} | <a href="{{ route('blog') }}">{{ $post['category'] }}</a></span>
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
