@extends('appstub::layout')


@section('css')
	@parent
@stop

@section('title')
	{{ $page->title }}
@stop

@section('page-title')
 	{{ $page->title }}
@stop

@section('page-subtitle')
	{{ $page->subtitle }}
@stop

@section('wb-content')
	@yield('interior-navigation')
	<div class="quoteBox">
		<div class="title">mRcore Application</div>
		<a href="http://laravel.com" target="_blank">
			<img src="{{ asset('app/mrcore/appstub/images/laravel-logo.png') }}">
		</a>
	</div>
@stop

@section('script')
	@parent
	<script>
		$(function() {
			console.log('welcome!');
			notify('notice', 'Welcome!', 'Start creating your new mRCore Application!')
		});
	</script>

@stop
