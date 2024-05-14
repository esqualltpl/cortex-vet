<nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-1">
        @yield('breadcrumb')
        <div class="sidenav-toggler sidenav-toggler-inner d-xl-block  d-none">
            <a href="javascript:;" class="nav-link text-body p-0">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                </div>
            </a>
        </div>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="col-lg-11 px-4">
                <div class="main">
                    <div class="form-group has-search">
                        {{--<span class="fa fa-search form-control-feedback" aria-hidden="true"></span>
                        <input type="text" class="form-control search" placeholder="Search">--}}

                    </div>
                </div>
            </div>

            <ul class="navbar-nav text-end">

                {{-- <li class="nav-item  pe-3 pt-2">
                     <a href="javascript:;" class="nav-link text-body p-0 position-relative" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                         <i class="material-icons cursor-pointer">
                             notifications
                         </i>
                     </a>
                 </li>--}}
                {{--<a href="javascript:;">

                </a>--}}
                <li class="nav-item">
                    <a href="javascript:" class="nav-link text-body p-0 position-relative" target="_blank">
                        <img src="{{ auth()->user()?->getUserPic() ?? '' }}" class="avatar" width="40px">
                    </a>
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>