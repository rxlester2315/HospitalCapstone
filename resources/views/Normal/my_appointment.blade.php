<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
        <title>My Appointment</title>
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />





        <style>
        body {
            background-color: #f8f9fa;
        }



        .appointment-table {
            margin: 50px auto;
            width: 90%;
            max-width: 1200px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .table-header {
            background: #0ed7b6;
            text-align: center;
        }

        .table-header h3 {
            padding: 20px;
            margin: 0;
        }

        .table-container {
            padding: 20px;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        /* Responsive adjustments */
        @media screen and (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
            }

            .table-container {
                padding: 10px;
            }

            .table-header h3 {
                padding: 10px;
            }

            .appointment-table {
                margin: 20px auto;
                width: 95%;
            }
        }

        @media screen and (max-width: 576px) {

            table th,
            table td {
                font-size: 12px;
            }

            .btn-danger {
                font-size: 12px;
                padding: 5px 10px;
            }
        }
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
                                <a href="{{url('User')}}"><img src="main_alls/everythingzz/assets/images/icon/logo2.png"
                                        alt="logo"></a>
                            </div>
                        </div>
                        <!-- profile info & task notification -->
                        <div class="col-md-9 clearfix text-right">
                            <div class="d-md-inline-block d-block mr-md-4">
                                <ul class="notification-area">



                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- main header area end -->
            <!-- header area start -->
            <div class="header-area header-bottom animate__animated  animate__slideInRight  ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-9  d-none d-lg-block">
                            <div class="horizontal-menu">
                                <nav>
                                    <ul id="nav_menu">


                                        <li><a href="{{url('User')}}"><i class="fa fa-home"></i> <span>Home
                                                    Page</span></a>
                                        </li>
                                        <li><a href="{{url('create_appointmentsss')}}"><i class="fa fa-briefcase"></i>
                                                <span>Create
                                                    Appointment</span></a>
                                        </li>
                                        <li><a href="{{url('nurse_assesment')}}"><i class="fa fa-comments"></i>
                                                <span>Nurse Assessment Result/s</span></a>
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

            <div class="container appointment-table animate__animated  animate__slideInRight  ">
                <div class="table-header">
                    <h3>My Appointments</h3>
                </div>
                <div class="table-container">
                    <table class="table table-striped table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Doctor Name</th>
                                <th>Specialty</th>
                                <th>Status</th>
                                <th>Cancel</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointments as $appoints)

                            <tr>
                                <td>{{$appoints->date}}</td>
                                <td>{{$appoints->time}}</td>
                                <td>{{$appoints->employees}}</td>
                                <td>{{$appoints->departments}}</td>
                                <td>{{$appoints->status}}</td>

                                <td>
                                    <a onclick="confirmation(event)" class="btn btn-danger"
                                        href="{{url('cancel_appointment',$appoints->id)}}">Cancel</a>
                                </td>




                            </tr>

                            @endforeach

                        </tbody>
                    </table>




                </div>
            </div>

        </div>











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



        <script type="text/javascript">
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);

            swal({
                    title: "Are you sure you want to cancel this appointment?",
                    text: "You will need to create another again!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willCancel) => {
                    if (willCancel) {
                        window.location.href = urlToRedirect;
                    }
                });
        }
        </script>


    </body>

</html>