<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>User Management</title>

        <link rel="shortcut icon" type="image/x-icon" href="adminz/assets/img/logo.jpg')}}">

        <link rel="stylesheet" href="{{asset('adminz/assets/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{asset('adminz/assets/css/font-awesome.min.css')}}">

        <link rel="stylesheet" href="{{asset('adminz/assets/css/line-awesome.min.css')}}">

        <link rel="stylesheet" href="{{asset('adminz/assets/css/dataTables.bootstrap4.min.css')}}">

        <link rel="stylesheet" href="{{asset('adminz/assets/css/style.css')}}">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
        <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>

    <body>

        <div class="main-wrapper">

            <div class="header">

                <div class="header-left">
                    <a href="{{ url('Admin') }}" class="logo">
                        <img src="{{asset('adminz/assets/img/logo.jpg')}}" width="70px" height="60px" alt="">
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
                                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt=""
                                                        src="{{asset('adminz/assets/img/profiles/avatar-02.jpg')}}">
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
                                                        src="{{asset('adminz/assets/img/profiles/avatar-03.jpg')}}">
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
                                                        src="{{asset('adminz/assets/img/profiles/avatar-06.jpg')}}">
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
                                                    <img alt=""
                                                        src="{{asset('adminz/assets/img/profiles/avatar-17.jpg')}}">
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
                                                    <img alt=""
                                                        src="{{asset('adminz/assets/img/profiles/avatar-13.jpg')}}">
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
                                                        <img alt=""
                                                            src="{{asset('adminz/assets/img/profiles/avatar-09.jpg')}}">
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
                                                        <img alt=""
                                                            src="{{asset('adminz/assets/img/profiles/avatar-02.jpg')}}">
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
                                                        <img alt=""
                                                            src="{{asset('adminz/assets/img/profiles/avatar-03.jpg')}}">
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
                                                        <img alt=""
                                                            src="{{asset('adminz/assets/img/profiles/avatar-05.jpg')}}">
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
                                                        <img alt=""
                                                            src="{{asset('adminz/assets/img/profiles/avatar-08.jpg')}}">
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
                            <span class="user-img"><img src="{{asset('adminz/assets/img/profiles/adminimg.jpg')}}"
                                    alt="">
                                <span class="status online"></span></span>
                            <span>Admin</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile.html">My Profile</a>
                            <a class="dropdown-item" href="settings.html">Settings</a>
                            <a class="dropdown-item" href="login.html">Logout</a>
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













                            <li>
                                <a href="{{url('/users_manage')}}"><i class="la la-users"></i> <span>User
                                        Login</span></a>
                            </li>

                            <li>
                                <a href="{{url('/users_manage')}}"><i class="la la-users"></i> <span>Archived
                                        User</span></a>
                            </li>

                            <li>
                                <a href="{{url('/users_manage')}}"><i class="la la-users"></i> <span>Account Reset
                                        Password</span></a>
                            </li>









                        </ul>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>




            <div class="page-wrapper" style="min-height: 667px;">
                <div class="content container-fluid">


                    <div class="row">
                        <div class="col-xl-6 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Email Send Password</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('password.send.email', $users->id) }}" method="post">
                                        @csrf

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Full Name</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" value="{{ $users->name }}"
                                                    readonly />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Email</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" value="{{ $users->email }}"
                                                    readonly />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Status</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" value="{{ $users->status }}"
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

        @if(Session::has('message'))
        <script>
        swal("Message", "{{Session::get('message')}}", 'success', {
            button: true,
            button: "Okay",
            timer: 3000,


        });
        </script>
        @endif

        <script src="{{asset('adminz/assets/js/jquery-3.5.1.min.js')}}"></script>

        <script src="{{asset('adminz/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('adminz/assets/js/bootstrap.min.js')}}"></script>

        <script src="{{asset('adminz/assets/js/jquery.slimscroll.min.js')}}"></script>

        <script src="{{asset('adminz/assets/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('adminz/assets/js/dataTables.bootstrap4.min.js')}}"></script>

        <script src="{{asset('adminz/assets/js/app.js')}}"></script>

        <div class="sidebar-overlay"></div>
    </body>

</html>