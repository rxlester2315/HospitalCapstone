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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

        <!-- amchart css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
            media="all" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>

        <!-- others css -->
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/typography.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/default-css.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/styles.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/responsive.css">
        <!-- modernizr css -->
        <script src="main_alls/everythingzz/assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <style>
        /* General styles (unchanged) */

        th {
            background-color: #0ed7b6;
        }

        .container-bg {
            background-color: white;
        }


        .card-header {
            background: #0ed7b6;
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
                        <a href="{{url('Doc')}}"><img
                                src="{{asset('main_alls/everythingzz/assets/images/icon/logo2.png')}}" alt="logo"></a>
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
                                <h4 class="page-title pull-left">Patient Appointment</h4>
                                <ul class="breadcrumbs pull-left">
                                    <li><a href="{{url('Doc')}}">Home</a></li>
                                    <li><span>Doctor Account</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 clearfix">
                            <div class="user-profile pull-right">
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




                    <div class="container mt-5 animate__animated  animate__zoomInUp
 ">
                        <div class="card">
                            <div class="card-header">
                                <h3>Leave Management</h3>
                            </div>
                            <form action="{{route('leave-store')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="employeeName">Employee/Doctor Name:</label>
                                                <h3>{{$doctor->name}}</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="employeeId">Employee ID:</label>
                                                <h3>{{$doctor->id}}</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="department">Department:</label>
                                                <h3>{{$doctor->specialty}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="leaveType">Leave Type:</label>
                                                <select class="form-control" id="reasontype" name="reason">
                                                    <option>Annual Leave</option>
                                                    <option>Sick Leave</option>
                                                    <option>Casual Leave</option>
                                                    <option>Maternity Leave</option>
                                                    <option>Paternity Leave</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="startDate">Start Date:</label>
                                                <input type="date" class="form-control" id="leaveStart"
                                                    name="leave_start_date">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="endDate">End Date:</label>
                                                <input type="date" class="form-control" id="leavesEnd"
                                                    name="leave_end_date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="reason">Reason for Leave:</label>
                                                <textarea class="form-control" id="leaveNote" rows="3" name="addnote"
                                                    placeholder="Enter reason"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-12 text-end">
                                            <button type="submit" class="btn btn-primary">Submit Leave Request</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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


        @if(Session::has('message'))
        <script>
        swal("Message", "{{Session::get('message')}}", 'success', {
            button: true,
            button: "Okay",
            timer: 3000,


        });
        </script>
        @endif




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