<!DOCTYPE html>
<html lang="en">

<head>
         <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Comcare Clinic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="{{asset('main_alls/everythingzz/assets/images/icon/favicon.ico')}}">
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
}

.chat-container {
    width: 100%;
    max-width: 1200px;
    background-color: #D8DBF1;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 100px;
}

.patient-info {
    background-color: #E3E6F5;
    border-right: 1px solid #ccc;
    padding: 20px;
}

.patient-info ul {
    list-style-type: none;
    padding: 0;
}

.patient-info li {
    background-color: #f9f9f9;
    border-radius: 8px;
    padding: 15px;
    margin-bottom: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.chat-area {
    background-color: #F0F4FF;
    border-radius: 10px;
    padding-top: 100px;
}

.chat-box {
    height: 300px;
    overflow-y: scroll;
    background-color: white;
    padding: 15px;
    border-radius: 10px;
}

.message-sent {
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border-radius: 20px;
    margin-bottom: 10px;
    max-width: 60%;
    float: right;
    clear: both;
}

.message-received {
    background-color: #f1f1f1;
    color: black;
    padding: 10px 15px;
    border-radius: 20px;
    margin-bottom: 10px;
    max-width: 60%;
    float: left;
    clear: both;
}

.chat-form {
    margin-top: 20px;
}

.input-group input {
    border-radius: 20px;
}

.input-group button {
    margin-left: 10px;
}

@media screen and (max-width: 768px) {
    .chat-container {
        width: 100%;
    }

    .chat-form input {
        width: 80%;
    }
}

    </style>
</head>
<body> 





   <div class="page-container">
            <!-- sidebar menu area start -->
            <div class="sidebar-menu">
                <div class="sidebar-header">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('main_alls/everythingzz/assets/images/icon/logo.png')}}"
                                alt="logo"></a>
                    </div>
                </div>
                <div class="main-menu">
                    <div class="menu-inner">

                        <nav>
                            <ul class="metismenu" id="menu">


                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i
                                            class="ti-pie-chart"></i><span>Patient Appointments</span></a>
                                    <ul class="collapse">
                                        <li><a href="barchart.html"></a></li>
                                        <li><a href="linechart.html">line Chart</a></li>
                                        <li><a href="piechart.html">pie chart</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>My
                                            Information</span></a>
                                    
                                </li>


                                <li><a href="{{url('listrecord')}}"><i class="ti-map-alt"></i> <span>Chat with
                                            Patients</span></a></li>
                                <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Send Ticket
                                            Request</span></a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i
                                            class="fa fa-exclamation-triangle"></i>
                                        <span>Error</span></a>
                                    <ul class="collapse">
                                        <li><a href="404.html">Error 404</a></li>
                                        <li><a href="403.html">Error 403</a></li>
                                        <li><a href="500.html">Error 500</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i>
                                        <span>Multi
                                            level menu</span></a>
                                    <ul class="collapse">
                                        <li><a href="#">Item level (1)</a></li>
                                        <li><a href="#">Item level (1)</a></li>
                                        <li><a href="#" aria-expanded="true">Item level (1)</a>
                                            <ul class="collapse">
                                                <li><a href="#">Item level (2)</a></li>
                                                <li><a href="#">Item level (2)</a></li>
                                                <li><a href="#">Item level (2)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Item level (1)</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- sidebar menu area end -->
            <!-- main content area start -->
            <div class="main-content">
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
                        <div class="col-md-6 col-sm-4 clearfix">
                            <ul class="notification-area pull-right">
                                <li class="dropdown">


                                </li>
                                <li class="dropdown">
                                    <i class="fa fa-envelope-o dropdown-toggle"
                                        data-toggle="dropdown"><span>3</span></i>
                                    <div class="dropdown-menu notify-box nt-enveloper-box">
                                        <span class="notify-title">You have 3 new notifications <a href="#">view
                                                all</a></span>

                                    </div>
                                </li>
                                <li class="settings-btn">
                                    <i class="ti-settings"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- header area end -->
                <!-- page title area start -->
                <div class="page-title-area">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="breadcrumbs-area clearfix">
                                <h4 class="page-title pull-left">Dashboard</h4>
                                <ul class="breadcrumbs pull-left">
                                    <li><a href="index.html">Home</a></li>
                                    <li><span>Dashboard</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 clearfix">
                            <div class="user-profile pull-right">
                                <img class="avatar user-thumb" src="{{asset('assets/images/author/avatar.png')}}" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Doctor| Warlyn Bangongon<i
                                        class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Message</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page title area end -->
                <div class="main-content-inner">




                    



  
<div class="container d-flex justify-content-center align-items-center vh-100">
  
         <div class="row chat-container">
        <!-- Patient Information -->
        <div class="col-md-4 col-12 patient-info py-4">
            <h3>Patient Information</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Name:</strong> {{$appointment->name}} <br>
                    <strong>Phone Number:</strong> {{$appointment->phone}} <br>
                    <strong>Date of Schedule:</strong> {{$appointment->date}} <br>
                    <strong>Case Type:</strong> Sore throat
                </li>
            </ul>
        </div>

        <!-- Chat Area -->
        <div class="col-md-8 col-12 chat-area py-4">
            <div id="chat-box" class="chat-box">
                <!-- Messages will appear here -->
            </div>
            <form class="chat-form mt-3">
                <div class="input-group">
                    <input type="text" id="message" class="form-control" placeholder="Type your message..." required />
                    <button id="send" type="button" class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
    </div>
    </div>






                    <!-- sales report area start -->
             

                    <!-- visitor graph area end -->
                    <!-- order list area start -->
                   
                    <!-- order list area end -->

                </div>
            </div>
            <!-- main content area end -->
            <!-- footer area start-->

            <!-- footer area end-->
        </div>







  

<script>
    // Pusher initialization
    Pusher.logToConsole = true;

    var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
        cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
        forceTLS: true
    });

    var channel = pusher.subscribe('chat-channel');
    channel.bind('message-sent', function(data) {
        let chatBox = document.getElementById('chat-box');
        let messageClass = data.from == "{{ auth()->user()->id }}" ? "message-sent" : "message-received";
        let newMessage = `
            <div class="${messageClass}">
                <p><strong>${data.from == "{{ auth()->user()->id }}" ? "You" : data.senderName}:</strong> ${data.message}</p>
            </div>`;
        chatBox.innerHTML += newMessage;
        chatBox.scrollTop = chatBox.scrollHeight;
    });

    $('#send').click(function() {
        var message = $('#message').val();

        $.ajax({
            url: '{{ url("sendmessage", $appointment->id) }}',
            method: 'POST',
            data: {
                message: message,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                $('#message').val('');
            }
        });
    });
</script>


<script src="main_alls/everythingzz/assets/js/vendor/jquery-2.2.4.min.js"></script>
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
        <script src="{{asset('main_alls/everythingzz/assets/js/line-chart.')}}"></script>
        <!-- all bar chart activation -->
        <script src="{{asset('main_alls/everythingzz/assets/js/bar-chart.js')}}"></script>
        <!-- all pie chart -->
        <script src="{{asset('main_alls/everythingzz/assets/js/pie-chart.js')}}"></script>
        <!-- others plugins -->
        <script src="{{asset('main_alls/everythingzz/assets/js/plugins.js')}}"></script>
        <script src="{{asset('main_alls/everythingzz/assets/js/scripts.js')}}"></script>
</body>

</html>
