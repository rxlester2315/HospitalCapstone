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
            background: #cdffd8;
            background: linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
            background: -webkit-linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
            background: -moz-linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
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

        <style>.receipt {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .receipt-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .receipt-table th,
        .receipt-table td {
            text-align: left;
        }

        .receipt-footer {

            padding: 15px;
            border: 2px;
            display: inline-block;
            margin: 30px;
            color: black;
        }

        .notes {
            padding: 20px;
            border: 3px solid black;
            margin-bottom: 50px;
        }


        .separator {
            border: none;
            border-top: 10px solid black;
            margin: 20px 0;
        }

        .notes {
            background-color: #f0f8ff;
            border: 1px solid #add8e6;
            border-radius: 5px;
            padding: 15px;
            margin-top: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .notes h3 {
            margin: 0 0 10px;
            font-size: 1.5em;
            color: #007bff;
        }

        .note-content {
            font-size: 2em;
            line-height: 1.5;
            color: #333;
        }


        .receipt {
            padding: 20px;
            background: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
            <div class="header-area header-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-9  d-none d-lg-block">
                            <div class="horizontal-menu">
                                <nav>
                                    <ul id="nav_menu">


                                        <li><a href="{{url('User')}}"><i class="fa fa-home"></i> <span>Homes</span></a>
                                        </li>
                                        <li><a href="{{url('create_appointmentsss')}}"><i class="fa fa-briefcase"></i>
                                                <span>Create
                                                    Appointment</span></a>
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

            <div class="container appointment-table animate__animated  animate__slideInRight

 ">
                @foreach($appointments as $appoint)
                <div class="receipt">
                    <div class="receipt-header">
                        <h2>Patient Assessment Result</h2>
                        <h3>Doctor: {{$appoint->employees}}</h3>
                        <p>Date: {{$appoint->date}}</p>
                        <p>Patient Name: <strong>{{$appoint->name}}</strong></p>
                        <p>Patient ID: <strong>{{$appoint->id}}</strong></p>
                    </div>

                    <table class="table receipt-table">
                        <thead>
                            <tr>
                                <th>Mobility</th>
                                <th>Allergies</th>
                                <th>Pain Level</th>
                                <th>Mental Status</th>
                                <th>Heart Rate</th>
                                <th>Weight</th>
                                <th>Height</th>
                                <th>Blood Pressure</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$appoint->mobility}}</td>
                                <td>{{$appoint->allergies}}</td>
                                <td>{{$appoint->painlevel}}</td>
                                <td>{{$appoint->mentalstatus}}</td>
                                <td>{{$appoint->Hearrate}}</td>
                                <td>{{$appoint->Weight}}</td>
                                <td>{{$appoint->Height}}</td>
                                <td>{{$appoint->bloodpressure}}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="notes">
                        <h3>Nurse Note</h3>
                        <p class="note-content">{{$appoint->remarks}}</p>
                    </div>


                    <div class="receipt-footer">
                        <p>Contact us: <a href="{{url('chatss')}}" class="btn btn-info">Contact Now</a></p>
                    </div>
                </div>

                <!-- Separator line -->
                <hr class="separator">
                @endforeach
            </div>



        </div>





        <script>
        // Set the current date
        document.getElementById('date').textContent = new Date().toLocaleDateString();
        </script>






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






    </body>

</html>