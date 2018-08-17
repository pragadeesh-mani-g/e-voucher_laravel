<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
    <meta name="author" content="Ansonika"> -->
    <title>VDD E-Voucher</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('website/img/favicon.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('website/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('website/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('website/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('website/img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('website/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('website/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('website/css/responsive.css')}}" rel="stylesheet">
    <link href="{{ asset('website/css/menu.css')}}" rel="stylesheet">
    <link href="{{ asset('website/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('website/css/icon_fonts/css/all_icons_min.css')}}" rel="stylesheet">
    <link href="{{ asset('website/css/skins/square/grey.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('website/css/custom.css')}}" rel="stylesheet">

    <script src="{{ asset('website/js/modernizr.js')}}"></script>
    <!-- Modernizr -->

</head>

<body>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- /Preload -->

    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div>
    <!-- /loader_form -->

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <div id="logo_home">
                        <h1><a href="{{ url('/') }}">VDD E-Voucher</a></h1>
                    </div>
                </div>
                <div class="col-9">
                    <div id="social">
                        <ul>
                            <li><a href="#0"><i class="icon-facebook"></i></a></li>
                            <li><a href="#0"><i class="icon-twitter"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social -->
                </div>
            </div>
        </div>
        <!-- container -->
    </header>
    <!-- End Header -->

    <main>
        <div id="form_container">
            <div class="row">
                <div class="col-lg-5">
                    <div id="left_form">
                        <figure><img src="{{ asset('website/img/vddlogo.svg')}}" alt=""></figure>
                        <h2><b>e-GIFT VOUCHER</b></h2>
                        <p>G.N. Chetty Road,Besides the flyover, T. Nagar, Chennai - 600 017. Ph: +91 44 46264000.</p>
                        <p>R.S.Puram, Coimbatore - 641 002.
                            <br/>Ph: +91 8144026420.</p>
                    </div>
                </div>
                <div class="col-lg-7">

                    <div id="wizard_container">
                        <div id="top-wizard">
                            <div id="progressbar"></div>
                        </div>
                        <!-- /top-wizard -->
                        <form name="example-1" id="wrapped" method="POST">
                            <input id="website" name="website" type="text" value="">
                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">

                                <div class="step">
                                    <h3 class="main_question"><strong>1/2</strong>Please fill with your details</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="firstname" maxlength="25" class="form-control required" placeholder="First name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="lastname" maxlength="25" class="form-control required" placeholder="Last name">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control required" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="telephone" class="form-control required" minlength="10" maxlength="10" onkeypress="return isNumber(event)" placeholder="Your Mobile Number">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="age" class="form-control required" minlength="2" maxlength="2" onkeypress="return isNumber(event)" placeholder="Age">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group radio_input">
                                                <label>
                                                    <input type="radio" value="Male" checked name="gender" class="icheck">Male</label>
                                                <label>
                                                    <input type="radio" value="Female" name="gender" class="icheck">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step-->

                                <div class=" submit step">
                                    <h3 class="main_question"><strong>2/2</strong>Please fill with additional info</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="address" id="address" rows="5" class="form-control required" placeholder="Address"></textarea>
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="styled-select">
                                                    <select class="required" name="country">
                                                        <option value="" selected>Select your country</option>
                                                        <option value="Europe">Coimbatore</option>
                                                        <option value="Asia">Chennai</option>
                                                        <!-- <option value="North America">North America</option>
                                                        <option value="South America">South America</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="zip_code" class="form-control required" onkeypress="return isNumber(event)" maxlength="6" placeholder="Zip code">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /step-->
                            </div>
                            <!-- /middle-wizard -->
                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward">Backward </button>
                                <button type="button" name="forward" class="forward">Forward</button>
                                <button type="submit" name="process" class="submit">Submit</button>
                            </div>
                            <!-- /bottom-wizard -->
                        </form>
                    </div>
                    <!-- /Wizard container -->
                </div>
            </div>
            <!-- /Row -->
        </div>
        <!-- /Form_container -->
    </main>

    <footer id="home" class="clearfix">
        <p>© 2018 Designed & Developed By <a href="http://episodetechnologies.com/" target="_blank">Episode Technologies</a></p>
    </footer>
    <!-- end footer-->

    <div class="cd-overlay-nav">
        <span></span>
    </div>
    <!-- cd-overlay-nav -->

    <div class="cd-overlay-content">
        <span></span>
    </div>
    <!-- cd-overlay-content -->
    <!-- SCRIPTS -->
    <!-- Jquery-->
    <script src="{{ asset('website/js/jquery-3.2.1.min.js')}}"></script>
    <!-- Common script -->
    <script src="{{ asset('website/js/common_scripts_min.js')}}"></script>
    <!-- Wizard script -->
    <script src="{{ asset('website/js/registration_wizard_func.js')}}"></script>
    <!-- Menu script -->
    <script src="{{ asset('website/js/velocity.min.js')}}"></script>
    <script src="{{ asset('website/js/main.js')}}"></script>
    <!-- Theme script -->
    <script src="{{ asset('website/js/functions.js')}}"></script>

</body>

</html>