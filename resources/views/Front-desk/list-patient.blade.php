<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
        <title>Comcare Front Desk</title>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('fdesk/assets/img/logo.jpg')}}" />

        <link rel="stylesheet" href="fdesk/assets/css/bootstrap.min.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="fdesk/assets/css/font-awesome.min.css" />

        <link rel="stylesheet" href="fdesk/assets/css/line-awesome.min.css" />

        <link rel="stylesheet" href="fdesk/assets/plugins/morris/morris.css" />

        <link rel="stylesheet" href="fdesk/assets/css/style.css" />

        <style>
        .hover-effect {
            transition: transform 0.3s ease;
            /* Smooth transition */
        }

        .hover-effect:hover {
            transform: scale(1.05);
            /* Zoom in effect */
            z-index: 1;
            /* Ensure it appears above other rows */
        }
        </style>

        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.min.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
                    <a href="{{url('Front')}}" class="logo">
                        <img src="{{asset('fdesk/assets/img/logo.jpg')}}" width="80px" height="70px" alt="" />
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
                    <h3>Patient List</h3>
                </div>

                <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

                <ul class="nav user-menu">




                    <li class="nav-item dropdown">

                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications</span>
                                <a href="javascript:void(0)" class="clear-noti">
                                    Clear All
                                </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="" src="assets/img/profiles/avatar-02.jpg" />
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">John Doe</span>
                                                        added new task
                                                        <span class="noti-title">Patient appointment
                                                            booking</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">4 mins ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="" src="assets/img/profiles/avatar-03.jpg" />
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Tarah
                                                            Shropshire</span>
                                                        changed the task name
                                                        <span class="noti-title">Appointment booking
                                                            with payment
                                                            gateway</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">6 mins ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="" src="assets/img/profiles/avatar-06.jpg" />
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Misty Tison</span>
                                                        added
                                                        <span class="noti-title">Domenic
                                                            Houston</span>
                                                        and
                                                        <span class="noti-title">Claire Mapes</span>
                                                        to project
                                                        <span class="noti-title">Doctor available
                                                            module</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">8 mins ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="" src="assets/img/profiles/avatar-17.jpg" />
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Rolland
                                                            Webber</span>
                                                        completed task
                                                        <span class="noti-title">Patient and Doctor
                                                            video
                                                            conferencing</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">12 mins ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="" src="assets/img/profiles/avatar-13.jpg" />
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Bernardo
                                                            Galaviz</span>
                                                        added new task
                                                        <span class="noti-title">Private chat
                                                            module</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">2 days ago</span>
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

                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Messages</span>
                                <a href="javascript:void(0)" class="clear-noti">
                                    Clear All
                                </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="chat.html">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar">
                                                        <img alt="" src="assets/img/profiles/avatar-09.jpg" />
                                                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author">Richard Miles
                                                    </span>
                                                    <span class="message-time">12:28 AM</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Lorem ipsum dolor sit
                                                        amet, consectetur
                                                        adipiscing</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="chat.html">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar">
                                                        <img alt="" src="assets/img/profiles/avatar-02.jpg" />
                                                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author">John Doe</span>
                                                    <span class="message-time">6 Mar</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Lorem ipsum dolor sit
                                                        amet, consectetur
                                                        adipiscing</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="chat.html">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar">
                                                        <img alt="" src="assets/img/profiles/avatar-03.jpg" />
                                                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author">
                                                        Tarah Shropshire
                                                    </span>
                                                    <span class="message-time">5 Mar</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Lorem ipsum dolor sit
                                                        amet, consectetur
                                                        adipiscing</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="chat.html">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar">
                                                        <img alt="" src="assets/img/profiles/avatar-05.jpg" />
                                                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author">Mike Litorus</span>
                                                    <span class="message-time">3 Mar</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Lorem ipsum dolor sit
                                                        amet, consectetur
                                                        adipiscing</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="chat.html">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar">
                                                        <img alt="" src="assets/img/profiles/avatar-08.jpg" />
                                                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author">
                                                        Catherine Manseau
                                                    </span>
                                                    <span class="message-time">27 Feb</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Lorem ipsum dolor sit
                                                        amet, consectetur
                                                        adipiscing</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="chat.html">View all Messages</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown has-arrow main-drop">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <span class="user-img"><img src="fdesk/assets/img/profiles/front.jpg" alt="" />
                                <span class="status online"></span></span>
                            <span>Front Desk</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile.html">My Profile</a>
                            <a class="dropdown-item" href="settings.html">Settings</a>
                            <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                        </div>
                    </li>
                </ul>

                <div class="dropdown mobile-user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                            class="fa fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                    </div>
                </div>
            </div>

            <div class="sidebar animate__animated  animate__zoomIn" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li class="menu-title">
                                <span>Patients</span>
                            </li>



                            <li>
                                <a href="{{route('chatat')}}"><i class="fa-brands fa-rocketchat"></i>
                                    <span>Live Chat</span></a>
                            </li>



                            <li>
                                <a href="{{url('patient_list')}}" target=" _blank"><i
                                        class="fa-solid fa-users-between-lines"></i></i>
                                    <span>Patient Accounts</span></a>
                            </li>

                            <li><a href="{{ route('appointments') }}" target=" _blank"><i class="la la-bullhorn"></i>
                                    <span>Today
                                        Appointment</span></a></li>


                            <li><a href="{{url('patient_appointment')}}" target=" _blank"><i
                                        class="fa-solid fa-user-group"></i>
                                    <span>Record of Appointment</span></a></li>

                            <li class="menu-title">
                                <span>Accounts</span>
                            </li>

                            <li><a href="{{route('unverified')}}" target=" _blank"><i class="fa-regular fa-user"></i>
                                    <span>Unverified Accounts</span></a></li>
                            <li class="menu-title">
                            <li><a href="{{route('verifieduser')}}" target=" _blank"> <i class="fa-solid fa-check"></i>

                                    <span>Verified Accounts</span></a></li>
                            <li>
                                <a href="{{url('pending_app')}}" target="_blank"><i
                                        class="fa-solid fa-business-time"></i>
                                    <span>Pending Appointment</span></a>
                            </li>

                            <li><a href="{{url('display_arrive')}}" target="_blank"><i
                                        class="fa-solid fa-user-group"></i>
                                    <span>Patient Arrives</span></a></li>
                            <li>

                                <a href="{{url('unverified-list')}}" target=" _blank"><i
                                        class="fa-solid fa-user-minus"></i>
                                    <span>Request Verification </span></a>
                            </li>
                            <li>
                                <a href="{{url('arrive_approve')}}" target=" _blank"><i
                                        class="fa-solid fa-users-between-lines"></i></i>
                                    <span>Approve Appointment </span></a>
                            </li>
                            <li class="menu-title">
                                <span>Disable Account</span>
                            </li>

                            <li>
                                <a href="{{route('archivedss')}}" target=" _blank"><i class="fa-solid fa-trash"></i>
                                    <span>Archived Accounts </span></a>
                            </li>
                            <li>
                                <a href="{{route('ticket')}}" target=" _blank"><i
                                        class="fa-solid fa-clipboard-check"></i>
                                    <span>Send Ticket </span></a>
                            </li>









                        </ul>
                    </div>
                </div>
            </div>

            <div class="page-wrapper">

                <div class="content container-fluid  animate__animated animate__slideInRight
