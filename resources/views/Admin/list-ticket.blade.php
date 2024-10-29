<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Admin Dashboards</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" type="image/x-icon" href="adminz/assets/img/logo.jpg">

        <link rel="stylesheet" href="adminz/assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="adminz/assets/css/font-awesome.min.css">

        <link rel="stylesheet" href="adminz/assets/css/line-awesome.min.css">

        <link rel="stylesheet" href="adminz/assets/plugins/morris/morris.css">

        <link rel="stylesheet" href="adminz/assets/css/style.css">

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



    </head>

    <body>

        <div class="main-wrapper">

            <div class="header">

                <div class="header-left">
                    <a href="{{url('Admin')}}" class="logo">
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
                    <h3>Ticket Management</h3>
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









                            </li>
                            <li>
                                <a href="{{url('Admin')}}"><i class="fa-solid fa-house"></i>
                                    <span>Home</span></a>
                            </li>

                            <li>
                                <a href="{{url('closetickets')}}"><i class="fa-solid fa-closed-captioning"></i>
                                    <span>List Close Ticket</span></a>
                            </li>

                            <li>
                                <a href="{{url('solvedtickets')}}"><i class="fa-solid fa-check-to-slot"></i>
                                    <span>List Solved Ticket</span></a>
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
                                                <span class="d-block">New Tickets</span>
                                            </div>
                                            <div>
                                                <span class="text-success">+0.3%</span>
                                            </div>
                                        </div>
                                        <h3 class="mb-3">{{$numopen}}</h3>
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
                                                <span class="d-block">Solved Tickets</span>
                                            </div>
                                            <div>
                                                <span class="text-success">+1.5%</span>
                                            </div>
                                        </div>
                                        <h3 class="mb-3">{{$numsolved}}</h3>
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
                                                <span class="d-block">Open Tickets</span>
                                            </div>
                                            <div>
                                                <span class="text-danger">-2.8%</span>
                                            </div>
                                        </div>
                                        <h3 class="mb-3">{{$numopen}}</h3>
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
                                                <span class="d-block">Closed Tickets</span>
                                            </div>
                                            <div>
                                                <span class="text-danger">-75%</span>
                                            </div>
                                        </div>
                                        <h3 class="mb-3">{{$numclose}}</h3>
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
                                            <th>Ticket Id</th>
                                            <th>Ticket Subject</th>
                                            <th>Employee Name</th>
                                            <th>Created Date</th>
                                            <th>Role Name</th>
                                            <th>Priority</th>
                                            <th class="text-center">Status</th>
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
                                            <td>{{$tix->rolename}}</td>
                                            <td>
                                                <span class="badge badge-pill badge-danger">{{$tix->priority}}</span>
                                            </td>


                                            <td>
                                                <center>
                                                    <a href="{{ url('/resolves', $tix->id) }}" class="btn btn-primary"
                                                        style="font-size: 10px;">
                                                        View
                                                    </a>



                                                    <a href="{{ route('tickets.close', ['id' => $tix->id]) }}"
                                                        class="btn btn-danger" style="font-size: 10px;"
                                                        onclick="event.preventDefault(); document.getElementById('close-ticket-form-{{ $tix->id }}').submit();">
                                                        Close
                                                    </a>

                                                    <form id="close-ticket-form-{{ $tix->id }}"
                                                        action="{{ route('tickets.close', ['id' => $tix->id]) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                        @method('POST')
                                                    </form>



                                                    <a href="{{ route('tickets.solved', ['id' => $tix->id]) }}"
                                                        class="btn btn-success" style="font-size: 10px;"
                                                        onclick="event.preventDefault(); document.getElementById('solve-ticket-form-{{ $tix->id }}').submit();">
                                                        Solve
                                                    </a>

                                                    <form id="solve-ticket-form-{{ $tix->id }}"
                                                        action="{{ route('tickets.solved', ['id' => $tix->id]) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                        @method('POST')
                                                    </form>

                                                    <a href="{{ url('sendtosad/' . $tix->id) }}"
                                                        class="btn btn-info">Send Super Admin</a>


                                                </center>
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