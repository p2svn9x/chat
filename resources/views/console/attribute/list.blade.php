
@extends('console.layouts.master')
@section('title', 'Thuộc tính')
@section('breadcrumb','Thuộc tính / Danh sách')
@section('content')
    <div id="list_item" style="display: block;">
        <select class="form-control selectCategory" onchange="findByCategory()">
            <?php
            echo '<option value="0">Danh mục sản phẩm</option>';
            foreach ($categorys as $category ) {

                echo '<option value="'.$category['id'].'" id="location'.$category['id'].'" class ="selectLocation"> '.$category['name'].'</option>';
            }
            ?>
        </select>
        <div class="alert alert-success" id="danger_alert"
             style="display: none;padding:7px;margin: 0px; width: 85%;float: right;">
            <strong></strong> <span id="alert_nam"></span>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>STT.</th>
                <th style="width: 80%">Tiều đề</th>
                <th class="viewMobile viewMobile1Adddress">Sắp xếp</th>
                <th class="status_item">Trạng thái</th>
                <th class="status_edit" colspan="2">Tùy chọn</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $stt = 1;
            foreach ($attributes AS $key => $attribute) {

                $status = 'checked';
                if (empty($attribute['status'])) {
                    $status = '';
                }
                $name = $attribute['categorys']["parent"];

                echo '
                                    <tr id="colum'.$key.'">
                                        <td class="name_item stt" width="10px">'.$stt.'</td>
                                        <td class="name_item">'. $name.'</td>
                                        <td class="name_item viewMobile viewMobile1Logo" width="80">
                                            <input type="text" class="form-control sort" onblur="updateSort(' . $attribute['id'] . ', this)" rel="' . $attribute['id'] . '" value="' . $attribute['sort'] . '" />
                                        </td>
                                        <td class="name_item">
                                            <div class="switch switchStatus">
                                                <input id="cmn-toggle-baryn-'.$key.'" rel="'.$attribute["id"].'" title="'.$key.'" class="cmn-toggle cmn-toggle-round-flat" type="checkbox" '.$status.'>
                                                <label for="cmn-toggle-baryn-'.$key.'"></label>
                                            </div>
                                        </td>
                                        <td class="status_edit"><a href="'.URL::route("console/attribute/edit").'/'.$attribute["id"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                        <td class="status_edit headcol">
                                            <i class="fa fa-trash-o delete" style=" margin-top: -3px;color:#f00" onclick="fomDelete('.$attribute["id"].','.$key.')"></i>
                                        </td>
                                    </tr>';
                $stt ++;
            }
            ?>
            </tbody>
        </table>
        <div class="ountPagination">
            <ul class="pagination">
            </ul>
        </div>
    </div>
    <script>
        var pageList = '<?php echo  json_encode($pagination)?>';
        var findCategory = '<?php echo $findCategory?>';
    </script>

    <script src="{{ asset('console/js/attribute/list.js') }}?v={{$time}}"></script>
@endsection
