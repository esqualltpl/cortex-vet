<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3  "
       id="sidenav-main"
       style="background-color: #fff;z-index: 999;box-shadow: 0 4px 6px -1px rgb(0 0 0 / 10%), 0 2px 4px -1px rgb(0 0 0 / 6%);">
    <div class="sidenav-header text-center">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a href="javascript:;" target="_blank">
            <img src="{{ asset('portal/assets/img/Logo.png') }}" class="navbar-brand-img " alt="main_logo" style="margin-top: 21px;">
        </a>
    </div>
    <hr class="horizontal mt-0 mb-0" style="border: 1px solid #8D8D8D !important;width: 220px;margin-left: 15px;">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-2 mt-0">
                <a style=" margin-bottom: 3px !important; margin-top: 3px !important; " data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-dark " aria-controls="ProfileNav"
                   role="button" aria-expanded="false">
                    <img src="{{ auth()->user()?->getUserPic() ?? '' }}" class="avatar loginUserProfile" alt="User Profile">
                    <span class="nav-link-text ms-2 ps-1 text-dark">{{ auth()->user()->name ?? '' }}</span>
                </a>
                <div class="collapse" id="ProfileNav" style="">
                    <ul class="nav ">
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="nav-link text-dark logOutBtn " href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); this.closest('form').submit();">
                                    <span class="sidenav-mini-icon"> L </span>
                                    <span class="sidenav-normal ms-3 ps-1"> Logout </span>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
                <hr class="horizontal mb-2 mt-1" style="border: 1px solid #8D8D8D !important;width: 220px;margin-left: 15px;">
            </li>
            {{--<li class="nav-item">
                <a href="{{ route('admin.dashboard') }}"
                   class="nav-link {{ Request::is('admin') ? ' text-white bg-light active' : 'text-dark' }}"
                   style="color:{{ Request::is('admin') ? "#00AB55 !important" : 'color:#3C4856 !important'}};">
                    <i class="material-icons-round float-start"
                       style="color:{{ Request::is('admin') ? "#00AB55 !important" : 'color:#3C4856 !important'}};">dashboard</i>
                    <span class="nav-link-text px-3"
                          style="color:{{ Request::is('admin') ? "#00AB55 !important" : 'color:#3C4856 !important'}};font-weight: 400;">Dashboard</span>
                </a>
            </li>--}}
            <li class="nav-item  active">
                <a class="nav-link active" href="javascript:">
                    <span class="sidenav-mini-icon"><img alt="icon" src="{{ asset('portal/assets/img/dashboard white.png') }}" /></span>
                    <span class="sidenav-normal ms-2 ps-1"> Dashboard </span>
                </a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link" href="javascript:">
                    <span class="sidenav-mini-icon"><img alt="icon" src="{{ asset('portal/assets/img/Veterinary Practitioners purple.png') }}" /></span>
                    <span class="sidenav-normal ms-2 ps-1"> Neuro Assessment </span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="javascript:">
                    <span class="sidenav-mini-icon"><img alt="icon" src="{{ asset('portal/assets/img/patien.png') }}" /></span>
                    <span class="sidenav-normal ms-2 ps-1"> Patients </span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="javascript:">
                    <span class="sidenav-mini-icon"><img alt="icon" src="{{ asset('portal/assets/img/Settings purple.png') }}" /></span>
                    <span class="sidenav-normal ms-2 ps-1"> Settings </span>
                </a>
            </li>
        </ul>
    </div>
</aside>