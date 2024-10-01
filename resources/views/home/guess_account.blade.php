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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <style>
    .alert-success {
        font-size: 70px;
        text-align: center;
    }

    .close {
        font-size: 24px;
        margin: auto;
        display: block;
    }
    </style>




</head>

<body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>


    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">


                </div>
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
        </div>
        <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">One</span>-Health</a>



                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('User')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doctors.html">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>

                    </ul>
                </div>
                <!-- .navbar-collapse -->

            </div>
            <!-- .container -->


        </nav>


    </header>

    <div class="page-section">

        <div class="container">

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            <h1 class="text-center wow fadeInUp">Make Guest Account</h1>



            <form class="main-form" action="{{ route('createguess') }}" method="POST">
                @csrf
                <div class="row mt-5">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" name="name" class="form-control" placeholder="Full Name" />
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text" name="email" class="form-control" placeholder="Email Address.." />
                    </div>

                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="password" name="password" class="form-control" placeholder="Password.." />
                    </div>

                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="password" name="password_confirmation" class="form-control"
                            placeholder="Confirm Password.." />
                    </div>
                </div>

                <br><br>
                <div class="text-center">
                    <button style="margin-top: 100px;" type="submit" class="btn btn-primary mt-3 wow zoomIn">
                        Submit Request
                    </button>
                </div>
            </form>




        </div>

    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>