<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.min.js"></script>
        <title>Comcare Medical</title>
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/themify-icons.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/metisMenu.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/slicknav.min.css">
        <!-- amchart css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
            media="all" />
        <!-- others css -->
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/typography.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/default-css.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/styles.css">
        <link rel="stylesheet" href="main_alls/everythingzz/assets/css/responsive.css">
        <!-- modernizr css -->
        <script src="main_alls/everythingzz/assets/js/vendor/modernizr-2.8.3.min.js"></script>


    </head>
    <style>
    /* General layout */
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f5f9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    /* Main chat layout */
    .chat-wrapper {

        margin-top: 100px;
        width: 101%;
        height: 20%;
        display: flex;
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    /* Sidebar with chat title or user profile */
    .chat-sidebar {
        width: 30%;
        border: 1px solid #ccc;
        padding: 20px;
        background: #0ed7b6;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .chat-sidebar h2 {
        font-size: 24px;
        color: #333;
        /* Darker color for the header */
        margin-bottom: 15px;
        /* Space below the header */
        text-align: center;
    }

    .chat-sidebar p {
        justify-content: center;
        text-align: center;
        margin: 15px 0;
        /* Space above and below the paragraph */
    }

    .chat-sidebar ul {
        list-style-type: none;
        /* Remove default bullet points */
        padding: 0;
        /* Remove padding */
    }

    .chat-sidebar li {
        border: 3px solid black;
        /* Border around each li */
        margin-bottom: 10px;
        /* Space between each li */
        padding: 10px;
        /* Padding inside each li */
        border-radius: 5px;
        /* Optional: rounded corners */
        background-color: #fff;
        /* Background color for li */
        transition: transform 0.3s ease;
        /* Smooth transition for transform */
        box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
    }

    .chat-sidebar li:hover {
        transform: scale(1.05);
        /* Zoom in effect on hover */
    }

    /* Chat main area */
    .chat-main {
        width: 70%;
        display: flex;
        flex-direction: column;
        background: #0ed7b6;
        padding: 20px;
        position: relative;
    }

    /* Chat messages area */
    #messages {
        flex-grow: 1;
        overflow-y: auto;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    #messages p {
        margin: 10px 0;
        padding: 12px;
        border-radius: 10px;
        max-width: 60%;
        clear: both;
        position: relative;
    }

    /* Admin messages (left side, gray) */
    #messages p.admin-message {
        background-color: #e0e0e0;
        color: black;
        align-self: flex-start;
        float: left;
    }

    /* User messages (right side, blue) */
    #messages p.user-message {
        background-color: #007bff;
        color: white;
        align-self: flex-end;
        float: right;
    }

    /* Input area */
    .chat-input {
        display: flex;
        border-radius: 10px;
        overflow: hidden;
        background-color: white;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    #message {
        flex-grow: 1;
        padding: 20px;
        border: none;
        font-size: 16px;
    }

    button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 15px 30px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #0056b3;
    }

    /* Scrollbar styling */
    #messages::-webkit-scrollbar {
        width: 10px;
    }

    #messages::-webkit-scrollbar-thumb {
        background-color: #007bff;
        border-radius: 10px;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        .chat-wrapper {
            flex-direction: column;
            /* Stack sidebar and chat main vertically */
            height: auto;
            /* Allow height to adjust based on content */
        }

        .chat-sidebar {
            width: 100%;
            /* Full width on smaller screens */
            padding: 10px;
            /* Adjust padding */
        }

        .chat-main {
            width: 100%;
            /* Full width on smaller screens */
            padding: 10px;
            /* Adjust padding */
        }

        .chat-sidebar h2 {
            font-size: 20px;
            /* Smaller font size */
        }

        button {
            padding: 10px 20px;
            /* Adjust button padding */
        }
    }

    @media (max-width: 480px) {
        .chat-sidebar h2 {
            font-size: 18px;
            /* Even smaller font size for very small screens */
        }

        #message {
            font-size: 14px;
            /* Adjust input font size */
        }

        button {
            font-size: 14px;
            /* Adjust button font size */
        }
    }

    .messages-container {
        height: 400px;
        /* Adjust this height as needed */
        overflow-y: auto;
        /* Enable vertical scrolling */
        border: 1px solid #ccc;
        /* Optional: add a border */
        padding: 10px;
        /* Optional: add some padding */
        background-color: #f9f9f9;
        /* Optional: set a background color */
    }
    </style>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- preloader area start -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- preloader area end -->
        <!-- page container area start -->
        <div class="page-container">
            <!-- sidebar menu area start -->
            <div class="sidebar-menu">
                <div class="sidebar-header">
                    <div class="logo">
                        @auth
                        @if(Auth::user()->role_name == 'Guests')
                        <a href="{{url('Guests')}}"><img src="main_alls/everythingzz/assets/images/icon/logo2.png"
                                alt="logo"></a>

                        @elseif(Auth::user()->role_name == 'Normal User')

                        <a href="{{url('User')}}"><img src="main_alls/everythingzz/assets/images/icon/logo2.png"
                                alt="logo"></a>

                        @endif

                        @endauth
                    </div>
                </div>
                <div class="main-menu">
                    <div class="menu-inner">
                        <nav>
                            <ul class="metismenu" id="menu">


                                @auth
                                @if(Auth::user()->role_name == 'Guests')


                                <li><a href="{{ route('guest_view') }}"><i class="fa fa-user"></i> <span>My
                                            Profile</span></a></li>

                                </li>


                                @elseif(Auth::user()->role_name == 'Normal User')


                                <li><a href="{{url('myappointment')}}"><i class="fa fa-briefcase"></i> <span>View
                                            Appointment</span></a>
                                </li>
                                <li><a href="{{ url('view_normal_prof') }}"><i class="fa fa-user"></i> <span>My
                                            Profile</span></a></li>
                                <li><a href="{{url('chatss')}}"><i class="fa fa-comments"></i> <span>Chat with
                                            Front-desk</span></a>
                                </li>

                                <li><a href="{{url('create_appointmentsss')}}"><i class="fa fa-briefcase"></i>
                                        <span>Create
                                            An Appointment</span></a>
                                </li>

                                <li><a href="{{url('mydoctor')}}"><i class="fa fa-comments"></i> <span>Chat with my
                                            Doctor</span></a>
                                </li>




                                @endif

                                @endauth

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- sidebar menu area end -->
            <!-- main content area start -->
            <div class=" main-content">
                <!-- header area start -->
                <div class="header-area">
                    <div class="row align-items-center">
                        <!-- nav and search button -->
                        <div class="col-md-6 col-sm-8 clearfix">
                            <div class="nav-btn pull-left">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                        </div>
                        <!-- profile info & task notification -->

                    </div>
                </div>
                <!-- header area end -->
                <!-- page title area start -->
                <div class="page-title-area">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="breadcrumbs-area clearfix">



                                <ul class="breadcrumbs pull-left">
                                    @auth
                                    @if(Auth::user()->role_name == 'Guests')

                                    <li><a href="{{url('Guests')}}">Home</a></li>
                                    <li><span>New Account</span></li>

                                    @elseif(Auth::user()->role_name == 'Normal User')
                                    <li><a href="{{url('User')}}">Home</a></li>
                                    <li><span>Patient Account</span></li>
                                    @endif

                                    @endauth

                                </ul>
                            </div>

                        </div>
                        <div class="col-sm-6 clearfix">
                            <div class="user-profile pull-right">

                                <img class="avatar user-thumb"
                                    src="main_alls/everythingzz/assets/images/author/avatar.png">
                                @auth
                                @if(Auth::user()->role_name !== 'Normal User')
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                    Unverified|{{ Auth::user()->name }}<i class="fa fa-angle-down"></i>
                                </h4>
                                @else
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                    Patient| {{ Auth::user()->name }}
                                    <i class="fa fa-angle-down"></i>
                                </h4>
                                @endif

                                @endauth

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Message</a>
                                    <a class="dropdown-item" href="{{ route('guest_view') }}">View Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Log
                                        Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page title area end -->















                <div class="main-content-inner">


                    <div class="chat-wrapper">
                        <div class="chat-sidebar">
                            <h2>Welcome New User</h2>
                            <p><strong>Thank you for reaching out. Feel free to ask any questions about</strong></p>
                            <ul>
                                <li class="main-det">Hospital Services (e.g., outpatient, inpatient, emergency, etc.)
                                </li>
                                <li class="other1">Appointments and Scheduling</li>
                                <li class="other2">Facilities and Departments</li>
                                <li class="other3">General Inquiries</li>

                            </ul>

                        </div>

                        <div class="chat-main">
                            <div id="messages" class="messages-container"></div>
                            <div class="chat-input">
                                <textarea id="message" placeholder="Type your message..."></textarea>
                                <button onclick="sendMessage()">Send</button>
                            </div>
                        </div>
                    </div>



                </div>



            </div>






        </div>
        <!-- main content area end -->
        <!-- footer area start-->

        <!-- footer area end-->
        </div>
        <!-- page container area end -->
        <!-- offset area start -->
        <div class="offset-area">
            <div class="offset-close"><i class="ti-close"></i></div>
            <ul class="nav offset-menu-tab">
                <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
                <li><a data-toggle="tab" href="#settings">Settings</a></li>
            </ul>
            <div class="offset-content tab-content">
                <div id="activity" class="tab-pane fade in show active">
                    <div class="recent-activity">
                        <div class="timeline-task">
                            <div class="icon bg1">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Added</h4>
                                <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="tm-title">
                                <h4>You missed you Password!</h4>
                                <span class="time"><i class="ti-time"></i>09:20 Am</span>
                            </div>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="fa fa-bomb"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Member waiting for you Attention</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="ti-signal"></i>
                            </div>
                            <div class="tm-title">
                                <h4>You Added Kaji Patha few minutes ago</h4>
                                <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg1">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Ratul Hamba sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Hello sir , where are you, i am egerly waiting for you.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="fa fa-bomb"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="ti-signal"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="settings" class="tab-pane fade">
                    <div class="offset-settings">
                        <h4>General Settings</h4>
                        <div class="settings-list">
                            <div class="s-settings">
                                <div class="s-sw-title">
                                    <h5>Notifications</h5>
                                    <div class="s-swtich">
                                        <input type="checkbox" id="switch1" />
                                        <label for="switch1">Toggle</label>
                                    </div>
                                </div>
                                <p>Keep it 'On' When you want to get all the notification.</p>
                            </div>
                            <div class="s-settings">
                                <div class="s-sw-title">
                                    <h5>Show recent activity</h5>
                                    <div class="s-swtich">
                                        <input type="checkbox" id="switch2" />
                                        <label for="switch2">Toggle</label>
                                    </div>
                                </div>
                                <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                            </div>
                            <div class="s-settings">
                                <div class="s-sw-title">
                                    <h5>Show your emails</h5>
                                    <div class="s-swtich">
                                        <input type="checkbox" id="switch3" />
                                        <label for="switch3">Toggle</label>
                                    </div>
                                </div>
                                <p>Show email so that easily find you.</p>
                            </div>
                            <div class="s-settings">
                                <div class="s-sw-title">
                                    <h5>Show Task statistics</h5>
                                    <div class="s-swtich">
                                        <input type="checkbox" id="switch4" />
                                        <label for="switch4">Toggle</label>
                                    </div>
                                </div>
                                <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                            </div>
                            <div class="s-settings">
                                <div class="s-sw-title">
                                    <h5>Notifications</h5>
                                    <div class="s-swtich">
                                        <input type="checkbox" id="switch5" />
                                        <label for="switch5">Toggle</label>
                                    </div>
                                </div>
                                <p>Use checkboxes when looking for yes or no answers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <script>
        Pusher.logToConsole = true;


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        const pusher = new Pusher('{{ env("PUSHER_APP_KEY") }}', {
            cluster: '{{ env("PUSHER_APP_CLUSTER") }}',
            encrypted: true
        });

        const channel = pusher.subscribe('chat.{{ $chatSession->id }}');

        channel.bind('chat-message', function(data) {
            if (data.message && typeof data.message.from_admin !== 'undefined') {
                const safeMessage = DOMPurify.sanitize(data.message.message);
                const messageClass = data.message.from_admin ? 'admin-message' : 'user-message';
                $('#messages').append('<p class="' + messageClass + '">' + safeMessage + '</p>');
                $('#messages').scrollTop($('#messages')[0].scrollHeight);
            }
        });

        function sendMessage() {
            const message = $('#message').val();
            if (message.trim() === '') {
                alert('Please enter a message.');
                return;
            }

            $.ajax({
                type: 'POST',
                url: '/user/chat/{{ $chatSession->id }}/send',
                data: {
                    message: message.replace(/</g, "&lt;").replace(/>/g, "&gt;") // Server-side escaping
                },
                success: function() {
                    $('#message').val(''); // Clear the input
                },
                error: function(error) {
                    console.error(error);
                }
            });
        }

        $(document).ready(function() {
            $.get('/user/chat/{{ $chatSession->id }}/messages', function(data) {
                data.messages.forEach(function(message) {
                    const safeMessage = DOMPurify.sanitize(message.message);
                    const messageClass = message.from_admin ? 'admin-message' : 'user-message';
                    $('#messages').append('<p class="' + messageClass + '">' + safeMessage +
                        '</p>');
                });
                $('#messages').scrollTop($('#messages')[0].scrollHeight);
            });
        });
        </script>
        <!-- offset area end -->
        <!-- jquery latest version -->
        <!-- bootstrap 4 js -->
        <script src="main_alls/everythingzz/assets/js/popper.min.js"></script>
        <script src="main_alls/everythingzz/assets/js/bootstrap.min.js"></script>
        <script src="main_alls/everythingzz/assets/js/owl.carousel.min.js"></script>
        <script src="main_alls/everythingzz/assets/js/metisMenu.min.js"></script>

        <!-- start chart js -->
        <!-- start highcharts js -->
        <!-- start zingchart js -->

        <!-- all line chart activation -->

        <script src="main_alls/everythingzz/assets/js/plugins.js"></script>
        <script src="main_alls/everythingzz/assets/js/scripts.js"></script>
    </body>

</html>