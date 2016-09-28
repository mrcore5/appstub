@extends('appstub::layout')


@section('css')
    @parent
@stop

@section('title')
    Welcome
@stop

@section('page-title')
     mRcore Application
@stop

@section('page-subtitle')
    Your new mRcore Application
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
