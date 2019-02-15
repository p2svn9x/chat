
@extends('console.layouts.master')
@section('title', 'Thuộc tính')
@section('breadcrumb','Thuộc tính / Danh sách')
@section('content')
    <div id="list_item" style="display: block;">
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
                $name = $attribute['categorys']["name"];

                echo '
                                    <tr id="colum'.$key.'">
                                        <td class="name_item stt" width="10px">'.$stt.'</td>
                                        <td class="name_item">'. $name.'</td>
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

@endsection
