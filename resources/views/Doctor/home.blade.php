<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Comcare Clinic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="main_alls/everythingzz/assets/images/icon/favicon.ico">
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
        .container-ssx {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding-top: 10px;
        }

        .box {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            flex: 1 1 calc(30% - 20px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease, background 0.3s ease;
            /* Add transition */
        }

        .box:hover {
            transform: scale(1.05);
            /* Zoom in effect */
            background: #0ed7b6;
            /* Change background color on hover */
        }

        .box i {
            font-size: 30px;
        }

        h3 {
            margin: 10px 0;
        }

        p {
            color: black;
            font-size: 30px;
        }

        i {
            font-size: 30px;
        }

        @media (max-width: 768px) {
            .box {
                flex: 1 1 calc(45% - 20px);
            }
        }

        @media (max-width: 480px) {
            .box {
                flex: 1 1 100%;
            }
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
                        <a href="{{url('Doc')}}"><img src="main_alls/everythingzz/assets/images/icon/logo2.png"
                                alt="logo"></a>
                    </div>
                </div>
                <div class="main-menu">
                    <div class="menu-inner">

                        <nav>


                            <ul class="metismenu" id="menu">


                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i
                                            class="fa fa-users"></i><span>Patient Appointments</span></a>
                                    <ul class="collapse">
                                        <li><a href="{{url('/listappoint')}}">List of Appointment</a></li>
                                        <li><a href="{{route('view.date')}}">Today Appointment</a></li>
                                        <li><a href="{{url('listrecord')}}">Appointment Completed</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-male"></i><span>My
                                            Information</span></a>
                                    <ul class=" collapse">
                                        @if($hasRecord)
                                        <li><a href="{{ url('doc_profile', $doctor->id) }}">View Profile</a></li>

                                        @else

                                        <li><a href="{{ url('register_profile') }}">Register Profile</a></li>

                                        @endif

                                        <li><a href="{{url('changesPasswordDoc')}}">Change Password</a></li>
                                        <li><a href="{{url('doc_sched')}}">Submit Schedule</a></li>

                                    </ul>
                                </li>


                                <li><a href="{{url('listrecord')}}"><i class="fa fa-commenting-o"></i> <span>Chat with
                                            Patients</span></a></li>
                                <li><a href="{{url('send_ticket')}}"><i class="ti-receipt"></i> <span>Send Ticket
                                            Request</span></a>
                                </li>



                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- sidebar menu area end -->
            <!-- main content area start -->
            <div class="main-content">
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
                        <div class="col-md-6 col-sm-4 clearfix">
                            <ul class="notification-area pull-right">
                                <li class="dropdown">


                                </li>
                                <li class="dropdown">
                                    <div class="dropdown-menu notify-box nt-enveloper-box">
                                        <span class="notify-title">Check Message<a href="chat">view
                                                all</a></span>

                                    </div>
                                </li>
                                <li class="settings-btn">
                                    <i class="ti-settings"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- header area end -->
                <!-- page title area start -->
                <div class="page-title-area">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="breadcrumbs-area clearfix">
                                <h4 class="page-title pull-left">Dashboard</h4>
                                <ul class="breadcrumbs pull-left">
                                    <li><a href="index.html">Home</a></li>
                                    <li><span>Dashboard</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 clearfix">
                            <div class="user-profile pull-right">

                                @if($doctor && $doctor->avats)
                                <img class="avatar user-thumb" src="{{ asset('profiledoc/' . $doctor->avats) }}"
                                    alt="avatar">
                                @else
                                <img class="avatar user-thumb" src="{{ asset('default-avatar.png') }}"
                                    alt="default avatar">
                                @endif

                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Doctor|
                                    {{ Auth::user()->name }}<i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{url('chat')}}">Message</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page title area end -->
                <div class="main-content-inner">




                    <div class="custom-slider">
                        <div class="custom-slides">
                            <!-- Radio buttons for manual navigation -->
                            <input type="radio" name="radio-btn" id="radio1" checked>
                            <input type="radio" name="radio-btn" id="radio2">
                            <input type="radio" name="radio-btn" id="radio3">
                            <input type="radio" name="radio-btn" id="radio4">

                            <!-- Slide images -->
                            <div class="custom-slide first">
                                <img src="main_alls/everythingzz/assets/images/slider/brooz.jpg" alt="Image 1">
                            </div>
                            <div class="custom-slide">
                                <img src="main_alls/everythingzz/assets/images/slider/brooz2.jpg" alt="Image 2">
                            </div>
                            <div class="custom-slide">
                                <img src="main_alls/everythingzz/assets/images/slider/brooz3.jpg" alt="Image 3">
                            </div>
                            <div class="custom-slide">
                                <img src="main_alls/everythingzz/assets/images/slider/brooz.jpg" alt="Image 4">
                            </div>

                            <!-- Automatic navigation dots -->
                            <div class="custom-navigation-auto">
                                <div class="auto-btn1"></div>
                                <div class="auto-btn2"></div>
                                <div class="auto-btn3"></div>
                                <div class="auto-btn4"></div>
                            </div>
                        </div>

                        <!-- Manual navigation dots -->
                        <div class="custom-navigation-manual">
                            <label for="radio1" class="manual-btn"></label>
                            <label for="radio2" class="manual-btn"></label>
                            <label for="radio3" class="manual-btn"></label>
                            <label for="radio4" class="manual-btn"></label>
                        </div>
                    </div>











                    <!-- sales report area start -->
                    <div class="container-ssx">
                        <div class="box">
                            <i class="fa fa-users"></i>
                            <h3>Total Patient</h3>
                            <p>32</p>
                        </div>
                        <div class="box">
                            <i class="fa fa-user"></i>
                            <h3>Patient Incoming</h3>
                            <p>13</p>
                        </div>
                        <div class="box">
                            <i class="fa fa-check-square-o"></i>
                            <h3>Appointment Completed</h3>
                            <p>23</p>
                        </div>
                    </div>

                    <!-- visitor graph area end -->
                    <!-- order list area start -->
                    <div class="card mt-5">
                        <div class="card-body">
                            <h4 class="header-title">Todays Appointment</h4>
                            <div class="table-responsive">
                                <table class="dbkit-table">
                                    <tbody>
                                        <tr class="heading-td">
                                            <td>Patient Name</td>
                                            <td>Message </td>
                                            <td>Phone Number</td>
                                            <td>Date Schedule</td>
                                            <td>Status</td>
                                            <td>Other</td>

                                        </tr>
                                        <tr>
                                            <td>John Carlo</td>
                                            <td><a href="" class="btn btn-success">View Message</a></td>
                                            <td><span class="pending_dot">Pending</span></td>
                                            <td>01976 74 92 00</td>
                                            <td>September 08,2024</td>
                                            <td><a href="" class="btn btn-warning">Pending</a></td>
                                        </tr>
                                        <tr>
                                            <td>Client godinez</td>
                                            <td><a href="" class="btn btn-success">View Message</a></td>
                                            <td><span class="pending_dot">Pending</span></td>
                                            <td>01976 74 92 00</td>
                                            <td>September 08,2024</td>
                                            <td><a href="" class="btn btn-warning">Pending</a></td>
                                        </tr>

                                        <tr>
                                            <td>Jerome Baros</td>
                                            <td><a href="" class="btn btn-success">View Message</a></td>
                                            <td><span class="pending_dot">Pending</span></td>
                                            <td>01976 74 92 00</td>
                                            <td>September 08,2024</td>
                                            <td><a href="" class="btn btn-warning">Pending</a></td>
                                        </tr>
                                        <tr>
                                            <td>Isaac Canlas</td>
                                            <td><a href="" class="btn btn-success">View Message</a></td>
                                            <td><span class="pending_dot">Pending</span></td>
                                            <td>01976 74 92 00</td>
                                            <td>September 08,2024</td>
                                            <td><a href="" class="btn btn-warning">Pending</a></td>
                                        </tr>

                                        <tr>
                                            <td>Rex Lester</td>
                                            <td><a href="" class="btn btn-success">View Message</a></td>
                                            <td><span class="pending_dot">Pending</span></td>
                                            <td>01976 74 92 00</td>
                                            <td>September 08,2024</td>
                                            <td><a href="" class="btn btn-warning">Pending</a></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="pagination_area pull-right mt-5">
                                <ul>
                                    <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- order list area end -->

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
        <!-- all bar chart activation -->
        <script src="main_alls/everythingzz/assets/js/bar-chart.js"></script>
        <!-- all pie chart -->
        <script src="main_alls/everythingzz/assets/js/pie-chart.js"></script>
        <!-- others plugins -->
        <script src="main_alls/everythingzz/assets/js/plugins.js"></script>
        <script src="main_alls/everythingzz/assets/js/scripts.js"></script>
    </body>

</html>