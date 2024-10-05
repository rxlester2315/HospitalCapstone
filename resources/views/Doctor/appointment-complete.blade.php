<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <meta name="copyright" content="MACode ID, https://macodeid.com/" />

    <title>One Health - Medical Center HTML5 Template</title>

    <link rel="stylesheet" href="../assets/css/maicons.css" />

    <link rel="stylesheet" href="../assets/css/bootstrap.css" />

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css" />

    <link rel="stylesheet" href="../assets/css/theme.css" />
</head>

<body style="background-color:white;">
    <!-- Back to top button -->
    <div class="back-to-top"></div>


    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span>
                                +00 123 4455 6666</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span>
                                mail@example.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </div>
        <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{url('/Doc')}}"><span class="text-primary">One</span>-Health</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/home')}}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('listsucc')}}">Create Medicine Receipt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('receipt_sent')}}">View Created Receipt</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('listrecord')}}">List of Medical Consultations

                            </a>
                        </li>



                        {{-- Check if user is authenticated to display appropriate button --}}
                        @auth
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('logout') }}">Logout</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                        </li>
                        @endauth







                    </ul>
                </div>
                <!-- .navbar-collapse -->
            </div>
            <!-- .container -->
        </nav>
    </header>



    <div align="center" style="padding:70px;">
        <table>
            <tr style="background-color:black;">

                <th style="padding:20px; color:white;">Name of Patient </th>
                <th style="padding:20px; color:white;">Phone Number</th>
                <th style="padding:20px; color:white;">Email Address</th>

                <th style="padding:20px; color:white;">Date</th>
               
                <th style="padding:20px; color:white;">View Profile</th>
                <th style="padding:20px; color:white;">Status</th>
                 <th style="padding:20px; color:white;">ID</th>









            </tr>
            @foreach($completed as $suc)
            <tr>

                <td style="padding:20px; color:black; ">{{$suc->name}}</td>
                <td style="padding:20px; color:black; ">{{$suc->phone}}</td>
                <td style="padding:20px; color:black; ">{{$suc->email}}</td>
                <td style="padding:20px; color:black; ">{{$suc->date}}</td>


                <td style="padding:20px; color:black; ">
                    <h3 class="badge badge-success">
                        {{$suc->completed}}
                    </h3>
                </td>
                <td style="padding:5px; color:black; ">
                    <a href="{{ url('sendmessage/'.$suc->id) }}" class="btn btn-success">Send Message</a>

                </td>












            </tr>

            @endforeach
        </table>
    </div>



    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>
</body>

</html>