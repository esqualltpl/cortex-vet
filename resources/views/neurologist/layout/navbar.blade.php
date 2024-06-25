<nav class="navbar navbar-main navbar-expand-lg mt-4 top-1 px-0 mx-1 shadow-none border-radius-xl z-index-sticky"
     data-scroll="true">
    <div class="container-fluid py-1 px-3">
        @yield('breadcrumb')
        <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
            <a href="javascript:;" class="nav-link text-body p-0">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                </div>
            </a>
        </div>
        @php
            $getNotificationArray = \App\Helpers\Notifications::GetAllNotifications();
            $getNotifications = $getNotificationArray['notification'];
            $getNotificationCount = $getNotificationArray['count'] ?? 0;
        @endphp
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item dropdown pe-2 mt-3 {{ $getNotificationCount > 0 ? 'me-3' : 'me-0' }} active-notifications">
                    <a href="javascript:;" class="nav-link text-body p-0 position-relative"
                       id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-icons cursor-pointer">
                            notifications
                        </i>
                        @if($getNotificationCount > 0)
                        <span class="position-absolute top-5 start-100 translate-middle badge rounded-pill bg-danger border border-white small py-1 px-2 active-notifications-counter">
                            <span class="small">{{ $getNotificationCount }}</span>
                            <span class="visually-hidden">unread notifications</span>
                        </span>
                        @endif
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end p-3 me-sm-n4"
                        aria-labelledby="dropdownMenuButton">
                        <h6 style="margin-top: -20px;">
                            Notifications
                        </h6>
                        @if(count($getNotifications) > 0)
                            @foreach($getNotifications as $getNotification)
                                <li class="mb-2 card" style="box-shadow: 2px 4px 10px rgba(0, 0, 0, .1);">
                                    <a class="dropdown-item border-radius" href="{{ route('neurologist.consultation.request') }}">
                                        <div class="d-flex align-items-center py-2">
                                            {{--<i class="fa fa-user-circle" aria-hidden="true"></i>--}}
                                            <div class="col-md-1 mt-1">
                                                <img src="{{ $getNotification->userInfo?->getUserPic() ?? asset('portal/assets/img/no-image.png') }}"
                                                     alt="icon"
                                                     style="width: 45px;height: 45px;border-radius:300px"/>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="text-sm font-weight-normal my-auto">
                                                    {!! $getNotification->message ?? '' !!}
                                                </h6>
                                            </div>
                                            <div class="ms-5 opacity-5"><small>{{ $getNotification->created_at?->diffForHumans() ?? '' }}</small></div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        @else
                            <li class="mb-2 pt-3">
                                <h6 class="text-sm font-weight-normal my-auto" style="width: 350px;text-align: center;">
                                    No notification found.
                                </h6>
                            </li>
                        @endif
                    </ul>
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
                <li class="nav-item">
                    <a href="{{ route('neurologist.settings') }}" class="nav-link text-body p-0 position-relative" {{--target="_blank"--}}>
                        <img alt="profile image" src="{{ auth()->user()?->getUserPic() ?? '' }}" class="avatar profile-image-show" width="40px">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>