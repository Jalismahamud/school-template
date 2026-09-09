@if (($teachers ?? collect())->isNotEmpty())
<!-- START BOARD OF DIRECTORS -->
<section class="board_section">
	<div class="container">
		<div class="section-title text-center">
			<h2>আমাদের শিক্ষক ও পরিচালনা</h2>
		</div>
		<div class="row justify-content-center">
			@foreach ($teachers as $teacher)
			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="board_card">
					<div class="board_photo">
						@if ($teacher->photo)
							<img src="{{ asset('storage/'.$teacher->photo) }}" alt="{{ $teacher->name }}">
						@else
							<img src="{{ asset('assets/img/team/team1.jpg') }}" alt="{{ $teacher->name }}">
						@endif
					</div>
					@if ($teacher->designation)
						<div class="board_designation">{{ $teacher->designation }}</div>
					@endif
					<div class="board_name">{{ $teacher->name }}</div>
					@if ($teacher->phone)
						<div class="board_phone">{{ $teacher->phone }}</div>
					@endif
				</div>
			</div><!--- END COL -->
			@endforeach
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
<!-- END BOARD OF DIRECTORS -->
@endif
