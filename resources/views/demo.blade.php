
@extends('test')

@section('title', 'demo')
@section('content')
    @foreach($stt AS $value)
        {{$value}}
    @endforeach

@stop

@section('tes12')
    @foreach($stt AS $value)
        {{$value}}
    @endforeach

@stop
