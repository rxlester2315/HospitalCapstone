<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Add Healthcare Staff</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="hrs/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="hrs/assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="hrs/assets/css/line-awesome.min.css">

    <link rel="stylesheet" href="hrs/assets/plugins/morris/morris.css">

    <link rel="stylesheet" href="hrs/assets/css/style.css">

    <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->


</head>

<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="{{url('HR')}}" class="logo">
                    <img src="hrs/assets/img/logo.png" width="40" height="40" alt="">
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

                <div class="container" style="  padding-top: 100px ;
">
                    @if(session()->has('message'))
                    <div class="alert alert-success">


                        <button type=" button" class="close" data-dismiss="alert">
                            ✔</button>
                        {{session()->get('message')}}


                    </div>









                    @endif
                </div>

                <div class="page-title-box" style="  margin-left: 600px;   padding-top: 50px; ">
                    <h1>ADD DOCTORS</h1>


                    <form action="{{url('/upload_doctor')}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div>
                            <label>
                                Doctor Name:
                            </label>
                            <input style="color:black;" type="text" name="name" placeholder="Enter Doctor Name"
                                required="">
                        </div>


                        <div>
                            <label>Doctor Specialty:</label>
                            <select name="specialty" style="color:black;">
                                <option value="">--Select Doctor Specialty--</option>
                                <option value="Cardiology">Cardiology</option>
                                <option value="General Surgery">General Surgery</option>
                                <option value="Neurology">Neurology</option>
                                <option value="Ophthalmic Surgery">Ophthalmic Surgery</option>
                                <option value="Orthopaedic Surgery">Orthopaedic Surgery</option>
                            </select>
                        </div>

                        <div>
                            <label>
                                Phone Number:
                            </label>
                            <input style="color:black;" type="text" name="number" placeholder="Contact Number"
                                required="">
                        </div>

                        <div>
                            <label>
                                Room Number:
                            </label>
                            <input style="color:black;" type="text" name="room" placeholder="Room Number" required="">
                        </div>

                        <div>
                            <label>
                                Department:
                            </label>
                            <input style="color:black;" type="text" name="dep" placeholder="Enter Department"
                                required="">
                        </div>

                        <div>
                            <label>
                                Doctor Image:
                                <input style="padding-left: 150px;" type="file" name="file" required="">
                        </div>


                        <div>
                            <label>

                                <input type="submit" class="btn btn-success">

                        </div>

                    </form>

                </div>


            </div>



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


                <li class="nav-item dropdown has-arrow flag-nav">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        <img src="hrs/assets/img/flags/us.png" alt="" height="20"> <span>English</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="hrs/assets/img/flags/us.png" alt="" height="16"> English
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="hrs/assets/img/flags/fr.png" alt="" height="16"> French
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="hrs/assets/img/flags/es.png" alt="" height="16"> Spanish
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="hrs/assets/img/flags/de.png" alt="" height="16"> German
                        </a>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
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
                                                <img alt="" src="hrs/assets/img/profiles/avatar-17.jpg">
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
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Messages</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">
                                                    <img alt="" src="hrs/assets/img/profiles/avatar-09.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Richard Miles </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet,
                                                    consectetur
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
                                                    <img alt="" src="hrs/assets/img/profiles/avatar-02.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">John Doe</span>
                                                <span class="message-time">6 Mar</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet,
                                                    consectetur
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
                                                    <img alt="" src="hrs/assets/img/profiles/avatar-03.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Tarah Shropshire </span>
                                                <span class="message-time">5 Mar</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet,
                                                    consectetur
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
                                                    <img alt="" src="hrs/assets/img/profiles/avatar-05.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Mike Litorus</span>
                                                <span class="message-time">3 Mar</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet,
                                                    consectetur
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
                                                    <img alt="" src="hrs/assets/img/profiles/avatar-08.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Catherine Manseau </span>
                                                <span class="message-time">27 Feb</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet,
                                                    consectetur
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
                        <span class="user-img"><img src="hrs/assets/img/profiles/avatar-21.jpg" alt="">
                            <span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
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
                            <ul style="display: none;">
                                <li><a class="active" href="index.html">Admin Dashboard</a></li>
                                <li><a href="employee-dashboard.html">Employee Dashboard</a></li>
                            </ul>
                        </li>
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
                        </li>
                        <li class="menu-title">
                            <span>Employees</span>
                        </li>
                        <li class="submenu">
                            <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="employees.html">All Employees</a></li>
                                <li><a href="holidays.html">Holidays</a></li>
                                <li><a href="leaves.html">Leaves (Admin) <span
                                            class="badge badge-pill bg-primary float-right">1</span></a></li>


                                <li><a href="leaves-employee.html">Leaves (Employee)</a></li>


                                <li><a href="{{url('add_doctor_view')}}">Add Doctors</a></li>
                                <li><a href="attendance.html">Attendance (Admin)</a></li>
                                <li><a href="attendance-employee.html">Attendance (Employee)</a></li>
                                <li><a href="departments.html">Departments</a></li>
                                <li><a href="designations.html">Designations</a></li>
                                <li><a href="timesheet.html">Timesheet</a></li>
                                <li><a href="shift-scheduling.html">Shift & Schedule</a></li>
                                <li><a href="overtime.html">Overtime</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="clients.html"><i class="la la-users"></i> <span>Clients</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="projects.html">Projects</a></li>
                                <li><a href="tasks.html">Tasks</a></li>
                                <li><a href="task-board.html">Task Board</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="leads.html"><i class="la la-user-secret"></i> <span>Leads</span></a>
                        </li>
                        <li>
                            <a href="tickets.html"><i class="la la-ticket"></i> <span>Tickets</span></a>
                        </li>
                        <li class="menu-title">
                            <span>HR</span>
                        </li>
                        <li class="submenu">
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
                        </li>


                        <li>
                            <a href="policies.html"><i class="la la-file-pdf-o"></i> <span>Policies</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="expense-reports.html"> Expense Report </a></li>
                                <li><a href="invoice-reports.html"> Invoice Report </a></li>
                                <li><a href="payments-reports.html"> Payments Report </a></li>
                                <li><a href="project-reports.html"> Project Report </a></li>
                                <li><a href="task-reports.html"> Task Report </a></li>
                                <li><a href="user-reports.html"> User Report </a></li>
                                <li><a href="employee-reports.html"> Employee Report </a></li>
                                <li><a href="payslip-reports.html"> Payslip Report </a></li>
                                <li><a href="attendance-reports.html"> Attendance Report </a></li>
                                <li><a href="leave-reports.html"> Leave Report </a></li>
                                <li><a href="daily-reports.html"> Daily Report </a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Performance</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-graduation-cap"></i> <span> Performance </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="performance-indicator.html"> Performance Indicator </a></li>
                                <li><a href="performance.html"> Performance Review </a></li>
                                <li><a href="performance-appraisal.html"> Performance Appraisal </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="goal-tracking.html"> Goal List </a></li>
                                <li><a href="goal-type.html"> Goal Type </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-edit"></i> <span> Training </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="training.html"> Training List </a></li>
                                <li><a href="trainers.html"> Trainers</a></li>
                                <li><a href="training-type.html"> Training Type </a></li>
                            </ul>
                        </li>
                        <li><a href="promotion.html"><i class="la la-bullhorn"></i> <span>Promotion</span></a>
                        </li>
                        <li><a href="resignation.html"><i class="la la-external-link-square"></i>
                                <span>Resignation</span></a></li>
                        <li><a href="termination.html"><i class="la la-times-circle"></i>
                                <span>Termination</span></a>
                        </li>
                        <li class="menu-title">
                            <span>Administration</span>
                        </li>
                        <li>
                            <a href="hrs/assets.html"><i class="la la-object-ungroup"></i>
                                <span>Assets</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-briefcase"></i> <span> Jobs </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="user-dashboard.html"> User Dasboard </a></li>
                                <li><a href="jobs-dashboard.html"> Jobs Dasboard </a></li>
                                <li><a href="jobs.html"> Manage Jobs </a></li>
                                <li><a href="manage-resumes.html"> Manage Resumes </a></li>
                                <li><a href="shortlist-candidates.html"> Shortlist Candidates </a></li>
                                <li><a href="interview-questions.html"> Interview Questions </a></li>
                                <li><a href="offer_approvals.html"> Offer Approvals </a></li>
                                <li><a href="experiance-level.html"> Experience Level </a></li>
                                <li><a href="candidates.html"> Candidates List </a></li>
                                <li><a href="schedule-timing.html"> Schedule timing </a></li>
                                <li><a href="apptitude-result.html"> Aptitude Results </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="knowledgebase.html"><i class="la la-question"></i>
                                <span>Knowledgebase</span></a>
                        </li>
                        <li>
                            <a href="activities.html"><i class="la la-bell"></i> <span>Activities</span></a>
                        </li>
                        <li>
                            <a href="users.html"><i class="la la-user-plus"></i> <span>Users</span></a>
                        </li>
                        <li>
                            <a href="settings.html"><i class="la la-cog"></i> <span>Settings</span></a>
                        </li>
                        <li class="menu-title">
                            <span>Pages</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-user"></i> <span> Profile </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="profile.html"> Employee Profile </a></li>
                                <li><a href="client-profile.html"> Client Profile </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-key"></i> <span> Authentication </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="login.html"> Login </a></li>
                                <li><a href="register.html"> Register </a></li>
                                <li><a href="forgot-password.html"> Forgot Password </a></li>
                                <li><a href="otp.html"> OTP </a></li>
                                <li><a href="lock-screen.html"> Lock Screen </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="error-404.html">404 Error </a></li>
                                <li><a href="error-500.html">500 Error </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-hand-o-up"></i> <span> Subscriptions </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="subscriptions.html"> Subscriptions (Admin) </a></li>
                                <li><a href="subscriptions-company.html"> Subscriptions (Company) </a></li>
                                <li><a href="subscribed-companies.html"> Subscribed Companies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-columns"></i> <span> Pages </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="search.html"> Search </a></li>
                                <li><a href="faq.html"> FAQ </a></li>
                                <li><a href="terms.html"> Terms </a></li>
                                <li><a href="privacy-policy.html"> Privacy Policy </a></li>
                                <li><a href="blank-page.html"> Blank Page </a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>UI Interface</span>
                        </li>
                        <li>
                            <a href="components.html"><i class="la la-puzzle-piece"></i>
                                <span>Components</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-object-group"></i> <span> Forms </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                                <li><a href="form-input-groups.html">Input Groups </a></li>
                                <li><a href="form-horizontal.html">Horizontal Form </a></li>
                                <li><a href="form-vertical.html"> Vertical Form </a></li>
                                <li><a href="form-mask.html"> Form Mask </a></li>
                                <li><a href="form-validation.html"> Form Validation </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-table"></i> <span> Tables </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="tables-basic.html">Basic Tables </a></li>
                                <li><a href="data-tables.html">Data Table </a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Extras</span>
                        </li>
                        <li>
                            <a href="#"><i class="la la-file-text"></i> <span>Documentation</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="la la-info"></i> <span>Change Log</span>
                                <span class="badge badge-primary ml-auto">v3.4</span></a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="la la-share-alt"></i> <span>Multi
                                    Level</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Level 1</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span> Level 2</span> <span
                                                    class="menu-arrow"></span></a>
                                            <ul style="display: none;">
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"> <span>Level 1</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>




    </div>


    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script>
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