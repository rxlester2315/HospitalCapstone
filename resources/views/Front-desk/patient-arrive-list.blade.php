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


        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
        <link rel="stylesheet" href="fdesk/assets/css/bootstrap.min.css" />

        <link rel="stylesheet" href="fdesk/assets/css/font-awesome.min.css" />

        <link rel="stylesheet" href="fdesk/assets/css/line-awesome.min.css" />

        <link rel="stylesheet" href="fdesk/assets/plugins/morris/morris.css" />

        <link rel="stylesheet" href="fdesk/assets/css/style.css" />

        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.min.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->

        <style>
        .clock {
            font-size: 48px;
            color: white;
        }
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
                    <h3>Arrive Patients</h3>
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

                    <section class="section">
                        <div class="col-md-3">

                            <div class="stats-info">
                                <h6>Verification Request</h6>
                                <h4>{{$allapprovetotal}}</h4>
                            </div>

                            <div class="mb-3">
                                <label for="search">
                                    <h3>Search Patient</h3>
                                </label>
                                <input type="text" id="searchInput" class="form-control short-search"
                                    placeholder="Search by name" />
                            </div>

                        </div>
                        <div class="row" id="table-striped">

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Patient Arrive</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">

                                        </div>
                                        <!-- table striped -->
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0 datatable">
                                                <thead>
                                                    <tr>
                                                        <th>NAME</th>
                                                        <th>CONTACT</th>
                                                        <th>DATE</th>
                                                        <th>DOCTOR</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($allapprove as $approve)
                                                    <tr>
                                                        <td>{{$approve->name}}</td>
                                                        <td>{{$approve->phone}}</td>
                                                        <td>{{$approve->date}}</td>
                                                        <td>{{$approve->employees}}</td>

                                                        <td>
                                                            <a href="{{url('arrive_approves/'. $approve->id)}}"
                                                                class="btn btn-success">Arrive</a>
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
                    </section>
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