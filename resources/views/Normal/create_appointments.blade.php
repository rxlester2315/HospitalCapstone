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
                <a class="navbar-brand" href="{{url('User')}}"><span class="text-primary">One</span>-Health</a>



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



    @if(session()->has('message'))
    <div class="alert alert-success">


        {{session()->get('message')}}
    </div>









    @endif



    <div class="page-section">

        <div class="container">
            <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

            <form class="main-form" action="{{ route('makeappointments') }}" method="POST">

                @csrf
                <div class="row mt-5">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" id="name_input" name="name" class="form-control" placeholder="Full Name" />
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="fill_name" />
                            <label class="form-check-label" for="fill_name">
                                Fill with your profile name
                            </label>
                        </div>
                    </div>




                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="email" id="email_input" name="email" class="form-control"
                            placeholder="Email Address.." />
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="fill_email" />
                            <label class="form-check-label" for="fill_email">
                                Fill with your profile email
                            </label>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <input type="date" name="date" min="{{ date('Y-m-d') }}" class="form-control" />
                    </div>


                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text" id="phone_input" name="number" class="form-control"
                            placeholder="Phone Number.." maxlength="11" />
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="fill_phone" />
                            <label class="form-check-label" for="fill_phone">
                                Fill with your profile phone number
                            </label>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <label for="sel_depart" class="form-label">Please Select Specialty::</label>
                        <select id="sel_depart" name="sel_depart" class="form-select form-control-lg">
                            <option value="0">-- Select Specialty --</option>
                            @foreach($departmentData['data'] as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <label for="sel_emp" class="form-label">Please Select Doctor:</label>
                        <select id="sel_emp" name="sel_emp" class="form-select form-control-lg">
                            <option value="0">-- Select Doctor --</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <label for="time">Prefer Time:</label>
                        <input type="time" name="time" class="form-control" />
                    </div>

                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <textarea name="message" id="message" class="form-control" rows="6"
                            placeholder="Enter Message.."></textarea>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary mt-3 wow zoomIn">
                    Submit Request
                </button>
            </form>
        </div>
    </div>
    @if(session()->has('message'))
    <div class="alert alert-success">

        <button style="background-color:Green;" type="button" class="close" data-dismiss="alert">
            ✔</button>
        {{session()->get('message')}}
    </div>

    @endif









    <script type='text/javascript'>
    $(document).ready(function() {

        $('#sel_depart').change(function() {
            // Department id
            var id = $(this).val();

            // Empty the dropdown
            $('#sel_emp').find('option').not(':first').remove();

            // AJAX request 
            $.ajax({
                url: 'getEmployees/' + id,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    var len = 0;
                    if (response['data'] != null) {
                        len = response['data'].length;
                    }

                    if (len > 0) {
                        // Read data and create <option >
                        for (var i = 0; i < len; i++) {
                            var id = response['data'][i].id;
                            var name = response['data'][i].name;
                            var option = "<option value='" + id + "'>" + name + "</option>";
                            $("#sel_emp").append(option);


                        }
                    }
                }
            });
        });
    });
    </script>


    <script>
    $(document).ready(function() {
        var userName = "{{ Auth::user()->name }}";
        var userEmail = "{{ Auth::user()->email }}";
        var userPhone =
            "{{ Auth::user()->phone_number }}";

        $('#fill_name').change(function() {
            if ($(this).is(':checked')) {
                $('#name_input').val(userName);
            } else {
                $('#name_input').val('');
            }
        });

        $('#fill_email').change(function() {
            if ($(this).is(':checked')) {
                $('#email_input').val(userEmail);
            } else {
                $('#email_input').val('');
            }
        });

        $('#fill_phone').change(function() {
            if ($(this).is(':checked')) {
                $('#phone_input').val(userPhone);
            } else {
                $('#phone_input').val('');
            }
        });
    });
    </script>





    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>
</body>

</html>