<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <meta name="copyright" content="MACode ID, https://macodeid.com/" />








    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">


    <link rel="stylesheet" href="../assets/css/maicons.css" />

    <link rel="stylesheet" href="../assets/css/bootstrap.css" />

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css" />

    <link rel="stylesheet" href="../assets/css/theme.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>




    <style>
    .note {
        background-color: #fff8dc;
        border: 2px solid #ffeb3b;
        border-radius: 4px;
        padding: 4px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
        margin-top: -20px;
        /* Adjusted margin-top */
    }


    .note h2 {
        font-size: 15px;
        /* Reduced font size */
        color: #ff8c00;
        margin: 0;
    }

    .note p {
        font-size: 13px;
        /* Reduced font size */
        color: #333;
        margin: 4px 0 0;
        /* Adjusted margin */
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

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

                <form action="#">
                    <div class="input-group input-navbar">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                            aria-describedby="icon-addon1" />
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>



                {{-- message --}}
                {!! Toastr::message() !!}
                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('Guess')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doctors.html">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('changesPasswordGuest')}}">Change Password</a>
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


    <div class="container mt-5">
        <div class="note">

            <h2>NOTE!</h2>
            <p>If you received this note, your verification request has been submitted. Please wait for the admin's
                decision</p>

        </div>
        <div class="card">

            <div class="card-header text-center">
                <h2>User Profile</h2>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" alt="Profile Picture" class="rounded-circle mb-3">
                </div>


                @if(isset($guessinfo))
                <input type="text" class="form-control" id="firstName" value="{{ $guessinfo->firstName }}" readonly>
                @else
                <p>No profile information available.</p>
                @endif



                <form class="mt-4">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" id="firstName"
                            value="{{$guessinfo->firstName}}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" value="{{$guessinfo->lastName}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="birthday">Birthday</label>
                        <input type="text" class="form-control" id="birthday" value="{{$guessinfo->birthdate}}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="mobileNumber">Mobile Number</label>
                        <input type="text" class="form-control" id="mobileNumber" value="{{$guessinfo->number}}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="mobileNumber">Email Address</label>
                        <input type="email" class="form-control" id="Email Address" value="{{$guessinfo->email}}"
                            value="(123) 456-7890" readonly>
                    </div>
                    <div class="form-group">
                        <label for="fullAddress">Full Address</label>
                        <textarea class="form-control" id="fullAddress" rows="3" readonly>
                            {{$guessinfo->address}}
                            </textarea>
                    </div>
                </form>

                <center>
                    <a href="{{route('update.view')}}">
                        <button class="btn btn-primary">Edit Profile</button>

                    </a>
                </center>
            </div>
        </div>
    </div>








    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>







    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>



</body>

</html>