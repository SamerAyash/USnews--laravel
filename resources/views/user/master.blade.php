<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Metronic Admin Theme #1 | User Profile 2</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #1 for user profile sample" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{asset('assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/pages/css/profile-2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/layouts/layout/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/layouts/layout/css/themes/darkblue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{asset('assets/layouts/layout/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/46a4f50821.js"></script>
    <link rel="shortcut icon" href="{{asset('control/favicon.ico')}}" />
<!-- END HEAD -->
    @stack('css')
    </head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="{{route('news')}}">
                    <img src="{{asset('assets/layouts/layout/img/logo.png')}}" alt="logo" class="logo-default" /> </a>
                <div class="menu-toggler sidebar-toggler">
                    <span></span>
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span></span>
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->

            <div class="top-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <div class="inset">
                            <a href="{{route('myProfile')}}">
                                <img style="width: 40px;height: 40px ; margin-top: 5px" class="rounded " src="{{asset('control/images/authors_images/'.Auth::user()->image)}}">
                            </a>

                        </div>
                    </li>

                    <li>
                        <div class="divider"></div>
                    </li>

                    <li class="dropdown dropdown-quick-sidebar-toggler">
                        <a class="dropdown-item icon-logout"  style="text-decoration: none" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>

                    </li>

                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>

    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <div class="page-sidebar navbar-collapse collapse">
                <ul class="page-sidebar-menu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler">
                        </div>
                    </li>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                    <li class="nav-item {{ Request::path() == 'user/profile' ? 'active' : '' }}">
                        <a href="{{route('profile')}}" class="nav-link">
                            <i class=""></i>
                            <span class="title"><i class="icon-home"></i>My news</span>
                        </a></li>
                    @if(Auth::user()->can('active'))
                    <li class="nav-item {{ Request::path() == 'user/create' ? 'active' : '' }}">
                        <a href="{{route('createNews')}}" class="nav-link">
                            <i class=""></i>
                            <span class="title"><i class="fa fa-plus"></i>Create news</span>
                        </a></li>
                    @endif
                    <li class="nav-item start ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <span class="title">News categories</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item start ">
                                <a href="{{route('category','Worlds News')}}" class="nav-link ">
                                    <i class="far fa-newspaper"></i>
                                    <span class="title">Worlds News</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="{{route('category','National')}}" class="nav-link ">
                                    <i class="far fa-newspaper"></i>
                                    <span class="title">National</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="{{route('category','Financial')}}" class="nav-link ">
                                    <i class="far fa-newspaper"></i>
                                    <span class="title">Financial</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="{{route('category','Entertainment')}}" class="nav-link ">
                                    <i class="far fa-newspaper"></i>
                                    <span class="title">Entertainment</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="{{route('category','Lifestyle')}}" class="nav-link ">
                                    <i class="far fa-newspaper"></i>
                                    <span class="title">Lifestyle</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="{{route('category','Technology')}}" class="nav-link ">
                                    <i class="far fa-newspaper"></i>
                                    <span class="title">Technology</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="{{route('category','Sports')}}" class="nav-link ">
                                    <i class="far fa-newspaper"></i>
                                    <span class="title">Sports</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="{{route('category','Travel')}}" class="nav-link ">
                                    <i class="far fa-newspaper"></i>
                                    <span class="title">Travel</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <div class="container">
                  @yield('content')
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
            <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
            <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
</div>
<!-- BEGIN QUICK NAV -->
<span aria-hidden="true" class="quick-nav-bg"></span>
<div class="quick-nav-overlay"></div>
<!-- END QUICK NAV -->
<!--///////////////////////////////////////////////////////////////////////////////////////////////// -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"  type="text/javascript"></script>

<!--///////////////////////////////////////////////////////////////////////////////////////////////// -->
<script src="{{asset('assets/global/plugins/respond.min.js')}}"></script>
<script src="{{asset('assets/global/plugins/excanvas.min.js')}}"></script>
<script src="{{asset('assets/global/plugins/ie8.fix.min.js')}}"></script>
<!-- BEGIN CORE PLUGINS -->
<script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{asset('assets/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
    {
        $('#radio1003').attr('checked', 'checked');
    });

    })

</script>
@stack('script')
</body>

</html>