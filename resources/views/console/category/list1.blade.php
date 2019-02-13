
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
                <th style="width: 80%">Tiều đề</th>
                <th class="viewMobile viewMobile1Adddress">Sắp xếp</th>
                <th class="status_item">Trạng thái</th>
                <th class="status_edit" colspan="2">Tùy chọn</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $stt = 1;
            foreach ($list AS $k => $v) {

                $status = 'checked';
                if (empty($v['status'])) {
                    $status = '';
                }
                $name = $v["name"];
                if (!empty($v['parentName'])) {
                    $name = $v['parentName'].' <i class="fa fa-long-arrow-right"></i> '.$v["name"];
                }
                echo '
                                    <tr id="colum'.$k.'">
                                        <td class="name_item stt" width="10px">'.$stt.'</td>
                                        <td class="name_item">'. $name.'</td>

                                        <td class="name_item viewMobile viewMobile1Logo" width="80">
                                            <input type="text" class="form-control sort" onblur="updateSort(' . $v['id'] . ', this)" rel="' . $v['id'] . '" value="' . $v['sort'] . '" />
                                        </td>
                                       <td class="name_item">
                                            <div class="switch switchStatus">
                                                <input id="cmn-toggle-baryn-'.$k.'" rel="'.$v["id"].'" title="'.$k.'" class="cmn-toggle cmn-toggle-round-flat" type="checkbox" '.$status.'>
                                                <label for="cmn-toggle-baryn-'.$k.'"></label>
                                            </div>
                                        </td>
                                        <td class="status_edit"><i class="fa fa-pencil" aria-hidden="true" onclick="editCategory('.$v["id"].')"></i></td>
                                        <td class="status_edit headcol">
                                            <i class="fa fa-trash-o delete" style=" margin-top: -3px;color:#f00" onclick="fomDelete('.$v["id"].','.$k.')"></i>
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

    <div id="fomDeleteUser" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button><br/>
                </div>
                <div class="modal-body">
                    <p class="textDanger">Bạn có chắc chắn muốn xóa không?</p>
                </div>
                <div class="modal-footer" id="deleu" style="text-align: center;">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="deleteUser()">Có</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Không</button>
                </div>
            </div>
        </div>
    </div>

    @include('console.category.from')
    <script src="{{ asset('console/js/category.js') }}?v={{$time}}"></script>
@endsection
