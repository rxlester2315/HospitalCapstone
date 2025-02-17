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

        <link rel="stylesheet" href="{{asset('fdesk/assets/css/bootstrap.min.css')}}" />

        <link rel="stylesheet" href="{{asset('fdesk/assets/css/font-awesome.min.css')}}" />

        <link rel="stylesheet" href="{{asset('fdesk/assets/css/line-awesome.min.css')}}" />

        <link rel="stylesheet" href="{{asset('fdesk/assets/plugins/morris/morris.css')}}" />

        <link rel="stylesheet" href="{{asset('fdesk/assets/css/style.css')}}" />

        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.min.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->

        <style>
        .clock {
            font-size: 48px;
            color: white;
        }

        <style>body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 20px;

        }

        .container {
            max-width: 450px;
            margin: auto;
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.15);
            background: #001f33;

        }



        h1 {
            text-align: center;
            color: white;
            margin-bottom: 25px;
            font-size: 24px;
            letter-spacing: 0.5px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: white;
            font-weight: 600;
        }

        input[type="text"],
        input[type="email"],
        input[type="time"],
        select {
            width: 100%;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
            color: #333;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[readonly] {
            background-color: #e2e6ea;
            cursor: not-allowed;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="time"]:focus,
        select:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            padding: 15px;
        }

        button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 8px;
            background-color: #007bff;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .time-selection {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .time-selection input[type="time"] {
            flex: 1;
            margin-right: 10px;
        }

        select {
            flex: 1;
        }

        @media (max-width: 480px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 20px;
            }

            button {
                font-size: 16px;
            }
        }
        </style>
        </style>
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
                    <h3>Admin Dashboard</h3>
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
                                                    <img alt="" src="{{asset('assets/img/profiles/avatar-02.jpg')}}" />
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
                                                    <img alt="" src="{{asset('assets/img/profiles/avatar-03.jpg')}}" />
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
                                                    <img alt="" src="{{asset('assets/img/profiles/avatar-06.jpg')}}" />
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
                                                    <img alt="" src="{{asset('assets/img/profiles/avatar-17.jpg')}}" />
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
                                                    <img alt="" src="{{asset('assets/img/profiles/avatar-13.jpg')}}" />
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
                                                        <img alt=""
                                                            src="{{asset('assets/img/profiles/avatar-09.jpg')}}" />
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
                                                        <img alt=""
                                                            src="{{asset('assets/img/profiles/avatar-02.jpg')}}" />
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
                                                        <img alt=""
                                                            src="{{asset('assets/img/profiles/avatar-03.jpg')}}" />
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
                                                        <img alt=""
                                                            src="{{asset('assets/img/profiles/avatar-05.jpg')}}" />
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
                                                        <img alt=""
                                                            src="{{asset('assets/img/profiles/avatar-08.jpg')}}" />
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
                            <span class="user-img"><img src="{{asset('fdesk/assets/img/profiles/front.jpg')}}" alt="" />
                                <span class="status online"></span></span>
                            <span>Admin</span>
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

            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li class="menu-title">
                                <span>Patients</span>
                            </li>



                            <li>
                                <a href="{{route('chatat')}}"><i class="la la-users"></i>
                                    <span>Live Chat</span></a>
                            </li>



                            <li>
                                <a href="{{url('patient_list')}}"><i class="fa-solid fa-users-between-lines"></i></i>
                                    <span>Patient Accounts</span></a>
                            </li>

                            <li><a href="{{ route('appointments') }}"><i class="la la-bullhorn"></i> <span>Today
                                        Appointment</span></a></li>


                            <li><a href="{{url('patient_appointment')}}"><i class="fa-solid fa-user-group"></i>
                                    <span>Record of Appointment</span></a></li>

                            <li class="menu-title">
                                <span>Accounts</span>
                            </li>

                            <li><a href="{{route('unverified')}}"><i class="fa-regular fa-user"></i>
                                    <span>Unverified Accounts</span></a></li>
                            <li class="menu-title">
                            <li><a href="{{route('verifieduser')}}"> <i class="fa-solid fa-check"></i>

                                    <span>Verified Accounts</span></a></li>
                            <li>
                                <a href="{{url('unverified-list')}}"><i class="fa-solid fa-user-minus"></i>
                                    <span>Request Verification </span></a>
                            </li>
                            <li class="menu-title">
                                <span>Disable Account</span>
                            </li>

                            <li>
                                <a href="{{route('archived')}}"><i class="fa-solid fa-trash"></i>
                                    <span>Archived Accounts </span></a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>

            <div class="page-wrapper">
                <div class="content container-fluid">





                    <body>
                        <div class="container">
                            <h1>Patient Information</h1>
                            <form action="{{ route('submit.time.arrive', $patient->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" value="{{ $patient->name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="doctor">Doctor:</label>
                                    <input type="text" id="doctor" value="{{ $patient->employees }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <input type="text" id="phone" value="{{ $patient->phone }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" value="{{ $patient->email }}" readonly>
                                </div>
                                <div class="form-group time-selection">
                                    <label for="time">Arrive Time:</label>
                                    <input type="time" name="time" id="time" />
                                    <select id="time-period" name="ampm">
                                        <option value="AM">AM</option>
                                        <option value="PM">PM</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-secondary">Submit Arrive Time</button>
                            </form>
                        </div>
                    </body>

</html>


</div>
</div>
</div>
</div>

<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('fdesk/assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('fdesk/assets/js/popper.min.js')}}"></script>
<script src="{{asset('fdesk/assets/js/bootstrap.min.js')}}"></script>

<script src="{{asset('fdesk/assets/js/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('fdesk/assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('fdesk/assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('fdesk/assets/js/chart.js')}}"></script>

<script src="{{asset('fdesk/assets/js/app.js')}}"></script>



</body>

</html>