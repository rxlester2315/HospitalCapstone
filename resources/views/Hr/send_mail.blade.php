<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Human Resources</title>
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

                <a id=" mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

                <ul class="nav user-menu">

                    <li class="nav-item">
                        <div class="top-nav-search">
                            <a href="javascript:void(0);" class="responsive-search">
                                <i class="fa fa-search"></i>
                            </a>
                            <form action="search.html">
                                <input class="form-control" type="text" placeholder="Search here">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </li>





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
                                                    <p class="noti-details"><span class="noti-title">Misty
                                                            Tison</span>
                                                        added <span class="noti-title">Domenic Houston</span> and
                                                        <span class="noti-title">Claire Mapes</span> to project
                                                        <span class="noti-title">Doctor available module</span>
                                                    </p>
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
                                                        completed task <span class="noti-title">Patient and Doctor
                                                            video
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


            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li class="menu-title">
                                <span>Main</span>
                            </li>
                            <li class="submenu">
                               
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
                                <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span>
                                    <span class="menu-arrow"></span></a>
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
                                <a href="{{url('viewappointment')}}"><i class="la la-bullhorn"></i></i>
                                    <span>Patient
                                        Request</span></a>
                            </li>
                            <li>
                                <a href="{{url('view_tickets')}}"><i class="la la-ticket"></i>
                                    <span>Tickets</span></a>
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





                    <div class="row">
                        <div class="col-xl-6 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Email Send to Patients</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ url('mail', $data->id) }}" method="post">
                                        @csrf

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Full Name</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" value="{{ $data->user->name }}"
                                                    readonly />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Doctor Prefer</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control"
                                                    value="{{ $data->employee->name }}" readonly />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Schedule Appointment</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" value="{{ $data->date }}"
                                                    readonly />
                                            </div>
                                        </div>



                                        <!-- Title Message Dropdown -->
                                        <!-- Greetings Dropdown -->
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Greetings</label>
                                            <div class="col-lg-9">
                                                <select id="greeting" name="greeting" class="form-control">
                                                    <option value="hello">Hello</option>
                                                    <option value="dear">Dear</option>
                                                    <option value="hi">Hi</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Call to Action Text Dropdown -->
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Call to Action Text</label>
                                            <div class="col-lg-9">
                                                <select id="action_text" name="action_text" class="form-control">
                                                    <option value="click-here">Click Here</option>
                                                    <option value="visit-now">Visit Now</option>
                                                    <option value="learn-more">Learn More</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="action_url" class="col-lg-3 col-form-label">Call to Action
                                                URL</label>
                                            <div class="col-lg-9">
                                                <input type="url" name="action_url" id="action_url"
                                                    class="form-control" />
                                            </div>
                                        </div>



                                        <!-- Closing Remarks Dropdown -->
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Closing Remarks</label>
                                            <div class="col-lg-9">
                                                <select name="endline" id="endline" class="form-control">
                                                    <option value="thank-you">Thank you</option>
                                                    <option value="best-regards">Best Regards</option>
                                                    <option value="kind-regards">Kind Regards</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Email Content (Leave as textarea) -->
                                        <div class="mb-3">
                                            <label for="body" class="form-label">Email Content</label>
                                            <textarea class="form-control form-control-sm" name="body" id="body"
                                                style="width: 800px; height: 250px;"
                                                placeholder="Enter the body of your email"></textarea>
                                        </div>


                                        <!-- Submit Button -->
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>


                </div>

            </div>

        </div>


        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
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