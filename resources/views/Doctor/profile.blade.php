<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Comcare Clinic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png"
            href="{{ asset('main_alls/everythingzz/assets/images/icon/favicon.ico') }}">
        <link rel="stylesheet" href="{{ asset('main_alls/everythingzz/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('main_alls/everythingzz/assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('main_alls/everythingzz/assets/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('main_alls/everythingzz/assets/css/metisMenu.css') }}">
        <link rel="stylesheet" href="{{ asset('main_alls/everythingzz/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('main_alls/everythingzz/assets/css/slicknav.min.css') }}">
        <!-- amchart css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
            media="all" />
        <!-- others css -->
        <link rel="stylesheet" href="{{ asset('main_alls/everythingzz/assets/css/typography.css') }}">
        <link rel="stylesheet" href="{{ asset('main_alls/everythingzz/assets/css/default-css.css') }}">
        <link rel="stylesheet" href="{{ asset('main_alls/everythingzz/assets/css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('main_alls/everythingzz/assets/css/responsive.css') }}">


        <style>
        body {
            background-color: #f8f9fa;
        }

        .profile-card {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile-picture {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .profile-info {
            width: 100%;
        }

        .profile-info h4 {
            color: #007bff;
            margin-bottom: 5px;
        }

        .profile-info p {
            margin: 0;
            color: #6c757d;
        }

        .info-group {
            margin-bottom: 20px;
        }

        .info-group h5 {
            color: #343a40;
            margin-bottom: 10px;
        }

        .info-group p {
            background-color: #f2f2f2;
            padding: 10px;
            border-radius: 4px;
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
                    <a href="{{url('Doc')}}"><img src="{{asset('main_alls/everythingzz/assets/images/icon/logo2.png')}}"
                            alt="logo"></a>
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




                                <li><a href="{{url('listrecord')}}"><i class="fa fa-commenting-o"></i> <span>Chat with
                                            Patients</span></a></li>
                                <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Send Ticket
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
                                    <i class="fa fa-envelope-o dropdown-toggle"
                                        data-toggle="dropdown"><span>3</span></i>
                                    <div class="dropdown-menu notify-box nt-enveloper-box">
                                        <span class="notify-title">You have 3 new notifications <a href="#">view
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
                                <img src="{{ asset('profiledoc/' . $doctor->avats) }}" class="profile-picture"
                                    alt="Profile Picture">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Doctor|
                                    {{ Auth::user()->name }}<i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Message</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page title area end -->
                <div class="container">
                    <div class="profile-card">
                        <div class="profile-header">
                            <img src="{{ asset('profiledoc/' . $doctor->avats) }}" class="profile-picture"
                                alt="Profile Picture">
                            <div class="profile-info">
                                <h4>Dr. {{ $doctor->fullName }}</h4>
                                <p>{{ $doctor->Department }} Specialist</p>
                            </div>
                        </div>

                        <!-- Personal Information Section -->
                        <div class="info-group">
                            <h5>Full Name</h5>
                            <p>{{ $doctor->fullName }}</p>

                        </div>

                        <div class="info-group">
                            <h5>Email</h5>
                            <p>{{ $doctor->email }}</p>
                        </div>

                        <div class="info-group">
                            <h5>Phone Number</h5>
                            <p>{{ $doctor->phoneNum }}</p>
                        </div>

                        <div class="info-group">
                            <h5>Department</h5>
                            <p>{{ $doctor->Department }}</p>
                        </div>

                        <div class="info-group">
                            <h5>Address</h5>
                            <p>{{ $doctor->address }}</p>
                        </div>

                        <div class="info-group">
                            <h5>Birthday Date</h5>
                            <p>{{ $doctor->birthdate }}</p>
                        </div>

                        <div>
                            <a href="{{ url('doc_edit', $doctor->id) }}">
                                <h3 class="btn btn-primary">Edit</h3>
                            </a>
                            <a href="{{url('Doc')}}">
                                <h3 class="btn btn-info">Back</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main content area end -->
            <!-- footer area start-->
            <footer>
                <div class="footer-area">
                    <p>© Copyright 2018. All right reserved. Template by <a
                            href="https://colorlib.com/wp/">Colorlib</a>.
                    </p>
                </div>
            </footer>
            <!-- footer area end-->
        </div>
        <!-- page container area end -->
        <!-- offset area start -->

        <!-- offset area end -->
        <!-- jquery latest version -->
        <script src="{{ asset('main_alls/everythingzz/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

        <script src="{{ asset('main_alls/everythingzz/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
        <!-- bootstrap 4 js -->
        <script src="{{ asset('main_alls/everythingzz/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('main_alls/everythingzz/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('main_alls/everythingzz/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('main_alls/everythingzz/assets/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('main_alls/everythingzz/assets/js/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('main_alls/everythingzz/assets/js/jquery.slicknav.min.js') }}"></script>

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
        <script src="{{ asset('main_alls/everythingzz/assets/js/line-chart.js') }}"></script>
        <!-- all bar chart activation -->
        <script src="{{ asset('main_alls/everythingzz/assets/js/bar-chart.js') }}"></script>
        <!-- all pie chart -->
        <script src="{{ asset('main_alls/everythingzz/assets/js/pie-chart.js') }}"></script>
        <!-- others plugins -->
        <script src="{{ asset('main_alls/everythingzz/assets/js/plugins.js') }}"></script>
        <script src="{{ asset('main_alls/everythingzz/assets/js/scripts.js') }}"></script>
    </body>

</html>