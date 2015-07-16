@extends('layout.app')
@include('layout.templates.app', array('useContainer' => false))

@section('css')
	@parent
	<style>
		.container {
			text-align: center;
			vertical-align: middle;
		}
		.title {
			font-size: 48px;
			margin-bottom: 40px;
		}
		.quote {
			font-size: 24px;
			margin: 60px 0px 60px 0px;
		}
	</style>
@stop

@section('subheader-title')
    <i class="fa fa-random"></i> VFI
@stop

@section('content')
   @parent
	<div class="container">
		<div class="title">mRcore App</div>
		<a href="http://laravel.com" target="_blank">
			<img src="http://laravel.com/assets/img/laravel-logo.png">
		</a>
		<div class="quote">{{ Inspiring::quote() }}</div>
	</div>
@stop

@section('script')
	@parent
	<script>
		console.log('welcome!');
		notify('notice', 'Welcome!', 'Start creating your new Application!')
	</script>
@stop

@include('layout._partials.notify')