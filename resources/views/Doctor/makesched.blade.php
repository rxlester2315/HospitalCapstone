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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
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

                                <li><a href="{{url('submitted_request')}}"><i class="fa-solid fa-clock"></i>
                                        <span>Schedule Submitted</span></a></li>






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
                                <h4 class="page-title pull-left">Creating Schedule</h4>
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







                    <div class="container">

                        <div class="form-container">
                            <h2 class="form-title">Submit Schedule</h2>
                            <form action="{{ route('store_sched') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <p><span>Doctor Name:</span> <b>{{ $doctor->name }}</b></p>
                                    <p><span>Department:</span> <b>{{ $doctor->specialty }}</b></p>
                                </div>

                                <!-- Shift Time -->
                                <div class="form-group">
                                    <label for="shiftTime">Shift Time</label>
                                    <input type="time" class="form-control" id="shiftStartTime" name="shift_start_time"
                                        required>
                                    <input type="time" class="form-control mt-2" id="shiftEndTime" name="shift_end_time"
                                        required>
                                </div>

                                <!-- Days of the Week (Present Days) -->
                                <div class="form-group">
                                    <label for="presentDays">Select Present Days</label>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input present-day" id="present-monday"
                                            name="present_days[]" value="Monday">
                                        <label class="form-check-label" for="present-monday">Monday</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input present-day" id="present-tuesday"
                                            name="present_days[]" value="Tuesday">
                                        <label class="form-check-label" for="present-tuesday">Tuesday</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input present-day"
                                            id="present-wednesday" name="present_days[]" value="Wednesday">
                                        <label class="form-check-label" for="present-wednesday">Wednesday</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input present-day"
                                            id="present-thursday" name="present_days[]" value="Thursday">
                                        <label class="form-check-label" for="present-thursday">Thursday</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input present-day" id="present-friday"
                                            name="present_days[]" value="Friday">
                                        <label class="form-check-label" for="present-friday">Friday</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input present-day"
                                            id="present-saturday" name="present_days[]" value="Saturday">
                                        <label class="form-check-label" for="present-saturday">Saturday</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input present-day" id="present-sunday"
                                            name="present_days[]" value="Sunday">
                                        <label class="form-check-label" for="present-sunday">Sunday</label>
                                    </div>
                                </div>

                                <!-- Day Off Option -->
                                <div class="form-group">
                                    <label for="daysOff">Select Day Off (Maximum 2)</label>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input day-off" id="off-monday"
                                            name="day_off[]" value="Monday">
                                        <label class="form-check-label" for="off-monday">Monday</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input day-off" id="off-tuesday"
                                            name="day_off[]" value="Tuesday">
                                        <label class="form-check-label" for="off-tuesday">Tuesday</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input day-off" id="off-wednesday"
                                            name="day_off[]" value="Wednesday">
                                        <label class="form-check-label" for="off-wednesday">Wednesday</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input day-off" id="off-thursday"
                                            name="day_off[]" value="Thursday">
                                        <label class="form-check-label" for="off-thursday">Thursday</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input day-off" id="off-friday"
                                            name="day_off[]" value="Friday">
                                        <label class="form-check-label" for="off-friday">Friday</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input day-off" id="off-saturday"
                                            name="day_off[]" value="Saturday">
                                        <label class="form-check-label" for="off-saturday">Saturday</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input day-off" id="off-sunday"
                                            name="day_off[]" value="Sunday">
                                        <label class="form-check-label" for="off-sunday">Sunday</label>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <button type="button" class="btn btn-primary btn-block" onclick="confirmSubmit()">Submit
                                    Schedule</button>


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

        <!-- offset area end -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script type="text/javascript">
        function confirmSubmit() {
            swal({
                title: "Are you sure?",
                text: "Do you really want to submit this schedule?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willSubmit) => {
                if (willSubmit) {
                    // Submit the form if the user confirms
                    document.querySelector('form').submit();
                }
            });
        }
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


        <script>
        $(document).ready(function() {
            // Maximum workdays allowed
            const maxWorkDays = 5;

            // Function to automatically select remaining days as "Day Off"
            function autoSelectDayOff() {
                const workdaysChecked = $('.present-day:checked');
                const selectedDays = workdaysChecked.map(function() {
                    return $(this).val();
                }).get();

                // Automatically select remaining days as "Day Off"
                $('.day-off').each(function() {
                    const day = $(this).val();
                    if (!selectedDays.includes(day)) {
                        $(this).prop('checked', true); // Automatically select remaining day off
                        $(this).attr('readonly', true); // Prevent changes but ensure the value is sent
                    } else {
                        $(this).prop('checked', false); // Uncheck day offs matching workdays
                        $(this).removeAttr('readonly'); // Enable for other changes if needed
                    }
                });
            }

            // Function to disable all checkboxes if max workdays are selected
            function disableRemainingCheckBoxes() {
                const workdaysChecked = $('.present-day:checked').length;

                if (workdaysChecked === maxWorkDays) {
                    // Disable unchecked present day checkboxes
                    $('.present-day:not(:checked)').prop('disabled', true);
                } else {
                    // Re-enable all checkboxes if less than 5 days are selected
                    $('.present-day').prop('disabled', false);
                }
            }

            // Limit selection to 5 workdays and auto-select the remaining as "Day Off"
            $('.present-day').on('change', function() {
                const workdaysChecked = $('.present-day:checked');
                const selectedCount = workdaysChecked.length;

                // Prevent selecting more than 5 workdays
                if (selectedCount > maxWorkDays) {
                    $(this).prop('checked', false);
                    alert('You can only select up to 5 workdays.');
                }

                // Automatically handle "Day Off" selection when exactly 5 workdays are selected
                if (selectedCount === maxWorkDays) {
                    autoSelectDayOff();
                    disableRemainingCheckBoxes(); // Disable any unchecked workday checkboxes
                } else {
                    // Re-enable day off checkboxes if less than 5 workdays are selected
                    $('.day-off').prop('checked', false).removeAttr('readonly');
                    disableRemainingCheckBoxes(); // Ensure checkboxes are not disabled when under 5
                }
            });

            // Prevent manually unchecking auto-selected "Day Off" checkboxes
            $('.day-off').on('click', function() {
                if ($(this).attr('readonly')) {
                    alert("This day is automatically selected as a day off and cannot be changed.");
                    return false; // Prevent unchecking
                }
            });
        });
        </script>

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