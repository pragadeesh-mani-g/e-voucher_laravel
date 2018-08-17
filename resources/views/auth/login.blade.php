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

    <!-- vector map CSS -->
    <link href="{{ asset('dashboard/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{ asset('dashboard/dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <!--Preloader-->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!--/Preloader-->

    <div class="wrapper pa-0">
        <header class="sp-header">
            <div class="sp-logo-wrap pull-left">
                <!-- <a href="index.php">
						<img class="brand-img mr-10" src="dist/img/logo.png" alt="brand"/>
						<span class="brand-text"><img class="brand-img mr-10" src="dist/img/logoword.png" alt="brand"/></span>
					</a> -->
            </div>
            <div class="form-group mb-0 pull-right">
                <!-- <span class="inline-block pr-10">Don't have an account?</span>
					<a class="inline-block btn btn-info btn-rounded btn-outline" href="signup.html">Sign Up</a> -->
            </div>
            <div class="clearfix"></div>
        </header>

        <!-- Main Content -->
        <div class="page-wrapper pa-0 ma-0 auth-page">
            <div class="container-fluid">
                <!-- Row -->
                <div class="table-struct full-width full-height">
                    <div class="table-cell vertical-align-middle auth-form-wrap">
                        <div class="auth-form  ml-auto mr-auto no-float">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="mb-30">
                                        <h3 class="text-center txt-dark mb-10"><img src="{{ asset('dashboard/dist/img/fulllogo.png') }}" alt=""></h3>
                                        <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                                    </div>
                                    <div class="form-wrap">
                                        <form action="#" method="POST" action="{{ route('login') }}">
                                            {{ csrf_field() }}
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label class="control-label mb-10" for="email">Email address</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}" required autofocus> @if ($errors->has('email'))
                                                <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span> @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label class="pull-left control-label mb-10" for="password">Password</label>
                                                <a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="{{ route('password.request') }}">forgot password ?</a>
                                                <div class="clearfix"></div>
                                                <input type="password" class="form-control" id="password" placeholder="Enter pwd" name="password" required> @if ($errors->has('password'))
                                                <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span> @endif
                                            </div>

                                            <div class="form-group">
                                                <div class="checkbox checkbox-primary pr-10 pull-left">
                                                    <input type="checkbox" id="remember" name="remember" {{ old( 'remember') ? 'checked' : '' }}>
                                                    <label for="remember"> Remember Me</label>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-info btn-rounded">sign in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <script src="{{ asset('dashboard/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('dashboard/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('dashboard/dist/js/jquery.slimscroll.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('dashboard/dist/js/init.js') }}"></script>
</body>

</html>