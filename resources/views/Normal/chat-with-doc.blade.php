<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Comcare Medical</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/themify-icons.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/metisMenu.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/slicknav.min.css">
        <!-- amchart css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
            media="all" />
        <!-- others css -->
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/typography.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/default-css.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/styles.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/responsive.css">
        <!-- modernizr css -->
        <script src="main_alls/everythingzz/assets/js/vendor/modernizr-2.8.3.min.js"></script>

        <style>
        .col-md-3 {
            margin: 30px;


        }

        .row {

            display: flex;
            justify-content: center;
            align-items: center;
        }
        </style>


    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- preloader area start -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- preloader area end -->
        <!-- page container area start -->
        <div class="page-container">
            <!-- sidebar menu area start -->
            <div class="sidebar-menu">
                <div class="sidebar-header">
                    <div class="logo">
                        <a href="{{url('User')}}"><img src="main_alls/everythingzz/assets/images/icon/logo2.png"
                                alt="logo"></a>
                    </div>
                </div>
                <div class="main-menu">
                    <div class="menu-inner">
                        <nav>
                            <ul class="metismenu" id="menu">

                                <li><a href="{{url('User')}}"><i class="fa fa-comments"></i> <span>Home</span></a>
                                </li>

                                <li><a href="{{url('myappointment')}}"><i class="fa fa-briefcase"></i> <span>View
                                            Appointment</span></a>
                                </li>
                                <li><a href="{{ url('view_normal_prof') }}"><i class="fa fa-user"></i> <span>My
                                            Profile</span></a></li>
                                <li><a href=" {{url('chatss')}}"><i class="fa fa-comments"></i> <span>Chat with
                                            Front-desk</span></a>
                                </li>

                                <li><a href="{{url('create_appointmentsss')}}"><i class="fa fa-briefcase"></i>
                                        <span>Create
                                            An Appointment</span></a>
                                </li>





                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- sidebar menu area end -->
            <!-- main content area start -->
            <div class=" main-content">
                <!-- header area start -->
                <div class="header-area">
                    <div class="row align-items-center">
                        <!-- nav and search button -->
                        <div class="col-md-6 col-sm-8 clearfix">
                            <div class="nav-btn pull-left">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                        </div>
                        <!-- profile info & task notification -->

                    </div>
                </div>
                <!-- header area end -->
                <!-- page title area start -->
                <div class="page-title-area">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="breadcrumbs-area clearfix">
                                @auth
                                @if(Auth::user()->role_name !== 'Normal User')

                                <a href="{{route('guest_view')}}">
                                    <h4 class="page-title pull-left"><span class="unverifieds">Unverified</span> </h4>
                                </a>
                                @endif




                            </div>
                            @endauth
                        </div>

                    </div>
                </div>
                <!-- page title area end -->
















                <div class="main-content-inner">


                    <!-- 2nd Layer with Cyan Background -->

                    <!-- Upper Section -->


                    <!-- Lower Section - Doctor Profi
                    les -->
                    <div class="container">
                        <h2 class="text-dark">Meet Your Doctors</h2>

                        <div class="row">
                            @foreach($appointments as $appoint)
                            <div class="col-md-3">
                                <div class="doctor-card">
                                    <img src="doctorsimage/{{$appoint->doctor->image}}" alt="Doctor 1"
                                        class="doctor-picture">
                                    <h4 class="mt-3">{{$appoint->employees}}</h4>
                                    <p class="dep-info">{{$appoint->departments}}</p>
                                    <p class="patients-doc"><span class="badge badge-info">Patient :</span>
                                        {{$appoint->name}}</p>
                                    <a href="{{url('chatdoc/' .$appoint->doctor->id)}}" class="btn-sendmes">Send
                                        Message</a>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>



                </div>



            </div>






        </div>
        <!-- main content area end -->
        <!-- footer area start-->

        <!-- footer area end-->
        </div>
        <!-- page container area end -->
        <!-- offset area start -->

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
        <!-- start zingchart js -->
        <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
        <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
        </script>
        <!-- all line chart activation -->
        <script src="main_alls/everythingzz/assets/js/line-chart.js"></script>
        <!-- all pie chart -->
        <script src="main_alls/everythingzz/assets/js/pie-chart.js"></script>
        <!-- others plugins -->
        <script src="main_alls/everythingzz/assets/js/plugins.js"></script>
        <script src="main_alls/everythingzz/assets/js/scripts.js"></script>
    </body>

</html>