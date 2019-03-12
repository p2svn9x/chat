<link rel="stylesheet" href="{{ URL::asset('console/css/media.css') }}">
<div class="modal fade" id="mediaCencer" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="media-cencer">
                <div class="row media-heading" style=" margin-right: 0px;margin-left: 0px;">
                    <div class="col-sm-6" style=""><p onclick="media(0)" style="cursor: pointer">Media Center</p>
                        <ul class="breadcrumb" style="background: #fff">

                        </ul>
                    </div>
                    <div class="col-sm-6 button-option">
                        <button type="button" class="btn" data-toggle="modal" data-backdrop="static"
                                data-target="#addFolder">Tạo thư mục mới
                        </button>
                        <button type="button" class="btn" data-toggle="modal" data-backdrop="static"
                                data-target="#uploadImages" onclick="showFormUpload()">Up ảnh
                        </button>
                    </div>
                </div>
                <div class="content-medias">
                    <div class="row">

                        <div id="raper-media-foler">

                        </div>
                        <div id="raper-media-images" style="padding-top: 10px">

                        </div>

                    </div>
                </div>
                <div class="media-bottom">
                    <div>
                        <button type="button" class="btn btn-dark cancel" onclick="closeMedia()">Hủy</button>
                        <button type="button" class="btn btn-warning apply" onclick="addUrlToArray()">Chọn</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="addFolder" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="">
            <p>Tạo thư mục</p>
            <input value="" type="text" id="nameFolder" placeholder="Tên thưc mục">
            <p class="error" style="color: #f00"></p>
            <button type="button" class="btn btn-dark cancel" onclick="closeFolder()">Hủy</button>
            <button type="button" class="btn btn-warning apply" onclick="addFolder()">Lưu</button>
            <span class="iconLoading"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></span>
        </div>
    </div>
</div>

<div class="modal fade" id="uploadImages" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content row" style="">
            <div class="upload-header">
                <p>Upload Image</p>
                <span class="close" onclick="cancelUploadImages()">&times;</span>
            </div>
            <div class="row content-upload">
                <div class="col-sm-4 notice">
                    <p>Hướng dẫn:</p>
                    <p> Độ lớn tối đa - 3MB.</p>
                    <p>Kích thước - 1x1 ~ 460px x 460px.</p>
                    <p>Định dạng - .JPG, .JPEG, .PNG</p>

                </div>
                <div class="col-sm-8">
                    <div id="progress-group" style="display: none">
                        <div class="progress">
                            <div class="progress-bar" style="width: 60%;">
                                Tên file ở đây
                            </div>
                            <div class="progress-text">
                                Tiến trình ở đây
                            </div>
                        </div>
                    </div>
                    <label id="text-select-file" onclick="triggerFile()">Chọn ảnh từ thiết bị của bạn</label>
                    <input type="file" id="fileUploadMedia" multiple="multiple" onchange="doUploadImages()">
                </div>
                <div class="col-sm-12 upload-bottom">
                    <div>
                        <button type="button" class="btn btn-dark cancel" onclick="cancelUploadImages()">Close</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="{{ asset('console/js/media/uploadimages.js') }}?v={{$time}}"></script>
<script src="{{ asset('console/js/media/folder.js') }}?v={{$time}}"></script>
<script src="{{ asset('console/js/media/mediacencer.js') }}?v={{$time}}"></script>
<script src="{{ asset('console/js/media/images.js') }}?v={{$time}}"></script>
