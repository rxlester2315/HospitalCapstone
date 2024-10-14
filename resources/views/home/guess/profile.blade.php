<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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







    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>


    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>


    <style>
    .note {
        background-color: #fff8dc;
        border: 2px solid #ffeb3b;
        border-radius: 4px;
        padding: 4px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
        margin-top: -20px;
        /* Adjusted margin-top */
    }

    .card-header {
        background:white;
    }


    .note h2 {
        font-size: 15px;
        /* Reduced font size */
        color: #ff8c00;
        margin: 0;
    }

    .note p {
        font-size: 13px;
        /* Reduced font size */
        color: #333;
        margin: 4px 0 0;
        /* Adjusted margin */
    }

     .card-body {

        background: #cdffd8;
        background: linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
        background: -webkit-linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
        background: -moz-linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
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
                            <a href="{{url('Guests')}}"><img src="main_alls/everythingzz/assets/images/icon/logo2.png"
                                    alt="logo"></a>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-9 clearfix text-right">
                        <div class="d-md-inline-block d-block mr-md-4">
                            <ul class="notification-area">



                        </div>
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile m-0">
                                <img class="avatar user-thumb"
                                    src="main_alls/everythingzz/assets/images/author/avatar.png" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Rex Lester <i
                                        class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Message</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <a class="dropdown-item" href="#">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header area end -->
        <!-- header area start -->

        <!-- header area end -->
        <!-- page title area end -->


        <div class="container mt-5">
            <div class="note">

                <h2>NOTE!</h2>
                <p>If you received this note, your verification request has been submitted. Please wait for the admin's
                    decision</p>

            </div>
            <div class="card">

                <div class="card-header text-center">
                    <h2>User Profile</h2>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="https://via.placeholder.com/150" alt="Profile Picture" class="rounded-circle mb-3">
                    </div>


                    @if(isset($guessinfo))
                    <input type="text" class="form-control" id="firstName" value="{{ $guessinfo->firstName }}" readonly>
                    @else
                    <p>No profile information available.</p>
                    @endif



                    <form class="mt-4">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" id="firstName"
                                value="{{$guessinfo->firstName}}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" value="{{$guessinfo->lastName}}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="birthday">Birthday</label>
                            <input type="text" class="form-control" id="birthday" value="{{$guessinfo->birthdate}}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="mobileNumber">Mobile Number</label>
                            <input type="text" class="form-control" id="mobileNumber" value="{{$guessinfo->number}}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="mobileNumber">Email Address</label>
                            <input type="email" class="form-control" id="Email Address" value="{{$guessinfo->email}}"
                                value="(123) 456-7890" readonly>
                        </div>
                        <div class="form-group">
                            <label for="fullAddress">Full Address</label>
                            <textarea class="form-control" id="fullAddress" rows="3" readonly>
                            {{$guessinfo->address}}
                            </textarea>
                        </div>
                    </form>

                    <center>
                        <a href="{{route('update.view')}}">
                            <button class="btn btn-primary">Edit Profile</button>

                        </a>
                    </center>
                </div>
            </div>
        </div>




        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.
                </p>
            </div>
        </footer>
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


    @if(Session::has('message'))
    <script>
    swal("Success", "{{Session::get('message')}}", 'success', {
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>