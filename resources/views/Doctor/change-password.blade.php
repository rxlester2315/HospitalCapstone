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
        <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.30/build/spline-viewer.js"></script>
        <!-- amchart css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
            media="all" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- others css -->
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/typography.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/default-css.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/styles.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/responsive.css">
        <!-- modernizr css -->
        <script src="main_alls/everythingzz/assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background-color: #d6f5e8;
            height: 60px;
            display: flex;
            align-items: center;
            padding: 0 15px;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        /* Center the text button */
        .btn-link {
            font-size: 24px;
            color: #000;
            text-decoration: none;
            padding: 0;
        }

        .btn-link:hover {
            text-decoration: underline;
            color: #000;
        }


        /* Sky blue button for the menu */
        .btn-skyblue {
            background-color: #87ceeb;
            color: #fff;
            border: none;
        }

        .btn-skyblue:hover {
            background-color: #69b2e4;
        }

        .card {
            background-color: #f2f7fc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 40px;
            background: #cdffd8;
            background: linear-gradient(0deg, #cdffd8 0%, #ff94cc 100%);
            background: -webkit-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
            background: -moz-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        }

        h2 {
            font-size: 24px;
            color: #333;
        }

        .form-label {
            font-weight: bold;
        }

        button[type="submit"] {
            margin-right: 10px;
        }

        a {
            color: #007bff;
        }

        a:hover {
            color: #0056b3;
            text-decoration: none;
        }

        .spline-container {
            position: fixed;
            top: 0;
            left: 1000px;
            width: 100%;

            height: 100%;
            z-index: 12;
            pointer-events: none;
            /* Prevent interaction with the viewer */

        }

        .spline-container spline-viewer {
            width: 50%;
            height: 60%;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .spline-container {
                top: 10%;
                /* Adjust as needed for smaller screens */
                height: 80%;
                /* Maintain some padding from top and bottom */
            }
        }

        @media (max-width: 576px) {
            .spline-container {
                top: 20%;
                /* Further adjustment for very small screens */
                height: 60%;
                /* Maintain padding from top and bottom */
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
                                <h4 class="page-title pull-left">Reset Password</h4>
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
                    <div class="row justify-content-left mt-5">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="text-start">Change Password</h2>
                                    <form method="POST" action="{{ url('/changesPasswordDoc') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="currentPassword" class="form-label">Current Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="password"
                                                    id="password" required>
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-primary"
                                                        onclick="togglePassword('password', this)">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            @error('Newpass') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="newPassword" class="form-label">New Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="Newpass" id="Newpass"
                                                    required>
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-primary"
                                                        onclick="togglePassword('Newpass', this)">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </div>
                                                @error('Newpass') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="Newpass_confirmation"
                                                    id="Newpass_confirmation" required>
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-primary"
                                                        onclick="togglePassword('Newpass_confirmation', this)">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            @error('Newpass') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-secondary">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Spline Viewer -->
                    <div class="spline-container">

                    </div>
                </div>
            </div>
            <!-- main content area end -->
            <!-- footer area start-->

            <!-- footer area end-->
        </div>
        <!-- page container area end -->
        <!-- offset area start -->

        <script>
        function togglePassword(fieldId, button) {
            const passwordField = document.getElementById(fieldId);
            const icon = button.querySelector('i');

            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
        </script>

        @if(Session::has('message'))
        <script>
        swal({
            title: "Success",
            text: "{{ Session::get('message') }}",
            icon: "success",
            buttons: {
                confirm: {
                    text: "Okay",
                    value: true,
                    visible: true,
                    className: "btn btn-primary",
                    closeModal: true
                }
            }
        }).then((value) => {
            if (value) {
                // Logout and redirect to login page
                window.location.href = "{{ route('logout') }}";
            }
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