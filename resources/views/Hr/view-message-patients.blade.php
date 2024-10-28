<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <meta name="robots" content="noindex, nofollow">
        <title>Human Resources Dashboard</title>

        <link rel="shortcut icon" type="image/x-icon" href="{{asset('hrs/assets/img/logo.jpg')}}" />

        <link rel="stylesheet" href="{{asset('hrs/assets/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{asset('hrs/assets/css/font-awesome.min.css')}}">

        <link rel="stylesheet" href="{{asset('hrs/assets/css/line-awesome.min.css')}}">

        <link rel="stylesheet" href="{{asset('hrs/assets/plugins/morris/morris.css')}}">

        <link rel="stylesheet" href="{{asset('hrs/assets/css/style.css')}}">


        <script>
        if (window.history && window.history.pushState) {
            window.history.pushState(null, null, window.location.href);
            window.onpopstate = function() {
                window.history.pushState(null, null, window.location.href);
            };
        }
        </script>








        <style>
        .unread_notification {
            position: absolute;
            top: 0;
            right: 0;
            transform: translate(50%, -5%);
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 12px;
        }

        .nav-item.dropdown {
            position: relative;
            /* Ensure the positioning of the badge is relative to the nav item */
        }

        .fa-comment-o {
            font-size: 20px;
            position: relative;
        }
        </style>

        <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

        <script>
        Pusher.logToConsole = true;
        var pusher = new Pusher('eaecfdbcb5ca2fba8266', {
            cluster: 'ap1'
        });
        var channel = pusher.subscribe('messages');
        channel.bind('my-event', function(data) {
            if (data && data.appointments && data.appointments.name && data.appointments.date) {
                toastr.success('New Appointment Scheduled', 'Name: ' + data.appointments.name + '<br>Date: ' +
                    data
                    .appointments.date, {
                        timeOut: 0,
                        extendedTimeOut: 0,
                    });
            } else {
                console.error('Invalid data structure received:', data);
            }
        });
        </script>





        <!-- SCRIPT FOR UPDATED NUMBER MESSAGES -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
        <script>
        Pusher.logToConsole = true;

        var pusher = new Pusher('eaecfdbcb5ca2fba8266', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('notifmess');
        channel.bind('my-event', function(data) {
            $.ajax({
                url: "{{route('unreadcount')}}",
                method: "GET",
                success: function(data) {
                    $('.unread_notification').html(data.count);
                },
            });


        });
        </script>


    </head>









    <body>

        <div class="main-wrapper">

            <div class="header">

                <div class="header-left">
                    <a href="{{url(url('HR'))}}" class="logo">
                        <img src="{{asset('hrs/assets/img/logo.jpg')}}" width="70" height="70" alt="">
                    </a>
                </div>

                <a id="toggle_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>

                <div class="page-title-box">
                    <h3>Human Resources Dashboard</h3>
                </div>

                {{-- message --}}
                {!! Toastr::message() !!}

                <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

                <ul class="nav user-menu">







                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        </a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications</span>
                                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt=""
                                                        src="{{asset('hrs/assets/img/profiles/avatar-02.jpg')}}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">John Doe</span>
                                                        added
                                                        new task <span class="noti-title">Patient appointment
                                                            booking</span>
                                                    </p>
                                                    <p class="noti-time"><span class="notification-time">4 mins
                                                            ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt=""
                                                        src="{{asset('hrs/assets/img/profiles/avatar-03.jpg')}}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Tarah
                                                            Shropshire</span>
                                                        changed the task name <span class="noti-title">Appointment
                                                            booking
                                                            with payment gateway</span></p>
                                                    <p class="noti-time"><span class="notification-time">6 mins
                                                            ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt=""
                                                        src="{{asset('hrs/assets/img/profiles/avatar-06.jpg')}}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Misty Tison</span>
                                                        added <span class="noti-title">Domenic Houston</span> and <span
                                                            class="noti-title">Claire Mapes</span> to project <span
                                                            class="noti-title">Doctor available module</span></p>
                                                    <p class="noti-time"><span class="notification-time">8 mins
                                                            ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt=""
                                                        src="{{asset('hrs/assets/img/profiles/avatar-17.jpg')}}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Rolland
                                                            Webber</span>
                                                        completed task <span class="noti-title">Patient and Doctor video
                                                            conferencing</span></p>
                                                    <p class="noti-time"><span class="notification-time">12 mins
                                                            ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt=""
                                                        src="{{asset('hrs/assets/img/profiles/avatar-13.jpg')}}">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Bernardo
                                                            Galaviz</span>
                                                        added new task <span class="noti-title">Private chat
                                                            module</span>
                                                    </p>
                                                    <p class="noti-time"><span class="notification-time">2 days
                                                            ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="activities.html">View all Notifications</a>
                            </div>
                        </div>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="chat" class="dropdown-toggle nav-link" data-toggle="">
                            <i class="fa fa-comment-o"></i>
                            <span
                                class="badge badge-pill unread_notification">{{ auth()->user()->getMessageCount() }}</span>
                        </a>
                    </li>


                    <li class="nav-item dropdown has-arrow main-drop">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <span class="user-img"><img src="{{asset('hrs/assets/img/profiles/hr.png')}}" alt="">
                                <span class="status online"></span></span>
                            <span>HR</span>
                        </a>
                        <div class="dropdown-menu">

                            <a class="dropdown-item" href="{{url('chat')}}">Message</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                        </div>
                    </li>
                </ul>


                <div class="dropdown mobile-user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                            class="fa fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">

                        <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                    </div>
                </div>

            </div>


            @if (session()->has('impersonated_by'))
            <a href="{{ route('logout') }}" class="btn btn-warning">Leave Impersonation</a>
            @endif
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>


                            <li class="menu-title">
                                <span>Employees</span>
                            </li>
                            <li class="submenu">
                                <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span
                                        class="menu-arrow"></span></a>
                                <ul style="display: none;">

                                    <li><a href="{{url('/leave-list')}}">Doctor/Staff Leaves<span
                                                class="badge badge-pill bg-primary float-right">1</span></a></li>




                                    <li><a href="{{url('add_doctor_view')}}">Add Doctors</a></li>
                                    <li><a href="{{url('attend')}}">Employee Attendance </a></li>
                                    <li><a href="{{url('docsched')}}">Doctor Shifts & Schedule</a></li>

                                </ul>
                            </li>



                            <li>
                                <a href="{{url('viewappointment')}}"><i class="la la-bullhorn"></i></i>
                                    <span>Appointment Requests</span></a>
                            </li>
                            <li>
                                <a href="{{url('view_tickets')}}"><i class="la la-ticket"></i> <span>Tickets</span></a>
                            </li>
                            <li class="menu-title">
                                <span>HR</span>
                            </li>


                            <li>
                                <a href="{{url('products/viewlist')}}"><i class="la la-key"></i> <span> Inventory
                                    </span> <span class="menu-arrow"></span></a>

                            </li>



                    </div>
                </div>
            </div>


            <div class="page-wrapper">

                <div class="content container-fluid">


                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Appointment Information</h4>
                                </div>
                                <div class="card-body">
                                    <form action="#">
                                        <div class="form-group">
                                            <label>Name Of Patients</label>
                                            <input type="text" class="form-control"
                                                value="{{ old('account_name', $selectpatients->name ?? '') }}"
                                                readonly />
                                        </div>
                                        <div class="form-group">
                                            <label>Specialty</label>
                                            <input type="text" class="form-control"
                                                value="{{ old('account_name', $selectpatients->departments ?? '') }}"
                                                readonly />
                                        </div>
                                        <div class="form-group">
                                            <label>Doctor Selected</label>
                                            <input type="text" class="form-control"
                                                value="{{ old('account_name', $selectpatients->employees ?? '') }}"
                                                readonly />
                                        </div>

                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="email" class="form-control"
                                                value="{{ old('account_name', $selectpatients->email ?? '') }}"
                                                readonly />
                                        </div>

                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="text" class="form-control"
                                                value="{{ old('account_name', $selectpatients->date ?? '') }}"
                                                readonly />
                                        </div>
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input type="text" class="form-control"
                                                value="{{ old('account_name', $selectpatients->time ?? '') }}"
                                                readonly />
                                        </div>

                                        <div class="form-group">
                                            <label for="doctorSelected">Doctor Selected</label>
                                            <textarea readonly class="form-control" id="doctorSelected"
                                                rows="3">{{ old('account_name', $selectpatients->message ?? '') }}</textarea>
                                        </div>



                                        <div class="text-right">
                                            <a href="{{url('viewappointment')}}" class="btn btn-info">Back</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>





                </div>



            </div>

        </div>

        </div>


        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}">
        </script>
        <script src="{{asset('hrs/assets/js/jquery-3.5.1.min.js')}}"></script>

        <script src="{{asset('hrs/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('hrs/assets/js/bootstrap.min.js')}}"></script>

        <script src="{{asset('hrs/assets/js/jquery.slimscroll.min.js')}}"></script>

        <script src="{{asset('hrs/assets/plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('hrs/assets/plugins/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('hrs/assets/js/chart.js')}}"></script>

        <script src="{{asset('hrs/assets/js/app.js')}}"></script>
    </body>

</html>