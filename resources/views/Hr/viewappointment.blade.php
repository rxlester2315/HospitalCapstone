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
    <style>
    .pagination {
        margin-top: 20px;
        justify-content: center;
    }
    </style>
</head>

<body style="background-color:white;">
    <div class="back-to-top"></div>
    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
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
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{url('/HR')}}"><span class="text-primary">One</span>-Health</a>
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
                            <a class="nav-link" href="{{url('backtohome')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('backtohome')}}">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('backtohome')}}">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('backtohome')}}">Contact</a>
                        </li>
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
            </div>
        </nav>
    </header>

    <div align="center" style="padding:70px;">
        <table class="table">
            <thead style="background-color:black; color:white;">
                <tr>
                    <th>Name of Patient</th>
                    <th>Specialty</th>
                    <th>Doctor Selected</th>
                    <th>Email Address</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Approve</th>
                    <th>Archived</th>
                    <th>Contact</th>


                </tr>
            </thead>
            <tbody id="appointment-table">
                @foreach($data as $appoint)
                <tr>
                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->departments}}</td>
                    <td>{{$appoint->employees}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->time}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->status}}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="{{url('approved', $appoint->id)}}">Approve</a>
                    </td>
                    <td>
                        <form action="{{ route('appointment.canceled', $appoint->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Archived</button>
                        </form>

                    </td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{url('/send_mail',$appoint->id)}}">Send Email</a>
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