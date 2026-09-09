@extends('layouts.eduleb')

@section('title', 'সাধারণ জিজ্ঞাসা - পাশ্চিম ডাগরী আইডিয়াল স্কুল')

@section('content')

		<!-- START SECTION TOP -->
		<section class="section-top">
			<div class="container">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h1>সাধারণ জিজ্ঞাসা</h1>
						<ul>
							<li><a href="{{ route('home') }}">হোম</a></li>
							<li> / সাধারণ জিজ্ঞাসা</li>
						</ul>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END SECTION TOP -->

		<!-- START FAQ -->
		<section class="faq_area section-padding">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-7 col-sm-12 col-xs-12">
						<div class="accordion" id="accordionExample">
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
							  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								ভর্তি সম্পর্কে কীভাবে জানতে পারি?
							  </button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								ভর্তি, শ্রেণি ও প্রয়োজনীয় কাগজপত্র সম্পর্কে জানতে বিদ্যালয়ের নম্বরে ফোন করুন অথবা যোগাযোগ পেজের ফর্ম ব্যবহার করুন।
							  </div>
							</div>
						  </div><!-- END ACCORDION ITEM  -->
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								বিদ্যালয়ের ঠিকানা কোথায়?
							  </button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								পাশ্চিম ডাগরী, মির্জাপুর, গাজীপুর সদর, গাজীপুরে আমাদের বিদ্যালয় অবস্থিত।
							  </div>
							</div>
						  </div><!-- END ACCORDION ITEM  -->
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								বিদ্যালয়ের সঙ্গে কীভাবে যোগাযোগ করব?
							  </button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								01772849386 নম্বরে ফোন করুন অথবা হোয়াটসঅ্যাপের মাধ্যমে বার্তা পাঠান।
							  </div>
							</div>
						  </div><!-- END ACCORDION ITEM  -->
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								শিক্ষার্থীর অগ্রগতি কীভাবে জানানো হয়?
							  </button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								শ্রেণিকাজ, বাড়ির কাজ, উপস্থিতি ও মূল্যায়নের ভিত্তিতে শিক্ষার্থীর অগ্রগতি পর্যবেক্ষণ করা হয়। প্রয়োজন হলে অভিভাবকের সঙ্গে যোগাযোগ করা হয়।
							  </div>
							</div>
						  </div><!-- END ACCORDION ITEM  -->
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingFive">
							  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
								প্রতিষ্ঠানটি কে প্রতিষ্ঠা করেছেন?
							  </button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								পাশ্চিম ডাগরী আইডিয়াল স্কুল প্রতিষ্ঠা করেছেন আলহাজ্ব মোঃ সুরুজ্জামান মাস্টার।
							  </div>
							</div>
						  </div><!-- END ACCORDION ITEM  -->
						</div>
					</div><!-- END COL  -->
					<div class="col-lg-5 col-sm-12 col-xs-12">
						<div class="faq_img">
							<img src="{{ asset('assets/img/faq.jpg') }}" alt="faq image" />
						</div>
					</div>
				</div><!--END  ROW  -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END FAQ -->

@endsection
