@extends('layouts.eduleb')

@section('title', 'Your Mail Has Been Send Successfully - Eduleb')

@section('content')

<style>
	.welcome-area {
		position: relative;
		height: 500px;
		background:#1a2237;
	}
	.welcome-area .hero-text{
		margin-top:150px;
	}
	.welcome-area .hero-text h1 {
		color: #35ac39;
		font-size: 60px;
		font-weight: 500;
		line-height: 70px;
		margin-bottom:60px;
		position: relative;
		text-transform: capitalize;
	}
	.back-home{
		background:#ffd234;
		border: 2px solid #ffd234;
		border-radius: 500px;
		color: #000;
		font-weight: 600;
		position: relative;
		margin: 15px 15px 0;
		padding: 12px 36px;
		text-transform: uppercase;
		transition: all 0.2s ease 0s;
	}
	.back-home:hover,
	.back-home:focus {
		background: #ffd234;
		color: #000;
		border: 2px solid #ffd234;
		text-decoration: none;
	}
</style>

	<section class="welcome-area" style="background-image: url({{ asset('assets/img/bg/1.jpg') }});  background-size:cover; background-position: center center;">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-sm-12 col-xs-12 text-center">
					<div class="hero-text">
						<h1>Your Mail Has Been Send Successfully.</h1>
						<a class="back-home" href="{{ route('home') }}">Back To Home</a>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
