<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>TrendCast | @yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        @section('stylesheets')
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('portal/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('portal/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('portal/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('portal/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('portal/assets/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('portal/assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('portal/assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('portal/assets/global/css/components-md-rtl.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('portal/assets/global/css/plugins-md-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('portal/assets/layouts/layout2/css/layout-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('portal/assets/layouts/layout2/css/themes/blue-rtl.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('portal/assets/layouts/layout2/css/custom-rtl.min.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('portal/assets/global/css/trendcast.css?vid=2') }}" rel="stylesheet" type="text/css"/>

        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>

        <script type="text/javascript">
            var refreshTotalPayment = undefined;

            function loadAlternativeImage(image) {
                image.src = "https://via.placeholder.com/" + image.getAttribute("width") + "x" + image.getAttribute("height");
            }
        </script>
        <style>
            .modal-footer{
                padding-top: 0;
            }
        </style>

        <!-- <script src="https://beautiful.start.payfort.com/checkout.js"></script> -->
        <script src="https://www.paypal.com/sdk/js?client-id=AThp-p64eDpy3YXz-mJpi1MqCwKXqIW8IIREy3wxSqTT4JSodAIf8VSJAh8Nbn-q-22pLwEoqEtMBc14&debug=false&currency=USD&intent=capture&enable-funding=card,credit"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.13/clipboard.min.js"></script>
        
        @show
    <!-- END HEAD -->
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md">
        <script>
        /*
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '178185949362794',
              xfbml      : true,
              version    : 'v2.8'
            });
            FB.AppEvents.logPageView();
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_U
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));*/
        </script>

        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu navbar-fixed-top" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li>
                            <a href="/" style="margin: 0; padding: 0;">
                            <img height="44px" style="padding-right: 20px; padding-left: 20px;" src=" {{ asset('portal/assets/layouts/layout2/img/logo_gold.png') }}" alt=""/></a>
                        </li>
                        <!--<li class="nav-item start @if ($active_page === 'main') active open @endif">
                            <a href="{{ action('PortalController@index') }}" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">الرئيسة</span>
                                <span class="arrow"></span>
                            </a>
                        </li>-->
                        <li class="nav-item @if ($active_page === 'my_stocks') active open @endif">
                            <a href="{{ action('PortalController@my_stocks') }}" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">أسهمي</span>
                                <span class="arrow"></span>
                            </a>                            
                        </li>
                        <li class="nav-item @if ($active_page === 'my_account') active open @endif">
                            <a href="{{ action('PortalController@my_account') }}" class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title">حسابي</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item @if ($active_page === 'help') active open @endif">
                            <a href="{{ action('PortalController@help') }}" class="nav-link nav-toggle">
                                <i class="icon-book-open"></i>
                                <span class="title">الإرشادات</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item @if ($active_page === 'video_library') active open @endif">
                            <a href="https://www.youtube.com/watch?v=_kGpVTCCJpw&list=PLOQsTzXAVFywpFxy0B5V1J9lxUslP5MrS&index=1" target="_blank" class="nav-link nav-toggle">
                                <i class="icon-social-youtube"></i>
                                <span class="title">مكتبة الفيديو</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item @if ($active_page === 'contact_us') active open @endif">
                            <a href="{{ action('PortalController@contact_us') }}" class="nav-link nav-toggle">
                                <i class="icon-speech"></i>
                                <span class="title">مساعدة</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="pull-right">
                            <div class="top-menu">
                                <ul class="nav navbar-nav pull-right">
                                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                                    <!-- END NOTIFICATION DROPDOWN -->
                                    <!-- BEGIN INBOX DROPDOWN -->
                                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                                    <!-- END INBOX DROPDOWN -->
                                    <!-- BEGIN TODO DROPDOWN -->
                                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                                    <!-- END TODO DROPDOWN -->
                                    <!-- BEGIN USER LOGIN DROPDOWN -->
                                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                                    <li class="dropdown dropdown-user">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                            <img alt="" width="29" height="29" class="img-circle" src="{{ asset('') }}portal/imgs/profile/profile.png" />
                                            <span class="username username-hide-on-mobile"> {{ $currentUser->full_name }} </span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-default">
                                            <li>
                                                <a href="{{ action('PortalController@my_account') }}">
                                                    <i class="icon-user"></i> حسابي </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a onclick="doSignOut();" href="#">
                                                    <i class="icon-key"></i> تسجيل خروج </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- END USER LOGIN DROPDOWN -->
                                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                                    <!-- END QUICK SIDEBAR TOGGLER -->
                                </ul>
                            </div>
                        </li>

                        <li class="responsive-menu">
                            <button type="button" class="navbar-toggle" onclick='$(".main-responsive-menu").slideToggle(300);'>
                                    <span class="sr-only">Toggle navigation</span> 
                                    <span class="icon-bar"></span> 
                                    <span class="icon-bar"></span> 
                                    <span class="icon-bar"></span></button>
                        </li>

                        <li class="nav-item pull-right">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-clock"></i>
                                <span id="date-time-location" class="title">-</span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <ul class="main-responsive-menu">
                    <li>
                        <a href="{{ action('PortalController@my_stocks') }}" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">أسهمي</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ action('PortalController@my_account') }}" class="nav-link nav-toggle">
                            <i class="icon-users"></i>
                            <span class="title">حسابي</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ action('PortalController@help') }}" class="nav-link nav-toggle">
                            <i class="icon-book-open"></i>
                            <span class="title">الإرشادات</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=6oluFkMCz8A&list=PLFEnT8dlMyRAWACUxfVr-Gw29XrkbsXMt" target="_blank" class="nav-link nav-toggle">
                            <i class="icon-social-youtube"></i>
                            <span class="title">مكتبة الفيديو</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ action('PortalController@contact_us') }}" class="nav-link nav-toggle">
                            <i class="icon-speech"></i>
                            <span class="title">مساعدة</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ action('PortalController@my_account') }}" class="nav-link nav-toggle">
                            <i class="icon-user"></i>
                            <span class="title">حسابي</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="doSignOut();" class="nav-link nav-toggle">
                            <i class="icon-key"></i>
                            <span class="title">تسجيل خروج</span>
                        </a>
                    </li>
                    <!--<li>
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" width="29" height="29" class="img-circle" src="{{ asset('') }}portal/imgs/profile/profile.png" />
                            <span class="username username-hide-on-mobile"> {{ $currentUser->full_name }} </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                    </li>-->
                </ul>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class="theme-panel hidden">
                        <div class="toggler tooltips" data-container="body" data-placement="left" data-html="true" data-original-title="Click to open advance theme customizer panel">
                            <i class="icon-settings"></i>
                        </div>
                        <div class="toggler-close">
                            <i class="icon-close"></i>
                        </div>
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                    <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                    <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                    <li class="color-dark tooltips" data-style="dark" data-container="body" data-original-title="Dark"> </li>
                                    <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                </ul>
                            </div>
                            <div class="theme-option">
                                <span> Layout </span>
                                <select class="layout-option form-control input-small">
                                    <option value="fluid" selected="selected">Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Header </span>
                                <select class="page-header-option form-control input-small">
                                    <option value="fixed" selected="selected">Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Top Dropdown</span>
                                <select class="page-header-top-dropdown-style-option form-control input-small">
                                    <option value="light" selected="selected">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Mode</span>
                                <select class="sidebar-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Style</span>
                                <select class="sidebar-style-option form-control input-small">
                                    <option value="default" selected="selected">Default</option>
                                    <option value="compact">Compact</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Menu </span>
                                <select class="sidebar-menu-option form-control input-small">
                                    <option value="accordion" selected="selected">Accordion</option>
                                    <option value="hover">Hover</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Position </span>
                                <select class="sidebar-pos-option form-control input-small">
                                    <option value="left" selected="selected">Left</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Footer </span>
                                <select class="page-footer-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END THEME PANEL -->
                    <!--<h1 class="page-title"> الرئيسة
                        <small>متابعة سريعة وشاملة</small>
                    </h1>-->
                    <div class="page-bar">
                        <div id="marquee"><span></span></div>
                        <!--<ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">الرئيسة</a>
                                <i class="fa fa-angle-left"></i>
                            </li>
                            <li>
                                <span>لوحة المراقبة</span>
                            </li>
                        </ul>-->
                        @if (!isset($hide_stocks_selector))
                        <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <button id="market-dropdown-select" type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"><span>كافة الأسواق</span>
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul id="market-dropdown-options" class="dropdown-menu pull-right" role="menu">
                                    <li data-stock-market-serial-no="0"><a><i class="icon-feed"></i><span>كافة الأسواق</span></a></li>
                                    @foreach ($markets as $market)
                                    <li data-stock-market-serial-no="{{ $market->serial_no }}"><a><i class="icon-feed"></i><span>{{ $market->label_ar }}</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif
                    </div>
                    @if(Session::has('error_message'))
                    <div class="alert alert-danger">
                        {!!Session::pull('error_message')!!}
                    </div>
                    @endif
                    @if(Session::has('warning_message'))
                    <div class="alert alert-warning">
                        {!!Session::pull('warning_message')!!}
                    </div>
                    @endif
                    <!-- END PAGE HEADER-->
                    
                    @yield('content')
                <!-- END CONTENT BODY -->

                </div>
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->

            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2021 &copy; نظام تريند كاست لتحليل وتوقع أسعار الأسهم
                <a target="_blank" href="http://www.trend-cast.com">شركة ترند كاست</a>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
        </div>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src=" {{ asset('portal/assets/global/plugins/respond.min.js') }}"></script>
