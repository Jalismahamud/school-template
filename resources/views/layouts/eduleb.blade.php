<!DOCTYPE html>
<html lang="bn">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="পাশ্চিম ডাগরী আইডিয়াল স্কুল একটি নিরাপদ, সহায়ক ও মানসম্মত শিক্ষার পরিবেশ গড়ে তুলতে প্রতিশ্রুতিবদ্ধ।">
		<meta name="keywords" content="বিদ্যালয়, শিক্ষা, পাশ্চিম ডাগরী আইডিয়াল স্কুল, মির্জাপুর, গাজীপুর">
		<title>@yield('title', 'পাশ্চিম ডাগরী আইডিয়াল স্কুল')</title>
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
		<link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/fonts/themify-icons.css') }}">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.css') }}">
		<!--jquery-simple-mobilemenu Css-->
		<link rel="stylesheet" href="{{ asset('assets/css/jquery-simple-mobilemenu.css') }}">
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
		<!-- animate CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
		<!-- Style CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/school.css') }}">
		@stack('styles')
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

    <body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
		<div class="preloaders">
			<div class="education-loader" role="status" aria-label="ওয়েবসাইট লোড হচ্ছে">
				<span class="loader-book">
					<span class="loader-page loader-page-left"></span>
					<span class="loader-page loader-page-right"></span>
				</span>
				<span class="loader-pencil"><i></i></span>
			</div>
		</div>
		<!-- END PRELOADER -->

		<!-- START NAVBAR -->
		<div id="navigation" class="navbar-light bg-faded site-navigation">
			<div class="container-fluid">
				<div class="row">
					<div class="col-20 align-self-center">
						<div class="site-logo">
							<a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="Pashchim Dagori Ideal School"></a>
						</div>
					</div><!--- END Col -->

					<div class="col-60 d-flex">
						<nav id="main-menu">
							<ul>
								<li><a href="{{ route('home') }}">হোম</a></li>
								<li><a href="{{ route('about') }}">আমাদের সম্পর্কে</a></li>
								<li><a href="{{ route('instructor') }}">শিক্ষকমণ্ডলী</a></li>
								<li class="menu-item-has-children"><a href="#">অন্যান্য</a>
									<ul>
										<li><a href="{{ route('faq') }}">জিজ্ঞাসা</a></li>
										<li><a href="{{ route('privacy-policy') }}">গোপনীয়তা নীতি</a></li>
										<li><a href="{{ route('terms-and-conditions') }}">শর্তাবলি</a></li>
									</ul>
								</li>
								<li><a href="{{ route('blog') }}">সংবাদ</a></li>
								<li><a href="{{ route('contact') }}">যোগাযোগ</a></li>
							</ul>
						</nav>
					</div><!--- END Col -->

					<div class="col-20 d-none d-xl-block text-end align-self-center">
						<div class="header-contact">
							<span>বিদ্যালয় সংক্রান্ত তথ্যের জন্য</span>
							<a href="tel:+8801772849386">01772-849386</a>
						</div>
					</div><!--- END Col -->

					<ul class="mobile_menu">
						<li><a href="{{ route('home') }}">হোম</a></li>
						<li><a href="{{ route('about') }}">আমাদের সম্পর্কে</a></li>
						<li><a href="{{ route('instructor') }}">শিক্ষকমণ্ডলী</a></li>
						<li><a href="#">অন্যান্য</a>
							<ul class="sub-menu">
								<li><a href="{{ route('faq') }}">জিজ্ঞাসা</a></li>
								<li><a href="{{ route('privacy-policy') }}">গোপনীয়তা নীতি</a></li>
								<li><a href="{{ route('terms-and-conditions') }}">শর্তাবলি</a></li>
							</ul>
						</li>
						<li><a href="{{ route('blog') }}">সংবাদ</a></li>
						<li><a href="{{ route('contact') }}">যোগাযোগ</a></li>
					</ul>
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</div>
		<!-- END NAVBAR -->

		@yield('content')

		<!-- START FOOTER -->
		<div class="footer section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single_footer">
							<a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="Pashchim Dagori Ideal School"></a>
							<p>পাশ্চিম ডাগরী আইডিয়াল স্কুল নিরাপদ ও সহায়ক পরিবেশে মানসম্মত শিক্ষা, সৃজনশীলতা, আত্মবিশ্বাস এবং নৈতিক মূল্যবোধ গড়ে তুলতে কাজ করে।</p>
							<div class="social_profile">
								<ul>
									<li><a class="f_facebook" href="#"><i class="fa-solid fa-x"></i></a></li>
									<li><a class="f_twitter" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a class="f_instagram"href="#"><i class="fa-brands fa-instagram"></i></a></li>
									<li><a class="f_linkedin" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single_footer">
							<h4>বিদ্যালয় সম্পর্কে</h4>
							<ul>
								<li><a href="{{ route('about') }}">আমাদের সম্পর্কে</a></li>
								<li><a href="{{ route('instructor') }}">আমাদের শিক্ষক</a></li>
								<li><a href="{{ route('faq') }}">সাধারণ জিজ্ঞাসা</a></li>
								<li><a href="{{ route('privacy-policy') }}">গোপনীয়তা নীতি</a></li>
								<li><a href="{{ route('terms-and-conditions') }}">শর্তাবলি</a></li>
								<li><a href="{{ route('contact') }}">যোগাযোগ করুন</a></li>
							</ul>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single_footer">
							<h4>যোগাযোগের তথ্য</h4>
							<div class="sf_contact">
								<span class="ti-map"></span>
								<p>পাশ্চিম ডাগরী, মির্জাপুর, গাজীপুর সদর, গাজীপুর</p>
							</div>
							<div class="sf_contact">
								<span class="ti-mobile"></span>
								<p><a href="tel:+8801772849386">+880 1772-849386</a></p>
							</div>
							<div class="sf_contact">
								<span class="ti-mobile"></span>
								<p><a href="https://wa.me/8801772849386">হোয়াটসঅ্যাপে যোগাযোগ</a></p>
							</div>
						</div>
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</div>
		<!-- END FOOTER -->

		<!-- START FOOTER COPYRIGHT -->
		<div class="foot_copy">
			<div class="footer_copyright">
				<p>&copy; {{ date('Y') }}। পাশ্চিম ডাগরী আইডিয়াল স্কুল। সর্বস্বত্ব সংরক্ষিত।</p>
			</div>
		</div>
		<!-- END FOOTER COPYRIGHT -->

	<!-- Latest jQuery -->
		<script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
	<!-- Latest compiled and minified Bootstrap -->
		<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- modernizer JS -->
		<script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
	<!-- jquery-simple-mobilemenu.min -->
		<script src="{{ asset('assets/js/jquery-simple-mobilemenu.js') }}"></script>
	<!-- owl-carousel min js  -->
		<script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
	<!-- magnific-popup js -->
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- countTo js -->
		<script src="{{ asset('assets/js/jquery.inview.min.js') }}"></script>
	<!-- scrolltopcontrol js -->
		<script src="{{ asset('assets/js/scrolltopcontrol.js') }}"></script>
	<!-- WOW - Reveal Animations When You Scroll -->
		<script src="{{ asset('assets/js/wow.min.js') }}"></script>
	<!-- scripts js -->
		<script src="{{ asset('assets/js/scripts.js') }}"></script>
		@stack('scripts')
    </body>
</html>
