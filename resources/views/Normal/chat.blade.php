<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Comcare Medical</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/icon/favicon.ico')}}">
        <link rel="stylesheet" href="{{asset('main_alls/everythingzz/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('main_alls/everythingzz/assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('main_alls/everythingzz/assets/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('main_alls/everythingzz/assets/css/metisMenu.css')}}">
        <link rel="stylesheet" href="{{asset('main_alls/everythingzz/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('main_alls/everythingzz/assets/css/slicknav.min.css')}}">
        <!-- amchart css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
            media="all" />
        <!-- others css -->
        <link rel="stylesheet" href="{{asset('main_alls/everythingzz/assets/css/typography.css')}}">
        <link rel="stylesheet" href="{{asset('main_alls/everythingzz/assets/css/default-css.css')}}">
        <link rel="stylesheet" href="{{asset('main_alls/everythingzz/assets/css/styles.css')}}">
        <link rel="stylesheet" href="{{asset('main_alls/everythingzz/assets/css/responsive.css')}}">
        <!-- modernizr css -->
        <script src="{{asset('main_alls/everythingzz/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <style>
        body {
            background-color: #E3E6F5;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;

            background: #cdffd8;
            background: linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
            background: -webkit-linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
            background: -moz-linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
        }

.chat-form {
    padding-top:175px;
    
}

        .profile-container {
            text-align: center;

            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;

        }

        .profile-image {
            width: 100px;
            height: 100px;
            overflow: hidden;
            border-radius: 50%;
            margin: 0 auto 10px auto;
        }

        .profile-image img {
            width: 100%;
            height: auto;
        }

        .doctor-name {
            margin: 10px 0;
            font-size: 24px;
            color: #333;
        }

        .department {
            font-size: 18px;
            color: #777;
        }

        .search-bar {

            display: none;
        }

        .chat-container {
            margin-top: 50px;
            width: 3000px;
            height: 700px;
            max-width: 1400px;
            background: #cdffd8;
            background: linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
            background: -webkit-linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
            background: -moz-linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .message.doctor .message-bubble {
 
     background-color: #CFCFCF;
    color: black;
    padding: 10px 15px;
    border-radius: 20px;
    margin-bottom: 10px;
    max-width: 60%;
    float: left;
    clear: both;
 

}

.message.patient .message-bubble {
    background-color: #007bff;
    color: white;
    border-radius: 18px;
    border:8px solid #007bff ;
}

.timestamp {
    font-size: 12px;
    color: #999;
    margin-top: 5px;
    text-align: right;
}



        .user-list {
            background: #cdffd8;
            background: linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
            background: -webkit-linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
            background: -moz-linear-gradient(90deg, #cdffd8 0%, #94b9ff 80%);
            border-right: 1px solid #ccc;
        }

        .user-list .user {
            display: flex;
            align-items: center;
            padding: 10px 0;


        }

        .user-list .user img {
            width: 50px;
            height: 50px;
        }

        .user-list .user .user-details {
            margin-left: 10px;
        }

        .chat-area {
            background-color: #F0F4FF;
            border-radius: 10px;
            
           
           

        }

  

        .chat-box {
             background-color: #F0F4FF;
    border-radius: 10px;
    height: 400px; /* Adjust the height as needed */
    overflow-y: auto;
    padding: 20px;
    margin-bottom: 20px;
        }

        .message {
            display: flex;
            align-items: flex-start;
            margin-bottom: 10px;
        }

        .message img {
            width: 40px;
            height: 40px;
        }
        .message.doctor {
    justify-content: flex-start;
}
.message.patient {
    justify-content: flex-end;
}

        .message .message-text {
            background-color: #E3E6F5;
            margin-left: 10px;
            padding: 10px;
            border-radius: 10px;
        }

        .message-input {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .message-input input {
            width: 90%;
            border-radius: 20px;
        }

        .message-input button {
            margin-left: 10px;
        }

        @media screen and (max-width: 768px) {
            .chat-container {
                width: 100%;
            }

            .chat-area {
                text-align: center;
            }

            .message-input input {
                width: 80%;
            }
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
                        <a href="index.html">
                            <img src="{{ asset('main_alls/everythingzz/assets/images/icon/logo2.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="main-menu">
                    <div class="menu-inner">
                        <nav>
                            <ul class="metismenu" id="menu">

                              <li><a href="{{url('User')}}"><i class="fa fa-comments"></i> <span>Home</span></a>
                                </li>

                                <li><a href="{{url('myappointment')}}"><i class="fa fa-briefcase"></i> <span>View
                                            Appointment</span></a>
                                </li>
                                <li><a href="{{ url('view_normal_prof') }}"><i class="fa fa-user"></i> <span>My
                                            Profile</span></a></li>
                                <li><a href=" invoice.html"><i class="fa fa-comments"></i> <span>Chat with
                                            Front-desk</span></a>
                                </li>

                                <li><a href="{{url('create_appointmentsss')}}"><i class="fa fa-briefcase"></i>
                                        <span>Create
                                            An Appointment</span></a>
                                </li>

                                <li><a href=" invoice.html"><i class="fa fa-comments"></i> <span>Chat with my
                                            Doctor</span></a>
                                </li>



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
                                @auth
                                @if(Auth::user()->role_name !== 'Normal User')

                                <a href="{{route('guest_view')}}">
                                    <h4 class="page-title pull-left"><span class="unverifieds">Unverified</span> </h4>
                                </a>
                                @endif

                               <a href="{{url('User')}}">
                                <h4 class="page-title pull-left">Home</h4>
                               </a>
                                <ul class="breadcrumbs pull-left">
                                    <li><a href="index.html">Information</a></li>
                                    <li><span>List</span></li>
                                </ul>

                            </div>
                            @endauth
                        </div>
                        <div class="col-sm-6 clearfix">
                            <div class="user-profile pull-right">
                                <img class="avatar user-thumb"
                                    src="{{ asset('main_alls/everythingzz/assets/images/author/avatar.png')}}">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                    Patient| Rex Lester Bastaoang
                                    <i class="fa fa-angle-down"></i>
                                </h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Message</a>
                                    <a class="dropdown-item" href="{{ route('view.normal.prof')}}">View Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Log
                                        Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page title area end -->



                <div class="container d-flex justify-content-center align-items-center vh-100">
                    <div class="row chat-container">
    <!-- Doctor List -->
    <div class="col-md-4 col-12 doctor-list py-4">
        <div class="search-bar mb-3">
            <select id="doctor-select" class="form-control">
               
            </select>
        </div>

        <div class="profile-container">
            <div class="profile-image">
                <img src="{{asset('doctorsimage/1721432436.jpg')}}" alt="Doctor Name">
            </div>
            <h2 class="doctor-name">{{ $appointment->employee->name }}</h2>
                  <p>Department: {{ $appointment->employee->department }}</p>

        </div>
    </div>
    
    <!-- Chat Area -->
    <div class="col-md-8 col-12 chat-area py-4">
        <div id="chat-box" class="chat-box">
            <!-- Messages will appear here -->
        </div>
        <form class="chat-form mt-3">
            @csrf
            <input type="hidden" name="doctor_id" id="doctor-id">
            <div class="input-group">
              <input type="text" id="message"  name="message" class="form-control" placeholder="Type your message..." required />

                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
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
// Update hidden input with selected doctor ID
document.getElementById('doctor-select').addEventListener('change', function() {
    document.getElementById('doctor-id').value = this.value;
});

// Initialize Pusher
var pusher = new Pusher('{{ env("PUSHER_APP_KEY") }}', {
    cluster: '{{ env("PUSHER_APP_CLUSTER") }}',
    forceTLS: true
});

// Subscribe to the chat channel
var channel = pusher.subscribe('chat-channel');

// Get the current user's name (patient)
var currentUserName = "{{ auth()->user()->name }}"; 

// Listen for messages from the doctor
channel.bind('message-sent', function (data) {
    let chatBox = document.getElementById('chat-box');
    let messageClass = (data.from == {{ auth()->user()->id }}) ? 'patient' : 'doctor';
    let senderName = (data.from == {{ auth()->user()->id }}) ? 'You' : data.doctor_name || "Doctor";

    let newMessage = `
        <div class="message ${messageClass}">
            <div class="message-bubble">
                <strong>${senderName}:</strong> ${data.message}
                <div class="timestamp">${data.timestamp || ''}</div>
            </div>
        </div>
    `;
    chatBox.innerHTML += newMessage;
    chatBox.scrollTop = chatBox.scrollHeight; // Scroll to bottom when new message arrives
});

// Function to send the message via AJAX
function sendMessage() {
    let message = document.querySelector('input[name="message"]').value;
    let doctorId = document.querySelector('input[name="doctor_id"]').value;

    if (message.trim() !== '') {
        // Send message to the server via AJAX
        $.ajax({
            url: '{{ route("patient.sendmessage") }}',
            type: 'POST',
            data: {
                message: message,
                doctor_id: doctorId,
                _token: '{{ csrf_token() }}' // CSRF Token
            },
            success: function(response) {
                // Clear the message field
                document.querySelector('input[name="message"]').value = '';

                // Display the message as 'You'
                let chatBox = document.getElementById('chat-box');
                let newMessage = `
                    <div class="message patient">
                        <div class="message-bubble">
                            <strong>You:</strong> ${message}
                            <div class="timestamp">${response.timestamp || ''}</div>
                        </div>
                    </div>
                `;
                chatBox.scrollTop = chatBox.scrollHeight; // Scroll to bottom when new message arrives
            },
            error: function(xhr) {
                alert('Error sending message.');
            }
        });
    }
}

// Send message on form submission
document.querySelector('.chat-form').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent the form's default submission
    sendMessage();
});

// Send message on "Enter" key press in the textarea
document.querySelector('input[name="message"]').addEventListener('keydown', function(e) {
    if (e.keyCode === 13 && !e.shiftKey) { // Enter key without Shift
        e.preventDefault(); // Prevent default form submission
        sendMessage();
    }
});
</script>



</script>

        <!-- offset area end -->
        <!-- jquery latest version -->
        <script src="{{asset('main_alls/everythingzz/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
        <!-- bootstrap 4 js -->
        <script src="{{asset('main_alls/everythingzz/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('main_alls/everythingzz/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('main_alls/everythingzz/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('main_alls/everythingzz/assets/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('main_alls/everythingzz/assets/js/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('main_alls/everythingzz/assets/js/jquery.slicknav.min.js')}}"></script>

        <!-- start chart js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <!-- start highcharts js -->
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <!-- start zingchart js -->
        <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
        <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
        </script>
        <!-- all line chart activation -->
        <script src="{{asset('main_alls/everythingzz/assets/js/line-chart.js')}}"></script>
        <!-- all pie chart -->
        <script src="{{asset('main_alls/everythingzz/assets/js/pie-chart.js')}}"></script>
        <!-- others plugins -->
        <script src="{{asset('main_alls/everythingzz/assets/js/plugins.js')}}"></script>
        <script src="{{asset('main_alls/everythingzz/assets/js/scripts.js')}}"></script>
    </body>

</html>