
@extends('console.layouts.master')
@section('title', 'Thuộc tính / Thêm mới')
@section('breadcrumb','Category')
@section('content')
    <div id="list_item" style="display: block;">
        <button type="button" class="btn btn-primary" id="add_item" onclick="addItem();">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm mới
        </button>
        <div class="alert alert-success" id="danger_alert"
             style="display: none;padding:7px;margin: 0px; width: 85%;float: right;">
            <strong></strong> <span id="alert_nam"></span>
        </div>

        <div class="ountPagination">
            <ul class="pagination">
            </ul>
        </div>
    </div>

    <script src="{{ asset('console/js/category.js') }}?v={{$time}}"></script>
@endsection
