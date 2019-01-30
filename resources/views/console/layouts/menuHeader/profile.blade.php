<ul class="right-navbar">
    <li class="dropdown hoe-rheader-submenu hoe-header-profile">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span><img class="img-circle " src="images/avatar-1.jpg"></span>
            <span>{{$user->name}} <i class=" fa fa-angle-down"></i></span>
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
</ul>