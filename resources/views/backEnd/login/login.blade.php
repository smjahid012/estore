<html class="no-js " lang="en"><!-- Mirrored from thememakker.com/templates/oreo/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 23:27:15 GMT --><head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

        <title>:: Oreo Bootstrap4 Admin ::</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{asset('backEnd/assets')}}/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('backEnd/assets')}}/css/main.css">
        <link rel="stylesheet" href="{{asset('backEnd/assets')}}/css/authentication.css">
        <link rel="stylesheet" href="{{asset('backEnd/assets')}}/css/color_skins.css">
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

    <body class="theme-purple authentication sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
        <div class="container">
            <div class="navbar-translate n_logo">
                <a class="navbar-brand" href="javascript:void(0);" title="" target="_blank">Oreo</a>
                <button class="navbar-toggler" type="button">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index-2.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Search Result</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" title="Follow us on Twitter" href="javascript:void(0);" target="_blank">
                            <i class="zmdi zmdi-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" title="Like us on Facebook" href="javascript:void(0);" target="_blank">
                            <i class="zmdi zmdi-facebook"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" title="Follow us on Instagram" href="javascript:void(0);" target="_blank">
                            <i class="zmdi zmdi-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-white btn-round" href="{{ route('register') }}">SIGN UP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header">
        <div class="page-header-image" style="background-image:url(backEnd/assets/images/login.jpg)"></div>
        <div class="container">
            <div class="col-md-12 content-center">
                <div class="card-plain">

                     <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="header">
                            <div class="logo-container">
                            <img src="{{asset('backEnd/assets')}}/images/logo.svg" alt="">
                            </div>
                            <h5>Log in</h5>
                        </div>

                        <div class="content">
                            <div class="input-group input-lg">
                                <input type="email" class="form-control" placeholder="Enter User Email" name="email">
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-account-circle"></i>
                                </span>
                            </div>
                             <div class="input-group input-lg">
                                <input type="password" placeholder="Password" class="form-control" name="password">
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-lock"></i>
                                </span>
                            </div>
                        </div>

                        <div class="footer text-center">
                                <button type="submit"
                                      class="btn btn-primary btn-round btn-lg btn-block ">{{ __('Login') }}
                                </button>

                            <h5><a href="{{ route('password.request') }}" class="link">{{ __('Forgot Your Password?') }}</a></h5>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="javascript:void(0);" target="_blank">Contact Us</a></li>
                        <li><a href="javascript:void(0);" target="_blank">About Us</a></li>
                        <li><a href="javascript:void(0);">FAQ</a></li>
                    </ul>
                </nav>
                <div class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>2018,
                    <span>Designed by <a href="javascript:void(0);" target="_blank">ThemeMakker</a></span>
                </div>
            </div>
        </footer>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{asset('backEnd/assets')}}/bundles/libscripts.bundle.js"></script>
    <script src="{{asset('backEnd/assets')}}/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

    <script>
       $(".navbar-toggler").on('click',function() {
        $("html").toggleClass("nav-open");
    });
    //=============================================================================
    $('.form-control').on("focus", function() {
        $(this).parent('.input-group').addClass("input-group-focus");
    }).on("blur", function() {
        $(this).parent(".input-group").removeClass("input-group-focus");
    });
    </script>



    </body><!-- Mirrored from thememakker.com/templates/oreo/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 23:27:17 GMT --></html>
