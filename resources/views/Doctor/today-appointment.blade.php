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
        /* General styles (unchanged) */
        .container-fluid {
            background: #cdffd8;
            background: linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
            background: -webkit-linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
            background: -moz-linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
        }

        .cons {
            padding-top: 30px;
        }

        .table-container {
            overflow-x: auto;
            /* Allows horizontal scrolling on small screens */
        }

        .table {
            width: 100%;
            /* Ensures the table takes the full width of its container */
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .cons .row {
                flex-direction: column;
                /* Stack the columns on small screens */
            }

            .col-md-6 {
                width: 100%;
                /* Make each column full width */
                margin-bottom: 20px;
                /* Add space between stacked columns */

            }

            .text-center {
                text-align: center;
                /* Center-align text in smaller screens */
            }

            .time-select {
                width: auto;
                /* Allow select elements to size properly */
                margin: 0 5px;
                /* Add some margin for better spacing */
            }
        }

        @media (max-width: 576px) {

            /* Further adjustments for extra small screens */
            .table-container {
                margin-top: 20px;
                /* Add spacing above table */
            }

            h4 {
                font-size: 18px;
                /* Reduce heading size for smaller devices */
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
                        <a href="index.html"><img src="main_alls/everythingzz/assets/images/icon/logo.png"
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
                                    <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span></span></i>
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
                <div class="main-content-inner">




                    <div class="cons">

                        <div class="container-fluid cyan-bg">
                            <div class="row">
                                <!-- Left Side -->
                                <div class="col-md-6 text-center">
                                    <!-- Calendar Button -->

                                    <div class="">

                                    </div>
                                </div>

                                <!-- Right Side -->
                                <div class="col-md-6">
                                    <h4 class="text-center text-white">Appointment Request</h4>
                                    <!-- Table -->
                                    <form action="{{route('zzzzz')}}" method="GET">
                                        @csrf
                                        <input type="date" name="filter_date" required>
                                        <button type="submit" class="btn btn-primary">Select Date</button>
                                    </form>
                                    <div class="table-container">
                                        <table class="table table-striped">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th>Patient Name</th>
                                                    <th>Contact No.</th>
                                                    <th>Date Appointment</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($appointment && $appointment->isNotEmpty())
                                                @foreach($appointment as $appoint)

                                                <tr>
                                                    <td>{{$appoint->name}}</td>
                                                    <td>{{$appoint->phone}}</td>
                                                    <td>{{$appoint->date}}</td>
                                                    <td>
                                                        <span class="badge badge-warning">Not Arrived</span>
                                                    </td>


                                                </tr>
                                                @endforeach
                                                @else

                                                <tr>
                                                    <td colspan="7" class="text-center">Please select date today to see
                                                        available schedule today

                                                </tr>
                                                @endif

                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
        <!-- all bar chart activation -->
        <script src="main_alls/everythingzz/assets/js/bar-chart.js"></script>
        <!-- all pie chart -->
        <script src="main_alls/everythingzz/assets/js/pie-chart.js"></script>
        <!-- others plugins -->
        <script src="main_alls/everythingzz/assets/js/plugins.js"></script>
        <script src="main_alls/everythingzz/assets/js/scripts.js"></script>

    </body>

</html>