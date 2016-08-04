@extends('layout.app')
@include('layout.templates.app', array('useContainer' => false))
@include('layout._partials.interior-navigation')
@include('layout._partials.notify')

@section('css')
	@parent
	<style>
		.quoteBox {
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
    <i class="fa fa-star"></i> mRcore App
@stop

@section('content')
	@yield('template')
@stop

@section('script')
	@parent
@stop
