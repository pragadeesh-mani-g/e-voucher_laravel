 <!-- Top Menu Items -->
 <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="mobile-only-brand pull-left">
                <div class="nav-header pull-left">
                    <div class="logo-wrap">
                        <a href="{{ url('/home') }}">
                            <img class="brand-img" src="{{ asset('dashboard/dist/img/logo.png') }}" alt="brand" />
                            <span class="brand-text"><img class="brand-img mr-10" src="{{ asset('dashboard/dist/img/logoword.png') }}" alt="brand"/></span>
                        </a>
                    </div>
                </div>
                <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
                <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
            </div>
            <div id="mobile_only_nav" class="mobile-only-nav pull-right">
                <ul class="nav navbar-right top-nav pull-right">
                    <li class="dropdown auth-drp">
                        <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="{{ asset('dashboard/dist/img/user1.png') }}" alt="user_auth" class="user-auth-img img-circle" /><span class="user-online-status"></span></a>
                        <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                            <li class="sub-menu">
                                <a href="#"><i class="zmdi zmdi-account"></i><span>{{ Auth::user()->fullname }}</span></a>
                            </li>
                            <li class="divider"></li>
                            <li class="sub-menu">
                                <a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /Top Menu Items -->