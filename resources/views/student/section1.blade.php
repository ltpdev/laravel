@extends('layout')
@section('header')
    @parent
    header
@stop
@section('sidebar')
    @parent
    slidebar
@stop
@section('content')
    @parent
    <a href="{{ url('url') }}">url</a><br>
    <a href="{{ action('StudentController@urlTest') }}">url</a><br>
    <a href="{{ route('url') }}">url</a>
@stop