<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Human Resources</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('hrs/assets/img/logo.jpg')}}" />

        <link rel="stylesheet" href="hrs/assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="hrs/assets/css/font-awesome.min.css">

        <link rel="stylesheet" href="hrs/assets/css/line-awesome.min.css">

        <link rel="stylesheet" href="hrs/assets/plugins/morris/morris.css">

        <link rel="stylesheet" href="hrs/assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>

        <script>
        if (window.history && window.history.pushState) {
            window.history.pushState(null, null, window.location.href);
            window.onpopstate = function() {
                window.history.pushState(null, null, window.location.href);
            };
        }
        </script>








        <style>
        .table-striped tbody tr.hover-effect {
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .table-striped tbody tr.hover-effect:hover {
            background-color: #f0f0f0 !important;
            /* Use !important to ensure it takes precedence */
            transform: scale(1.05);
            /* Zoom in effect */
        }








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
                    <h3>Appointment Requests</h3>
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




                                </ul>
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


                <div class="dropdown mobile-user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                            class="fa fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </div>

            </div>


            <div class="sidebar animate__animated  animate__zoomInUp
 " id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>

                            <li class="submenu">


                            <li class="menu-title">
                                <span>Employees</span>
                            </li>
                            <li class="submenu">
                                <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span
                                        class="menu-arrow"></span></a>
                                <ul style="display: none;">

                                    <li><a href="{{url('/leave-list')}}">Leaves <span
                                                class="badge badge-pill bg-primary float-right">1</span></a></li>




                                    <li><a href="{{url('add_doctor_view')}}">Add Doctors</a></li>
                                    <li><a href="{{url('attend')}}">Employee Attendance </a></li>

                                    <li><a href="{{url('docsched')}}">Doctor Shift & Schedule</a></li>

                                </ul>
                            </li>


                            <li>
                                <!-- <a href="clients.html"><i class="la la-users"></i> <span>Clients</span></a> -->
                            </li>

                            <li>
                                <a href="{{url('viewappointment')}}"><i class="la la-bullhorn"></i></i> <span>Patient
                                        Request</span></a>
                            </li>
                            <li>
                                <a href="{{url('view_tickets')}}"><i class="la la-ticket"></i> <span>Tickets</span></a>
                            </li>
                            <li class="menu-title">
                                <span>HR</span>
                            </li>


                            <li class="submenu">
                                <a href="#"><i class="la la-key"></i> <span> Inventory </span> <span
                                        class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="{{url('products/viewlist')}}">View List</a></li>

                            </li>



                    </div>
                </div>
            </div>


            <div class="page-wrapper">

                <div class="content container-fluid animate__animated  animate__zoomInUp
 ">
                    <div class="col">
                        <h3 class="page-title">
                            <center style="color:white; font-size:40px;">Appointment Requests</center>
                        </h3>
                    </div>
                    <div class="row" style="margin:15px;">
                        <div class="col-md-3">
                            <div class="stats-info">
                                <h6>Total Appointment Pending</h6>
                                <h4>{{$pendings}}</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-info">
                                <h6>Total Appointment Approve</h6>
                                <h4>{{$approve}}</h4>
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
                                            <th>Name of Patient</th>
                                            <th>Specialty</th>
                                            <th>Doctor Selected</th>
                                            <th>Email Address</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Message</th>
                                            <th>Status</th>
                                            <th>Approve</th>
                                            <th>Archived</th>
                                            <th>Contact</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $appoint)
                                        <tr class="hover-effect">
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar">
                                                        <img alt="Photo error" src="hrs/assets/img/user.jpg"
                                                            class="rounded-circle" style="width: 40px; height: 40px;">
                                                    </a>
                                                    <a href="#">{{$appoint->name}}</a>
                                                </h2>
                                            </td>
                                            <td>{{$appoint->departments}}</td>
                                            <td>{{$appoint->employees}}</td>
                                            <td>{{$appoint->email}}</td>
                                            <td>{{$appoint->date}}</td>
                                            <td>{{$appoint->time}}</td>
                                            <td>
                                                <a href="{{ url('message_patients/' . $appoint->id) }}"
                                                    class="btn btn-info" target="_blank">View Message</a>
                                            </td>
                                            <td><a href="" class="badge badge-warning">{{$appoint->status}}</a></td>
                                            <td>
                                                <a style="padding: 5px 10px; font-size: 12px;"
                                                    class="btn btn-success btn-sm"
                                                    href="{{url('approved', $appoint->id)}}"
                                                    onclick="confirmation(event)">Approve</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('appointment.canceled', $appoint->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="confirmArchive(event, this)">Archived</button>
                                                </form>
                                            </td>
                                            <td>
                                                <a class="btn btn-info btn-sm"
                                                    href="{{url('/send_mail',$appoint->id)}}">Send Email</a>
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


        <script type="text/javascript">
        function confirmation(ev) {
            ev.preventDefault(); // Prevent the default anchor click behavior
            var urlToRedirect = ev.currentTarget.getAttribute('href'); // Get the URL from the link
            console.log(urlToRedirect);

            swal({
                    title: "Do you want to approve this?",
                    text: "It will proceed.",
                    icon: "warning", // Use "warning" for a more cautionary message
                    buttons: true,
                    dangerMode: true,
                })
                .then((willApprove) => {
                    if (willApprove) {
                        window.location.href = urlToRedirect; // Redirect if approved
                    }
                });
        }
        </script>



        <script type="text/javascript">
        function confirmArchive(ev, button) {
            ev.preventDefault(); // Prevent form submission
            var form = button.closest('form'); // Get the form element

            swal({
                    title: "Are you sure you want to archive this appointment?",
                    text: "This action cannot be undone.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willArchive) => {
                    if (willArchive) {
                        form.submit(); // Submit the form if confirmed
                    }
                });
        }
        </script>



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