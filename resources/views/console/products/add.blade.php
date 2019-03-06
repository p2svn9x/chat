
@extends('console.layouts.master')
@section('title', $title)
@section('breadcrumb', $breadcrumb)
@section('content')
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('console/js/jscolor.js') }}"></script>

    <link rel="stylesheet" href="{{ URL::asset('console/css/products.css') }}">
    <div id="additem1" style="display: block">
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
        <div class="form-group">
            <label for="">Tên danh mục *</label>
            <input type="text" class="form-control input_add_item" id="name">
        </div>

        <div class="form-group">
            <label for="">Mô tả sản phẩm
                <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="bottom"  title="Phần Mô tả sản phẩm cung cấp những thông tin hữu ích về sản phẩm để giúp khách hàng quyết định mua sắm."></i>
                <span class="required">*</span>
            </label>
            <textarea type="text" class="form-control input_add_item" id="discriptions"></textarea>
        </div>


        <div class="form-group">
            <label for="">Nội dung sản phẩm
                <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="bottom"  title="Phần Mô tả sản phẩm cung cấp những thông tin hữu ích về sản phẩm để giúp khách hàng quyết định mua sắm."></i>
                <span class="required">*</span>
            </label>
            <textarea type="text" class="form-control input_add_item" id="content"></textarea>
        </div>
        <div class="form-group">
            <label for="">Bảo hành</label>
            <input type="text" class="form-control input_add_item" id="cuarantee">
        </div>
        <div class="form-group rowClom">
            <div class="col-sm-2"><label for="">Chọn màu sách</label></div>
            <div class="col-sm-10 isColor">
                <div class="colorTagImg">
                </div>
                <div class="group-color" id="colorDefault">
                    <input id="inputColorDefault" value="fff" type="hidden">
                    <button id="setCodeDefault" class ="jscolor {valueElement:'inputColorDefault'} buttonColor"></button>
                    <button type="button" class="btn btn-success" id="add_item" onclick="addColor()">Thêm màu</button>
                </div>
            </div>
        </div>

        <div class="alert alert-danger" id="dangerStatus" style="display: none">
            <strong></strong> <span id="textStatusAlert"></span>
        </div>
        <br/>
        <br/>
        <input type="hidden" class="form-control input_add_item" id="idAttribute" value=""/>
        <button type="button" class="btn btn-primary" id="add_item" onclick="save()">Lưu lại</button>
        <button type="submit" class="btn btn-default" onclick="cancelAdd()">Hủy</button>
    </div>
    @include('console.medias.index')
    <script src="{{ asset('console/js/productions/color.js') }}"></script>
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        CKEDITOR.replace('content')
        //CKEDITOR.instances['content'].destroy(true);
    </script>

@endsection

