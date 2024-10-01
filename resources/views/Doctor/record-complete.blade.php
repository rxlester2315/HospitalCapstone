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
    <div style="margin-left:600px; padding-top: 30px">


    </div>
    <div align="center" style="padding:70px;">

        <table>
            <tr style="background-color:black;">
                <th style="padding:20px; color:white;">Name of Patient </th>
                <th style="padding:20px; color:white;">Phone</th>
                <th style="padding:20px; color:white;">Email</th>
                <th style="padding:20px; color:white;">Date</th>
                <th style="padding:20px; color:white;">Medecine Prescription</th>






            </tr>








            <tbody>
                @foreach($completed as $complete)
                <tr>
                    <td style="padding:20px; color:black;">{{$complete->name}}</td>
                    <td style="padding:20px; color:black;">{{$complete->phone}}</td>
                    <td style="padding:20px; color:black;">{{$complete->email}}</td>
                    <td style="padding:20px; color:black;">{{$complete->date}}</td>

                    <td style="padding:20px; color:black;">
                        @if(is_array($complete->list_medicine))
                        <ul>
                            @foreach($complete->list_medicine as $medicine)
                            <li>{{ $medicine }}</li>
                            @endforeach
                        </ul>
                        @elseif(is_string($complete->list_medicine))
                        {{ $complete->list_medicine }}
                        @else
                        No medicine information available.
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>


        </table>
    </div>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>
</body>

</html>