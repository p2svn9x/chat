<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ URL::asset('console/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('console/css/hoe.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('console/css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<script>
    var serverName = location.origin+"/";
</script>
<div id="hoeapp-wrapper" class="hoe-hide-lpanel" hoe-device-type="desktop">
    <header id="hoe-header" hoe-lpanel-effect="shrink">
        <div class="hoe-left-header">
            <a href="#"><i class="fa fa-graduation-cap"></i> <span>HOE Navigation Menu</span></a>
            <span class="hoe-sidebar-toggle"><a href="#"></a></span>
        </div>

        @include('console.layouts.header')
    </header>
    <div id="hoeapp-container" hoe-color-type="lpanel-bg2" hoe-lpanel-effect="shrink">
        @include('console.layouts.menuLeft')
        <section id="main-content">
            <div class="content-title">
                <h3 class="main-title">@yield('breadcrumb')</h3>
            </div>
            <div class="inner-content">
                <div class="panel theme-panel">
                    <div class="panel-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div id="fromloading"></div>
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
<script src="{{ asset('console/js/hoe.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>
<script src="{{ asset('js/pagination.js') }}"></script>
</body>
</html>