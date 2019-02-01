<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/hoe.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
<script src="js/1.11.2.jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hoe.js"></script>
<script src="js/hoe.js"></script>
<script src="../js/all.js"></script>
</body>
</html>