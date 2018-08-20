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

    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
    <!-- Data table CSS -->
    <link href="{{ asset('dashboard/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />

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
        @extends('nav')
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
                        <h5 class="txt-dark">Admin Table</h5>
                    </div>
                    <!-- Breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('home') }}">Dashboard</a></li>
                            <li class="active"><span>Voucher Table</span></li>
                        </ol>
                    </div>
                    <!-- /Breadcrumb -->
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default card-view">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table id="example" class="table table-hover display  pb-30">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Full Name</th>
                                                        <th>Email Id</th>
                                                        <th>Mobile Number</th>
                                                        <th>Location</th>
                                                        <th>Voucher Code</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Full Name</th>
                                                        <th>Email Id</th>
                                                        <th>Mobile Number</th>
                                                        <th>Location</th>
                                                        <th>Voucher Code</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><a class="view-voucher" href="{{ route('view_voucher')}}">Pragadeesh</a></td>
                                                        <td>pragadeesh@thegang.in</td>
                                                        <td>7548872319</td>
                                                        <td>Coimbatore</td>
                                                        <td>78945612</td>
                                                        <td><a class="btn btn-danger btn-xs">Redeem</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
    <script src="{{ asset('dashboard/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/bower_components/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/bower_components/pdfmake/build/vfs_fonts.js') }}"></script>

    <script src="{{ asset('dashboard/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('dashboard/dist/js/export-table-data.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('dashboard/dist/js/jquery.slimscroll.js') }}"></script>

    <!-- Owl JavaScript -->
    <script src="{{ asset('dashboard/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- Switchery JavaScript -->
    <script src="{{ asset('dashboard/vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('dashboard/dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('dashboard/dist/js/init.js') }}"></script>

</body>

</html>