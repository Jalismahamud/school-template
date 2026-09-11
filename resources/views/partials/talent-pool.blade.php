@if (($students ?? collect())->isNotEmpty())
<section class="talent_section section-padding">
	<div class="container">
		<div class="student-result-heading text-center">
			<h2>২০২৫ সালের প্রাথমিক বৃত্তি পরীক্ষার সাফল্য</h2>
			<p>বৃত্তিপ্রাপ্ত (সাধারণ গ্রেড) কৃতী শিক্ষার্থী</p>
		</div>
		<div class="row justify-content-center">
			@foreach ($students as $student)
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="student-result-card">
					<div class="student-result-photo">
						@if ($student->photo)
							<img src="{{ asset('storage/'.$student->photo) }}" alt="{{ $student->name }}">
						@else
							<img src="{{ asset('assets/img/team/team1.jpg') }}" alt="{{ $student->name }}">
						@endif
					</div>
					<div class="student-result-name">{{ $student->name }}</div>
					@if ($student->result_title)
						<div class="student-result-title">{{ $student->result_title }}</div>
					@endif
					@if ($student->role_number)
						<div class="student-result-roll">পরীক্ষা রোল: {{ $student->role_number }}</div>
					@endif
				</div>
			</div><!--- END COL -->
			@endforeach
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
@endif
