<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOE Responsive Bootstrap sidebar Menu</title>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/hoe.css" rel="stylesheet">

</head>
<body>
<div id="hoeapp-wrapper" class="hoe-hide-lpanel" hoe-device-type="desktop">
    <header id="hoe-header" hoe-lpanel-effect="shrink">
        <div class="hoe-left-header">
            <a href="#"><i class="fa fa-graduation-cap"></i> <span>HOE Navigation Menu</span></a>
            <span class="hoe-sidebar-toggle"><a href="#"></a></span>
        </div>

        <div class="hoe-right-header" hoe-position-type="relative" >
            <span class="hoe-sidebar-toggle"><a href="#"></a></span>
            <ul class="left-navbar">
                <li class="dropdown hoe-rheader-submenu message-notification">
                    <a href="#" class="dropdown-toggle icon-circle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge badge-danger">5</span>
                    </a>
                    <ul class="dropdown-menu ">
                        <li class="hoe-submenu-label">
                            <h3>You have <span class="bold">5</span> New Messages <a href="#">view all</a></h3>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <img src="images/avatar-1.jpg" class="img-circle notification-avatar" alt="Avatar">
                                <span class="notification-title">Nanterey Reslaba</span>
                                <span class="notification-ago  ">3 min ago</span>
                                <p class="notification-message">Hi James, Don't go anywhere, i will be coming soon. </p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <img src="images/avatar-2.jpg" class="img-circle notification-avatar" alt="Avatar">
                                <span class="notification-title">Polly Paton</span>
                                <span class="notification-ago  ">5 min ago</span>
                                <p class="notification-message">Hi James, Everything is working just fine here. </p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <img src="images/avatar-3.jpg" class="img-circle notification-avatar" alt="Avatar">
                                <span class="notification-title">Smith Doe</span>
                                <span class="notification-ago  ">8 min ago</span>
                                <p class="notification-message">Please mail me the all files when you complete your task.</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <img src="images/avatar-4.jpg" class="img-circle notification-avatar" alt="Avatar">
                                <span class="notification-title">Zoey Lombardo</span>
                                <span class="notification-ago  ">15 min ago</span>
                                <p class="notification-message">Hi James, How are you?</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <img src="images/avatar-5.jpg" class="img-circle notification-avatar" alt="Avatar">
                                <span class="notification-title">Alan Doyle</span>
                                <span class="notification-ago  ">30 min ago</span>
                                <p class="notification-message">Call me when you complete your work.</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown hoe-rheader-submenu message-notification left-min-30">
                    <a href="#" class="dropdown-toggle icon-circle" data-toggle="dropdown" >
                        <i class="fa fa-bell-o"></i>
                        <span class="badge badge-success">6</span>
                    </a>
                    <ul class="dropdown-menu ">
                        <li class="hoe-submenu-label">
                            <h3><span class="bold">6 pending</span> Notification <a href="#">view all</a></h3>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <i class="fa fa-database red-text"></i>
                                <span class="notification-title">Database overload- Sav3090</span>
                                <span class="notification-ago  ">3 min ago</span>
                                <p class="notification-message">Database overload due to incorrect queries</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <i class="fa fa-exchange green-text"></i>
                                <span class="notification-title">Installing App v1.2.1</span>
                                <span class="notification-ago  ">60 % Done</span>
                                <p class="notification-message">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:60%"> 60%
                                    </div>
                                </div>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <i class="fa fa-exclamation-triangle red-text"></i>
                                <span class="notification-title">Application Error - Sav3085</span>
                                <span class="notification-ago  ">10 min ago</span>
                                <p class="notification-message">failed to initialize the application due to error weblogic.application.moduleexception</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <i class="fa fa-server yellow-text"></i>
                                <span class="notification-title">Server Status - Sav3080</span>
                                <span class="notification-ago  ">30GB Free Space</span>
                                <p class="notification-message">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" style="width:40%">

                                    </div>
                                    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:10%">

                                    </div>
                                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%">

                                    </div>
                                </div>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <i class="fa fa-cogs green-text"></i>
                                <span class="notification-title">Application Configured</span>
                                <span class="notification-ago  ">30 min ago</span>
                                <p class="notification-message">Your setting is updated on server Sav3060</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <i class="fa fa-server blue-text"></i>
                                <span class="notification-title">Server Status</span>
                                <span class="notification-ago  ">300GB Free Space</span>
                                <p class="notification-message">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" style="width:80%">
                                        Free Space
                                    </div>
                                </div>
                                </p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="dropdown hoe-rheader-submenu message-notification left-min-65">
                    <a href="#" class="dropdown-toggle icon-circle" data-toggle="dropdown" >
                        <i class="fa fa-tasks"></i>
                        <span class="badge badge-danger">4</span>
                    </a>
                    <ul class="dropdown-menu ">
                        <li class="hoe-submenu-label">
                            <h3> You have <span class="bold">4 </span>pending Task <a href="#">view all</a></h3>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <img alt="Avatar" class="img-circle notification-avatar" src="images/avatar-1.jpg">
                                <span class="notification-title"> Smith Doe Assigned new task </span>
                                <span class="notification-ago-1 ">5 min ago</span>
                                <p class="notification-message">Provide an Overview key mention characteristics for selected Keyword.</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <img alt="Avatar" class="img-circle notification-avatar" src="images/avatar-2.jpg">
                                <span class="notification-title"> Polly Paton Done his work</span>
                                <span class="notification-ago-1 ">10 min ago</span>
                                <p class="notification-message">Polly Paton has completed his work. please assign her new task. </p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <img alt="Avatar" class="img-circle notification-avatar" src="images/avatar-5.jpg">
                                <span class="notification-title">Alan Installing App v1.2.1</span>
                                <span class="notification-ago-1 ">15 min ago</span>
                                <p class="notification-message">
                                    Alan Installing App v1.2.1 on server Sav3080
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:60%"> 60%
                                    </div>
                                </div>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <img alt="Avatar" class="img-circle notification-avatar" src="images/avatar-4.jpg">
                                <span class="notification-title"> Zoey Lombardo like your task</span>
                                <span class="notification-ago-1 ">20 min ago</span>
                                <p class="notification-message">Zoey Lombardo like your server installation task.</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <form method="post" class="hoe-searchbar">
                        <input type="text" placeholder="Search..." name="keyword" class="form-control">
                        <span class="search-icon"><i class="fa fa-search"></i></span>
                    </form>
                </li>

            </ul>

            <ul class="right-navbar">
                <li class="dropdown hoe-rheader-submenu hoe-header-profile">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span><img class="img-circle " src="images/avatar-1.jpg"></span>
                        <span>James <b>Bond</b> <i class=" fa fa-angle-down"></i></span>
                    </a>
                    <ul class="dropdown-menu ">
                        <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                        <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i>My Inbox  <span class="badge badge-danger">
							3 </span></a></li>
                        <li><a href="#"><i class="fa fa-rocket"></i>My Tasks <span class="badge badge-success">
							7 </span></a></li>
                        <li><a href="#"><i class="fa fa-lock"></i>Lock Screen</a></li>
                        <li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
                    </ul>
                </li>
                <li class="dropdown hoe-rheader-submenu hidden-xs">
                    <a href="#" class="dropdown-toggle icon-circle" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                </li>
            </ul>

        </div>
    </header>
    <div id="hoeapp-container" hoe-color-type="lpanel-bg2" hoe-lpanel-effect="shrink">
        <aside id="hoe-left-panel" hoe-position-type="absolute">
            <div class="profile-box">
                <div class="media">
                    <a class="pull-left" href="user-profile.html">
                        <img class="img-circle" src="images/avatar-1.jpg">
                    </a>
                    <div class="media-body">
                        <h5 class="media-heading">Welcome <span>James</span></h5>
                        <small>UX Designer</small>
                    </div>
                </div>
            </div>
            <ul class="nav panel-list">
                <li class="nav-level">Navigation</li>
                <li class="active">
                    <a href="javascript:void(0)">
                        <i class="fa fa-tachometer"></i>
                        <span class="menu-text">Dashboard</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="fa fa-bar-chart"></i>
                        <span class="menu-text">Graphs</span>
                        <span class="label sul">New</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="hoe-has-menu">
                    <a href="javascript:void(0)">
                        <i class="fa fa-files-o"></i>
                        <span class="menu-text">Other Pages</span>
                        <span class="selected"></span>
                    </a>
                    <ul class="hoe-sub-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <span class="menu-text">Blank Page</span>
                                <span class="selected"></span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="hoe-has-menu">
                    <a href="javascript:void(0)">
                        <i class="fa fa-files-o"></i>
                        <span class="menu-text">Other Pages</span>
                        <span class="selected"></span>
                    </a>
                    <ul class="hoe-sub-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <span class="menu-text">Blank Page</span>
                                <span class="selected"></span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="hoe-has-menu">
                    <a href="javascript:void(0)">
                        <i class="fa fa-files-o"></i>
                        <span class="menu-text">Other Pages</span>
                        <span class="selected"></span>
                    </a>
                    <ul class="hoe-sub-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <span class="menu-text">Blank Page</span>
                                <span class="selected"></span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="hoe-has-menu">
                    <a href="javascript:void(0)">
                        <i class="fa fa-files-o"></i>
                        <span class="menu-text">Other Pages</span>
                        <span class="selected"></span>
                    </a>
                    <ul class="hoe-sub-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <span class="menu-text">Blank Page</span>
                                <span class="selected"></span>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </aside>
        <section id="main-content">
            <div class="content-title">
                <h3 class="main-title">Sidebar Menu</h3>
                <span>Sidebar Features</span>
            </div>
            <div class="inner-content">
                <div class="panel theme-panel">
                    <div class="panel-heading">
                            <span class="panel-title">
								SideBar Menu Feature <i class="fa fa-bullhorn"></i>
							</span>
                    </div>
                    <div class="panel-body">
                        <div class="row clearfix">
                            <div class="col-md-3 column">
                                <div class="feature-box">
                                    <span class="feature-icon"><i class="fa fa-code"></i></span>
                                    <h4>One Code for All Device </h4>
                                    <span>One code used for all device</span>
                                </div>
                            </div>
                            <div class="col-md-3 column">
                                <div class="feature-box">
                                    <span class="feature-icon"><i class="fa fa-mobile"></i></span>
                                    <h4>Fully Responsive</h4>
                                    <span>Desktops, Tablets and Mobile</span>
                                </div>
                            </div>
                            <div class="col-md-3 column">
                                <div class="feature-box">
                                    <span class="feature-icon"><i class="fa fa-th-list"></i></span>
                                    <h4>Minimized Menu </h4>
                                    <span>Minimized Menu on Toggle</span>
                                </div>
                            </div>
                            <div class="col-md-3 column">
                                <div class="feature-box">
                                    <span class="feature-icon"><i class="fa fa-list-alt"></i></span>
                                    <h4>Responsive SubMenu</h4>
                                    <span>4 level SubMenu added</span>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 column">
                                <div class="feature-box">
                                    <span class="feature-icon"><i class="fa fa-file-code-o"></i></span>
                                    <h4>Light weight</h4>
                                    <span>Using Minified CSS File </span>
                                </div>
                            </div>
                            <div class="col-md-3 column">
                                <div class="feature-box">
                                    <span class="feature-icon"><i class="fa fa-css3"></i></span>
                                    <h4>Jquery/CSS3 animations</h4>
                                    <span>Using Jquery,CSS3,Animation</span>
                                </div>
                            </div>
                            <div class="col-md-3 column">
                                <div class="feature-box">
                                    <span class="feature-icon"><i class="fa fa-flag"></i></span>
                                    <h4>Vector icons</h4>
                                    <span>Using Font Awesome Web font</span>
                                </div>
                            </div>
                            <div class="col-md-3 column">
                                <div class="feature-box">
                                    <span class="feature-icon"><i class="fa fa-angellist"></i></span>
                                    <h4>Collapsible menu</h4>
                                    <span>Collapsible menu in Tablets </span>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 column">
                                <div class="feature-box">
                                    <span class="feature-icon"><i class="fa fa-file-text"></i></span>
                                    <h4>Well documentation</h4>
                                    <span>Step by step instructions to use menu</span>
                                </div>
                            </div>
                            <div class="col-md-3 column">
                                <div class="feature-box">
                                    <span class="feature-icon"><i class="fa fa-life-ring"></i></span>
                                    <h4>Free Support</h4>
                                    <span>you Can contact me in my profile</span>
                                </div>
                            </div>
                            <div class="col-md-3 column">
                                <div class="feature-box">
                                    <span class="feature-icon"><i class="fa fa-pencil-square-o"></i></span>
                                    <h4>Easy to use/customizable</h4>
                                    <span>Well coded Easy to use in website</span>
                                </div>
                            </div>
                            <div class="col-md-3 column">
                                <div class="feature-box">
                                    <span class="feature-icon"><i class="fa fa-eye"></i></span>
                                    <h4>Coming Soon</h4>
                                    <span>Theme Option Coming Soon</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/1.11.2.jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/hoe.js"></script>
</body>


<!-- Mirrored from gohooey.com/demo/sidebar/bootstrapnavigation/hoedemo.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Jun 2016 18:35:07 GMT -->
</html>