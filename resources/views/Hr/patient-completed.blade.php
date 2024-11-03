<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Human Resources Dashboard</title>

        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <link rel="stylesheet" href="hrs/assets/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="hrs/assets/css/font-awesome.min.css">

        <link rel="stylesheet" href="hrs/assets/css/line-awesome.min.css">

        <link rel="stylesheet" href="hrs/assets/plugins/morris/morris.css">

        <link rel="stylesheet" href="hrs/assets/css/style.css">

        <style>
        .table-responsive {
            overflow-x: hidden;
            /* Prevent horizontal scrolling */
        }

        .table {
            width: 100%;
            /* Full width */
            table-layout: auto;
            /* Responsive layout */
        }

        /* Add your zoom effect styles as well */
        .zoom-row {
            transition: transform 0.3s ease;
        }

        .zoom-row:hover {
            transform: scale(1.05);
        }
        </style>


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
                    <h3>Patient Completed</h3>
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
                <div class="content container-fluid  animate__animated animate__slideInRight
">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="stats-info">
                                <h6>Total Patients Not Paid</h6>
                                <h4>{{$not}}</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-info">
                                <h6>Total Patient Paid</h6>
                                <h4>{{$paid}}</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-info">
                                <h6>Pending Payment</h6>
                                <h4>0 <span>Today</span></h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-info">
                                <h6>Partial Payments</h6>
                                <h4>{{$partial}}</h4>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3" style="margin:15px;">
                        <label for=" search">
                            <h3>Search Patient</h3>
                        </label>
                        <input type="text" id="searchInput" class="form-control short-search"
                            placeholder="Search by name" />
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>Patient Name</th>
                                            <th>Date Appointment</th>
                                            <th>Doctor Name</th>
                                            <th>Patient Status</th>
                                            <th>Payment</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($patients as $patient)
                                        <tr class="zoom-row">
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar">
                                                        <img alt="Photo error" src="hrs/assets/img/user.jpg"
                                                            class="rounded-circle" style="width: 40px; height: 40px;">
                                                    </a>{{$patient->name}}
                                                </h2>
                                            </td>
                                            <td>{{$patient->date}}</td>
                                            <td>Dr. {{$patient->employees}}</td>
                                            <td>
                                                @if($patient->completed == 'Discharged')
                                                <span style="font-size:15px; color:white;"
                                                    class="badge bg-success">{{$patient->completed}}</span>
                                                @elseif($patient->completed == 'Observation')
                                                <span style="font-size:15px; color:white;"
                                                    class="badge bg-warning">{{$patient->completed}}</span>
                                                @else
                                                <span style="font-size:15px; color:white;" class="badge bg-danger">Not
                                                    Marked</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($patient->paymentss == 'Paid Full')
                                                <span style="font-size:15px; color:white;"
                                                    class="badge bg-success">Paid</span>
                                                @elseif($patient->paymentss == 'Not Paid')
                                                <span style="font-size:15px; color:white;" class="badge bg-danger">Not
                                                    Paid</span>
                                                @elseif($patient->paymentss == 'Pending')
                                                <span style="font-size:15px; color:white;" class="badge bg-info">Not
                                                    Paid</span>
                                                @elseif($patient->paymentss == 'Partially Paid')
                                                <span style="font-size:15px; color:white;"
                                                    class="badge bg-warning">Partially Paid</span>
                                                @else
                                                <span style="font-size:15px; color:white;"
                                                    class="badge bg-secondary">Unknown Status</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('fullpaid.payment', $patient->id) }}"
                                                    class="btn btn-success">Paid</a>
                                                <a href="{{ route('partial.payment', $patient->id) }}"
                                                    class="btn btn-info">Partial</a>
                                                <a href="{{ route('notpayment.payment', $patient->id) }}"
                                                    class="btn btn-warning">Not Paid</a>
                                            </td>
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
        document.getElementById('searchInput').addEventListener('keyup', function() {
            var searchValue = this.value.toLowerCase();
            var rows = document.querySelectorAll('.datatable tbody tr');

            rows.forEach(function(row) {
                var name = row.querySelector('td').innerText.toLowerCase();
                if (name.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
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