">


                    <div class="row">
                        <div class="col-md-3" style="margin:15px;">
                            <label for=" search">
                                <h3>Search Patient</h3>
                            </label>
                            <input type="text" id="searchInput" class="form-control short-search"
                                placeholder="Search by name" />
                        </div>
                        <div class="col-md-12">

                            <div class="table-responsive">

                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email Type</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($patientrecord as $record)
                                        <tr class="hover-effect">
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar"> <img alt="Photo error"
                                                            src="hrs/assets/img/user.jpg" class="rounded-circle"
                                                            style="width: 40px; height: 40px;"> </a>
                                                    <a href="#">{{$record->name}}
                                                        <span>{{$record->role_name}}</span></a>
                                                </h2>
                                            </td>
                                            <td>{{$record->email}}</td>
                                            <td>{{$record->phone_number}}</td>
                                            <td><span class="badge badge-success">{{$record->status}}</span></td>
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
        </div>

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
        <script src="fdesk/assets/js/jquery-3.5.1.min.js"></script>

        <script src="fdesk/assets/js/popper.min.js"></script>
        <script src="fdesk/assets/js/bootstrap.min.js"></script>

        <script src="fdesk/assets/js/jquery.slimscroll.min.js"></script>

        <script src="fdesk/assets/plugins/morris/morris.min.js"></script>
        <script src="fdesk/assets/plugins/raphael/raphael.min.js"></script>
        <script src="fdesk/assets/js/chart.js"></script>

        <script src="fdesk/assets/js/app.js"></script>
    </body>

</html>