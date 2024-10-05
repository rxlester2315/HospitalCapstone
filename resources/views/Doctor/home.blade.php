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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
    if (window.history && window.history.pushState) {
        window.history.pushState(null, null, window.location.href);
        window.onpopstate = function() {
            window.history.pushState(null, null, window.location.href);
        };
    }
    </script>

    <style>
    .profile-container {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        width: 300px;
    }

    .profile-header {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .profile-logo {
        border-radius: 50%;
        width: 50px;
        height: 50px;
        margin-right: 15px;
        object-fit: cover;
    }

    .profile-name {
        font-size: 1.5rem;
        color: #333;
        margin: 0;
    }
    </style>
    <style>
    .circle-shape {
        display: inline-block;
        padding: 10px;
        /* Adjust padding as needed */
        border-radius: 50%;
        /* Makes the shape circular */
        position: relative;
    }

    .mai-chatbubbles-outline {
        font-size: 40px;
        /* Adjust the icon size as needed */
        position: relative;
        /* Necessary for the badge to position correctly */
    }

    .unread_notification {
        position: absolute;
        top: -10px;
        /* Adjust this value to position the badge vertically */
        right: -10px;
        /* Adjust this value to position the badge horizontally */
        background-color: red;
        color: white;
        border-radius: 50%;
        padding: 2px 6px;
        font-size: 12px;
        z-index: 1;
        /* Ensures the badge is on top of the icon */
    }


    .sub-menu {
        display: none;
        /* Hide by default */
        position: absolute;
        /* Position it accordingly */
    }

    .nav-item:hover .sub-menu {
        display: block;
        /* Show on hover */
    }
    </style>






    <!-- SCRIPT FOR UPDATED NUMBER MESSAGES -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
    Pusher.logToConsole = true;

    var pusher = new Pusher('eaecfdbcb5ca2fba8266', {
        cluster: 'ap1'
    });

    var channel = pusher.subscribe('notifmess');
    channel.bind('my-event', function(data) {
        $.ajax({
            url: "{{route('unreadcount')}}",
            method: "GET",
            success: function(data) {
                $('.unread_notification').html(data.count);
            },
        });


    });
    </script>


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



                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                {{-- message --}}
                {!! Toastr::message() !!}
                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>

                        @if($hasRecord)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('doc_profile', $doctor->id) }}">View Profile</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('register_profile') }}">Register Profile</a>
                        </li>
                        @endif

                        <li class="nav-item">
                            <a class="nav-link" href="doctors.html">Doctorss</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('create_leave')}}">Request leave</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('send_ticket')}}">Contact</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="" id="appointmentDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                My Appointment
                            </a>
                            <div class="dropdown-menu" aria-labelledby="appointmentDropdown">
                                <a class="dropdown-item" href="{{url('/listappoint')}}">View List Appointments</a>
                                <a class="dropdown-item" href="{{route('view.date')}}">Today Appointment</a>
                                <a class="dropdown-item" href="{{url('recordcomplete ')}}">Appointment Completed</a>
                            </div>
                        </li>

                        {{-- Check if user is authenticated to display appropriate button --}}
                        <ul class="navbar-nav ml-auto">
                            @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ asset('profiledoc/' . $doctor->avats) }}" alt="User Logo"
                                        class="profile-logo"
                                        style="width: 30px; height: 30px; border-radius: 50%; margin-right: 5px;">
                                    <span class="badge badge-info">Doctor</span>| {{ $doctor->fullName }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{ url('doc_profile', $doctor->id) }}">My Profile</a>
                                    <a class="dropdown-item" href="chat">View Message</a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>

                                </div>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                            </li>
                            @endauth
                        </ul>

                    </ul>

                </div>
                <!-- .navbar-collapse -->
            </div>
            <!-- .container -->
        </nav>
    </header>

    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg)">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">Let's make your life happier</span>
                <h1 class="display-4">Healthy Living</h1>
                <a href="#" class="btn btn-primary">Let's Consult</a>
            </div>
        </div>
    </div>

    <div class="bg-light">
        <div class="page-section py-3 mt-md-n5 custom-index">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-secondary text-white">
                                <a href="chat" class="position-relative">
                                    <i class="mai-chatbubbles-outline"></i>
                                    <span
                                        class="badge badge-pill unread_notification">{{ auth()->user()->getMessageCount() }}</span>
                                </a>
                            </div>

                            <p>View Messages </p>


                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-primary text-white">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <a href="{{url('doc_sched')}}">
                                <p style="color:black;">My Schedule</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-accent text-white">
                                <span class="mai-basket"></span>
                            </div>
                            <p><span>One</span>-Health Pharmacy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .page-section -->

        <div class="page-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 wow fadeInUp">
                        <h1>
                            Welcome to Your Health <br />
                            Center
                        </h1>
                        <p class="text-grey mb-4">
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam
                            erat, sed diam voluptua. At vero eos et accusam
                            et justo duo dolores et ea rebum. Accusantium
                            aperiam earum ipsa eius, inventore nemo labore
                            eaque porro consequatur ex aspernatur.
                            Explicabo, excepturi accusantium! Placeat
                            voluptates esse ut optio facilis!
                        </p>
                        <a href="about.html" class="btn btn-primary">Learn More</a>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="img-place custom-img-1">
                            <img src="../assets/img/bg-doctor.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .bg-light -->
    </div>
    <!-- .bg-light -->



    <div class="page-section bg-light">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Latest News</h1>
            <div class="row mt-5">
                <div class="col-lg-4 py-2 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#">Covid19</a>
                            </div>
                            <a href="blog-details.html" class="post-thumb">
                                <img src="../assets/img/blog/blog_1.jpg" alt="" />
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title">
                                <a href="blog-details.html">List of Countries without Coronavirus
                                    case</a>
                            </h5>
                            <div class="site-info">
                                <div class="avatar mr-2">
                                    <div class="avatar-img">
                                        <img src="../assets/img/person/person_1.jpg" alt="" />
                                    </div>
                                    <span>Roger Adams</span>
                                </div>
                                <span class="mai-time"></span> 1 week ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-2 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#">Covid19</a>
                            </div>
                            <a href="blog-details.html" class="post-thumb">
                                <img src="../assets/img/blog/blog_2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title">
                                <a href="blog-details.html">Recovery Room: News beyond the
                                    pandemic</a>
                            </h5>
                            <div class="site-info">
                                <div class="avatar mr-2">
                                    <div class="avatar-img">
                                        <img src="../assets/img/person/person_1.jpg" alt="" />
                                    </div>
                                    <span>Roger Adams</span>
                                </div>
                                <span class="mai-time"></span> 4 weeks ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-2 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#">Covid19</a>
                            </div>
                            <a href="blog-details.html" class="post-thumb">
                                <img src="../assets/img/blog/blog_3.jpg" alt="" />
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title">
                                <a href="blog-details.html">What is the impact of eating too much
                                    sugar?</a>
                            </h5>
                            <div class="site-info">
                                <div class="avatar mr-2">
                                    <div class="avatar-img">
                                        <img src="../assets/img/person/person_2.jpg" alt="" />
                                    </div>
                                    <span>Diego Simmons</span>
                                </div>
                                <span class="mai-time"></span> 2 months ago
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center mt-4 wow zoomIn">
                    <a href="blog.html" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>


    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Company</h5>
                    <ul class="footer-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Editorial Team</a></li>
                        <li><a href="#">Protection</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>More</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Join as Doctors</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Our partner</h5>
                    <ul class="footer-menu">
                        <li><a href="#">One-Fitness</a></li>
                        <li><a href="#">One-Drugs</a></li>
                        <li><a href="#">One-Live</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Contact</h5>
                    <p class="footer-link mt-2">
                        351 Willow Street Franklin, MA 02038
                    </p>
                    <a href="#" class="footer-link">701-573-7582</a>
                    <a href="#" class="footer-link">healthcare@temporary.net</a>

                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <hr />

            <p id="copyright">
                Copyright &copy; 2020
                <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved
            </p>
        </div>
    </footer>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>
</body>

</html>