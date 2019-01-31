@extends('console.layouts.master')
@section('title', 'Category')
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
        <table class="table table-hover">
            <thead>
            <tr>
                <th>STT.</th>
                <th style="width: 50%">Tiều đề</th>

                <th class="viewMobile viewMobile1Adddress">Sắp xếp</th>
                <th class="status_item">Trạng thái</th>
                <th class="status_edit">Sửa</th>
                <th class="status_edit">Xóa</th>
            </tr>
            </thead>
            <tbody>


            </tbody>
        </table>
        <div class="ountPagination">
            <ul class="pagination">
            </ul>
        </div>
    </div>
    @include('console.category.from')
@endsection
<script src="js/category.js"></script>