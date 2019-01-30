<div class="hoe-right-header" hoe-position-type="relative" >
    <span class="hoe-sidebar-toggle"><a style="cursor: pointer"></a></span>
    <ul class="left-navbar">
        @include('console.layouts.menuHeader.messages')
        @include('console.layouts.menuHeader.notification')
        @include('console.layouts.menuHeader.cardNotification')


        <li style="display: none">
            <form method="post" class="hoe-searchbar">
                <input type="text" placeholder="Search..." name="keyword" class="form-control">
                <span class="search-icon"><i class="fa fa-search"></i></span>
            </form>
        </li>

    </ul>
    @include('console.layouts.menuHeader.profile')


</div>