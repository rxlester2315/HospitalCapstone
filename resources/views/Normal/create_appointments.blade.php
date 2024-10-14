<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

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




    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>











    <style>
    .appointment-form {
        background: #cdffd8;
background: linear-gradient(90deg,#cdffd8 0%, #94b9ff 80%);
background: -webkit-linear-gradient(90deg,#cdffd8 0%, #94b9ff 80%);
background: -moz-linear-gradient(90deg,#cdffd8 0%, #94b9ff 80%);
        padding: 30px;
        border-radius: 15px;
        max-width: 800px;
        margin: 50px auto;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
    }

    .form-title {
        font-size: 24px;
        text-align: center;
        font-family: 'Georgia', serif;
        color: #333;
        margin-bottom: 20px;
    }

    .form-control,
    .form-select {
        background-color: #f5f9fc;
        border: 1px solid #ccc;
    }

    .form-control::placeholder {
        color: #888;
    }

    .btn-submit {
        background-color: #57c1a6;
        color: #fff;
        border: none;
    }

    .btn-cancel {
        background-color: #f7f7f7;
        color: #333;
        border: 1px solid #ccc;
    }

    .btn-cancel:hover,
    .btn-submit:hover {
        opacity: 0.8;
    }

    .form-footer {
        text-align: center;
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
                            <a href="index.html"><img src="main_alls/everythingzz/assets/images/icon/logo2.png"
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
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Rex Lester Bastaoang <i
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
        <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">


                                    <li><a href="{{url('User')}}"><i class="fa fa-home"></i> <span>Home</span></a>
                                    </li>
                                    <li><a href="maps.html"><i class="fa fa-briefcase"></i> <span>View
                                                Appointment</span></a>
                                    </li>
                                    <li><a href="maps.html"><i class="fa fa-comments"></i> <span>Chat
                                                Front-desk</span></a>
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
        <!-- header area end -->
        <!-- page title area end -->

        @if(session()->has('message'))
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: "{{ session()->get('message') }}",
            confirmButtonText: 'OK'
        });
        </script>
        @endif

        @if(session()->has('error'))
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "{{ session()->get('error') }}",
            confirmButtonText: 'Try Again'
        });
        </script>
        @endif


        <div class="appointment-form">
            <h2 class="form-title">APPOINTMENT</h2>
            <form action="{{ route('makeappointments') }}" method="POST">
                @csrf
                <div class="row">
                    <!-- Full Name -->
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control"  id="name_input" name="name" placeholder="Full Name" required>
                         <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="fill_name" />
                            <label class="form-check-label" for="fill_name">
                                Fill with your profile name
                            </label>
                        </div>


                    </div>

                    <!-- Specialty (Dropdown from code 1) -->
                    <div class="col-md-6 mb-3">
                        <select class="form-select" name="sel_depart" id="sel_depart" required>
                            <option value="0">-- Select Specialty --</option>
                            @foreach($departmentData['data'] as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <!-- Email Address -->
                    <div class="col-md-6 mb-3">
                        <input type="email" class="form-control" id="email_input" name="email" placeholder="Email Address" required>
                          <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="fill_email" />
                            <label class="form-check-label" for="fill_email">
                                Fill with your profile email
                            </label>
                        </div>
                    </div>

                    <!-- Doctor (Dropdown from code 1) -->
                    <div class="col-md-6 mb-3">
                        <select class="form-select" name="sel_emp" id="sel_emp" required>
                            <option value="0">-- Select Doctor --</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <!-- Date -->
                    <div class="col-md-6 mb-3">
                        <input type="date" class="form-control" name="date" min="{{ date('Y-m-d') }}" required>
                    </div>

                    <!-- Contact Number -->
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="phone_input" name="number" placeholder="Contact No." maxlength="11"
                            required>
                                 <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="fill_phone" />
                            <label class="form-check-label" for="fill_phone">
                                Fill with your profile phone number
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Message -->
                    <div class="col-md-12 mb-3">
                        <textarea class="form-control" name="message" rows="3" placeholder="Enter Message..."
                            required></textarea>
                    </div>
                </div>

                <div class="form-footer">
                    <button type="button" class="btn btn-danger ">Cancel</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>



        <script>
        $(document).ready(function() {
            var userId = "{{ Auth::id() }}"; // Get current user ID
            var disabledDates = []; // Initialize array to hold dates that will be disabled

            // Fetch existing appointments for the logged-in user
            $.ajax({
                url: '/getUserAppointments/' + userId, // Make sure you have a route for this
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    if (response['appointments'] != null) {
                        disabledDates = response['appointments'].map(function(appointment) {
                            return appointment
                                .date; // Add appointment dates to disabledDates array
                        });

                        // Disable dates in the date picker
                        $('input[name="date"]').attr('min', "{{ date('Y-m-d') }}");
                        $('input[name="date"]').datepicker({
                            dateFormat: 'yy-mm-dd',
                            beforeShowDay: function(date) {
                                var formattedDate = $.datepicker.formatDate('yy-mm-dd',
                                    date);
                                return [disabledDates.indexOf(formattedDate) === -
                                    1
                                ]; // Disable if date is in disabledDates array
                            }
                        });
                    }
                }
            });
            // Show an alert if user selects a disabled date
            $('input[name="date"]').on('change', function() {
                var selectedDate = $(this).val();
                if (disabledDates.indexOf(selectedDate) !== -1) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Unavailable Date',
                        text: 'This date is already booked. Please select another date.',
                    });
                }
            });
        });
        </script>




        <script type='text/javascript'>
        $(document).ready(function() {

            $('#sel_depart').change(function() {
                // Department id
                var id = $(this).val();

                // Empty the dropdown
                $('#sel_emp').find('option').not(':first').remove();

                // AJAX request 
                $.ajax({
                    url: 'getEmployees/' + id,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        var len = 0;
                        if (response['data'] != null) {
                            len = response['data'].length;
                        }

                        if (len > 0) {
                            // Read data and create <option >
                            for (var i = 0; i < len; i++) {
                                var id = response['data'][i].id;
                                var name = response['data'][i].name;
                                var option = "<option value='" + id + "'>" + name +
                                    "</option>";
                                $("#sel_emp").append(option);


                            }
                        }
                    }
                });
            });
        });
        </script>


        <script>
        $(document).ready(function() {
            var userName = "{{ Auth::user()->name }}";
            var userEmail = "{{ Auth::user()->email }}";
            var userPhone ="{{ Auth::user()->phone_number}}";
                

            $('#fill_name').change(function() {
                if ($(this).is(':checked')) {
                    $('#name_input').val(userName);
                } else {
                    $('#name_input').val('');
                }
            });

            $('#fill_email').change(function() {
                if ($(this).is(':checked')) {
                    $('#email_input').val(userEmail);
                } else {
                    $('#email_input').val('');
                }
            });

            $('#fill_phone').change(function() {
                if ($(this).is(':checked')) {
                    $('#phone_input').val(userPhone);
                } else {
                    $('#phone_input').val('');
                }
            });
        });
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

    <script src="script.js"></script>
</body>

</html>