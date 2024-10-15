<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.min.js"></script>
        <title>Comcare Medical</title>
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/themify-icons.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/metisMenu.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/slicknav.min.css">
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


    </head>
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
                        @auth
                        @if(Auth::user()->role_name == 'Guests')
                        <a href="{{url('Guests')}}"><img src="main_alls/everythingzz/assets/images/icon/logo2.png"
                                alt="logo"></a>

                        @elseif(Auth::user()->role_name == 'Normal User')

                        <a href="{{url('User')}}"><img src="main_alls/everythingzz/assets/images/icon/logo2.png"
                                alt="logo"></a>

                        @endif

                        @endauth
                    </div>
                </div>
                <div class="main-menu">
                    <div class="menu-inner">
                        <nav>
                            <ul class="metismenu" id="menu">


                                @auth
                                @if(Auth::user()->role_name == 'Guests')
                                <li><a href="{{url('Guessappoint')}}"><i class="fa fa-briefcase"></i> <span>View
                                            Appointment</span></a>
                                </li>

                                <li><a href="{{ route('guest_view') }}"><i class="fa fa-user"></i> <span>My
                                            Profile</span></a></li>
                                <li><a href="{{url('chatss')}}"><i class="fa fa-comments"></i> <span>Chat with
                                            Front-desk</span></a>
                                </li>

                                <li><a href="{{url('create_guest_appointment')}}"><i class="fa fa-briefcase"></i>
                                        <span>Create
                                            An Appointment</span></a>
                                </li>


                                @elseif(Auth::user()->role_name == 'Normal User')


                                <li><a href="{{url('myappointment')}}"><i class="fa fa-briefcase"></i> <span>View
                                            Appointment</span></a>
                                </li>
                                <li><a href="{{ url('view_normal_prof') }}"><i class="fa fa-user"></i> <span>My
                                            Profile</span></a></li>
                                <li><a href="{{url('chatss')}}"><i class="fa fa-comments"></i> <span>Chat with
                                            Front-desk</span></a>
                                </li>

                                <li><a href="{{url('create_appointmentsss')}}"><i class="fa fa-briefcase"></i>
                                        <span>Create
                                            An Appointment</span></a>
                                </li>

                                <li><a href="{{url('mydoctor')}}"><i class="fa fa-comments"></i> <span>Chat with my
                                            Doctor</span></a>
                                </li>




                                @endif

                                @endauth

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- sidebar menu area end -->
            <!-- main content area start -->
            <div class=" main-content">
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

                    </div>
                </div>
                <!-- header area end -->
                <!-- page title area start -->
                <div class="page-title-area">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="breadcrumbs-area clearfix">



                                <ul class="breadcrumbs pull-left">
                                    @auth
                                    @if(Auth::user()->role_name == 'Guests')

                                    <li><a href="{{url('Guests')}}">Home</a></li>
                                    <li><span>New Account</span></li>

                                    @elseif(Auth::user()->role_name == 'Normal User')
                                    <li><a href="{{url('User')}}">Home</a></li>
                                    <li><span>Patient Account</span></li>
                                    @endif

                                    @endauth

                                </ul>
                            </div>

                        </div>
                        <div class="col-sm-6 clearfix">
                            <div class="user-profile pull-right">

                                <img class="avatar user-thumb"
                                    src="main_alls/everythingzz/assets/images/author/avatar.png">
                                @auth
                                @if(Auth::user()->role_name !== 'Normal User')
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                    Unverified|{{ Auth::user()->name }}<i class="fa fa-angle-down"></i>
                                </h4>
                                @else
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                    Patient| {{ Auth::user()->name }}
                                    <i class="fa fa-angle-down"></i>
                                </h4>
                                @endif

                                @endauth

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Message</a>
                                    <a class="dropdown-item" href="{{ route('guest_view') }}">View Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Log
                                        Out</a>
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
                                    <form method="POST" action="{{ url('/changesPasswordGuest') }}"
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

                </div>







            </div>
            <!-- main content area end -->
            <!-- footer area start-->

            <!-- footer area end-->
        </div>
        <!-- page container area end -->
        <!-- offset area start -->
        <div class="offset-area">
            <div class="offset-close"><i class="ti-close"></i></div>
            <ul class="nav offset-menu-tab">
                <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
                <li><a data-toggle="tab" href="#settings">Settings</a></li>
            </ul>
            <div class="offset-content tab-content">
                <div id="activity" class="tab-pane fade in show active">
                    <div class="recent-activity">
                        <div class="timeline-task">
                            <div class="icon bg1">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Added</h4>
                                <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="tm-title">
                                <h4>You missed you Password!</h4>
                                <span class="time"><i class="ti-time"></i>09:20 Am</span>
                            </div>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="fa fa-bomb"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Member waiting for you Attention</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="ti-signal"></i>
                            </div>
                            <div class="tm-title">
                                <h4>You Added Kaji Patha few minutes ago</h4>
                                <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg1">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Ratul Hamba sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Hello sir , where are you, i am egerly waiting for you.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="fa fa-bomb"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="ti-signal"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="settings" class="tab-pane fade">
                    <div class="offset-settings">
                        <h4>General Settings</h4>
                        <div class="settings-list">
                            <div class="s-settings">
                                <div class="s-sw-title">
                                    <h5>Notifications</h5>
                                    <div class="s-swtich">
                                        <input type="checkbox" id="switch1" />
                                        <label for="switch1">Toggle</label>
                                    </div>
                                </div>
                                <p>Keep it 'On' When you want to get all the notification.</p>
                            </div>
                            <div class="s-settings">
                                <div class="s-sw-title">
                                    <h5>Show recent activity</h5>
                                    <div class="s-swtich">
                                        <input type="checkbox" id="switch2" />
                                        <label for="switch2">Toggle</label>
                                    </div>
                                </div>
                                <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                            </div>
                            <div class="s-settings">
                                <div class="s-sw-title">
                                    <h5>Show your emails</h5>
                                    <div class="s-swtich">
                                        <input type="checkbox" id="switch3" />
                                        <label for="switch3">Toggle</label>
                                    </div>
                                </div>
                                <p>Show email so that easily find you.</p>
                            </div>
                            <div class="s-settings">
                                <div class="s-sw-title">
                                    <h5>Show Task statistics</h5>
                                    <div class="s-swtich">
                                        <input type="checkbox" id="switch4" />
                                        <label for="switch4">Toggle</label>
                                    </div>
                                </div>
                                <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                            </div>
                            <div class="s-settings">
                                <div class="s-sw-title">
                                    <h5>Notifications</h5>
                                    <div class="s-swtich">
                                        <input type="checkbox" id="switch5" />
                                        <label for="switch5">Toggle</label>
                                    </div>
                                </div>
                                <p>Use checkboxes when looking for yes or no answers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


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
        <!-- bootstrap 4 js -->
        <script src="main_alls/everythingzz/assets/js/popper.min.js"></script>
        <script src="main_alls/everythingzz/assets/js/bootstrap.min.js"></script>
        <script src="main_alls/everythingzz/assets/js/owl.carousel.min.js"></script>
        <script src="main_alls/everythingzz/assets/js/metisMenu.min.js"></script>

        <!-- start chart js -->
        <!-- start highcharts js -->
        <!-- start zingchart js -->

        <!-- all line chart activation -->

        <script src="main_alls/everythingzz/assets/js/plugins.js"></script>
        <script src="main_alls/everythingzz/assets/js/scripts.js"></script>
    </body>

</html>