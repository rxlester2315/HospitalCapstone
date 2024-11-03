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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/slicknav.min.css">
        <!-- amchart css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
            media="all" />
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

        button {
            background-color: red;
        }

        h3 {
            padding: 20px;

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

        .form-container {
            border: 3px;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            box-shadow: 5px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -webkit-box-shadow: 5px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 5px 10px 5px 0px rgba(0, 0, 0, 0.75);
            background: white;


        }

        .form-title {
            margin-bottom: 20px;
            text-align: center;
            border: 1px;
            padding: 10px;
            border-radius: 8px;
            background-color: #0ed7b6;
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




                                <li><a href="{{url('chatwith_patients')}}"><i class="fa fa-commenting-o"></i> <span>Chat
                                            with
                                            Patients</span></a></li>
                                <li><a href="{{url('doc_sched')}}"><i class="ti-receipt"></i> Submit
                                        Schedule</a></li>


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
                                <h4 class="page-title pull-left">Submitted Schedule</h4>
                                <ul class="breadcrumbs pull-left">
                                    <li><a href="{{url('Doc')}}">Home</a></li>
                                    <li><span>Doctor Account</span></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- page title area end -->
                <div class="main-content-inner">

                    <div class="container animate__animated  animate__zoomInUp
 ">
                        <h1 class="my-4">Submitted Schedules</h1>

                        <div class="table-container">
                            <h3>Approved Schedules</h3>
                            <table class="table table-success">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Specialty</th>
                                        <th>Present Day</th>
                                        <th>Day Off</th>
                                        <th>Shift Time</th>
                                        <th>End Time</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$approve->name}}</td>
                                        <td>{{$approve->specialty}}</td>
                                        <td>{{ implode(', ', json_decode($approve->present_days)) }}</td>
                                        <td>{{ implode(', ', json_decode($approve->dayoff)) }}</td>
                                        <td>{{$approve->shift_start_time}}</td>
                                        <td>{{$approve->shift_end_time}}</td>
                                        <td><span class="badge badge-success">Approved</span></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="table-container">
                            <h3>Pending Schedules</h3>
                            <table class="table table-warning">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Specialty</th>
                                        <th>Present Day</th>
                                        <th>Day Off</th>
                                        <th>Shift Time</th>
                                        <th>End Time</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pending as $pend)
                                    <tr>
                                        <td>{{$pending->name}}</td>
                                        <td>{{$pending->specialty}}</td>
                                        <td>{{$pending->present_days}}</td>
                                        <td>{{$pending->dayoff}}</td>
                                        <td>{{$pending->shift_start_time}}</td>
                                        <td>{{$pending->shift_end_time}}</td>
                                        <td><span class="badge badge-warning">Approved</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="table-container">
                            <h3>Rejected Schedules</h3>
                            <table class="table table-danger">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Specialty</th>
                                        <th>Present Day</th>
                                        <th>Day Off</th>
                                        <th>Shift Time</th>
                                        <th>End Time</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($rejected as $reject)
                                    <tr>
                                        <td>{{$reject->name}}</td>
                                        <td>{{$reject->specialty}}</td>
                                        <td>{{$reject->present_days}}</td>
                                        <td>{{$reject->dayoff}}</td>
                                        <td>{{$reject->shift_start_time}}</td>
                                        <td>{{$reject->shift_end_time}}</td>
                                        <td><span class="badge badge-danger">Approved</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>






        <!-- jquery latest version -->
        <!-- bootstrap 4 js -->
        <script src="main_alls/everythingzz/assets/js/popper.min.js"></script>
        <script src="main_alls/everythingzz/assets/js/bootstrap.min.js"></script>
        <script src="main_alls/everythingzz/assets/js/owl.carousel.min.js"></script>
        <script src="main_alls/everythingzz/assets/js/metisMenu.min.js"></script>
        <script src="main_alls/everythingzz/assets/js/jquery.slimscroll.min.js"></script>
        <script src="main_alls/everythingzz/assets/js/jquery.slicknav.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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