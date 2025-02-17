<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Comcare Medical</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/themify-icons.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/metisMenu.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/slicknav.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

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
                        <a href="{{url('User')}}"><img src="main_alls/everythingzz/assets/images/icon/logo2.png"
                                alt="logo"></a>
                    </div>
                </div>
                <div class="main-menu animate__animated  animate__slideInRight ">


                    @if (session()->has('impersonated_by'))
                    <a href="{{ route('logout') }}" class="btn btn-warning">Leave Impersonation</a>
                    @endif


                    <div class="menu-inner ">
                        <nav>
                            <ul class="metismenu animate__animated  animate__slideInRight " id="menu">



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
                            <div class="breadcrumbs-area clearfix  ">
                                @auth
                                @if(Auth::user()->role_name !== 'Normal User')

                                <a href="{{route('guest_view')}}">
                                    <h4 class="page-title pull-left "><span class="unverifieds">Unverified</span> </h4>
                                </a>
                                @endif

                                <ul class="breadcrumbs pull-left">
                                    <li><a href="{{url('User')}}">Home</a></li>
                                    <li><span>Patient Account</span></li>
                                </ul>


                                <ul class="bread-middle animate__animated  animate__slideInRight ">
                                    <li><a href="{{url('myappointment')}}">View Appointment</a></li>
                                    <li><a href="{{url('mydoctor')}}">Chat with Doctor</a></li>
                                    <li><a href="{{url('view_normal_prof')}}">View Profile</a></li>

                                </ul>


                            </div>
                            @endauth
                        </div>
                        <div class="col-sm-6 clearfix">
                            <div class="user-profile pull-right ">

                                <img class="avatar user-thumb"
                                    src="main_alls/everythingzz/assets/images/author/avatar.png">
                                @auth
                                @if(Auth::user()->role_name !== 'Normal User')
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                    <span style="margin:10px;">Unverified|</span>{{ Auth::user()->name }}<i
                                        class="fa fa-angle-down"></i>
                                </h4>
                                @else
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                    <span style="margin:10px;">Patient|</span>
                                    {{ Auth::user()->name }}
                                    <i class="fa fa-angle-down"></i>
                                </h4>
                                @endif

                                @endauth

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{url('changesPassword')}}">Change Password</a>
                                    <a class="dropdown-item" href="{{ url('view_normal_prof') }}">View Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Log
                                        Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page title area end -->




                <div class="custom-slider animate__animated  animate__slideInRight ">

                    <div class="custom-slides ">
                        <!-- Radio buttons for manual navigation -->
                        <input type="radio" name="radio-btn" id="radio1" checked>
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">

                        <!-- Slide images -->
                        <div class="custom-slide first">
                            <img src="main_alls/everythingzz/assets/images/slider/slide_1.jpg" alt="Image 1">
                        </div>
                        <div class="custom-slide">
                            <img src="main_alls/everythingzz/assets/images/slider/slider_2.jpg" alt="Image 2">
                        </div>
                        <div class="custom-slide">
                            <img src="main_alls/everythingzz/assets/images/slider/slider_4.jpg" alt="Image 3">
                        </div>
                        <div class="custom-slide">
                            <img src="main_alls/everythingzz/assets/images/slider/slider_3.jpg" alt="Image 4">
                        </div>

                        <!-- Automatic navigation dots -->
                        <div class="custom-navigation-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                        </div>
                    </div>

                    <!-- Manual navigation dots -->
                    <div class="custom-navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>
                </div>



                <div class="options animate__animated  animate__slideInRight ">
                    <div class="list-options">
                        <div class="chat">
                            <span class="fa fa-commenting"></span>
                            <a href="{{url('chatss')}}">
                                <p>Chat with <span>Frontdesk</span></p>
                            </a>
                        </div>



                        <div class="appoint">
                            <span class="fa fa-book"></span>
                            <a href="{{url('create_appointmentsss')}}">
                                <p>Create Appointment</span></p>
                            </a>
                        </div>

                        <div class=" doctor">
                            <span class="fa fa-user "></span>
                            <a href="{{url('mydoctor')}}">
                                <p>Chat With Your Doctors</span></p>
                            </a>

                        </div>
                    </div>
                </div>
















                <div class="card mt-5 animate__animated  animate__slideInRight ">
                    <div class="card-body">
                        <h4 class="header-title">Recent Visit List</h4>
                        <div class="table-responsive">
                            <table class="dbkit-table">
                                <thead>

                                    <th>Name Doctor</th>
                                    <th>Date</th>
                                    <th>Messages</th>
                                    <th>Schedule</th>
                                    <th>Status</th>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Warlyn Bangongon</td>
                                        <td>September 23,2024</td>
                                        <td>
                                            <a href="#" class="btn btn-info">View Message</a>
                                        </td>
                                        <td>September 18,2024</td>
                                        <td>
                                            <a href="#" class="btn btn-success">Completed</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Warlyn Bangongon</td>
                                        <td>September 23,2024</td>
                                        <td>
                                            <a href="#" class="btn btn-info">View Message</a>
                                        </td>
                                        <td>September 18,2024</td>
                                        <td>
                                            <a href="#" class="btn btn-success">Completed</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rex Lester Bastaoang</td>
                                        <td>September 23,2024</td>
                                        <td>
                                            <a href="#" class="btn btn-info">View Message</a>
                                        </td>
                                        <td>September 18,2024</td>
                                        <td>
                                            <a href="#" class="btn btn-success">Completed</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination_area pull-right mt-5">
                            <ul>
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>










                <div class="services-list">
                    <h2>Our Offered Services</h2>
                </div>

                <div class="main-content-inner">
                    <!-- color pricing start -->
                    <div class="row">
                        <div class="col-xl-3 col-ml-6 col-mdl-4 col-sm-6 mt-5">
                            <div class="card">
                                <div class="pricing-list">
                                    <div class="prc-head">
                                        <h4>Blood Chemistry</h4>
                                    </div>
                                    <div class="prc-list">
                                        <ul>
                                            <li><a href="#">FBS</a></li>
                                            <li><a href="#">RBS/HGT</a></li>
                                            <li><a href="#">CHOLESTEROL,TRIGLYCERIDES, LDL, HDL,
                                                    VLDL</a></li>
                                            <li><a href="#">ALBUMIN</a></li>
                                            <li><a href="#">AMYLASE</a></li>
                                            <li><a href="#">LIPASE</a></li>
                                            <li><a href="#">TRIGLYCERIDES </a></li>
                                            <li><a href="#">ALBUMIN</a></li>
                                            <li class="bold"><a href="#">1 SALT/year</a></li>
                                        </ul>
                                        <a href="{{url('chatss')}}">More Info</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-ml-6 col-mdl-4 col-sm-6 mt-5">
                            <div class="card">
                                <div class="pricing-list">
                                    <div class="prc-head">
                                        <h4>Hormones</h4>
                                    </div>
                                    <div class="prc-list">
                                        <ul>
                                            <li><a href="#">Prolactin </a></li>
                                            <li><a href="#">Estrogen</a></li>
                                            <li><a href="#">Progesterone</a></li>
                                            <li><a href="#">Testosterone </a></li>
                                            <li><a href="#">Cortisol</a></li>
                                            <li><a href="#">Ferritin</a></li>
                                            <li><a href="#">GLYCOMARK</a></li>
                                            <li><a href="#">PHOSPHORUS </a></li>
                                            <li class="bold"><a href="#">PHOCALICITION</a></li>
                                        </ul>
                                        <a href="{{url('chatss')}}">More info</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-ml-6 col-mdl-4 col-sm-6 mt-5">
                            <div class="card">
                                <div class="pricing-list">
                                    <div class="prc-head">
                                        <h4>Tumor Markers</h4>
                                    </div>
                                    <div class="prc-list">
                                        <ul>
                                            <li><a href="#">AFP </a></li>
                                            <li><a href="#">CEA</a></li>
                                            <li><a href="#">PSA</a></li>
                                            <li><a href="#">CA-125 (Ovary)</a></li>
                                            <li class="bold"><a href="#">CA-15-3 (Breast)</a>
                                            </li>
                                            <li><a href="#">CA-19-9 (Pancreas)</a></li>

                                        </ul>
                                        <a href="{{url('chatss')}}">More Info</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-ml-6 col-mdl-4 col-sm-6 mt-5">
                            <div class="card">
                                <div class="pricing-list">
                                    <div class="prc-head">
                                        <h4>Hepatitis</h4>
                                    </div>
                                    <div class="prc-list">
                                        <ul>
                                            <li><a href="#">HBsAg Screening/a></li>
                                            <li><a href="#">HBsAg with Titer</a></li>
                                            <li><a href="#">Anti-Hbe - Anti-HBe
                                                </a></li>
                                            <li><a href="#">HBeAg</a></li>
                                            <li class="bold"><a href="#">Anti-Hbe</a></li>
                                            <li><a href="#">Anti-HBc IgM</a></li>
                                            <li><a href="#">Anti-HBc IgG</a></li>
                                            <li><a href="#">Anti-HAV IgM</a></li>
                                            <li><a href="#">Anti-HCV</a></li>
                                            <li><a href="#">Hepa A & B profile</a></li>
                                            <li><a href="#">Hepatitis A, B & C profile</a></li>
                                            <li class="bold"><a href="#">Hepa A & B profile</a>
                                            </li>
                                        </ul>
                                        <a href="{{url('chatss')}}">More Info</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- color pricing end -->
                    <!-- dark pricing start -->

                    <!-- dark pricing end -->



                </div>



            </div>






        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All Rights Reserved.</p>
                </p>
            </div>
        </footer>
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

        @if (session('latestUpdate'))
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const latestUpdate = @json(session('latestUpdate'));
            Swal.fire({
                title: 'System Update Available!',
                icon: 'warning',
                html: `
                
            <div style="font-family: Arial, sans-serif; background-color: #f4f4f4; border-radius: 5px; padding: 20px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                <div style="background: #007bff; color: white; padding: 10px; border-radius: 5px 5px 0 0;">
                    <h4 style="margin: 0;">System Updates</h4>
                </div>
                <div style="padding: 10px;">
                    <h5 style="color: #333; margin: 10px 0;">${latestUpdate.descriptions}</h5>
                    <h6 style="color: #6c757d; margin: 5px 0;">Date: ${latestUpdate.maintenance_date}</h6>
                    <h6 style="color: #333; margin: 5px 0;">Bugs: ${latestUpdate.bugs}</h6>
                    <h6 style="color: #333; margin: 5px 0;">Effect: ${latestUpdate.effect}</h6>
                    <a href="#">
                        <button style="background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-size: 16px;">More Info</button>
                    </a>
                </div>
            </div>
        `,
                showCloseButton: true,
                focusConfirm: false
            });
        });
        </script>
        @php
        session()->forget('latestUpdate'); // Clear the latestUpdate from session
        @endphp
        @endif



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
        <!-- all pie chart -->
        <script src="main_alls/everythingzz/assets/js/pie-chart.js"></script>
        <!-- others plugins -->
        <script src="main_alls/everythingzz/assets/js/plugins.js"></script>
        <script src="main_alls/everythingzz/assets/js/scripts.js"></script>
    </body>

</html>