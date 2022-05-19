@php($path = asset('/'))
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- THEME INTEGRATIONS -->
    <!-- Favicon icon -->
    <link rel="icon" href="libraries\assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{$path}}libraries\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{$path}}libraries\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{$path}}libraries\assets\icon\icofont\css\icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{$path}}libraries\assets\icon\feather\css\feather.css">
    <!-- Syntax highlighter Prism css -->
    <link rel="stylesheet" type="text/css" href="{{$path}}libraries\assets\pages\prism\prism.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{$path}}libraries\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="{{$path}}libraries\assets\css\jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="{{$path}}libraries\assets\css\pcoded-horizontal.min.css">

    <!-- Data Table Css -->
     <link rel="stylesheet" type="text/css" href="{{$path}}libraries\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{$path}}libraries\assets\pages\data-table\css\buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{$path}}libraries\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">
    
    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="{{$path}}libraries\bower_components\animate.css\css\animate.css">

    <link rel="stylesheet" type="text/css" href="{{$path}}libraries\assets\css\style.css">

    <link rel="stylesheet" type="text/css" href="{{$path}}libraries\bower_components\switchery\css\switchery.min.css">



    <link href="{{$path}}plugins/search-box/css/search_box.min.css" rel="stylesheet">





    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    @yield('styles')
    <!-- END THEME INTEGRATION -->
    <style type="text/css">
        .card-title {
            font-weight: bolder;
            font-size: 18px;
        }
        #loading {
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0.9;
            background:  center no-repeat #fff;
            z-index: 9999;
        }

        #loading-image {
            z-index: 100;
        }
        .active-li{    
            font-weight:bold;
        }
        .no-after::after {
            content: none;
        }
        .swal-modal {
            z-index: 99999999999;
        }
        .modal {
            z-index: 1111;
        }
        .display-none{
            display: none;
        }
</style>

