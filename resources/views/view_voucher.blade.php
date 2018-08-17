<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>VDD E-Voucher</title>
    <!-- <meta name="description" content="Hound is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Hound Admin, Houndadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/> -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('dashboard/dist/img/favicon.png') }}">
    <link rel="icon" href="{{ asset('dashboard/dist/img/favicon.png') }}" type="image/png">

    <!-- Owl CSS -->
    <link href="{{ asset('dashboard/vendors/bower_components/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashboard/vendors/bower_components/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('dashboard/dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <!--Preloader-->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!--/Preloader-->
    <div class="wrapper theme-1-active pimary-color-red">
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
                                <a href="#"><i class="zmdi zmdi-account"></i><span>{{ Auth::user()->name }}</span></a>
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

        <!-- Left Sidebar Menu -->
        <div class="fixed-sidebar-left">
            <ul class="nav navbar-nav side-nav nicescroll-bar">
                <li class="navigation-header">
                    <span>Dashboard</span>
                    <i class="zmdi zmdi-more"></i>
                </li>
                <li>
                    <a href="{{ url('home') }}">
                        <div class="pull-left"><i class="zmdi zmdi-view-dashboard mr-20"></i><span class="right-nav-text">Dashboard</span></div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <!-- <li class="navigation-header">
					<span>Admin</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="add-admin.php">
						<div class="pull-left"><i class="zmdi zmdi-account-add mr-20"></i><span class="right-nav-text">Add Admin</span></div>
						<div class="clearfix"></div>
					</a>
				</li>
				<li>
					<a href="admin-list.php">
						<div class="pull-left"><i class="zmdi zmdi-view-list-alt mr-20"></i><span class="right-nav-text">View Admin</span></div>
						<div class="clearfix"></div>
					</a>
				</li>
				<li class="navigation-header">
					<span>User</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="add-user.php">
						<div class="pull-left"><i class="zmdi zmdi-account-add mr-20"></i><span class="right-nav-text">Add User</span></div>
						<div class="clearfix"></div>
					</a>
				</li>
				<li>
					<a href="user-list.php">
						<div class="pull-left"><i class="zmdi zmdi-view-list-alt mr-20"></i><span class="right-nav-text">View User</span></div>
						<div class="clearfix"></div>
					</a>
				</li> -->
                <li class="navigation-header">
                    <span>User</span>
                    <i class="zmdi zmdi-more"></i>
                </li>
                <li>
                    <a href="{{ route('add_user') }}">
                        <div class="pull-left"><i class="zmdi zmdi-account-add mr-20"></i><span class="right-nav-text">Add User</span></div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('view_user_list') }}">
                        <div class="pull-left"><i class="zmdi zmdi-view-list-alt mr-20"></i><span class="right-nav-text">View User</span></div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="navigation-header">
                    <span>Voucher</span>
                    <i class="zmdi zmdi-more"></i>
                </li>
                <!-- <li>
					<a href="add-voucher.php">
						<div class="pull-left"><i class="zmdi zmdi-account-add mr-20"></i><span class="right-nav-text">Add Voucher</span></div>
						<div class="clearfix"></div>
					</a>
				</li> -->
                <li>
                    <a class="active" href="{{ route('view_voucher_list') }}">
                        <div class="pull-left"><i class="zmdi zmdi-view-list-alt mr-20"></i><span class="right-nav-text">View Voucher</span></div>
                        <div class="clearfix"></div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /Left Sidebar Menu -->

        <!-- Right Sidebar Backdrop -->
        <div class="right-sidebar-backdrop"></div>
        <!-- /Right Sidebar Backdrop -->

        <!-- Main Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Title -->
                <div class="row heading-bg">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h5 class="txt-dark">Voucher</h5>
                    </div>
                    <!-- Breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('home') }}">Dashboard</a></li>
                            <li><a href="{{ route('view_voucher_list') }}"><span>Voucher List</span></a></li>
                            <li class="active"><span>Voucher</span></li>
                        </ol>
                    </div>
                    <!-- /Breadcrumb -->
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default card-view">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <!-- <h6 class="panel-title txt-dark">Bootstrap carousel without caption</h6> -->
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <!-- START carousel-->
                                    <div id="carousel-example-captions-1" data-ride="carousel" class="carousel slide">
                                        <div role="listbox" class="carousel-inner">
                                            <div class="item active">
                                                <p class="voucher-code">78945612</p>
                                                <img src="{{ asset('dashboard/dist/img/big/img7.jpg') }}" alt="Third slide image">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END carousel-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>

            <!-- Footer -->
            <footer class="footer container-fluid pl-30 pr-30">
                <div class="row">
                    <div class="col-sm-12">
                        <p> <a href="http://www.viswadevji.in/" target="_blank">Viswa And Devji</a>© Copyright 2018 | All Rights Rerved | Designed & Developed By <a href="http://episodetechnologies.com/" target="_blank">Episode Technologies</a></p>
                    </div>
                </div>
            </footer>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <script src="{{ asset('dashboard/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('dashboard/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Owl JavaScript -->
    <script src="{{ asset('dashboard/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- Owl Init JavaScript -->
    <script src="{{ asset('dashboard/dist/js/owl-data.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('dashboard/dist/js/jquery.slimscroll.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('dashboard/dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- Switchery JavaScript -->
    <script src="{{ asset('dashboard/vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('dashboard/dist/js/init.js') }}"></script>

</body>

</html>