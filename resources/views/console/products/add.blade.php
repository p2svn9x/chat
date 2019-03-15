
@extends('console.layouts.master')
@section('title', $title)
@section('breadcrumb', $breadcrumb)
@section('content')
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('console/js/jscolor.js') }}"></script>

    <link rel="stylesheet" href="{{ URL::asset('console/css/products.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('console/css/daterangepicker.css') }}">
    <div id="additem1" style="display: block">
        <div class="form-group">
            <label for="subDomain" id="titleAddMenu">Danh mục sản phẩm</label>
            <select class="form-control input_add_item" id="category" onchange="getDataAttribute()">
                <?php
                echo '<option value="">Danh mục sản phẩm</option>';
                foreach ($categorys as $category ) {

                    echo '<option value="'.$category['id'].'" id="location'.$category['id'].'" class ="selectLocation"> '.$category['name'].'</option>';
                }
                ?>
            </select>
            <span id="categoryError" class="error"></span>
        </div>
        <div class="form-group">
            <label for="">Tên danh mục *</label>
            <input type="text" class="form-control input_add_item" id="nameProduct">
            <span id="nameProductError" class="error"></span>
        </div>
        <div class="form-group">
            <label for="">Avartar *</label>
            <div id="tagAvartar" onclick="chooseAvartar()"> 
                <img src="">
            </div>
            <input type="hidden" class="form-control input_add_item" id="avartar">
            <span id="avartarError" class="error"></span>
        </div>

        <div class="form-group">
            <label for="">Mô tả sản phẩm
                <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="bottom"  title="Phần Mô tả sản phẩm cung cấp những thông tin hữu ích về sản phẩm để giúp khách hàng quyết định mua sắm."></i>
                <span class="required">*</span>
            </label>
            <textarea type="text" class="form-control input_add_item" id="discriptions"></textarea>
            <span id="discriptionsError" class="error"></span>
        </div>
        <div class="form-group">
            <label for="">Bảo hành</label>
            <input type="text" class="form-control input_add_item" id="cuarantee">
            <span id="cuaranteeError" class="error"></span>
        </div>

        <div class="form-group price">
            <label for="">Giá</label>
            <input type="number" class="form-control input_add_item" id="price">
            <select id="currency">
                <option value="1">VND</option>
                <option value="2">USD</option>
            </select>
            <span id="priceError" class="error"></span>
        </div>

        <div class="form-group price">
            <label for="">Giảm giá</label>
            <input type="number" class="form-control input_add_item" id="sale">
            <span id="saleError" class="error"></span>
            <select id="currenSale">
                <option value="1">VND</option>
                <option value="2">USD</option>
                <option value="3">%</option>
            </select>

            <div class="datepickerDashboard">
                <label for="">Thới gian giảm giá</label>
                <input type="text" id="startEndDate" class="dateInpuut" name="daterange" value="02/13/2016-02/15/2017">
            </div>

        </div>

        <div class="form-group">
            <label for="">Nội dung sản phẩm
                <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="bottom"  title="Phần Mô tả sản phẩm cung cấp những thông tin hữu ích về sản phẩm để giúp khách hàng quyết định mua sắm."></i>
                <span class="required">*</span>
            </label>
            <textarea type="text" class="form-control" id="content"></textarea>
            <span id="contentError" class="error"></span>
        </div>
        <div id="attribute">

        </div>
        <div class="form-group rowClom">
            <div class="col-sm-2"><label for="">Chọn màu sách</label></div>
            <div class="col-sm-10 isColor">
                <div class="colorTagImg">
                </div>
                <div class="group-color" id="colorDefault">
                    <input id="inputColorDefault" value="FFE3E3" type="hidden">
                    <button id="setCodeDefault" class ="jscolor {valueElement:'inputColorDefault'} buttonColor"></button>
                    <button type="button" class="btn btn-success" id="add_item" onclick="addColor()">Thêm màu</button>
                </div>
                <span id="rowClomError" class="error" style="display: block; clear: both;"></span>
            </div>
        </div>

        <div class="alert alert-danger" id="dangerStatus" style="display: none">
            <strong></strong> <span id="textStatusAlert"></span>
        </div>
        <br/>
        <br/>
        <input type="hidden" class="form-control input_add_item" id="idAttribute" value=""/>
        <input type="hidden" class="form-control input_add_item" id="idProduct" value="0"/>
        <button type="button" class="btn btn-primary" id="add_item" onclick="save()">Lưu lại</button>
        <button type="submit" class="btn btn-default" onclick="cancelAdd()">Hủy</button>
    </div>
    @include('console.medias.index')
    <script src="{{ asset('console/js/productions/color.js') }}"></script>
    <script src="{{ asset('console/js/productions/images.js') }}?v={{$time}}"></script>
    <script src="{{ asset('console/js/productions/save.js') }}?v={{$time}}"></script>
    <script src="{{ asset('console/js/productions/attribute.js') }}?v={{$time}}"></script>
    <script src="{{ asset('console/js/moment.min.js') }}?v={{$time}}"></script>
    <script src="{{ asset('console/js/daterangepicker.js') }}?v={{$time}}"></script>
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        CKEDITOR.replace('content')
        //CKEDITOR.instances['content'].destroy(true);
        var defaultStartDate = '02/13/2019 ';
        var defaultEndDate = '03/15/2019';
        var dataValide = '03/16/2019';
        $('input#startEndDate').daterangepicker({
            startDate: defaultStartDate,
            endDate: defaultEndDate
        },
            //'repostDashboard()', 'dateDashboard', 'endDashboard');
            '', 'dateDashboard', 'endDashboard');
    </script>

@endsection

