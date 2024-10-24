<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Add Doctor</title>

        <link rel="shortcut icon" type="image/x-icon" href="{{asset('hrs/assets/img/logo.jpg')}}" />

        <link rel="stylesheet" href="hrs/assets/css/bootstrap.min.css">

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
                    <h3>Add Doctor</h3>
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






                </ul>




            </div>


            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li class="menu-title">
                                <span>Main</span>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span
                                        class="menu-arrow"></span></a>
                                <!-- <ul style="display: none;">
                                <li><a class="active" href="index.html">Admin Dashboard</a></li>
                                <li><a href="employee-dashboard.html">Employee Dashboard</a></li>
                            </ul> -->
                                <!-- </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-cube"></i> <span> Apps</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="chat.html">Chat</a></li>
                                <li class="submenu">
                                    <a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="voice-call.html">Voice Call</a></li>
                                        <li><a href="video-call.html">Video Call</a></li>
                                        <li><a href="outgoing-call.html">Outgoing Call</a></li>
                                        <li><a href="incoming-call.html">Incoming Call</a></li>
                                    </ul>
                                </li>
                                <li><a href="events.html">Calendar</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="inbox.html">Email</a></li>
                                <li><a href="file-manager.html">File Manager</a></li>
                            </ul>
                        </li> -->
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
                            <!-- <li class="submenu">
                            <a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="projects.html">Projects</a></li>
                                <li><a href="tasks.html">Tasks</a></li>
                                <li><a href="task-board.html">Task Board</a></li>
                            </ul>
                        </li> -->
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
                            <!-- <li class="submenu">
                            <a href="#"><i class="la la-files-o"></i> <span> Sales </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="estimates.html">Estimates</a></li>
                                <li><a href="invoices.html">Invoices</a></li>
                                <li><a href="payments.html">Payments</a></li>
                                <li><a href="expenses.html">Expenses</a></li>
                                <li><a href="provident-fund.html">Provident Fund</a></li>
                                <li><a href="taxes.html">Taxes</a></li>
                            </ul>
                        </li> -->

                            <li class="submenu">
                                <a href="#"><i class="la la-key"></i> <span> Inventory </span> <span
                                        class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="{{url('products/viewlist')}}">View List</a></li>

                                </ul>
                            </li>



                    </div>
                </div>
            </div>


            <div class="page-wrapper">

                <div class="content container-fluid">
                    <form action="{{url('/upload_doctor')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Add Doctor</h3>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="index.html">Health Doctor</a>
                                        </li>
                                        <li class="breadcrumb-item active">
                                            Doctors
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-auto float-right ml-auto">
                                    <button class="btn btn-success" type="submit">Add Doctor</button>


                                </div>
                            </div>
                        </div>

                        <div class="row filter-row">
                            <div class="col-sm-6 col-md-3">
                                <p>Doctor Name</p>
                                <div class="form-group form-focus">
                                    <input style="color:black;" type="text" name="name" class="form-control floating"
                                        class="form-control floating" />

                                    <label class="focus-label">Enter Doctor Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <p>Phone Number</p>
                                <div class="form-group form-focus">
                                    <input style="color:black;" type="tel" name="number" class="form-control floating"
                                        placeholder="Contact Number" required="1" max="9999" maxlength="11">
                                    <label class="focus-label">Enter Phone Number</label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <p>Room Number</p>
                                <div class="form-group form-focus">
                                    <input style="color:black;" type="tel" name="room" class="form-control floating"
                                        placeholder="Room Number" required min="1" max="9999" maxlength="4">
                                    <label class="focus-label">Room Number Assign</label>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3">
                                <p>Doctor Department</p>
                                <div class="form-group form-focus">

                                    <input style="color:black;" type="text" name="dep" class="form-control floating"
                                        placeholder="Enter Department" required="">
                                    <label class="focus-label">Department Name</label>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3">
                                <p>Doctor Specialty</p>
                                <div class="form-group form-focus select-focus">
                                    <select name="specialty" style="color:black;">
                                        <option value="">--Select Doctor Specialty--</option>
                                        <option value="Cardiology">Cardiology</option>
                                        <option value="General Surgery">General Surgery</option>
                                        <option value="Neurology">Neurology</option>
                                        <option value="Ophthalmic Surgery">Ophthalmic Surgery</option>
                                        <option value="Orthopaedic Surgery">Orthopaedic Surgery</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3">
                                <label>
                                    <p style="padding-left:10px;"> Doctor Image</p>
                                    <input style="padding-left: 30px;" type="file" name="file" required="">
                            </div>

                        </div>
                    </form>
                    <div class="row staff-grid-row">
                        @foreach($doctor as $doctors)
                        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                            <div class="profile-widget">
                                <div class="profile-img">
                                    <a href="client-profile.html" class="avatar">
                                        <img style="height: 90px; width: 100%; object-fit: cover;"
                                            src="doctorsimage/{{$doctors->image}}" alt="">
                                    </a>
                                </div>
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#edit_client">
                                            <i class="fa fa-pencil m-r-5"></i> Edit
                                        </a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#delete_client">
                                            <i class="fa fa-trash-o m-r-5"></i> Delete
                                        </a>
                                    </div>
                                </div>
                                <h4 class="user-name m-t-10 mb-0 text-ellipsis">
                                    <a href="client-profile.html">{{$doctors->specialty}}</a>
                                </h4>
                                <h5 class="user-name m-t-10 mb-0 text-ellipsis">
                                    <a href="client-profile.html">{{$doctors->name}}</a>
                                </h5>
                                <div class="small text-muted">{{$doctors->departments}}</div>
                                <a href="chat.html" class="btn btn-white btn-sm m-t-10">Message</a>
                                <a href="client-profile.html" class="btn btn-white btn-sm m-t-10">View Profile</a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>

            </div>

        </div>

        <script>
        document.querySelector('input[name="room"]').addEventListener('input', function() {
            if (this.value.length > 4) {
                this.value = this.value.slice(0, 4); // Limit to 4 digits
            }
        });

        document.querySelector('input[name="number"]').addEventListener('input', function() {
            if (this.value.length > 11) {
                this.value = this.value.slice(1, 11); // Limit to 4 digits
            }
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