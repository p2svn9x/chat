
@extends('console.layouts.master')
@section('title', 'Thuộc tính')
@section('breadcrumb','Thuộc tính / Thêm mới')
@section('content')
    <div id="additem" style="display: block">
        <div class="form-group">
            <label for="subDomain" id="titleAddMenu">Danh mục sản phẩm</label>
            <select class="form-control input_add_item" id="category">
                <?php
                echo '<option value="">Danh mục sản phẩm</option>';
                foreach ($categorys as $category ) {

                    echo '<option value="'.$category['id'].'" id="location'.$category['id'].'" class ="selectLocation"> '.$category['name'].'</option>';
                }
                ?>
            </select>
        </div>
        <div id="result">
        </div>

        <div class="form-group" style="height: 35px;">
            <button type="button" class="btn btn-primary" id="add_item" onclick="addAttribute('')">
                <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm mới
            </button>

        </div>
        <div class="alert alert-danger" id="dangerStatus" style="display: none">
            <strong></strong> <span id="textStatusAlert"></span>
        </div>
        <input type="hidden" class="form-control input_add_item" id="idAttribute" value="{{$id}}"/>
        <button type="button" class="btn btn-primary" id="add_item" onclick="save()">Lưu lại</button>
        <button type="submit" class="btn btn-default" onclick="cancelAdd()">Hủy</button>
    </div>
    <link rel="stylesheet" href="{{ URL::asset('console/css/attribute.css') }}">
    <script src="{{ asset('console/js/attribute/add.js') }}?v={{$time}}"></script>
    <script src="{{ asset('console/js/attribute/show.js') }}?v={{$time}}"></script>
@endsection
