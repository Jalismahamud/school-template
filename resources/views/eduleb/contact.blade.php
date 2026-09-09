@extends('layouts.eduleb')

@section('title', 'যোগাযোগ - পাশ্চিম ডাগরী আইডিয়াল স্কুল')

@section('content')

		<!-- START SECTION TOP -->
		<section class="section-top">
			<div class="container">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h1>যোগাযোগ করুন</h1>
						<ul>
							<li><a href="{{ route('home') }}">হোম</a></li>
							<li> / যোগাযোগ</li>
						</ul>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END SECTION TOP -->

		<!-- START ADDRESS -->
		<section class="address_area section-padding">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_address sa_one">
							<i class="ti-map"></i>
							<h4>বিদ্যালয়ের ঠিকানা</h4>
							<p>পাশ্চিম ডাগরী, মির্জাপুর<br />গাজীপুর সদর, গাজীপুর</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_address sa_two">
							<i class="ti-mobile"></i>
							<h4>যোগাযোগের নম্বর</h4>
							<p><a href="tel:+8801772849386">01772849386</a></p>
							<p><a href="https://wa.me/8801772849386">হোয়াটসঅ্যাপ</a></p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single_address sa_three">
							<i class="ti-email"></i>
							<h4>বিদ্যালয় সম্পর্কিত তথ্য</h4>
							<p>ভর্তি ও একাডেমিক তথ্য</p>
							<p>সকাল থেকে বিকেল পর্যন্ত ফোনে যোগাযোগ করুন</p>
						</div>
					</div><!-- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END ADDRESS -->

		<!-- CONTACT -->
		<div id="contact" class="contact_area section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="contact">
							@if ($errors->any())
								<div class="alert alert-danger">
									<ul class="mb-0">
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
							@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif
							<form class="form" name="enq" method="POST" action="{{ route('contact.submit') }}">
								@csrf
								<div class="row">
									<div class="form-group col-md-6">
														<label for="name">আপনার নাম</label>
										<input type="text" name="name" class="form-control" value="{{ old('name') }}" required="required">
									</div>
									<div class="form-group col-md-6">
														<label for="email">ইমেইল</label>
										<input type="email" name="email" class="form-control" value="{{ old('email') }}" required="required">
									</div>
									<div class="form-group col-md-12">
														<label for="subject">বিষয়</label>
										<input type="text" name="subject" class="form-control" value="{{ old('subject') }}">
									</div>
									<div class="form-group col-md-12">
														<label for="message">আপনার বার্তা</label>
										<textarea rows="6" name="message" class="form-control" required="required">{{ old('message') }}</textarea>
									</div>
									<div class="col-md-12 text-center">
														<button type="submit" value="Send message" name="submit" id="submitButton" class="btn_one" title="Submit Your Message!">বার্তা পাঠান</button>
									</div>
								</div>
							</form>
						</div>
					</div><!-- END COL  -->
					<div class="col-lg-5 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="contact_info_box">
							<h3>বিদ্যালয় অফিস</h3>
							<p>ভর্তি, শ্রেণি, সময়সূচি ও শিক্ষার্থী সম্পর্কিত তথ্যের জন্য অফিসে যোগাযোগ করুন।</p>
							<p><strong>প্রতিষ্ঠাতা:</strong> আলহাজ্ব মোঃ সুরুজ্জামান মাস্টার</p>
							<a class="btn_one" href="tel:+8801772849386">ফোন করুন <i class="ti-mobile"></i></a>
						</div>
					</div><!-- END COL  -->
				</div><!-- END ROW -->
			</div><!--- END CONTAINER -->
		</div>
		<!-- END CONTACT -->

@endsection
