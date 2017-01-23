@extends('front.master')
@section('body')
@if ( strtotime(Carbon\Carbon::today()->format('d/m/Y H:i')) >= strtotime(getenv('APPLICATION_END_DATE')))
    @include('front.home.end_game')
@else

@endif
@stop
@section('extend-scripts')

@stop