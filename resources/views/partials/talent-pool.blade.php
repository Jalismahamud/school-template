@if (($students ?? collect())->isNotEmpty())
<!-- START TALENT POOL -->
<section class="talent_section section-padding">
	<div class="container">
		<div class="section-title text-center">
			<h2>Talent Pool</h2>
			<p>Students who achieved outstanding results and made us proud.</p>
		</div>
		<div class="row">
			@foreach ($students as $student)
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="talent_card">
					<div class="talent_photo">
						@if ($student->photo)
							<img src="{{ asset('storage/'.$student->photo) }}" alt="{{ $student->name }}">
						@else
							<img src="{{ asset('assets/img/team/team1.jpg') }}" alt="{{ $student->name }}">
						@endif
					</div>
					<div class="talent_name">{{ $student->name }}</div>
				</div>
			</div><!--- END COL -->
			@endforeach
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
<!-- END TALENT POOL -->
@endif
