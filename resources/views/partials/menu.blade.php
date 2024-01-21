<header class="site-header {{ Request::url() == route('frontend.index') ? 'header-style-3' : 'header-full-width' }}  mobile-sider-drawer-menu ">
    <div class="sticky-header main-bar-wraper  navbar-expand-lg">
        <div class="main-bar">

            <div class="container-fluid clearfix">

                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="{{ route('frontend.index') }}">
                            <img src="{{ asset(setting()->site_logo) }}" alt="{{ setting()->site_name }}">
                        </a>
                    </div>
                </div>


                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                    class="navbar-toggler collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-bar-first"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button>


                <div class="nav-animation custom_canvas header-nav navbar-collapse collapse d-flex justify-content-md-center justify-content-start align-items-center flex-wrap">


                    @auth
                        <div class="user-profile-wrap d-md-none position-relative">
                            <div class="user_profile d-flex flex-wrap justify-content-start align-items-center">
                                <div class="user_profile_item">
                                    <img src="{{ asset(auth()->user()->avatar) }}"
                                        style="object-fit: cover" alt="">
                                </div>
                                <div class="user_profile_item">
                                    <a href="{{ route('both.index') }}">
                                        <h4>{{ auth()->user()->name }}</h4>
                                    </a>
                                    <p>{{ auth()->user()->title }}</p>
                                </div>
                            </div>

                            {{-- <div class="header-widget dashboard-noti-dropdown mobile_notification">

                                <div class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle jobzilla-admin-notification"
                                        id="ID-NOTI_dropdown" data-bs-toggle="dropdown">
                                        <svg class="svg-inline--fa fa-bell" aria-hidden="true" focusable="false"
                                            data-prefix="far" data-icon="bell" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M256 32V49.88C328.5 61.39 384 124.2 384 200V233.4C384 278.8 399.5 322.9 427.8 358.4L442.7 377C448.5 384.2 449.6 394.1 445.6 402.4C441.6 410.7 433.2 416 424 416H24C14.77 416 6.365 410.7 2.369 402.4C-1.628 394.1-.504 384.2 5.26 377L20.17 358.4C48.54 322.9 64 278.8 64 233.4V200C64 124.2 119.5 61.39 192 49.88V32C192 14.33 206.3 0 224 0C241.7 0 256 14.33 256 32V32zM216 96C158.6 96 112 142.6 112 200V233.4C112 281.3 98.12 328 72.31 368H375.7C349.9 328 336 281.3 336 233.4V200C336 142.6 289.4 96 232 96H216zM288 448C288 464.1 281.3 481.3 269.3 493.3C257.3 505.3 240.1 512 224 512C207 512 190.7 505.3 178.7 493.3C166.7 481.3 160 464.1 160 448H288z">
                                            </path>
                                        </svg><!-- <i class="far fa-bell"></i> Font Awesome fontawesome.com -->
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="ID-NOTI_dropdown">


                                        <div class="noti-list dashboard-widget-scroll">
                                            <ul>
                                                <p class=""><small class="text-danger">You Have't Any Unread
                                                        Notification!</small></p>
                                            </ul>

                                            <div class="noti-view-all">
                                                <a href="https://gpsfreelancer.com/all-notifications"
                                                    style="font-size:12px">View All</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                        </div>

                        <li style="float: left; margin-top: -25x;" class="list-unstyled">
                            <div class="user_mode_change_button_mobile d-md-none">
                                <div class="ads-content-overview me-3">
                                    <div class="switch-holder">
                                        <div class="switch-toggle custom-switch">
                                            <input type="checkbox" id="is_hold" onclick="location.href='{{ route('user.role.change') }}';" {{ auth()->user()->role == 'user' ? 'checked' : '' }}>
                                            <label for="is_hold"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endauth

                    <ul class=" nav navbar-nav ">
                        <li>
                            <a href="{{ route('frontend.index') }}">Home</a>
                        </li>
                        <li><a href="{{ route('frontend.about') }}">About</a>
                        </li>
                        <li class="has-child"><a href="javascript:;">Jobs</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('user.groupJobs') }}">Group Jobs</a></li>
                                <li><a href="{{ route('both.gig') }}">Gig</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Marketplace</a></li>
                        <li><a href="#">Notice </a></li>
                        <li class="d-md-none"></li>
                        <li class="d-md-none">
                            <a class="login-canvas-link" href="{{ route('login') }}"><i class="fa fa-sign-in me-2"></i>Login</a>
                        </li>
                    </ul>
                </div>




                @auth
                    <div class="extra-nav header-2-nav">
                        <div class="extra-cell">
                            <div class="header-nav-btn-section">
                                <div class="ads-content-overview me-3">
                                    <div class="switch-holder">
                                        <div class="switch-toggle custom-switch">
                                            <input type="checkbox" id="is_hold" onclick="location.href='{{ route('user.role.change') }}';" {{ auth()->user()->role == 'user' ? 'checked' : '' }}>
                                            <label for="is_hold"></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="ads-content-overview me-3">
                                    <div class="switch-holder">
                                        <div class="twm-nav-btn-right">
                                            <a href="{{ route('gig.create') }}" class="twm-nav-post-a-job">
                                                <i class="feather-briefcase"></i> Post Service
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="header-right">
                                    <ul class="header-widget-wrap">
                                        <!--Message-->



                                        <!--Notification-->
                                        <li class="header-widget dashboard-noti-dropdown">

                                            <div class="dropdown">
                                                <a href="javascript:;" class="dropdown-toggle jobzilla-admin-notification"
                                                    id="ID-NOTI_dropdown" data-bs-toggle="dropdown">
                                                    <svg class="svg-inline--fa fa-bell" aria-hidden="true"
                                                        focusable="false" data-prefix="far" data-icon="bell"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M256 32V49.88C328.5 61.39 384 124.2 384 200V233.4C384 278.8 399.5 322.9 427.8 358.4L442.7 377C448.5 384.2 449.6 394.1 445.6 402.4C441.6 410.7 433.2 416 424 416H24C14.77 416 6.365 410.7 2.369 402.4C-1.628 394.1-.504 384.2 5.26 377L20.17 358.4C48.54 322.9 64 278.8 64 233.4V200C64 124.2 119.5 61.39 192 49.88V32C192 14.33 206.3 0 224 0C241.7 0 256 14.33 256 32V32zM216 96C158.6 96 112 142.6 112 200V233.4C112 281.3 98.12 328 72.31 368H375.7C349.9 328 336 281.3 336 233.4V200C336 142.6 289.4 96 232 96H216zM288 448C288 464.1 281.3 481.3 269.3 493.3C257.3 505.3 240.1 512 224 512C207 512 190.7 505.3 178.7 493.3C166.7 481.3 160 464.1 160 448H288z">
                                                        </path>
                                                    </svg><!-- <i class="far fa-bell"></i> Font Awesome fontawesome.com -->
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="ID-NOTI_dropdown">


                                                    <div class="noti-list dashboard-widget-scroll">
                                                        <ul>
                                                            <p class=""><small class="text-danger">You Have't Any Unread Notification!</small></p>
                                                        </ul>

                                                        <div class="noti-view-all">
                                                            <a href="#" style="font-size:12px">View All</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>



                                        <!--Account-->
                                        <li class="header-widget">
                                            <div class="dashboard-user-section">
                                                <div class="listing-user">
                                                    <div class="dropdown">
                                                        <a href="javascript:;" class="dropdown-toggle"
                                                            id="ID-ACCOUNT_dropdown" data-bs-toggle="dropdown">
                                                            <div class="user-name text-black">
                                                                <span>
                                                                    <img src="{{ asset(auth()->user()->avatar) }}"
                                                                        style="object-fit: cover" alt="">
                                                                </span>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="ID-ACCOUNT_dropdown">

                                                            <ul>
                                                                <li>
                                                                    <a href="{{ route('both.index') }}" class="d-flex  justify-content-start align-items-center">
                                                                        <svg style="width: 22px" class="svg-inline--fa fa-house me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="house" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                                            <path fill="currentColor" d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"> </path>
                                                                        </svg>
                                                                        Dashboard
                                                                    </a>
                                                                </li>

                                                                <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="margin-left: 15px;" class="btn btn outline success btn-sm d-flex  justify-content-start align-items-center" >
                                                                    <svg style="width: 22px" class="svg-inline--fa fa-share-from-square me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-from-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M352 224H305.5c-45 0-81.5 36.5-81.5 81.5c0 22.3 10.3 34.3 19.2 40.5c6.8 4.7 12.8 12 12.8 20.3c0 9.8-8 17.8-17.8 17.8h-2.5c-2.4 0-4.8-.4-7.1-1.4C210.8 374.8 128 333.4 128 240c0-79.5 64.5-144 144-144h80V34.7C352 15.5 367.5 0 386.7 0c8.6 0 16.8 3.2 23.2 8.9L548.1 133.3c7.6 6.8 11.9 16.5 11.9 26.7s-4.3 19.9-11.9 26.7l-139 125.1c-5.9 5.3-13.5 8.2-21.4 8.2H384c-17.7 0-32-14.3-32-32V224zM80 96c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16H400c8.8 0 16-7.2 16-16V384c0-17.7 14.3-32 32-32s32 14.3 32 32v48c0 44.2-35.8 80-80 80H80c-44.2 0-80-35.8-80-80V112C0 67.8 35.8 32 80 32h48c17.7 0 32 14.3 32 32s-14.3 32-32 32H80z">
                                                                        </path>
                                                                    </svg>
                                                                    <span class="text-danger">Logout</span>
                                                                </a>
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                    @csrf
                                                                </form>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="extra-nav header-2-nav">
                        <div class="extra-cell">
                            <div class="header-nav-btn-section">
                                <div class="twm-nav-btn-left">
                                    <a class="twm-nav-sign-up" href="{{ route('login') }}" role="button">
                                        <i class="feather-log-in"></i> Login
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endauth








            </div>
        </div>
    </div>
</header>
