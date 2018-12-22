<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />

    <title>@yield('title_back_area')</title>

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="{{ asset('backEnd') }}/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backEnd') }}/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--bootstrap -->
	<link href="{{ asset('backEnd') }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="{{ asset('backEnd') }}/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{ asset('backEnd') }}/plugins/material/material.min.css">
	<link rel="stylesheet" href="{{ asset('backEnd') }}/css/material_style.css">
	<!-- inbox style -->
    <link href="{{ asset('backEnd') }}/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
    <link href="{{ asset('backEnd') }}/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="{{ asset('backEnd') }}/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backEnd') }}/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backEnd') }}/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backEnd') }}/css/theme/dark/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
    <link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
 </head>
 <!-- END HEAD -->

 <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">
        <div class="page-wrapper">

            <!-- start header -->
            <div class="page-header navbar navbar-fixed-top">
                <div class="page-header-inner ">
                    <!-- logo start -->
                    <div class="page-logo">
                        <a href="index-2.html">
                        <span class="logo-icon material-icons fa-rotate-45">school</span>
                        <span class="logo-default" >Smart</span> </a>
                    </div>
                    <!-- logo end -->
                    <ul class="nav navbar-nav navbar-left in">
                        <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
                    </ul>
                     <form class="search-form-opened" action="#" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                              <a href="javascript:;" class="btn submit">
                                 <i class="icon-magnifier"></i>
                               </a>
                            </span>
                        </div>
                    </form>
                    <!-- start mobile menu -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                   <!-- end mobile menu -->
                    <!-- start header menu -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- start language menu -->
                            <li class="dropdown language-switch">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="{{ asset('backEnd') }}/img/flags/gb.png" class="position-left" alt=""> English <span class="fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="deutsch"><img src="{{ asset('backEnd') }}/img/flags/de.png" alt=""> Deutsch</a>
                                    </li>
                                    <li>
                                        <a class="ukrainian"><img src="{{ asset('backEnd') }}/img/flags/ua.png" alt=""> Українська</a>
                                    </li>
                                    <li>
                                        <a class="english"><img src="{{ asset('backEnd') }}/img/flags/gb.png" alt=""> English</a>
                                    </li>
                                    <li>
                                        <a class="espana"><img src="{{ asset('backEnd') }}/img/flags/es.png" alt=""> España</a>
                                    </li>
                                    <li>
                                        <a class="russian"><img src="{{ asset('backEnd') }}/img/flags/ru.png" alt=""> Русский</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- end language menu -->

                            <!-- start notification dropdown -->
                            <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="badge headerBadgeColor1"> 6 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3><span class="bold">Notifications</span></h3>
                                        <span class="notification-label purple-bgcolor">New 6</span>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                    <span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check"></i></span> Congratulations!. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 mins</span>
                                                    <span class="details">
                                                    <span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>
                                                    <b>John Micle </b>is now following you. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">7 mins</span>
                                                    <span class="details">
                                                    <span class="notification-icon circle blue-bgcolor"><i class="fa fa-comments-o"></i></span>
                                                    <b>Sneha Jogi </b>sent you a message. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">12 mins</span>
                                                    <span class="details">
                                                    <span class="notification-icon circle pink"><i class="fa fa-heart"></i></span>
                                                    <b>Ravi Patel </b>like your photo. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">15 mins</span>
                                                    <span class="details">
                                                    <span class="notification-icon circle yellow"><i class="fa fa-warning"></i></span> Warning! </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">10 hrs</span>
                                                    <span class="details">
                                                    <span class="notification-icon circle red"><i class="fa fa-times"></i></span> Application error. </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="dropdown-menu-footer">
                                            <a href="javascript:void(0)"> All notifications </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- end notification dropdown -->

                            <!-- start message dropdown -->
                             <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge headerBadgeColor2"> 2 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3><span class="bold">Messages</span></h3>
                                        <span class="notification-label cyan-bgcolor">New 2</span>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="{{ asset('backEnd') }}/img/prof/prof2.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Sarah Smith </span>
                                                        <span class="time">Just Now </span>
                                                    </span>
                                                    <span class="message"> Jatin I found you on LinkedIn... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="{{ asset('backEnd') }}/img/prof/prof3.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> John Deo </span>
                                                        <span class="time">16 mins </span>
                                                    </span>
                                                    <span class="message"> Fwd: Important Notice Regarding Your Domain Name... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="{{ asset('backEnd') }}/img/prof/prof1.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Rajesh </span>
                                                        <span class="time">2 hrs </span>
                                                    </span>
                                                    <span class="message"> pls take a print of attachments. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="{{ asset('backEnd') }}/img/prof/prof8.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Lina Smith </span>
                                                        <span class="time">40 mins </span>
                                                    </span>
                                                    <span class="message"> Apply for Ortho Surgeon </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="{{ asset('backEnd') }}/img/prof/prof5.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Jacob Ryan </span>
                                                        <span class="time">46 mins </span>
                                                    </span>
                                                    <span class="message"> Request for leave application. </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="dropdown-menu-footer">
                                            <a href="#"> All Messages </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- end message dropdown -->

                             <!-- start manage user dropdown -->
                             <li class="dropdown dropdown-user">

                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle " src="{{ asset('backEnd') }}/img/dp.jpg" />
                                    <span class="username username-hide-on-mobile"> {{ Auth::user()->name }} </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="user_profile.html">
                                            <i class="icon-user"></i> Profile </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-directions"></i> Help
                                        </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="lock_screen.html">
                                            <i class="icon-lock"></i> Lock
                                        </a>
                                    </li>
                                    <li>


                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                            <i class="icon-logout"></i> {{ __('Logout') }}
                                         </a>

                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             @csrf
                                         </form>

                                    </li>
                                </ul>
                            </li>
                            <!-- end manage user dropdown -->

                            <li class="dropdown dropdown-quick-sidebar-toggler">
                                 <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
                                   <i class="material-icons">more_vert</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end header -->
