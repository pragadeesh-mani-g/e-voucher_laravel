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

    <!-- Morris Charts CSS -->
    <link href="{{ asset('dashboard/vendors/bower_components/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />

    <!-- Data table CSS -->
    <link href="{{ asset('dashboard/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('dashboard/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('dashboard/dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!-- /Preloader -->
    <div class="wrapper theme-1-active pimary-color-red">
        @extends('nav')
        <!-- Left Sidebar Menu -->
        <div class="fixed-sidebar-left">
            <ul class="nav navbar-nav side-nav nicescroll-bar">
                <li class="navigation-header">
                    <span>Dashboard</span>
                    <i class="zmdi zmdi-more"></i>
                </li>
                <li>
                    <a class="active" href="{{ url('home') }}">
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
                    <span>Users</span>
                    <i class="zmdi zmdi-more"></i>
                </li>
                <li>
                    <a href="{{ route('add_user') }}">
                        <div class="pull-left"><i class="zmdi zmdi-account-add mr-20"></i><span class="right-nav-text">Add Users</span></div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('view_user_list') }}">
                        <div class="pull-left"><i class="zmdi zmdi-view-list-alt mr-20"></i><span class="right-nav-text">View Users</span></div>
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
                    <a href="{{ route('view_voucher_list') }}">
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
            <div class="container-fluid pt-25">
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default card-view pa-0">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box bg-red">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                    <span class="txt-light block counter"><span class="counter-anim">55</span></span>
                                                    <span class="weight-500 uppercase-font txt-light block font-13">Voucher <br> Generated</span>
                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                    <i class="zmdi zmdi-label txt-light data-right-rep-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default card-view pa-0">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box bg-red">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                    <span class="txt-light block counter"><span class="counter-anim">25</span></span>
                                                    <span class="weight-500 uppercase-font txt-light block font-13">Voucher <br> Chennai</span>
                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                    <i class="zmdi zmdi-google-maps txt-light data-right-rep-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default card-view pa-0">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box bg-red">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                    <span class="txt-light block counter"><span class="counter-anim">25</span></span>
                                                    <span class="weight-500 uppercase-font txt-light block font-13">Voucher <br> Coimbartore</span>
                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                    <i class="zmdi zmdi-google-maps txt-light data-right-rep-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default card-view pa-0">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box bg-red">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                    <span class="txt-light block counter"><span class="counter-anim">25</span></span>
                                                    <span class="weight-500 uppercase-font txt-light block font-13">Voucher <br> Redeemed</span>
                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                    <i class="zmdi zmdi-mood txt-light data-right-rep-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

    <!-- Data table JavaScript -->
    <script src="{{ asset('dashboard/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('dashboard/dist/js/jquery.slimscroll.js') }}"></script>

    <!-- simpleWeather JavaScript -->
    <script src="{{ asset('dashboard/vendors/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('dashboard/dist/js/simpleweather-data.js') }}"></script>

    <!-- Progressbar Animation JavaScript -->
    <script src="{{ asset('dashboard/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/bower_components/jquery.counterup/jquery.counterup.min.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('dashboard/dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- Sparkline JavaScript -->
    <script src="{{ asset('dashboard/vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>

    <!-- Owl JavaScript -->
    <script src="{{ asset('dashboard/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- ChartJS JavaScript -->
    <script src="{{ asset('dashboard/vendors/chart.js/Chart.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('dashboard/vendors/bower_components/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/bower_components/morris.js/morris.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>

    <!-- Switchery JavaScript -->
    <script src="{{ asset('dashboard/vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('dashboard/dist/js/init.js') }}"></script>
    <script src="{{ asset('dashboard/dist/js/dashboard-data.js') }}"></script>
</body>

</html>