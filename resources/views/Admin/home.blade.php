<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <title>Admin Dashboards</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" type="image/x-icon" href="adminz/assets/img/logo.jpg">

        <link rel="stylesheet" href="adminz/assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="adminz/assets/css/font-awesome.min.css">

        <link rel="stylesheet" href="adminz/assets/css/line-awesome.min.css">

        <link rel="stylesheet" href="adminz/assets/plugins/morris/morris.css">

        <link rel="stylesheet" href="adminz/assets/css/style.css">



        <script>
        if (window.history && window.history.pushState) {
            window.history.pushState(null, null, window.location.href);
            window.onpopstate = function() {
                window.history.pushState(null, null, window.location.href);
            };
        }
        </script>



    </head>

    <body>

        <div class="main-wrapper">

            <div class="header">

                <div class="header-left">
                    <a href="{{url(url('Admin'))}}" class="logo">
                        <img src="adminz/assets/img/logo.jpg" width="70px" height="70px" alt="">
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
                </div>

                <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

                <div class="page-title-box">
                    <h3>Admin Dashboard</h3>
                </div>

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
                                                    <img alt="" src="adminz/assets/img/profiles/avatar-02.jpg">
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
                                                    <img alt="" src="adminz/assets/img/profiles/avatar-03.jpg">
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
                                                    <img alt="" src="adminz/assets/img/profiles/avatar-06.jpg">
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
                                                    <img alt="" src="adminz/assets/img/profiles/avatar-17.jpg">
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
                                                    <img alt="" src="adminz/assets/img/profiles/avatar-13.jpg">
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
                        <a href="chat">
                            <i class="fa fa-comment-o"></i> <span class="badge badge-pill">0</span>
                        </a>
                        <div class="dropdown-menu notifications">



                        </div>
                    </li>

                    <li class="nav-item dropdown has-arrow main-drop">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <span class="user-img"><img src="adminz/assets/img/profiles/adminimg.jpg" alt="">
                                <span class="status online"></span></span>
                            <span>Admin</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile.html">My Profile</a>
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
                        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
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


















                            <li>
                                <a href="{{url('tickets')}}"><i class="fa-regular fa-rectangle-list"></i> <span>Ticket
                                        Management</span></a>
                            </li>
                            <li>
                                <a href="{{url('/users_manage')}}"><i class="la la-users"></i> <span>User
                                        Management</span></a>
                            </li>


                            <li>
                                <a href="{{url('products-list')}}"><i class="fa-solid fa-screwdriver-wrench"></i>
                                    <span>Inventory</span></a>
                            </li>

                            <li>
                                <a href="{{url('appointment_submitteds')}}"><i class="fa-solid fa-users-line"></i>
                                    <span>Appointment Schedule</span></a>
                            </li>






                        </ul>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="page-wrapper">

                <div class="content container-fluid">

                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <center>
                                    <h1 style="font-size:40px;" class="page-title">Welcome Admin!</h1>

                                </center>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="card dash-widget">
                                <div class="card-body">
                                    <span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
                                    <div class="dash-widget-info">
                                        <h3>{{$totalproduct}}</h3>
                                        <span>Total Medical Supply</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="card dash-widget">
                                <div class="card-body">
                                    <span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
                                    <div class="dash-widget-info">
                                        <h3>{{$totaluser}}</h3>
                                        <span>Total Active User</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="card dash-widget">
                                <div class="card-body">
                                    <span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
                                    <div class="dash-widget-info">
                                        <h3>{{$totalticket}}</h3>
                                        <span>Total Ticket</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="card dash-widget">
                                <div class="card-body">
                                    <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                                    <div class="dash-widget-info">
                                        <h3>{{$alldoctor}}</h3>
                                        <span>Total Doctor</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title">Total Revenue</h3>
                                            <div id="bar-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title">Sales Overview</h3>
                                            <div id="line-charts"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                </div>

            </div>

        </div>



        @if (session('latestUpdate'))
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const latestUpdate = @json(session('latestUpdate'));
            Swal.fire({
                title: 'System Update Available!',
                icon: 'warning',
                html: `
                
            <div style="font-family: Arial, sans-serif; background-color: #f4f4f4; border-radius: 5px; padding: 20px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                <div style="background: #007bff; color: white; padding: 10px; border-radius: 5px 5px 0 0;">
                    <h4 style="margin: 0;">System Updates</h4>
                </div>
                <div style="padding: 10px;">
                    <h5 style="color: #333; margin: 10px 0;">${latestUpdate.descriptions}</h5>
                    <h6 style="color: #6c757d; margin: 5px 0;">Date: ${latestUpdate.maintenance_date}</h6>
                    <h6 style="color: #333; margin: 5px 0;">Bugs: ${latestUpdate.bugs}</h6>
                    <h6 style="color: #333; margin: 5px 0;">Effect: ${latestUpdate.effect}</h6>
                    <a href="#">
                        <button style="background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-size: 16px;">More Info</button>
                    </a>
                </div>
            </div>
        `,
                showCloseButton: true,
                focusConfirm: false
            });
        });
        </script>
        @php
        session()->forget('latestUpdate'); // Clear the latestUpdate from session
        @endphp
        @endif



        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="assets/js/jquery-3.5.1.min.js"></script>

        <script src="adminz/assets/js/popper.min.js"></script>
        <script src="adminz/assets/js/bootstrap.min.js"></script>

        <script src="adminz/assets/js/jquery.slimscroll.min.js"></script>

        <script src="adminz/assets/plugins/morris/morris.min.js"></script>
        <script src="adminz/assets/plugins/raphael/raphael.min.js"></script>
        <script src="adminz/assets/js/chart.js"></script>

        <script src="adminz/assets/js/app.js"></script>
    </body>

</html>