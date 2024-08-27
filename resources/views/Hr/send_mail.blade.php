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
                            <a class="nav-link" href="{{url('backtohome')}}">>Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('backtohome')}}">>News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('backtohome')}}">>Contact</a>
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



    <center>

        <h1>Send Email to Patient <span><a href="">{{$data->name}}</span></h1></a>

        <form action="{{ url('mail', $data->id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="greeting" class="form-label">Greetings</label>
                <input type="text" class="form-control form-control-sm" name="greeting" id="greeting"
                    style="width: 300px; height: 40px;" placeholder="Enter your greeting">
            </div>


            <div class="mb-3">
                <label for="action_text" class="form-label">Call to Action Text</label>
                <input type="text" class="form-control form-control-sm" name="action_text" id="action_text"
                    style="width: 300px; height: 40px;" placeholder="Enter your action text">
            </div>

            <div class="mb-3">
                <label for="action_url" class="form-label">Call to Action URL</label>
                <input type="url" class="form-control form-control-sm" name="action_url" id="action_url"
                    style="width: 300px; height: 40px;" placeholder="Enter your action URL">
            </div>

            <div class="mb-3">
                <label for="endline" class="form-label">Closing Remarks</label>
                <input type="text" class="form-control form-control-sm" name="endline" id="endline"
                    style="width: 300px; height: 40px;" placeholder="Enter your closing remarks">
            </div>


            <div class="mb-3">
                <label for="body" class="form-label">Email Content</label>
                <textarea class="form-control form-control-sm" name="body" id="body"
                    style="width: 800px; height: 250px;" placeholder="Enter the body of your email"></textarea>
            </div>



            <button type="submit" value="Send Mail" class="btn btn-primary">Send Email</button>
        </form>

    </center>




    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>


</body>

</html>