</head>
<body>
    <div id="loading">
        
        <div class="loader animation-start" id="loading-image">
            <span class="circle delay-1 size-2"></span>
            <span class="circle delay-2 size-4"></span>
            <span class="circle delay-3 size-6"></span>
            <span class="circle delay-4 size-7"></span>
            <span class="circle delay-5 size-7"></span>
            <span class="circle delay-6 size-6"></span>
            <span class="circle delay-7 size-4"></span>
            <span class="circle delay-8 size-2"></span>
        </div>
    </div>
            <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">

        <div class="pcoded-container">
            <!-- Menu header start -->
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index-1.htm">
                            <img width="50%"  class="img-fluid" src="{{Session::get('logo1')}}" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="libraries\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="libraries\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="libraries\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span>
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="libraries\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>John Doe</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.htm">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.htm">
                                                <i class="feather icon-mail"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.htm">
                                                <i class="feather icon-lock"></i> Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" href="{{ route('logout') }}">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>

                                            <form style="display:none;" id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Menu header end -->
            <div class="pcoded-main-container">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar">
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu {{UH::getSegment(['home'],'active-li')}} no-after"  >
                                <a href="{{url('home')}}" >
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Dashboard</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>

                                
                            </li>
                            <li class="pcoded-hasmenu {{UH::getSegment(['projects'],'active-li')}} no-after" dropdown-icon="">
                                <a href="{{url('projects')}}">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">System Configuration</span>
                                    <span class="pcoded-mcaret"></span>

                                </a>

                                
                            </li>
                            <li class="pcoded-hasmenu no-after">
                                <a href="{{url('/branch')}}">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">User Configuration</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>

                                
                            </li>
                        
                                </ul>
                            </li>                            
                        </ul>
                    </div>
                </nav>
                <!-- Sidebar chat start -->
                <div id="sidebar" class="users p-chat-user showChat">
                    <div class="had-container">
                        <div class="card card_main p-fixed users-main">
                            <div class="user-box">
                                <div class="chat-inner-header">
                                    <div class="back_chatBox">
                                        <div class="right-icon-control">
                                            <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                            <div class="form-icon">
                                                <i class="icofont icofont-search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-friend-list">
                                    <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius img-radius" src="libraries\assets\images\avatar-3.jpg" alt="Generic placeholder image ">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Josephin Doe</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius" src="libraries\assets\images\avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Lary Doe</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius" src="libraries\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Alice</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius" src="libraries\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Alia</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius" src="libraries\assets\images\avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Suzen</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar inner chat start-->
                <div class="showChat_inner">
                    <div class="media chat-inner-header">
                        <a class="back_chatBox">
                            <i class="feather icon-chevron-left"></i> Josephin Doe
                        </a>
                    </div>
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="libraries\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                                <p class="chat-time">8:20 a.m.</p>
                            </div>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <div class="media-body chat-menu-reply">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                                <p class="chat-time">8:20 a.m.</p>
                            </div>
                        </div>
                        <div class="media-right photo-table">
                            <a href="#!">
                                <img class="media-object img-radius img-radius m-t-5" src="libraries\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                            </a>
                        </div>
                    </div>
                    <div class="chat-reply-box p-b-20">
                        <div class="right-icon-control">
                            <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                            <div class="form-icon">
                                <i class="feather icon-navigation"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar inner chat end-->
                <div class="pcoded-wrapper">
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header m-t-50">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                       @yield('header_title')
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                               @yield('breadcrumbs')
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    <!-- Page body start -->
                                    <div class="page-body">

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        @yield('content')
                                       @yield('modals')

                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id="styleSelector">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{$path}}libraries\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="{{$path}}libraries\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{$path}}libraries\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="{{$path}}libraries\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{$path}}libraries\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{$path}}libraries\bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="{{$path}}libraries\bower_components\modernizr\js\css-scrollbars.js"></script>

    <!-- Syntax highlighter prism js -->
    <script type="text/javascript" src="{{$path}}libraries\assets\pages\prism\custom-prism.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{$path}}libraries\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="{{$path}}libraries\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="{{$path}}libraries\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="{{$path}}libraries\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>

    <!-- data-table js -->
    <script src="{{$path}}libraries\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
    <script src="{{$path}}libraries\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
    <script src="{{$path}}libraries\assets\pages\data-table\js\jszip.min.js"></script>
    <script src="{{$path}}libraries\assets\pages\data-table\js\pdfmake.min.js"></script>
    <script src="{{$path}}libraries\assets\pages\data-table\js\vfs_fonts.js"></script>
    <script src="{{$path}}libraries\bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
    <script src="{{$path}}libraries\bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
    <script src="{{$path}}libraries\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
    <script src="{{$path}}libraries\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
    <script src="{{$path}}libraries\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>
        <!-- sweet alert js -->
    <script src="{{$path}}libraries\bower_components\sweetalert\dist\sweetalert.min.js"></script>
    <!-- sweet alert modal.js intialize js -->
    <!-- modalEffects js nifty modal window effects -->
    <script type="text/javascript" src="libraries\assets\js\modalEffects.js"></script>
    <script type="text/javascript" src="libraries\assets\js\classie.js"></script>
    <!-- Masking js -->
    <script src="{{$path}}libraries\assets\pages\form-masking\inputmask.js"></script>
    <script src="{{$path}}libraries\assets\pages\form-masking\jquery.inputmask.js"></script>
    <script src="{{$path}}libraries\assets\pages\form-masking\autoNumeric.js"></script>
    <script src="{{$path}}libraries\assets\pages\form-masking\form-mask.js"></script>
    <!-- Custom js -->
    <script src="{{$path}}libraries\assets\pages\data-table\js\data-table-custom.js"></script>
    <script src="{{$path}}libraries\assets\js\pcoded.min.js"></script>
    <script src="{{$path}}libraries\assets\js\menu\menu-hori-fixed.js"></script>
    <script src="{{$path}}libraries\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="{{$path}}libraries\assets\js\script.js"></script>
    <script type="text/javascript" src="{{$path}}libraries\assets\js\animation.js"></script>

    <script type="text/javascript" src="{{$path}}libraries\assets\js\animation.js"></script>

    <script type="text/javascript" src="{{$path}}libraries\bower_components\switchery\js\switchery.min.js"></script>

    <script type="text/javascript" src="{{$path}}plugins\search-box\js\search_box.min.js"></script>

    <script type="text/javascript" src="{{$path}}js/custom_js/validation/custom_validation.js"></script>

    <script type="text/javascript" src="{{$path}}js/custom_js/validation/bind_validation.js"></script>
    <script type="text/javascript" src="{{$path}}js/custom_js/validation/estatech_validation.js"></script>
    <script type="text/javascript" src="{{$path}}js/custom_js/estatech.js"></script>

    <script type="text/javascript" src="{{$path}}libraries\assets\js\script.js"></script>



    <script type="text/javascript">

        setFstDropdown();

        $( document ).ready(function() {
            $('.no-after').removeAttr('dropdown-icon');
        });

        $('.no-after').removeAttr('dropdown-icon');

        var token = "{{Session::token()}}";


        $('#loading').hide();

        $(document).ready(function(){
            $(".modal").click(function(){
                $(".modal").modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
        });





    </script>
    @yield('scripts')
</body>
</html>
