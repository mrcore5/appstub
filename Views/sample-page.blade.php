@extends('appstub::sample-layout')
@include('layout._partials.interior-navigation')

@section('css')
    @parent
@stop

@section('wb-content')
	@yield('interior-navigation')
	<div class="quoteBox">
		<div class="title">mRcore Application</div>
		<a href="http://laravel.com" target="_blank">
			<img src="http://laravel.com/assets/img/laravel-logo.png">
		</a>
		<div class="quote">{{ Inspiring::quote() }}</div>
	</div>
@stop

@section('script')
	@parent
@stop
	