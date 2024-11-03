<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Human Resources Dashboard</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <link rel="stylesheet" href="hrs/assets/css/bootstrap.min.css">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="hrs/assets/css/font-awesome.min.css">

        <link rel="stylesheet" href="hrs/assets/css/line-awesome.min.css">

        <link rel="stylesheet" href="hrs/assets/plugins/morris/morris.css">

        <link rel="stylesheet" href="hrs/assets/css/style.css">


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
                        <img src="hrs/assets/img/logo.jpg" width="70" height="70" alt="">
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
                    <h3>List Tickets</h3>
                </div>

                {{-- message --}}
                {!! Toastr::message() !!}

                <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

                <ul class="nav user-menu">





                    <li class="nav-item dropdown">

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
                                                    <img alt="" src="hrs/assets/img/profiles/avatar-02.jpg">
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
                                                    <img alt="" src="hrs/assets/img/profiles/avatar-03.jpg">
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
                                                    <img alt="" src="hrs/assets/img/profiles/avatar-06.jpg">
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
                                                    <img alt="" src="hrs/assets/img/profiles/avatar-17.jpg">
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
                                                    <img alt="" src="hrs/assets/img/profiles/avatar-13.jpg">
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
                            <span class="user-img"><img src="hrs/assets/img/profiles/hr.png" alt="">
                                <span class="status online"></span></span>
                            <span>HR</span>
                        </a>
                        <div class="dropdown-menu">

                            <a class="dropdown-item" href="{{url('chat')}}">Message</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                        </div>
                    </li>




                </ul>




            </div>


            <div class="sidebar animate__animated  animate__zoomInUp
" id="sidebar">
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
                                                class="badge badge-pill bg-primary float-right"></span></a></li>




                                    <li><a href="{{url('add_doctor_view')}}">Add Doctors</a></li>
                                    <li><a href="{{url('attend')}}">Employees Attendance </a></li>
                                    <li><a href="{{url('docsched')}}">Doctor Shifts & Schedule</a></li>

                                </ul>
                            </li>



                            <li>
                                <a href="{{url('viewappointment')}}"><i class="fa-solid fa-business-time"></i>
                                    <span>Appointment Requests</span></a>
                            </li>
                            <li>
                                <a href="{{url('view_tickets')}}"><i class="fa-solid fa-clipboard-list"></i>
                                    <span>Tickets</span></a>
                            </li>
                            <li class="menu-title">
                                <span>HR</span>
                            </li>


                            <li>
                                <a href="{{url('products/viewlist')}}"> <i class="fa-solid fa-screwdriver-wrench"></i>
                                    <span> Inventory
                                    </span> <span class="menu-arrow"></span></a>

                            </li>



                    </div>
                </div>
            </div>


            <div class="page-wrapper">
                <div class="content container-fluid animate__animated  animate__zoomInUp
">
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Tickets</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Tickets
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-group m-b-30">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div>
                                                <span class="d-block">Low Priority</span>
                                            </div>
                                            <div>
                                                <span class="text-success">+10%</span>
                                            </div>
                                        </div>
                                        <h3 class="mb-3">{{$lowtix}}</h3>
                                        <div class="progress mb-2" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div>
                                                <span class="d-block">Moderate Priority</span>
                                            </div>
                                            <div>
                                                <span class="text-success">+12.5%</span>
                                            </div>
                                        </div>
                                        <h3 class="mb-3">{{$medtix}}</h3>
                                        <div class="progress mb-2" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div>
                                                <span class="d-block">High Priority</span>
                                            </div>
                                            <div>
                                                <span class="text-danger">-2.8%</span>
                                            </div>
                                        </div>
                                        <h3 class="mb-3">{{$hightix}}</h3>
                                        <div class="progress mb-2" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div>
                                                <span class="d-block">Critical Priority</span>
                                            </div>
                                            <div>
                                                <span class="text-danger">-75%</span>
                                            </div>
                                        </div>
                                        <h3 class="mb-3">{{$crittix}}</h3>
                                        <div class="progress mb-2" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row" style="font-size:20px;">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Ticket ID</th>
                                            <th>Ticket Subject</th>
                                            <th>Employee Name</th>
                                            <th>Created Date</th>
                                            <th>Priority</th>
                                            <th>Time Remaining</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($datas as $tix )

                                        <tr>
                                            <td>{{$tix->id}}</td>
                                            <td>
                                                <span
                                                    class="badge badge-pill badge-primary">{{$tix->ticket_number}}</span>
                                            </td>
                                            <td>{{$tix->subject}}</td>
                                            <td>
                                                <span style="font-size:15px;"
                                                    class="badge badge-pill badge-info">{{$tix->name}}</span>
                                            </td>
                                            <td>{{$tix->created_at}}</td>
                                            <td>
                                                <span class="badge badge-pill badge-danger">{{$tix->priority}}</span>
                                            </td>

                                            <td class="timer" data-submitted-at="{{ $tix->submitted_at }}"
                                                data-priority="{{ $tix->priority }}" id="timer-{{ $tix->id }}"></td>




                                            <td>



                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>




            </div>

        </div>


        <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Define countdown durations in milliseconds for each priority level
            const priorityDurations = {
                "Critical Severity": 4 * 60 * 60 * 1000,
                "High Severity": 12 * 60 * 60 * 1000, // 12 hours
                "Medium Severity": 24 * 60 * 60 * 1000, // 24 hours
                "Low Severity": 48 * 60 * 60 * 1000 // 48 hours
            };

            // Select all elements with the class 'timer'
            document.querySelectorAll('.timer').forEach(function(timerElement) {
                // Get the ticket's submitted time from the data attribute
                const submittedAt = new Date(timerElement.getAttribute('data-submitted-at')).getTime();

                // Get the priority level and set the corresponding countdown duration
                const priority = timerElement.getAttribute('data-priority');
                const timerDuration = priorityDurations[priority] || 24 * 60 * 60 *
                    1000; // Default to 24 hours if undefined

                // Update the countdown every second
                const countdownInterval = setInterval(function() {
                    const now = new Date().getTime();
                    const timeElapsed = now - submittedAt;
                    const timeRemaining = timerDuration - timeElapsed;

                    if (timeRemaining <= 0) {
                        clearInterval(countdownInterval);
                        timerElement.innerHTML = "Time is up!";
                    } else {
                        // Calculate hours, minutes, and seconds
                        const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (
                            1000 * 60 * 60));
                        const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 *
                            60));
                        const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                        // Display the countdown
                        timerElement.innerHTML = `${hours}h ${minutes}m ${seconds}s`;
                    }
                }, 1000);
            });
        });
        </script>


        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="hrs/assets/js/jquery-3.5.1.min.js"></script>

        <script src="hrs/assets/js/popper.min.js"></script>
        <script src="hrs/assets/js/bootstrap.min.js"></script>

        <script src="hrs/assets/js/jquery.slimscroll.min.js"></script>

        <script src="hrs/assets/plugins/morris/morris.min.js"></script>
        <script src="hrs/assets/plugins/raphael/raphael.min.js"></script>
        <script src="hrs/assets/js/chart.js"></script>

        <script src="hrs/assets/js/app.js"></script>
    </body>

</html>