<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <link rel="shortcut icon" type="image/x-icon" href="{{asset('fdesk/assets/img/logo.jpg')}}" />

        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <link rel="stylesheet" href="{{ asset('hrs/assets/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{ asset('hrs/assets/css/font-awesome.min.css')}}">

        <link rel="stylesheet" href="{{ asset('hrs/assets/css/line-awesome.min.css')}}">

        <link rel="stylesheet" href="{{ asset('hrs/assets/plugins/morris/morris.css')}}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
        <link rel="stylesheet" href="{{ asset('hrs/assets/css/style.css')}}">


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

        label {
            color: white;
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
                        <img src="{{ asset('hrs/assets/img/logo.jpg')}}" width="70" height="70" alt="">
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


                    <li class="nav-item dropdown has-arrow flag-nav">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                            <img src="{{ asset('hrs/assets/img/flags/us.png')}}" alt="" height="20">
                            <span>English</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ asset('hrs/assets/img/flags/us.png" alt="" height="16')}}"> English
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ asset('hrs/assets/img/flags/fr.png" alt="" height="16')}}"> French
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ asset('hrs/assets/img/flags/es.png" alt="" height="16')}}"> Spanish
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ asset('hrs/assets/img/flags/de.png" alt="" height="16')}}"> German
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
                                                    <img alt=""
                                                        src="{{ asset('hrs/assets/img/profiles/avatar-02.jpg')}}">
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
                                                        src="{{ asset('hrs/assets/img/profiles/avatar-03.jpg')}}">
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
                                                        src="{{ asset('hrs/assets/img/profiles/avatar-06.jpg')}}">
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
                                                        src="{{ asset('hrs/assets/img/profiles/avatar-17.jpg')}}">
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
                                                        src="{{ asset('hrs/assets/img/profiles/avatar-13.jpg')}}">
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
                                    <li><a href="departments.html">Departments</a></li>
                                    <li><a href="timesheet.html">Timesheet</a></li>
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
                                    <li><a href="{{url('products/viewlist')}}" target="_blank">View List</a></li>
                                    <li><a href="{{url('Hr/products/create')}}" target="_blank">Create</a></li>
                                    <li><a href="{{url('products')}}" target="_blank">Edit</a></li>
                                </ul>
                            </li>



                    </div>
                </div>
            </div>


            <div class="page-wrapper">
                <div class="content container-fluid">

                    <div class="container">
                        <div class="row justify-content-center mt-4">



                        </div>
                        <div class="row d-flex justify-content-center">
                            @if (Session::has('success'))
                            <div class="col-md-10 mt-4">
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            </div>
                            @endif
                            <div class="col-md-10">
                                <div class="card borde-0 shadow-lg my-4">
                                    <div class="card-header bg-dark">
                                        <h3 class="text-white">Products</h3>
                                    </div>
                                    <div class="card-body">
                                        <table class="table">
                                            <tr>
                                                <th style="color:white;">ID</th>
                                                <th style="color:white;">Product Name</th>
                                                <th style="color:white;">Status</th>
                                                <th style="color:white;">Unit Orders</th>
                                                <th style="color:white;">Unit Stock</th>
                                                <th style="color:white;">Created at</th>
                                                <th style="color:white;">Action</th>
                                            </tr>
                                            @if ($products->isNotEmpty())
                                            @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>
                                                    @if ($product->imagez != "")
                                                    <img width="50" src="{{('uploads/products/'.$product->imagez) }}"
                                                        alt="">
                                                    @endif
                                                </td>
                                                <td style="color:white;">{{ $product->ProductName }}</td>
                                                <td style="color:white;">{{ $product->Status }}</td>
                                                <td style="color:white;">{{ $product->UnitOrders }}</td>
                                                <td style="color:white;">{{ $product->UnitStock }}</td>

                                                <td style="color:white;">
                                                    {{ \Carbon\Carbon::parse($product->created_at)->format('d M, Y') }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('Hr.products.edit',$product->id) }}"
                                                        class="btn btn-dark">Edit</a>
                                                    <a onclick="confirmation(event)" class="btn btn-danger"
                                                        href="{{url('delete',$product->id)}}">Delete</a>




                                                </td>

                                            </tr>
                                            @endforeach

                                            @endif

                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>




            </div>

        </div>
        <script type="text/javascript">
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);

            swal({
                    title: "Are you sure to delete this?",
                    text: "You will not be able to recover this!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,


                })
                .then((willCancel) => {
                    if (willCancel) {
                        window.location.href = urlToRedirect;
                    }
                });

        }
        </script>

        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
        </script>
        <script src="{{ asset('hrs/assets/js/jquery-3.5.1.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script src="{{ asset('hrs/assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('hrs/assets/js/bootstrap.min.js')}}"></script>

        <script src="{{ asset('hrs/assets/js/jquery.slimscroll.min.js')}}"></script>

        <script src="{{ asset('hrs/assets/plugins/morris/morris.min.js')}}"></script>
        <script src="{{ asset('hrs/assets/plugins/raphael/raphael.min.js')}}"></script>
        <script src="{{ asset('hrs/assets/js/chart.js')}}"></script>

        <script src="{{ asset('hrs/assets/js/app.js')}}"></script>
    </body>

</html>