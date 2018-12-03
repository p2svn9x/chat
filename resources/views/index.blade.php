
@extends('test')
@section('title', 'dashboad')
@section('content')
    <table>
    @foreach($data AS $value)
        <tr>
            <td>  {{$value['id']}}</td>
            <td>  {{$value['name']}}</td>
            <td>  {{$value['img']}}</td>
            <td>  {{$value['status']}}</td>
            <td>  {{$value['sort']}}</td>
        </tr>
    @endforeach
    </table>
@stop

