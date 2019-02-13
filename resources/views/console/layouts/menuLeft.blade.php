<aside id="hoe-left-panel" hoe-position-type="absolute">
    <div class="profile-box">
        <div class="media">
            <a class="pull-left" href="user-profile.html">
                <img class="img-circle" src="{{URL::to('/console')}}/images/avatar-1.jpg">
            </a>
            <div class="media-body">
                <h5 class="media-heading">{{$user->name}}</h5>
                <small>{{$user->email}}</small>
            </div>
        </div>
    </div>
    <ul class="nav panel-list">
        <li class="nav-level">Navigation</li>
        <li class="active">
            <a href="{{URL::route('console/dashboard')}}">
                <i class="fa fa-tachometer"></i>
                <span class="menu-text">Dashboard</span>
                <span class="selected"></span>
            </a>
        </li>
        <li  class="hoe-has-menu">
            <a href="javascript:void(0)">
                <i class="fa fa-bar-chart"></i>
                <span class="menu-text">Danh mục</span>
                <span class="selected"></span>
            </a>
            <ul class="hoe-sub-menu">
                <li>
                    <a href="{{URL::route('console/category/product')}}">
                        <span class="menu-text">Sản phẩm</span>
                        <span class="selected"></span>
                    </a>
                </li>

            </ul>
        </li>
        <li class="hoe-has-menu">
            <a href="javascript:void(0)">
                <i class="fa fa-files-o"></i>
                <span class="menu-text">Thuộc tính</span>
                <span class="selected"></span>
            </a>
            <ul class="hoe-sub-menu">
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">Danh sách thuộc tính</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">Danh sách thuộc tính</span>
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