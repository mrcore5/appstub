@extends('layout.app')

@section('css')
	<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	<style>
		.container {
			text-align: center;
			vertical-align: middle;
		}
		.title, .quote {
			font-weight: 100;
			color: #B0BEC5;
			font-family: 'Lato';
		}
		.title {
			font-size: 96px;
			margin-bottom: 40px;
		}
		.quote {
			color: #666;
			font-size: 24px;
			margin: 60px 0px 60px 0px;
		}
	</style>
@endsection


@section('content')
	@parent
	<div class="{{ $container }}">
		<div class="title">mRcore App</div>
		<a href="http://laravel.com" target="_blank">
			<img src="http://laravel.com/assets/img/laravel-logo.png">
		</a>
		<div class="quote">{{ Inspiring::quote() }}</div>
	</div>
@endsection
