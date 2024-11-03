<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="main_alls/everythingzz/assets/images/icon/favicon.ico">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/themify-icons.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/metisMenu.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/slicknav.min.css">
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
            media="all" />
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/typography.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/default-css.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/styles.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/responsive.css">
        <script src="main_alls/everythingzz/assets/js/vendor/modernizr-2.8.3.min.js"></script>




        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">






        <style>

        </style>




    </head>

    <body class="body-bg">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- preloader area start -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- preloader area end -->
        <!-- main wrapper start -->
        <div class="horizontal-main-wrapper">
            <!-- main header area start -->
            <div class="mainheader-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <div class="logo">
                                <a href="index.html"><img src="main_alls/everythingzz/assets/images/icon/logo2.png"
                                        alt="logo"></a>
                            </div>
                        </div>
                        <!-- profile info & task notification -->
                        <div class="col-md-9 clearfix text-right">
                            <div class="d-md-inline-block d-block mr-md-4">
                                <ul class="notification-area">



                            </div>
                            <div class="clearfix d-md-inline-block d-block">
                                <div class="user-profile m-0">
                                    <img class="avatar user-thumb"
                                        src="main_alls/everythingzz/assets/images/author/avatar.png">
                                    @auth
                                    @if(Auth::user()->role_name !== 'Normal User')
                                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                        Unverified|{{ Auth::user()->name }}<i class="fa fa-angle-down"></i>
                                    </h4>
                                    @else
                                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                        Patient| {{ Auth::user()->name }}
                                        <i class="fa fa-angle-down"></i>
                                    </h4>
                                    @endif

                                    @endauth
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Message</a>
                                        <a class="dropdown-item" href="#">Settings</a>
                                        <a class="dropdown-item" href="{{url('logout')}}">Log Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main header area end -->
            <!-- header area start -->
            <div class="header-area header-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-9  d-none d-lg-block">
                            <div class="horizontal-menu">
                                <nav>
                                    <ul id="nav_menu">


                                        <li><a href="{{url('Guests')}}"><i class="fa fa-home"></i> <span>Home</span></a>
                                        </li>
                                        <li><a href="{{url('Guessappoint')}}"><i class="fa fa-briefcase"></i> <span>View
                                                    Appointment</span></a>
                                        </li>
                                        <li><a href="{{url('chatss')}}"><i class="fa fa-comments"></i> <span>Chat
                                                    Front-desk</span></a>
                                        </li>


                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- nav and search button -->

                        <!-- mobile_menu -->
                        <div class="col-12 d-block d-lg-none">
                            <div id="mobile_menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area end -->















            <!-- main content area end -->
            <!-- footer area start-->

            <!-- footer area end-->
        </div>
        <!-- main wrapper start -->
        <!-- offset area start -->
        <div class="offset-area">
            <div class="offset-close"><i class="ti-close"></i></div>
            <ul class="nav offset-menu-tab">
                <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
                <li><a data-toggle="tab" href="#settings">Settings</a></li>
            </ul>

        </div>





        <script>
        function closeMessage() {
            const messageBox = document.getElementById('success-message');
            messageBox.style.display = 'none';
        }
        </script>

        <!-- offset area end -->
        <!-- jquery latest version -->
        <script src="main_alls/everythingzz/assets/js/vendor/jquery-2.2.4.min.js"></script>


        <!-- bootstrap 4 js -->
        <script src="main_alls/everythingzz/assets/js/popper.min.js"></script>
        <script src="main_alls/everythingzz/assets/js/bootstrap.min.js"></script>
        <script src="main_alls/everythingzz/assets/js/owl.carousel.min.js"></script>
        <script src="main_alls/everythingzz/assets/js/metisMenu.min.js"></script>
        <script src="main_alls/everythingzz/assets/js/jquery.slimscroll.min.js"></script>
        <script src="main_alls/everythingzz/assets/js/jquery.slicknav.min.js"></script>

        <!-- start chart js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <!-- start highcharts js -->
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <!-- start amcharts -->
        <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
        <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
        <script src="https://www.amcharts.com/lib/3/serial.js"></script>
        <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
        <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
        <!-- all line chart activation -->
        <script src="main_alls/everythingzz/assets/js/line-chart.js"></script>
        <!-- all pie chart -->
        <script src="main_alls/everythingzz/assets/js/pie-chart.js"></script>
        <!-- all bar chart -->
        <script src="main_alls/everythingzz/assets/js/bar-chart.js"></script>
        <!-- all map chart -->
        <script src="main_alls/everythingzz/assets/js/maps.js"></script>
        <!-- others plugins -->
        <script src="main_alls/everythingzz/assets/js/plugins.js"></script>
        <script src="main_alls/everythingzz/assets/js/scripts.js"></script>


        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <script src="script.js"></script>
    </body>

</html>