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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{url('/User')}}"><span class="text-primary">One</span>-Health</a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('view_doctor_receipt')}}">Doctor Medicine Receipt</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('myappointment')}}">View Appointment</a>
                    </li>

                    {{-- Check if user is authenticated to display appropriate button --}}
                    @auth

                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="{{ route('logout') }}">Logout</a>
                    </li>
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



    <div align="center" style="padding:70px;">
        <table>
            <tr style="background-color:black;">

                <th style="padding:20px; color:white;">Name</th>
                <th style="padding:20px; color:white;">Doctor</th>
                <th style="padding:20px; color:white;">Specialty Select</th>

                <th style="padding:20px; color:white;">Message</th>
                <th style="padding:20px; color:white;">Date</th>
                <th style="padding:20px; color:white;">Number</th>
                <th style="padding:20px; color:white;">Email</th>
                <th style="padding:20px; color:white;">Status</th>



            </tr>

            @foreach($appoint as $appoints)
            <tr>
                <td style="padding:20px;">{{$appoints->name}}</td>
                <td style="padding:20px;">{{$appoints->employees}}</td>
                <td style="padding:20px;">{{$appoints->departments}}</td>

                <td style="padding:20px;">{{$appoints->message}}</td>
                <td style="padding:20px;">{{$appoints->date}}</td>
                <td style="padding:20px;">{{$appoints->phone}}</td>
                <td style="padding:20px;">{{$appoints->email}}</td>
                <td style="padding:10px;">{{$appoints->status}}</td>
                <td>
                    <a onclick="confirmation(event)" class="bt btn-danger"
                        href="{{url('cancel_appointment',$appoints->id)}}">Cancel</a>
                </td>

                @endforeach

            </tr>

        </table>
    </div>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>


    <script src="../assets/js/theme.js"></script>


    <script type="text/javascript">
    function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);

        swal({
                title: "Do you want to Cancel",
                text: "You can't Recover this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,


            })
            .then((willCancel) => {
                if (willCancel) {
                    window.location.href = urlToRedirect;
                }
            });

    }
    </script>



</body>



</html>