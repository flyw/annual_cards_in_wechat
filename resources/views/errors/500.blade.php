@extends('errors::layout')

@section('title', 'Error')

{{--@section('message', 'Whoops, looks like something went wrong.')--}}

@section('message')
    500
    <br/><br/>
    服务器出错，请联系您的管理员
@stop
