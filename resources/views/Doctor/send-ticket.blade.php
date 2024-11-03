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


        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
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
        /* Custom styles for the form */
        .ticket-form-container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background-color: #f8f9fa;
            border: 1px solid;
            border-radius: 8px;
            box-shadow: 5px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -webkit-box-shadow: 5px 10px 5px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 5px 10px 5px 0px rgba(0, 0, 0, 0.75);
            background: #white;

        }


        .form-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #black;
        }

        .btn-submit {
            background-color: blue;
            border-color: #28a745;
            color: #fff;
        }

        .btn-submit:hover {
            background-color: red;
            border-color: #1e7e34;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
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

                        </div>
                    </div>
                </div>
                <!-- page title area end -->
                <div class="main-content-inner">



                    <div class="container animate__animated  animate__slideInRight
 ">
                        <div class="ticket-form-container">
                            <h2 class="form-title">Comcare Support Ticket</h2>
                            <form action="{{url('send_ticket')}}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="patientName">Doctor Name</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ old('name', $doctor->name) }}" required>



                                </div>
                                <div class="form-group">
                                    <label for="patientID">Doctor Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email"
                                        value="{{ old('email', $doctor->email) }}" required>

                                </div>

                                <label for="issue" style="color:black;" class="form-label">Select Issue</label>

                                <div class="form-group">
                                    <select style="width:250px; height:30px;" class="form-select" id="issueSelect"
                                        name="subject" placeholder="Ticket subject" required>
                                        <option value="" disabled selected>Select an issue</option>
                                        <option value="ui_glitch">UI Glitch</option>
                                        <option value="email_failure">Email Notifications Failure
                                        </option>
                                        <option value="ticket_duplication">Ticket Duplication </option>
                                        <option value="system_downtime">System Downtime</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" name="description" rows="4"
                                            placeholder="Describe your issue" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group" style="display: none;">
                                    <label for="priority" class="form-label">Priority</label>
                                    <div class="form-control-plaintext" id="priorityDisplay">
                                        <select style="width:250px; height:30px;" class="form-select"
                                            id="prioritySelect" name="priority">
                                            <option value="" selected disabled>Select priority</option>
                                            <option value="Low Severity">Low Severity</option>
                                            <option value="Moderate Severity">Moderate Severity</option>
                                            <option value="High Severity">High Severity</option>
                                            <option value="Critical Severity">Critical Severity</option>
                                        </select>

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-submit btn-block">Submit Ticket</button>
                            </form>
                        </div>
                    </div>

















                    <!-- visitor graph area end -->
                    <!-- order list area start -->

                </div>
            </div>
            <!-- main content area end -->
            <!-- footer area start-->

            <!-- footer area end-->
        </div>


        <script>
        document.getElementById('issueSelect').addEventListener('change', function() {
            const issueValue = this.value;
            const prioritySelect = document.getElementById('prioritySelect');

            let priorityValue;
            switch (issueValue) {
                case 'ui_glitch':
                    priorityValue = 'Low Severity';
                    break;
                case 'email_failure':
                    priorityValue = 'Moderate Severity';
                    break;
                case 'ticket_duplication':
                    priorityValue = 'High Severity';
                    break;
                case 'system_downtime':
                    priorityValue = 'Critical Severity';
                    break;
                default:
                    priorityValue = '';
            }

            // Update the priority select box value and disable user interaction
            prioritySelect.value = priorityValue;
        });
        </script>



        @if(Session::has('message'))
        <script>
        swal("Message", "{{Session::get('message')}}", 'success', {
            button: true,
            button: "Okay",
            timer: 3000,


        });
        </script>
        @endif







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