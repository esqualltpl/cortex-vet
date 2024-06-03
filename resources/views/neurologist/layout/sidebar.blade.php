<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3  "
       id="sidenav-main"
       style="background-color: #fff;z-index: 999;box-shadow: 0 4px 6px -1px rgb(0 0 0 / 10%), 0 2px 4px -1px rgb(0 0 0 / 6%);">
    <div class="sidenav-header text-center">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a href="javascript:;" target="_blank">
            <img src="{{ asset('portal/assets/img/Logo.png') }}" alt="main_logo" style="margin-top: 10px;width: 95px;">
        </a>
    </div>
    <hr class="horizontal mt-0 mb-0" style="border: 1px solid #8D8D8D !important;width: 220px;margin-left: 15px;">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-2 mt-0">
                <a style=" margin-bottom: 3px !important; margin-top: 3px !important; " data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-dark " aria-controls="ProfileNav"
                   role="button" aria-expanded="false">
                    <img src="{{ auth()->user()?->getUserPic() ?? '' }}" class="avatar loginUserProfile profile-image-show" alt="User Profile">
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
            <li class="nav-item {{ Request::is('neurologist') ? ' active' : '' }}">
                <a class="nav-link {{ Request::is('neurologist') ? ' active' : '' }}" href="{{ route('neurologist.dashboard') }}">
                    <span class="sidenav-mini-icon">
                        <img src="{{ Request::is('neurologist') ? asset("portal/assets/img/dashboard white.png") : asset("portal/assets/img/Dashboard purple.png") }}" alt="icon"/>
                    </span>
                    <span class="sidenav-normal ms-2 ps-1"> Dashboard </span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('neurologist/consultation/request') || Request::is('neurologist/consultation/request/*') ? ' active' : '' }}">
                <a class="nav-link {{ Request::is('neurologist/consultation/request') || Request::is('neurologist/consultation/request/*') ? ' active' : '' }}" href="{{ route('neurologist.consultation.request') }}">
                    <span class="sidenav-mini-icon">
                        <img src="{{ Request::is('neurologist/consultation/request') || Request::is('neurologist/consultation/request/*') ? asset("portal/assets/img/Consultation Request white.png") : asset("portal/assets/img/Consultation Request purple.png") }}" alt="icon"/>
                    </span>
                    <span class="sidenav-normal ms-2 ps-1"> Consultation Request </span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('neurologist/patient/*') ? ' active' : '' }}">
                <a class="nav-link {{ Request::is('neurologist/patient/*') ? ' active' : '' }}" href="{{ route('neurologist.patients') }}">
                    <span class="sidenav-mini-icon">
                        <img src="{{ Request::is('neurologist/patient/*') ? asset("portal/assets/img/Patients white.png") : asset("portal/assets/img/Patients purple.png") }}" alt="icon"/>
                    </span>
                    <span class="sidenav-normal ms-2 ps-1"> Patients </span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('neurologist/settings') || Request::is('neurologist/settings/*') ? ' active' : '' }}">
                <a class="nav-link {{ Request::is('neurologist/settings') || Request::is('neurologist/settings/*') ? ' active' : '' }}" href="{{ route('neurologist.settings') }}">
                    <span class="sidenav-mini-icon">
                        <img src="{{ Request::is('neurologist/settings') || Request::is('neurologist/settings/*') ? asset("portal/assets/img/settings white.png") : asset("portal/assets/img/Settings purple.png") }}" alt="icon"/>
                    </span>
                    <span class="sidenav-normal ms-2 ps-1"> Settings </span>
                </a>
            </li>
        </ul>
    </div>
</aside>