<script src=" {{ asset('portal/assets/global/plugins/excanvas.min.js') }}"></script> 
<![endif]-->
        @section('scripts')
        <script src="https://www.gstatic.com/firebasejs/3.7.1/firebase-app.js"></script>
        
        <script src="https://www.gstatic.com/firebasejs/3.7.1/firebase.js"></script>

        <script>
          // Initialize Firebase
          var config = {
            apiKey: "AIzaSyAtGXnlNvap4NUt1RRsWfsoIAhT6goiwKs",
            authDomain: "trendcast-9dcfd.firebaseapp.com",
            databaseURL: "https://trendcast-9dcfd.firebaseio.com",
            storageBucket: "trendcast-9dcfd.appspot.com",
            messagingSenderId: "520254769662"
          };
          firebase.initializeApp(config);
        </script>
        <!-- BEGIN CORE PLUGINS -->
        <script src=" {{ asset('portal/assets/global/plugins/jquery.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/bootstrap/js/bootstrap.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/js.cookie.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/jquery.blockui.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }} " type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=" {{ asset('portal/assets/global/plugins/moment.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/clockface/js/clockface.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/morris/morris.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/morris/raphael-min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/counterup/jquery.waypoints.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/counterup/jquery.counterup.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/amcharts/amcharts/amcharts.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/amcharts/amcharts/serial.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/amcharts/amcharts/pie.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/amcharts/amcharts/radar.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/amcharts/amcharts/themes/light.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/amcharts/amcharts/themes/patterns.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/amcharts/amcharts/themes/chalk.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/amcharts/ammap/ammap.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/amcharts/amstockcharts/amstock.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/fullcalendar/fullcalendar.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/flot/jquery.flot.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/flot/jquery.flot.resize.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/flot/jquery.flot.categories.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/jquery.sparkline.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }} " type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=" {{ asset('portal/assets/global/scripts/app.min.js') }} " type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=" {{ asset('portal/assets/pages/scripts/dashboard.js?vid=123') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/pages/scripts/components-date-time-pickers.min.js') }} " type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=" {{ asset('portal/assets/layouts/layout2/scripts/layout.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/layouts/layout2/scripts/demo.min.js') }} " type="text/javascript"></script>
        <script src=" {{ asset('portal/assets/layouts/global/scripts/quick-sidebar.min.js') }} " type="text/javascript"></script>

        <script src=" {{ asset('portal/assets/global/scripts/app.min.js') }}" type="text/javascript"></script>

        <script src=" {{ asset('portal/assets/global/plugins/bootbox/bootbox.min.js') }}" type="text/javascript"></script>

        <!-- END THEME LAYOUT SCRIPTS -->
        @show

        <script type="text/javascript">
           var selectedStockMarketSerialNo = 0;
           var chartsRegistry = {};

           var pieChartData = [];
           var pieChartDataDetails = [];

           var selected = undefined;

           var separator = ":";

           var currentPlanToRenew;

           function doSignOut() {
                window.location = '{{ asset('') }}/logout';
           }

           function showNextMarqueeData(data, index) {
                $("#marquee").html("<span></span>").find("span").text(data[index].content).css("animation-duration", data[index].display_speed + "s");

                setTimeout(function() {
                    showNextMarqueeData(data, (index + 1) % data.length);
                }, data[index].display_speed * 1000);
           }

            function submitPlanRenewalForm(params) {
              // Append the params to the form
              frm = $("<form action='{{ asset('') }}portal/completeStockRegistration' method='POST'></form>");
              frm.append("<input type='hidden' name='startToken' value='" + params.token + "' />");
              frm.append("<input type='hidden' name='startEmail' value='" + params.email + "' />");
              frm.append("<input type='hidden' name='membershipType' value='" + currentPlanToRenew.membership_type + "' />");
              frm.append("<input type='hidden' name='renewal' value='true' />");
              frm.append("<input type='hidden' name='oldPlan' value='" + currentPlanToRenew.oldPlanSerialNo + "' />");

              if (appliedDiscountCode !== undefined) {
                frm.append("<input type='hidden' name='appliedDiscountCode' value='" + appliedDiscountCode + "' />");
              }

              if (appliedPoints > 0) {
                frm.append("<input type='hidden' name='appliedPoints' value='true' />");
              }

              frm.append("<input type='hidden' name='selected_market' value='" + currentPlanToRenew.selected_market + "' />");

              $(currentPlanToRenew.selected_stocks).each(function(key, value) {
                frm.append("<input type='hidden' name='selected_stocks[]' value='" + value + "' />");
              });

              frm.append("<input type='hidden' name='selected_plan' value='" + currentPlanToRenew.selected_plan + "' />");

              frm.append("<input type='hidden' name='startEmail' value='" + params.email + "' />");

              frm.append('{{ csrf_field() }}');
              frm.appendTo(document.body);
              // Finally, submit the form
              frm.submit();
            }

           function renderClock() {
                var d = new Date(),
                minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes();

                if (d.getHours() > 12) {
                    hours = (d.getHours() - 12).toString().length == 1 ? '0'+(d.getHours() - 12) : (d.getHours() - 12);
                } else {
                    hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours();
                }

                var ampm = d.getHours() >= 12 ? 'مساءً' : 'صباحاً',
                months = ['يناير','فبراير','مارس','أبريل','مايو','يونيو','يوليو','أغسطس','سبتمبر','أكتوبر','نوفمبر','ديسمبر'],
                days = ['الأحد','الإثنين','الثلاثاء','الأربعاء','الخميس','الجمعة','السبت'];
                
                separator = separator === '<span>:</span>' ? '<span style="color: rgba(0, 0, 0, 0);">:</span>' : '<span>:</span>';

                var toDisplay = days[d.getDay()] + '، ' + d.getDate() + ' ' +months[d.getMonth()] + ' ' + d.getFullYear() + '، ' + hours + separator + minutes + ' '+ampm;

                $("#date-time-location").html(toDisplay);
           }

           function doChangePassword(dialog) {
                $("#password-change-form :input").prop("readonly", true).parents(".bootbox").find("button").prop("disabled", true);

                $("#password-change-form .form-group").removeClass("has-error").find(".help-block").html("&nbsp;");

                $.ajax({
                    url: "{{ asset('') }}portal/change_password",
                    method: "POST",
                    data: $("#password-change-form").serialize(),
                    dataType: "json"
                }).done(function(data) {
                    $("#password-change-form :input").prop("readonly", false).parents(".bootbox").find("button").prop("disabled", false);

                    if (!data.success) {
                        console.log(data.errors)
                        $.each(data.errors, function(key, value) {
                            $("#group_" + key).addClass("has-error").find(".help-block").html(value);
                        });
                    } else {
                        bootbox.alert({
                            message: "تم تغيير كلمة المرور بنجاح",
                            callback: function() {
                                location.reload();
                            }
                        });
                        dialog.modal('hide');
                    }
                });

                return false;
            }

            function renewPlan(planSerialNo) {
                $.ajax({
                    url: "{{ asset('') }}portal/api/planRenewalPrices/" + planSerialNo,
                    method: "GET",
                    dataType: "json"
                }).done(function(data) {
                    currentPlanToRenew = data;

                    doRenewPlan();
                });
            }

            function showPlanDetails(planSerialNo) {
                $.ajax({
                    url: "{{ asset('') }}portal/api/planRenewalPrices/" + planSerialNo + "?detailed=true",
                    method: "GET",
                    dataType: "json"
                }).done(function(data) {
                    var dialogData = '';

                    if (data.membership_type === 'customStocks') {
                        dialogData = '<div class="list-group panel no-opaque">' + 
                                            '<div id="stocks-all" class="collapse in">';

                        $.each(data['selected_stocks'], function(key, selectedStock) {
                            var market = selectedStock.market;

                            dialogData += '<a href="#stock-market-' + market.serial_no + '" class="list-group-item" data-toggle="collapse" data-parent="#' + market.serial_no + '"' + ' aria-expanded="true"><img height="20" src="/tcps/public/img/logo/d/' + market.logo + '">&nbsp;' + market.label_ar + '</a>' + 
                                                '<div class="list-group-submenu default-uncollapsed collapse in" id="stock-market-' + market.serial_no + '" style="margin-bottom: 10px" aria-expanded="true">' +
                                                    '<ul class="stocks-list latest-posts clearfix shop">';

                            $.each(selectedStock.stocks, function(key2, stock) {
                                dialogData += '<li class="col-sm-12 col-md-4 stock-box"><i class="stock-selected fa fa-check-circle" style="display: none;"></i>' + 
                                                '<section>' + 
                                                    '<div class="post-thumb">' + 
                                                        '<img onerror="loadAlternativeImage(this);" height="35" width="35" src="/tcps/public/img/logo/d/' + stock.logo + '" style="width: 70px; height: 70px">' + 
                                                    '</div>' + 
                                                    '<div class="post-details">' + 
                                                        '<div class="description">' + 
                                                            '<h5><i id="add-stock-' + stock.serial_no + '" class="add-stock fa fa-plus hidden"></i>&nbsp;' + stock.stock_name_ar + '</h5>' + 
                                                        '</div>' + 
                                                    '</div>' + 
                                                '</section>' + 
                                            '</li>';
                            });

                            dialogData += '</ul></div>';

                        });

                        dialogData +='</div></div>';
                    } else {
                        dialogData = '<div class="list-group panel no-opaque">' + 
                                            '<div id="stocks-all" class="collapse in">';

                        dialogData += '<ul class="stocks-list latest-posts clearfix shop">';
                        $.each(data.selected_market, function(key2, market) {

                            dialogData += '<li class="col-sm-12 col-md-12 stock-box"><i class="stock-selected fa fa-check-circle" style="display: none;"></i>';
                            dialogData += '<section>'; 
                            dialogData += ' <div class="post-thumb">'; 
                            dialogData += '     <img onerror="loadAlternativeImage(this);" height="35" width="35" src="/tcps/public/img/logo/d/' + market.logo + '" style="width: 70px; height: 70px">';
                            dialogData += ' </div>';
                            dialogData += ' <div class="post-details">';
                            dialogData += '     <div class="description">';
                            dialogData += '         <h5><i id="add-stock-' + market.serial_no + '" class="add-stock fa fa-plus hidden"></i>&nbsp;' + market.label_ar + '</h5>';
                            dialogData += '     </div>';
                            dialogData += ' </div>';
                            dialogData += '</section>';
                            dialogData += '</li>';
                        });

                        dialogData += '</ul>';

                        dialogData +='</div></div>';
                    }

                var dialog = bootbox.dialog({
                        message: dialogData,
                        title: "تفاصيل خطة الاشتراك",
                        className: data.membership_type === 'customStocks' ? "big-modal" : '',
                        buttons: {
                          success: {
                            label: "إغلاق"
                          }
                        }
                    });
                });
            }

            function refreshRenewalPayment() {
                var total = Math.round(currentPlanToRenew.actualPlanPrice);

                total = total - (codeDiscountRate ? (total * codeDiscount / 100) : codeDiscount);

                total = total < 0 ? 0 : total;

                var pointsDiscount = Math.round(appliedPoints / 10);

                $("#total-cart-value").text(total + "$");

                if (total === 0) {
                    $("#1-month-membership .total").text("-");
                    $("#1-month-membership .monthly").text("-");

                    $("#3-month-membership .total").text("-");
                    $("#3-month-membership .monthly").text("-");

                    $("#6-month-membership .total").text("-");
                    $("#6-month-membership .monthly").text("-");

                    $("#12-month-membership .total").text("-");
                    $("#12-month-membership .monthly").text("-");
                } else {
                    $("#1-month-membership .total").text(negativeToZero(Math.round(total - pointsDiscount)) + "$");
                    $("#1-month-membership .monthly").text(Math.round(total) + "$ في الشهر");

                    $("#3-month-membership .total").text(negativeToZero(Math.round((total * 75 / 100) * 3 - pointsDiscount)) + "$");
                    $("#3-month-membership .monthly").text(Math.round(total * 75 / 100) + "$ في الشهر");

                    $("#6-month-membership .total").text(negativeToZero(Math.round((total * 65 / 100) * 6 - pointsDiscount)) + "$");
                    $("#6-month-membership .monthly").text(Math.round(total * 65 / 100) + "$ في الشهر");

                    $("#12-month-membership .total").text(negativeToZero(Math.round((total * 55 / 100) * 12 - pointsDiscount)) + "$");
                    $("#12-month-membership .monthly").text(Math.round(total * 55 / 100) + "$ في الشهر");
                }
            }

            function doRenewPlan() {
                var dialogData = '' +
                        '<div id="totals-section" class="collapse in" style="padding: 0 20px;">' + 
                            '<a>' + 
                                '<span class="overflown-text">الإجمالي بعد الخصم</span>' + 
                                '<span id="total-cart-value" class="pull-right">' + Math.round(currentPlanToRenew.actualPlanPrice) + '$</span>' + 
                            '</a>' + 
                        '</div>' + 
                        '<div class="row">' +
                            '<div class="col-sm-12">' +
                                '<ul id="cart-contents-menu">' +                                     
                                        // '<li class="plan-selected">' +
                                        //     '<div id="1-month-membership" class="checkbox">' +
                                        //         '<input type="radio" name="poll" value="1" checked />' +
                                        //         '<label class="period">شهر</label>' +
                                        //         '<span class="monthly">' + (Math.round(currentPlanToRenew.actualPlanPrice) + "$ في الشهر") + '</span>' +
                                        //         '<span class="total">' + (Math.round(currentPlanToRenew.actualPlanPrice) + "$") + '</span>' +
                                        //         '<i class="stock-selected fa fa-check-circle"></i>' +
                                        //     '</div>' +
                                        // '</li>' +
                                        // '<li>' +
                                        //     '<div id="3-month-membership" class="checkbox offer">' +
                                        //         '<div class="ribbon-wrapper right">' +
                                        //             '<div class="ribbon bronze">خصم 25%</div>' +
                                        //         '</div>' +
                                        //         '<input type="radio" name="poll" value="3" />' +
                                        //         '<label class="period">3 شهور</label>' +
                                        //         '<span class="monthly">' + (Math.round(currentPlanToRenew.actualPlanPrice * 75 / 100) + "$ في الشهر") + '</span>' +
                                        //         '<span class="total">' + (Math.round(currentPlanToRenew.actualPlanPrice * 3  * 75 / 100) + "$") + '</span>' +
                                        //         '<i class="stock-selected fa fa-check-circle"></i>' +
                                        //     '</div>' +
                                        // '</li>' +
                                        // '<li>' +
                                        //     '<div id="6-month-membership" class="checkbox offer">' +
                                        //         '<div class="ribbon-wrapper right">' +
                                        //             '<div class="ribbon silver">خصم 35%</div>' +
                                        //         '</div>' +
                                        //         '<input type="radio" name="poll" value="6" />' +
                                        //         '<label class="period">6 شهور</label>' +
                                        //         '<span class="monthly">' + (Math.round(currentPlanToRenew.actualPlanPrice * 65 / 100) + "$ في الشهر") + '</span>' +
                                        //         '<span class="total">' + (Math.round(currentPlanToRenew.actualPlanPrice * 6 * 65 / 100) + "$") + '</span>' +
                                        //         '<i class="stock-selected fa fa-check-circle"></i>' +
                                        //     '</div>' +
                                        // '</li>' +
                                        '<li class="plan-selected" style="width: 100%">' +
                                            '<div id="12-month-membership" class="checkbox offer">' +
                                                '<div class="ribbon-wrapper right" style="right:0; top:-10px">' +
                                                    '<div class="ribbon gold">خصم 45%</div>' +
                                                '</div>' +
                                                '<input type="radio" name="poll" value="12" />' +
                                                '<label class="period">سنة</label>' +
                                                '<span class="monthly">' + (Math.round(currentPlanToRenew.actualPlanPrice * 55 / 100) + "$ في الشهر") + '</span>' +
                                                '<span class="total">' + (Math.round(currentPlanToRenew.actualPlanPrice * 12 * 55 / 100) + "$") + '</span>' +
                                                '<i class="stock-selected fa fa-check-circle"></i>' +
                                            '</div>' +
                                        '</li>' +
                                    '</ul>' + 
                                    '<div class="clearfix" style="margin-bottom: 10px;">' + 
                                        '<div class="col-lg-8" style="padding-right: 0; padding-left: 5px;">' + 
                                            '<input id="discount-code-input" type="text" placeholder="أدخل كود الخصم هنا" onkeydown="seekDiscountCode(event);" style="width: 100%; text-align: center;" />' + 
                                        '</div>' + 
                                        '<div class="col-lg-4" style="padding: 0;">' + 
                                            '<button id="discount-code-button" class="widget-button btn btn-default" onclick="seekDiscountCode();" style="display: block; width: 100%; text-align: center; background-color: black;">استخدام</button>' + 
                                        '</div>' + 
                                    '</div>' + 

                                    @if ($currentUser->points_balance > 0)
                                    '<div id="points-add-control" class="clearfix" style="margin-bottom: 10px;">' +
                                        '<div class="col-lg-8" style="padding-right: 0; padding-left: 5px;">' +
                                            '<input id="discount-code-input" type="text" readonly="" value="لديك {{ $currentUser->points_balance }} نقطة تعادل {{ round($currentUser->points_balance / 10) }}$"  style="width: 100%; text-align: center;" />' +
                                        '</div>' +
                                        '<div class="col-lg-4" style="padding: 0;">' +
                                            '<button id="discount-code-button" class="widget-button btn btn-default" onclick="applyPointsDiscount({{ $currentUser->points_balance }});" style="background-color: #f0ad4e; display: block; width: 100%; text-align: center;">استخدام</button>' +
                                        '</div>' +
                                    '</div>' +
                                    @endif
                            '</div>' +
                        '</div>' +
                        '<div class="row">' +
                            '<div class="col-sm-12">' +
                                '<div id="paypal-button-container" class="clearfix" style=""></div>' +
                            '</div>' +
                        '</div>'
                                    ;

                var dialog = bootbox.dialog({
                        message: dialogData,
                        title: "تجديد خطة الاشتراك",
                        buttons: {
                        //   success: {
                        //     label: "تجديد",
                        //     className: "green",
                        //     callback: function() {
                        //         var amount = Number($("#cart-contents-menu input:checked")
                        //             .parent("div")
                        //             .find(".total")
                        //             .text().replace("$", ""));

                        //         if (amount === 0 || isNaN(amount)) {
                        //             return true;
                        //         }

                        //         currentPlanToRenew.selected_plan = $("#cart-contents-menu input:checked").val();
                                
                                
                        //         StartCheckout.open({
                        //           amount:   amount * 100,
                        //           currency: "USD",
                        //           email: "{{ $currentUser->email }}"
                        //         });
                        //       return true;
                        //     }
                        //   },
                          danger: {
                            label: "إلغاء",
                            className: "red",
                            callback: function() {
                                
                            }
                          }
                        }
                    });
                    
                    setTimeout(function(){
                        paypal.Buttons({
                            style: {
                                shape: 'rect',
                                color: 'silver',
                                layout: 'vertical',
                                label: 'paypal',
                                tagline: false
                            },
                            // onClick: function () {
                            //     purchase_units[0].description = ;
                            //     purchase_units[0].amount.value = amount;

                            //     if(invoiceid.value !== '') {
                            //         purchase_units[0].invoice_id = 'TEST-2102';
                            //     }
                            // },
                            createOrder: function(data, actions) {
                                var amount = Number($("#cart-contents-menu input:checked")
                                    .parent("div")
                                    .find(".total")
                                    .text().replace("$", ""));

                                if (amount === 0 || isNaN(amount)) {
                                    return false;
                                }
                                currentPlanToRenew.selected_plan = $("#cart-contents-menu input:checked").val();
                        
                                return actions.order.create({
                                    purchase_units: [
                                        {
                                            "amount": {"currency_code":"USD","value":amount},
                                            "description": "تجديد خطة اشتراك Trend Cast",
                                            "invoice_id": "{{time()}}-{{ $currentUser->serial_no }}"

                                        }
                                    ]
                                });
                            },
                            onApprove: function(data, actions) {
                                return actions.order.capture().then(function(details) {
                                    var params = {};
                                    params.token = details.id;
                                    params.email = "{{ $currentUser->email }}";
                                    submitPlanRenewalForm(params);
                                });
                            },
                            onError: function(err) {
                                console.error(err);
                            }
                        }).render('#paypal-button-container');
                    }, 1000);
            }

            $(document).ready(function () {
                setInterval(renderClock, 1000);

                @if (isset($errorMessage) && strlen($errorMessage) > 0)
                    bootbox.alert({
                        message: "{{ $errorMessage }}"
                    });
                @endif

                $("body").on("click", "#cart-contents-menu input", function () {
                    $(".plan-selected").removeClass("plan-selected");
                    $(this).parents("li").addClass("plan-selected");
                });

                $.ajaxPrefilter(function(options, originalOptions, xhr) { // this will run before each request
                    return xhr.setRequestHeader('X-CSRF-TOKEN', "{{ csrf_token() }}"); // adds directly to the XmlHttpRequest Object
                });

                var changePasswordForm =  '<form id="password-change-form" class="form-horizontal" role="form" method="POST" action="" onsubmit="return doChangePassword();"><div id="group_old_password"  class="form-group clearfix">' + 
                                '<label for="_old_password" class="col-md-12 control-label" style="text-align: right;">كلمة السر القديمة<span class="help-block pull-right">&nbsp;</span></label>' + 
                                '<div class="col-md-12">' + 
                                '<input type="password" class="form-control" id="_old_password" name="old_password" placeholder="اكتب كلمة السر القديمة هنا">' + 
                                '</div></div>' + 
                                '<div id="group_password" class="form-group clearfix">' + 
                                '<label for="password" class="col-md-12 control-label" style="text-align: right;">كلمة السر الجديدة<span class="help-block pull-right">&nbsp;</span></label>' + 
                                '<div class="col-md-12">' + 
                                '<input type="password" class="form-control" id="_password" name="password" placeholder="اكتب كلمة السر الجديدة">' + 
                                '</div></div>' + 
                                '<div id="group_password_confirmation" class="form-group clearfix">' + 
                                '<label for="password_confirmation" class="col-md-12 control-label" style="text-align: right;">تأكيد كلمة السر<span class="help-block pull-right">&nbsp;</span></label>' + 
                                '<div class="col-md-12">' + 
                                '<input type="password" class="form-control" id="_password_confirmation" name="password_confirmation" placeholder="أعد كتابة كلمة السر الجديدة">' + 
                                '</div></div>' + 
                                '</form>';

                $('#change-password').click(function(){
                    var dialog = bootbox.dialog({
                        message: changePasswordForm,
                        title: "تغيير كلمة المرور",
                        buttons: {
                          success: {
                            label: "تغيير",
                            className: "green",
                            callback: function() {
                              doChangePassword(dialog);

                              return false;
                            }
                          },
                          danger: {
                            label: "إلغاء",
                            className: "red",
                            callback: function() {
                                
                            }
                          }
                        }
                    });
                });

                $('.date-picker').datepicker({
                    rtl: App.isRTL(),
                    orientation: "left",
                    autoclose: true
                });

                $('.stock-box .date-picker').on('change', function() {
                    loadChartData($(this).parents(".stock-box").data("stock-serial-no"));
                });

                $("#market-dropdown-options").on("click", "li", function() {
                    $("#market-dropdown-select span").text($(this).find("span").text());

                    selectedStockMarketSerialNo = $(this).data("stock-market-serial-no");

                    if ($(this).data("stock-market-serial-no") === 0) {
                        $(".stock-box").show();
                        $(".stock-record").show();
                        $(".stock-record-market").show();
                    } else {
                        $(".stock-box").hide();
                        $(".stock-record-market").hide();
                        $(".stock-record").hide();

                        $(".stock-market-" + $(this).data("stock-market-serial-no")).show();
                        $(".stock-record-market-" + $(this).data("stock-market-serial-no")).show();
                    }

                    reloadNews();
                });

                $.ajax({
                    url: "{{ asset('') }}portal/api/marquee",
                    method: "GET",
                    dataType: "json"
                }).done(function(data) {
                    //showNextMarqueeData(data, 0);

                    var seconds = data[0].display_speed;
                    var marqueeData = data[0].content;

                    for (var i = 1; i < data.length; i++) {
                        seconds += data[i].display_speed;
                        marqueeData += " | " + data[i].content;
                    }

                    $("#marquee").html("<span></span>").find("span").text(marqueeData).css("animation-duration", seconds + "s");
                });


                $('body').on('click', '.view-toggler', function() {
                    $(this).addClass("hidden");

                    $(this).parents(".stock-box").find("." + $(this).data("toggle-to") + "-toggle").removeClass("hidden");

                    $(this).parents(".stock-box").find("." + $(this).data("toggle-from") + "-view").addClass("hidden");

                    $(this).parents(".stock-box").find("." + $(this).data("toggle-to") + "-view").removeClass("hidden");
                });

                @yield('javascript_document_ready')
            });


            function reloadNews() {
                $.ajax({
                    url: "{{ asset('') }}portal/api/news" + (selectedStockMarketSerialNo === 0 ? "" : ("?relatedStockMarketSerialNo=" + selectedStockMarketSerialNo)),
                    method: "GET",
                    dataType: "json"
                }).done(function(data) {public
                    var newsData = '';
                    $.each(data, function(key, news) {
                        newsData += '<div class="mt-comment">' +
                                    '<div class="mt-comment-img">' +
                                    '<img onerror="loadAlternativeImage(this);" width="41" height="41" src="/tcps/public/img/logo/d/' + news.logo + '" </div>' +
                                    '<div class="mt-comment-body">' +
                                    '<div class="mt-comment-info">' +
                                    '<span class="mt-comment-author">' + news.title_ar + '</span>' +
                                    '<span class="mt-comment-date">' + news.added_date + '</span>' +
                                    '</div>' +
                                    '<div class="mt-comment-text">' + news.body_ar + '</div>' +
                                    '</div>' +
                                    '</div>';

                    });
                    
                    $("#news-section").html(newsData);
                });
            }

            function loadChartData(stockSerialNo, includeRisingGraph, includeFallingGraph, dataLoadedCallback, decimalPlaces) {
                if (decimalPlaces === undefined) {
                    decimalPlaces = 2;
                }

                $.ajax({
                    url: "{{ asset('') }}portal/api/stocksClosingReading/" + stockSerialNo,
                    data: {
                        'start_date': $("#stock-" + stockSerialNo + "-chart").parents(".stock-box").find('.date-picker').val()
                    },
                    method: "GET",
                    dataType: "json"
                }).done(function(data) {
                    $stockBox = $("#stock-" + stockSerialNo + "-chart").html("").parents(".stock-box");

                    if (dataLoadedCallback !== undefined) {
                        dataLoadedCallback(data);
                    }

                    var risingClass = "";
                    var stableClass = "";
                    var fallingClass = "";

                    var topPositiveClass = "";
                    var midPositiveClass = "";
                    var bottomPositiveClass = "";

                    var topNegativeClass = "";
                    var midNegativeClass = "";
                    var bottomNegativeClass = "";

                    var risingRate = 0;
                    var risingAmount = 0;

                    var fallingRate = 0;
                    var fallingAmount = 0;

                    var allPositive = data.nextReading[0].top_positive_rate + data.nextReading[0].mid_positive_rate + data.nextReading[0].bottom_positive_rate;
                    var allNegative = data.nextReading[0].top_negative_rate + data.nextReading[0].mid_negative_rate + data.nextReading[0].bottom_negative_rate;

                    if (data.nextReading[0].predicted_rising_selling_closing_price_rate >= data.nextReading[0].predicted_stable_selling_closing_price_rate &&
                        data.nextReading[0].predicted_rising_selling_closing_price_rate >= data.nextReading[0].predicted_falling_selling_closing_price_rate) {
                        risingClass = "bulletClass";
                        $(".left-box").css("background-color", "rgba(0, 255, 0, 0.2)");
                    } else if (data.nextReading[0].predicted_stable_selling_closing_price_rate >= data.nextReading[0].predicted_rising_selling_closing_price_rate &&
                        data.nextReading[0].predicted_stable_selling_closing_price_rate >= data.nextReading[0].predicted_falling_selling_closing_price_rate) {
                        stableClass = "bulletClass";
                        $(".right-box").css("background-color", "rgba(0, 0, 255, 0.2)");
                    } else if (data.nextReading[0].predicted_falling_selling_closing_price_rate >= data.nextReading[0].predicted_rising_selling_closing_price_rate &&
                        data.nextReading[0].predicted_falling_selling_closing_price_rate >= data.nextReading[0].predicted_stable_selling_closing_price_rate) {
                        fallingClass = "bulletClass";
                        $(".middle-box").css("background-color", "rgba(255, 0, 0, 0.2)");
                    }

                    $("#rising-up-rate").text(Math.round(data.nextReading[0].top_positive_rate / allPositive * 100) + '%');
                    $("#rising-up-price").text(data.nextReading[0].top_positive_value.toFixed(decimalPlaces));

                    $("#rising-mid-rate").text(Math.round(data.nextReading[0].mid_positive_rate / allPositive * 100) + '%');
                    $("#rising-mid-price").text(data.nextReading[0].mid_positive_value.toFixed(decimalPlaces));

                    $("#rising-down-rate").text(Math.round(data.nextReading[0].bottom_positive_rate / allPositive * 100) + '%');
                    $("#rising-down-price").text(data.nextReading[0].bottom_positive_value.toFixed(decimalPlaces));

                    $("#falling-up-rate").text(Math.round(data.nextReading[0].top_negative_rate / allNegative * 100) + '%');
                    $("#falling-up-price").text(data.nextReading[0].top_negative_value.toFixed(decimalPlaces));

                    $("#falling-mid-rate").text(Math.round(data.nextReading[0].mid_negative_rate / allNegative * 100) + '%');
                    $("#falling-mid-price").text(data.nextReading[0].mid_negative_value.toFixed(decimalPlaces));

                    $("#falling-down-rate").text(Math.round(data.nextReading[0].bottom_negative_rate / allNegative * 100) + '%');
                    $("#falling-down-price").text(data.nextReading[0].bottom_negative_value.toFixed(decimalPlaces));
                    

                    if (data.nextReading[0].top_positive_rate >= data.nextReading[0].mid_positive_rate &&
                        data.nextReading[0].top_positive_rate >= data.nextReading[0].bottom_positive_rate) {
                        topPositiveClass = "bulletClass";

                        risingRate = (data.nextReading[0].top_positive_rate / allPositive * 100).toFixed(decimalPlaces);
                        risingAmount = (data.nextReading[0].top_positive_value).toFixed(decimalPlaces);
                    } else if (data.nextReading[0].mid_positive_rate >= data.nextReading[0].top_positive_rate &&
                        data.nextReading[0].mid_positive_rate >= data.nextReading[0].bottom_positive_rate) {
                        midPositiveClass = "bulletClass";

                        risingRate = (data.nextReading[0].mid_positive_rate / allPositive * 100).toFixed(decimalPlaces);
                        risingAmount = (data.nextReading[0].mid_positive_value).toFixed(decimalPlaces);
                    } else if (data.nextReading[0].bottom_positive_rate >= data.nextReading[0].top_positive_rate &&
                        data.nextReading[0].bottom_positive_rate >= data.nextReading[0].mid_positive_rate) {
                        bottomPositiveClass = "bulletClass";

                        risingRate = (data.nextReading[0].bottom_positive_rate / allPositive * 100).toFixed(decimalPlaces);
                        risingAmount = (data.nextReading[0].bottom_positive_value).toFixed(decimalPlaces);
                    }

                    if (data.nextReading[0].top_negative_rate >= data.nextReading[0].mid_negative_rate &&
                        data.nextReading[0].top_negative_rate >= data.nextReading[0].bottom_negative_rate) {
                        topNegativeClass = "bulletClass";

                        fallingRate = (data.nextReading[0].top_negative_rate / allNegative * 100).toFixed(decimalPlaces);
                        fallingAmount = (data.nextReading[0].top_negative_value).toFixed(decimalPlaces);
                    } else if (data.nextReading[0].mid_negative_rate >= data.nextReading[0].top_negative_rate &&
                        data.nextReading[0].mid_negative_rate >= data.nextReading[0].bottom_negative_rate) {
                        midNegativeClass = "bulletClass";

                        fallingRate = (data.nextReading[0].mid_negative_rate / allNegative * 100).toFixed(decimalPlaces);
                        fallingAmount = (data.nextReading[0].mid_negative_value).toFixed(decimalPlaces);
                    } else if (data.nextReading[0].bottom_negative_rate >= data.nextReading[0].top_negative_rate &&
                        data.nextReading[0].bottom_negative_rate >= data.nextReading[0].mid_negative_rate) {
                        bottomNegativeClass = "bulletClass";

                        fallingRate = (data.nextReading[0].bottom_negative_rate / allNegative * 100).toFixed(decimalPlaces);
                        fallingAmount = (data.nextReading[0].bottom_negative_value).toFixed(decimalPlaces);
                    }


                    $(".total-rising-rate").text(Math.round(Number(risingRate)) + "%");
                    $(".rising-most-rate").text(Math.round(Number(risingRate)) + "%");
                    $(".rising-most-value").text(risingAmount);

                    $(".total-falling-rate").text(Math.round(Number(fallingRate)) + "%");
                    $(".falling-most-rate").text(Math.round(Number(fallingRate)) + "%");
                    $(".falling-most-value").text(fallingAmount);

                    if (risingRate > fallingRate) {
                        $(".rising-total").css("background-color", "rgba(0, 255, 0, 0.2)");
                    } else {
                        $(".falling-total").css("background-color", "rgba(255, 0, 0, 0.2)");
                    }

                    var chartData = [];

                    $.extend(chartData, data.previousReadings);

                    chartData[chartData.length - 1].predicted_rising_selling_closing_price = chartData[chartData.length - 1].close_selling_price;
                    chartData[chartData.length - 1].predicted_stable_selling_closing_price = chartData[chartData.length - 1].close_selling_price;
                    chartData[chartData.length - 1].predicted_falling_selling_closing_price = chartData[chartData.length - 1].close_selling_price;

                    chartData[chartData.length - 1].top_positive_value = chartData[chartData.length - 1].close_selling_price;
                    chartData[chartData.length - 1].mid_positive_value = chartData[chartData.length - 1].close_selling_price;
                    chartData[chartData.length - 1].bottom_positive_value = chartData[chartData.length - 1].close_selling_price;

                    chartData[chartData.length - 1].top_negative_value = chartData[chartData.length - 1].close_selling_price;
                    chartData[chartData.length - 1].mid_negative_value = chartData[chartData.length - 1].close_selling_price;
                    chartData[chartData.length - 1].bottom_negative_value = chartData[chartData.length - 1].close_selling_price;

                    pieChartData = [
                    {
                        label: 'استقرار',
                        price: data.nextReading[0].predicted_stable_selling_closing_price.toFixed(decimalPlaces),
                        rate: (data.nextReading[0].predicted_stable_selling_closing_price_rate * 100).toFixed(decimalPlaces),
                        color: '#0000FF'
                    }, {
                        label: 'ارتفاع',
                        price: data.nextReading[0].predicted_rising_selling_closing_price.toFixed(decimalPlaces),
                        rate: (data.nextReading[0].predicted_rising_selling_closing_price_rate * 100).toFixed(decimalPlaces),
                        color: '#00FF00'
                    }, {
                        label: 'انخفاض',
                        price: data.nextReading[0].predicted_falling_selling_closing_price.toFixed(decimalPlaces),
                        rate: (data.nextReading[0].predicted_falling_selling_closing_price_rate * 100).toFixed(decimalPlaces),
                        color: '#FF0000'
                    }];

                    pieChartDataDetails = [
                        [
                            {
                                label: 'استقرار',
                                price: data.nextReading[0].predicted_stable_selling_closing_price.toFixed(decimalPlaces),
                                rate: (data.nextReading[0].predicted_stable_selling_closing_price_rate * 100).toFixed(decimalPlaces),
                                color: '#0000FF'
                            }
                        ],
                        [
                            {
                                label: 'ارتفاع - أدنى',
                                price: data.nextReading[0].bottom_positive_value.toFixed(decimalPlaces),
                                rate: (data.nextReading[0].bottom_positive_rate * 100).toFixed(decimalPlaces),
                                color: '#96ff96'
                            }, {
                                label: 'ارتفاع - متوسط',
                                price: data.nextReading[0].mid_positive_value.toFixed(decimalPlaces),
                                rate: (data.nextReading[0].mid_positive_rate * 100).toFixed(decimalPlaces),
                                color: '#64ff64'
                            }, {
                                label: 'ارتفاع - أعلى',
                                price: data.nextReading[0].top_positive_value.toFixed(decimalPlaces),
                                rate: (data.nextReading[0].top_positive_rate * 100).toFixed(decimalPlaces),
                                color: '#32ff32'
                            }
                        ],
                        [   {
                                label: 'انخفاض - أدنى',
                                price: data.nextReading[0].bottom_negative_value.toFixed(decimalPlaces),
                                rate: (data.nextReading[0].bottom_negative_rate * 100).toFixed(decimalPlaces),
                                color: '#ff9696'
                            }, {
                                label: 'انخفاض - متوسط',
                                price: data.nextReading[0].mid_negative_value.toFixed(decimalPlaces),
                                rate: (data.nextReading[0].mid_negative_rate * 100).toFixed(decimalPlaces),
                                color: '#ff6464'
                            }, 
                            {
                                label: 'انخفاض - أعلى',
                                price: data.nextReading[0].top_negative_value.toFixed(decimalPlaces),
                                rate: (data.nextReading[0].top_negative_rate * 100).toFixed(decimalPlaces),
                                color: '#ff3232'
                            }
                        ]
                    ]

                    //generatePieChart("stock-" + stockSerialNo + "-pie");

                    $stockBox.find(".last-close-price").text(chartData[chartData.length - 1].close_selling_price.toFixed(decimalPlaces)).end();

                    $stockBox.find(".tabular-rising-rate").text(Math.round(data.nextReading[0].predicted_rising_selling_closing_price_rate * 100) + "%").end()
                             .find(".tabular-stable-rate").text(Math.round(data.nextReading[0].predicted_stable_selling_closing_price_rate * 100) + "%").end()
                             .find(".tabular-falling-rate").text(Math.round(data.nextReading[0].predicted_falling_selling_closing_price_rate * 100) + "%").end()
                             .find(".tabular-rising-price").text(data.nextReading[0].predicted_rising_selling_closing_price.toFixed(decimalPlaces)).end()
                             .find(".tabular-stable-price").text(data.nextReading[0].predicted_stable_selling_closing_price.toFixed(decimalPlaces)).end()
                             .find(".tabular-falling-price").text(data.nextReading[0].predicted_falling_selling_closing_price.toFixed(decimalPlaces)).end();

                    var closingReadingsHTML = '';

                    var previousReading = 0;

                    $.each(chartData, function(key, value) {
                        closingReadingsHTML = '<tr>' +
                                    '<td> ' + value.date_closed.split(" ")[0] + ' </td>' +
                                    '<td> ' + value.close_selling_price.toFixed(decimalPlaces) + '&nbsp;<i class="icon-arrow-' + (value.close_selling_price > previousReading ? 'up' : 'down') + '" style="color: ' + (value.close_selling_price > previousReading ? 'green' : 'red') + '"></i> </td>' +
                                    '</tr>' + closingReadingsHTML;

                        previousReading = value.close_selling_price;
                    });

                    $stockBox.find(".closing-readings-table").html(closingReadingsHTML).end();

                    data.nextReading[0].predicted_rising_selling_closing_price = data.nextReading[0].predicted_rising_selling_closing_price.toFixed(decimalPlaces);
                    data.nextReading[0].predicted_stable_selling_closing_price = data.nextReading[0].predicted_stable_selling_closing_price.toFixed(decimalPlaces);
                    data.nextReading[0].predicted_falling_selling_closing_price = data.nextReading[0].predicted_falling_selling_closing_price.toFixed(decimalPlaces);

                    data.nextReading[0].risingPercent = (data.nextReading[0].predicted_rising_selling_closing_price_rate * 100).toFixed(decimalPlaces);
                    data.nextReading[0].stablePercent = (data.nextReading[0].predicted_stable_selling_closing_price_rate * 100).toFixed(decimalPlaces);
                    data.nextReading[0].fallingPercent = (data.nextReading[0].predicted_falling_selling_closing_price_rate * 100).toFixed(decimalPlaces);

                    data.nextReading[0].predicted_rising_selling_closing_price_rate = (data.nextReading[0].predicted_rising_selling_closing_price_rate * 10).toFixed(decimalPlaces);
                    data.nextReading[0].predicted_stable_selling_closing_price_rate = (data.nextReading[0].predicted_stable_selling_closing_price_rate * 10).toFixed(decimalPlaces);
                    data.nextReading[0].predicted_falling_selling_closing_price_rate = (data.nextReading[0].predicted_falling_selling_closing_price_rate * 10).toFixed(decimalPlaces);

                    data.nextReading[0].top_positive_rate = (data.nextReading[0].top_positive_rate / allPositive).toFixed(decimalPlaces);
                    data.nextReading[0].mid_positive_rate = (data.nextReading[0].mid_positive_rate / allPositive).toFixed(decimalPlaces);
                    data.nextReading[0].bottom_positive_rate = (data.nextReading[0].bottom_positive_rate / allPositive).toFixed(decimalPlaces);

                    data.nextReading[0].top_negative_rate = (data.nextReading[0].top_negative_rate / allNegative).toFixed(decimalPlaces);
                    data.nextReading[0].mid_negative_rate = (data.nextReading[0].mid_negative_rate / allNegative).toFixed(decimalPlaces);
                    data.nextReading[0].bottom_negative_rate = (data.nextReading[0].bottom_negative_rate / allNegative).toFixed(decimalPlaces);

                    data.nextReading[0].top_positive_value = data.nextReading[0].top_positive_value.toFixed(decimalPlaces);
                    data.nextReading[0].mid_positive_value = data.nextReading[0].mid_positive_value.toFixed(decimalPlaces);
                    data.nextReading[0].bottom_positive_value = data.nextReading[0].bottom_positive_value.toFixed(decimalPlaces);

                    data.nextReading[0].top_negative_value = data.nextReading[0].top_negative_value.toFixed(decimalPlaces);
                    data.nextReading[0].mid_negative_value = data.nextReading[0].mid_negative_value.toFixed(decimalPlaces);
                    data.nextReading[0].bottom_negative_value = data.nextReading[0].bottom_negative_value.toFixed(decimalPlaces);

                    data.nextReading[0].top_positive_percent = (data.nextReading[0].top_positive_rate * 100).toFixed(decimalPlaces);
                    data.nextReading[0].mid_positive_percent = (data.nextReading[0].mid_positive_rate * 100).toFixed(decimalPlaces);
                    data.nextReading[0].bottom_positive_percent = (data.nextReading[0].bottom_positive_rate * 100).toFixed(decimalPlaces);

                    data.nextReading[0].top_negative_percent = (data.nextReading[0].top_negative_rate * 100).toFixed(decimalPlaces);
                    data.nextReading[0].mid_negative_percent = (data.nextReading[0].mid_negative_rate * 100).toFixed(decimalPlaces);
                    data.nextReading[0].bottom_negative_percent = (data.nextReading[0].bottom_negative_rate * 100).toFixed(decimalPlaces);

                    data.nextReading[0].top_positive_rate = (data.nextReading[0].top_positive_rate * 10).toFixed(decimalPlaces);
                    data.nextReading[0].mid_positive_rate = (data.nextReading[0].mid_positive_rate * 10).toFixed(decimalPlaces);
                    data.nextReading[0].bottom_positive_rate = (data.nextReading[0].bottom_positive_rate * 10).toFixed(decimalPlaces);

                    data.nextReading[0].top_negative_rate = (data.nextReading[0].top_negative_rate * 10).toFixed(decimalPlaces);
                    data.nextReading[0].mid_negative_rate = (data.nextReading[0].mid_negative_rate * 10).toFixed(decimalPlaces);
                    data.nextReading[0].bottom_negative_rate = (data.nextReading[0].bottom_negative_rate * 10).toFixed(decimalPlaces);

                    chartData[chartData.length] = data.nextReading[0];

                    chartData[chartData.length - 1].bulletClass = "lastBullet";

                    var today = new Date(chartData[chartData.length - 1].date_closed);

                    chartData[chartData.length] = {"date_closed": moment(chartData[chartData.length - 1].date_closed, 'DD/MM/YYYY').add(1, 'days').format('DD/MM/YYYY')};

                    var chart = generateChart("stock-" + stockSerialNo + "-chart", chartData, risingClass, stableClass, fallingClass);

                    chartsRegistry["stock-" + stockSerialNo] = chart;

                    generateRiseFallChart("stock-" + stockSerialNo + "-chart-rise", "يرتفع", "ارتفاع", chartData, "positive", topPositiveClass, midPositiveClass, bottomPositiveClass);
                    generateRiseFallChart("stock-" + stockSerialNo + "-chart-fall", "ينخفض", "انخفاض", chartData, "negative", topNegativeClass, midNegativeClass, bottomNegativeClass);
                });
            }

            function generatePieChartData() {
                var returnData = [];

                $(".rates-tabular-tbody").html("");

                var dataToSet = [];

                for (var i = 0; i < pieChartData.length; i++) {
                    var data = pieChartData[i];

                    if (selected !== undefined && i === selected) {
                        $.each(pieChartDataDetails[i], function(key, innerData) {
                            if (innerData.label.indexOf("أعلى") !== -1) {
                                dataToSet[0] = "<tr><td>" + innerData.label + "</td><td>" + innerData.rate + "%</td><td>" + innerData.price + "</td></tr>";
                            } else if (innerData.label.indexOf("متوسط") !== -1) {
                                dataToSet[1] = "<tr><td>" + innerData.label + "</td><td>" + innerData.rate + "%</td><td>" + innerData.price + "</td></tr>";
                            } else if (innerData.label.indexOf("أدنى") !== -1) {
                                dataToSet[2] = "<tr><td>" + innerData.label + "</td><td>" + innerData.rate + "%</td><td>" + innerData.price + "</td></tr>";
                            } else if (innerData.label.indexOf("استقرار") !== -1) {
                                dataToSet[0] = "<tr><td>" + innerData.label + "</td><td>" + innerData.rate + "%</td><td>" + innerData.price + "</td></tr>";
                            }
                            

                            returnData.push({
                                            "category": innerData.label,
                                            "price": innerData.price,
                                            "rate": innerData.rate,
                                            "color": innerData.color,
                                            "pulled": true
                                        });
                        });
                    } else {
                        if (selected === undefined) {
                            if (data.label.indexOf("ارتفاع") !== -1) {
                                dataToSet[0] = "<tr><td>" + data.label + "</td><td>" + data.rate + "%</td><td>" + data.price + "</td></tr>";
                            } else if (data.label.indexOf("استقرار") !== -1) {
                                dataToSet[1] = "<tr><td>" + data.label + "</td><td>" + data.rate + "%</td><td>" + data.price + "</td></tr>";
                            } else if (data.label.indexOf("انخفاض") !== -1) {
                                dataToSet[2] = "<tr><td>" + data.label + "</td><td>" + data.rate + "%</td><td>" + data.price + "</td></tr>";
                            }
                        }

                        returnData.push({
                                            "id": i,
                                            "category": data.label,
                                            "price": data.price,
                                            "rate": data.rate,
                                            "color": data.color
                                        });
                    }
                }

                $(".rates-tabular-tbody").html(dataToSet.join(" "));

                return returnData;
            }

            function generatePieChart(id) {
                return AmCharts.makeChart(id,{  "type": "pie",
                                                "balloonText": "[[category]]<br><span style='font-size:14px'><b>[[price]]</b> ([[percents]]%)</span>",
                                                "titleField": "price",
                                                "colorField": "color",
                                                "valueField": "rate",
                                                "marginBottom": 0,
                                                "marginTop": 15,
                                                "pulledField": "pulled",
                                                "labelText": "[[category]] : [[price]] باحتمال [[percents]] بالمئة",
                                                "backgroundColor": "#FDFDFD",
                                                "depth3D": 10,
                                                "gradientType": "linear",
                                                "innerRadius": 25,
                                                "color": "black",
                                                "fontSize": 13,
                                                "radius": "33%",
                                                "allLabels": [],
                                                "balloon": {},
                                                "titles": [],
                                                "dataProvider": generatePieChartData(),
                                                "listeners": [{
                                                            "event": "clickSlice",
                                                            "method": function(event) {
                                                              var chart = event.chart;

                                                              if (event.dataItem.dataContext.id != undefined) {
                                                                selected = event.dataItem.dataContext.id;
                                                              } else {
                                                                selected = undefined;
                                                              }

                                                              chart.dataProvider = generatePieChartData();
                                                              chart.validateData();
                                                            }
                                                          }]
                                            });
            }

            function generateChart(id, 
                                   data, 
                                   risingClass, 
                                   stableClass, 
                                   fallingClass, 
                                   riseText, 
                                   stableText, 
                                   fallText,
                                   riseColor,
                                   midColor,
                                   bottomColor) {

                riseColor === undefined && (riseColor = "#1fc305");
                midColor === undefined && (midColor = "#000cb0");
                bottomColor === undefined && (bottomColor = "#e26a6a");

                riseText === undefined && (riseText =  "احتمال [[risingPercent]]% أن يرتفع السهم لغاية [[predicted_rising_selling_closing_price]]");
                stableText === undefined && (stableText = "احتمال [[stablePercent]]% أن يستقر السهم عند مستوى [[predicted_stable_selling_closing_price]]");
                fallText === undefined && (fallText = "احتمال [[fallingPercent]]% أن ينخفض السهم لغاية [[predicted_falling_selling_closing_price]]");

                return AmCharts.makeChart(id, {
                    type: "serial",
                    theme: "light",
                    fontSize: 12,
                    fontFamily: "Droid Arabic Kufi",
                    dataDateFormat: "DD/MM/YYYY",
                    dataProvider: data,
                    addClassNames: true,
                    startDuration: 0,
                    "processCount": 1002,
                    "plotAreaFillAlphas": 0.09,
                    "plotAreaFillColors": "#CDCDCD",
                    color: "#6c7b88",
                    marginLeft: 0,
                    "fontSize": 13,
                    "handDrawScatter": 5,
                    "theme": "light",
                    categoryField: "date_closed",
                    "listeners": [{
                                "event": "clickGraphItem",
                                "method": function(event) {
                                    $(event.event.target).parents(".stock-box").find('.graph-toggle').click();
                                }
                              }],
                    categoryAxis: {
                        parseDates: true,
                        minPeriod: "hh",
                        "axisAlpha": 0.6,
                        "axisThickness": 1,
                        "tickLength": 1,
                        dateFormats: [{
                                period: 'DD',
                                format: 'MMM DD'
                            }, {
                                period: 'WW',
                                format: 'MMM DD'
                            }, {
                                period: 'MM',
                                format: 'MMM'
                            }, {
                                period: 'YYYY',
                                format: 'YYYY'
                            }, {
                                period: 'hh',
                                format: 'HH'
                            }]
                    },
                    valueAxes: [{
                            id: "a1",
                            title: "سعر الإغلاق",
                            "autoGridCount": true,
                            "startOnAxis": false,
                            "axisAlpha": 0.6,
                            "axisThickness": 1,
                            "tickLength": 1
                        }],
                    graphs: [{
                            id: "g" + (risingClass !== undefined && risingClass !== '' ? "low-1" : "a3"),
                            title: "سعر الارتفاع المتوقع",
                            classNameField: risingClass,
                            valueField: "predicted_rising_selling_closing_price",
                            "type": "smoothedLine",
                            valueAxis: "a1",
                            lineAlpha: 0.8,
                            lineColor: riseColor,
                            balloonText: riseText,
                            lineThickness: 3,
                            legendValueText: "[[predicted_rising_selling_closing_price]]",
                            bullet: "circle",
                            bulletBorderColor: "#1fc305",
                            bulletBorderThickness: 4,
                            bulletBorderAlpha: 0.8
                        }, {
                            id: "g" + (risingClass !== undefined && stableClass !== '' ? "low-2" : "a4"),
                            title: "سعر الاستقرار المتوقع",
                            classNameField: stableClass,
                            valueField: "predicted_stable_selling_closing_price",
                            "type": "smoothedLine",
                            valueAxis: "a1",
                            lineAlpha: 0.8,
                            lineColor: midColor,
                            balloonText: stableText,
                            lineThickness: 3,
                            legendValueText: "[[predicted_stable_selling_closing_price]]",
                            bullet: "circle",
                            bulletBorderColor: "#000cb0",
                            bulletBorderThickness: 4,
                            bulletBorderAlpha: 0.8
                        }, {
                            id: "g" + (fallingClass !== undefined && fallingClass !== '' ? "low-3" : "a5"),
                            title: "سعر الانخفاض المتوقع",
                            classNameField: fallingClass,
                            valueField: "predicted_falling_selling_closing_price",
                            "type": "smoothedLine",
                            valueAxis: "a1",
                            lineAlpha: 0.8,
                            lineColor: bottomColor,
                            balloonText: fallText,
                            lineThickness: 3,
                            legendValueText: "[[predicted_falling_selling_closing_price]]",
                            bullet: "circle",
                            bulletBorderColor: "#e26a6a",
                            bulletBorderThickness: 4,
                            bulletBorderAlpha: 0.8
                        }, {
                            id: "g2",
                            title: "أسعار الإغلاق الرسمية",
                            valueField: "close_selling_price",
                            "type": "smoothedLine",
                            valueAxis: "a1",
                            lineColor: "black",
                            lineThickness: 3,
                            legendValueText: "[[close_selling_price]]",
                            descriptionField: "close_selling_price",
                            bullet: "circle",
                            bulletBorderColor: "#02617a",
                            bulletBorderAlpha: 1,
                            bulletBorderThickness: 4,
                            bulletColor: "#89c4f4",
                            labelText: "[[close_selling_price]]",
                            labelPosition: "right",
                            balloonText: "آخر سعر إغلاق:[[close_selling_price]]",
                            showBalloon: true
                        }],
                    chartCursor: {
                        zoomable: true,
                        categoryBalloonDateFormat: "DD",
                        cursorAlpha: 0,
                        categoryBalloonColor: "#e26a6a",
                        categoryBalloonAlpha: 0.8,
                        valueBalloonsEnabled: false
                    },
                    legend: {
                        bulletType: "round",
                        equalWidths: false,
                        valueWidth: 120,
                        useGraphSettings: true,
                        color: "#6c7b88"
                    },
                    "export": {
                        "enabled": true
                    }
                });

            }

            function generateRiseFallChart(id, type, typeNoun, data, operatorType, topClass, midClass, bottomClass) {
                return AmCharts.makeChart(id, {
                    type: "serial",
                    theme: "light",
                    fontSize: 12,
                    fontFamily: "Droid Arabic Kufi",
                    dataDateFormat: "DD/MM/YYYY",
                    "plotAreaFillAlphas": 0.09,
                    "plotAreaFillColors": "#CDCDCD",
                    dataProvider: data,
                    addClassNames: true,
                    startDuration: 0,
                    "processCount": 1002,
                    color: "#6c7b88",
                    marginLeft: 0,
                    "fontSize": 13,
                    "handDrawScatter": 5,
                    "theme": "light",
                    categoryField: "date_closed",
                    categoryAxis: {
                        parseDates: true,
                        minPeriod: "hh",
                        "axisAlpha": 0.6,
                        "axisThickness": 1,
                        "tickLength": 1,
                        dateFormats: [{
                                period: 'DD',
                                format: 'MMM DD'
                            }, {
                                period: 'WW',
                                format: 'MMM DD'
                            }, {
                                period: 'MM',
                                format: 'MMM'
                            }, {
                                period: 'YYYY',
                                format: 'YYYY'
                            }, {
                                period: 'hh',
                                format: 'HH'
                            }]
                    },
                    valueAxes: [{
                            id: "a1",
                            title: "سعر الإغلاق",
                            "autoGridCount": true,
                            "startOnAxis": false,
                            "axisAlpha": 0.6,
                            "axisThickness": 1,
                            "tickLength": 1
                        }],
                    graphs: [{
                            d: "g" + (topClass !== undefined && topClass !== '' ? "low-1" : "a3"),
                            title: "أعلى احتمال " + typeNoun,
                            classNameField: topClass,
                            valueField: "top_" + operatorType + "_value",
                            "type": "smoothedLine",
                            valueAxis: "a1",
                            lineAlpha: 0.8,
                            lineColor: operatorType === "positive" ? "#158538" : "#D9072D",
                            balloonText: "احتمال [[top_" + operatorType + "_percent]]% أن " + type + " السهم لغاية [[top_" + operatorType + "_value]]",
                            lineThickness: 3,
                            legendValueText: "[[top_" + operatorType + "_value]]",
                            bullet: "circle",
                            bulletBorderColor: operatorType === "positive" ? "#158538" : "#D9072D",
                            bulletBorderThickness: 4,
                            bulletBorderAlpha: 0.8
                        }, {
                            id: "g" + (midClass !== undefined && midClass !== '' ? "low-2" : "a4"),
                            title: "احتمال ال" + typeNoun + " المتوسطة",
                            classNameField: midClass,
                            valueField: "mid_" + operatorType + "_value",
                            "type": "smoothedLine",
                            valueAxis: "a1",
                            lineAlpha: 0.8,
                            lineColor: operatorType === "positive" ? "#0DDB4E" : "#FF0533",
                            balloonText: "احتمال [[mid_" + operatorType + "_percent]]% أن " + type + " السهم لغاية [[mid_" + operatorType + "_value]]",
                            lineThickness: 3,
                            legendValueText: "[[mid_" + operatorType + "_value]]",
                            bullet: "circle",
                            bulletBorderColor: operatorType === "positive" ? "#0DDB4E" : "#FF0533",
                            bulletBorderThickness: 4,
                            bulletBorderAlpha: 0.8
                        }, {
                            id: "g" + (bottomClass !== undefined && bottomClass !== '' ? "low-3" : "a5"),
                            title: "أقل احتمال " + typeNoun,
                            classNameField: bottomClass,
                            valueField: "bottom_" + operatorType + "_value",
                            "type": "smoothedLine",
                            valueAxis: "a1",
                            lineAlpha: 0.8,
                            lineColor: operatorType === "positive" ? "#07FA53" : "#FF6E88",
                            balloonText: "احتمال [[bottom_" + operatorType + "_percent]]% أن " + type + " السهم لغاية [[bottom_" + operatorType + "_value]]",
                            lineThickness: 3,
                            legendValueText: "[[bottom_" + operatorType + "_value]]",
                            bullet: "circle",
                            bulletBorderColor: operatorType === "positive" ? "#07FA53" : "#FF6E88",
                            bulletBorderThickness: 4,
                            bulletBorderAlpha: 0.8
                        }, {
                            id: "g2",
                            title: "أسعار الإغلاق الرسمية",
                            valueField: "close_selling_price",
                            "type": "smoothedLine",
                            valueAxis: "a1",
                            lineColor: "black",
                            lineThickness: 3,
                            legendValueText: "[[close_selling_price]]",
                            descriptionField: "close_selling_price",
                            bullet: "circle",
                            bulletBorderColor: "#02617a",
                            bulletBorderAlpha: 1,
                            bulletBorderThickness: 4,
                            bulletColor: "#89c4f4",
                            labelText: "[[close_selling_price]]",
                            labelPosition: "right",
                            balloonText: "آخر سعر إغلاق:[[close_selling_price]]",
                            showBalloon: true
                        }],
                    chartCursor: {
                        zoomable: true,
                        categoryBalloonDateFormat: "DD",
                        cursorAlpha: 0,
                        categoryBalloonColor: "#e26a6a",
                        categoryBalloonAlpha: 0.8,
                        valueBalloonsEnabled: false
                    },
                    "export": {
                        "enabled": true
                    }
                });

            }

            function negativeToZero($number) {
                return $number < 0 ? 0 : $number;
            }
        </script>

        @yield('javascript')
    </body>
</html> 