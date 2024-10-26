<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="{{asset('nursess/assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{asset('nursess/assets/vendors/iconly/bold.css')}}">
        <title>Comcare Nurse</title>
        <link rel="stylesheet" href="{{asset('nursess/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
        <link rel="stylesheet" href="{{asset('nursess/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
        <link rel="stylesheet" href="{{asset('nursess/assets/css/app.css')}}">
        <link rel="shortcut icon" href="{{asset('nursess/assets/images/favicon.svg')}}" type="image/x-icon">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>

        <style>
        .card-content {
            background: white;
        }

        h2 {
            padding: 15px;
            background: white;
        }
        </style>
        <script>
        if (window.history && window.history.pushState) {
            window.history.pushState(null, null, window.location.href);
            window.onpopstate = function() {
                window.history.pushState(null, null, window.location.href);
            };
        }
        </script>
    </head>

    <body>
        <div id="app">
            <div id="sidebar" class="active">
                <div class="sidebar-wrapper active">
                    <div class="sidebar-header">
                        <div class="d-flex justify-content-between">
                            <div class="logo">

                            </div>
                            <div class="toggler">
                                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-menu">
                        <ul class="menu">
                            <li class="sidebar-title">Menu</li>

                            <li class="sidebar-item active ">
                                <a href="{{url('Nurse')}}" class='sidebar-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>


                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-collection-fill"></i>
                                    <span>Appointments & Schedule</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="{{url('pending')}}">List Pending Appointment</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="{{route('appoint')}}">Today Appointment</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="{{route('arrivingtime')}}">Patients Arrives</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="extra-component-toastify.html">Rejected/Deleted Appointment</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-person-badge-fill"></i>
                                    <span>Patient Information</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="{{url('recordPatient')}}">Records of Appointment</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="{{url('approve')}}">Approve Appointments</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="{{url('viewpatientlist')}}">Patient List</a>
                                    </li>

                                    <li class="submenu-item ">
                                        <a href="{{url('patient_appointments')}}">Patient Appointments</a>
                                    </li>
                                </ul>
                            </li>













                        </ul>
                    </div>
                    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
                </div>
            </div>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>

                <div class="page-heading">

                </div>
                <div class="page-content">

                    <section id="multiple-column-form">
                        <div class="row match-height">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Patient Assesment</h4>
                                    </div>
                                    <center>
                                        <h2>General Patient Assesment</h2>
                                    </center>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form action="{{route('asses.store')}}" method="POST" class="form">
                                                @csrf

                                                <input type="hidden" name="appointment_id"
                                                    value="{{ $selecteduser->id }}">


                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Full Name</label>
                                                            <input type="text" id="first-name-column"
                                                                class="form-control" placeholder="Full Name"
                                                                value="{{ old('account_name', $selecteduser->name ?? '') }}"
                                                                readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="last-name-column">Contact Number</label>
                                                            <input type="number" id="last-name-column"
                                                                class="form-control" placeholder="Number"
                                                                value="{{ old('account_name', $selecteduser->phone ?? '') }}"
                                                                readonly>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="mobility-dropdown">Mobility</label>
                                                            <select id="mobility-dropdown" class="form-control"
                                                                name="mobility">
                                                                <option value="">Select Mobility</option>
                                                                <option value="independent">Able to move independently
                                                                </option>
                                                                <option value="assistance">Needs assistance</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="country-floating">Allergies</label>
                                                            <input type="text" id="country-floating"
                                                                class="form-control" name="allergies"
                                                                placeholder="Allergies">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="pain-level-dropdown">Pain Level (0-10)</label>
                                                            <select id="pain-level-dropdown" class="form-control"
                                                                name="painlevel">
                                                                <option value="">Select Pain Level</option>
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="mental-status-dropdown">Mental Status</label>
                                                            <select id="mental-status-dropdown" class="form-control"
                                                                name="mentalstatus">
                                                                <option value="">Select Mental Status</option>
                                                                <option value="alert">Alert</option>
                                                                <option value="oriented">Oriented</option>
                                                                <option value="confused">Confused</option>
                                                                <option value="drowsy">Drowsy</option>
                                                                <option value="unresponsive">Unresponsive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <h2>Vital Signs</h2>
                                                    </center>

                                                    <div class="row">
                                                        <div class="col-md-4 col-12">
                                                            <div class="form-group">
                                                                <label for="blood-pressure-dropdown">Blood
                                                                    Pressure</label>
                                                                <select id="blood-pressure-dropdown"
                                                                    class="form-control" name="bloodpressure"
                                                                    onchange="toggleOtherInput(this)">
                                                                    <option disabled selected value="">Select Blood
                                                                        Pressure</option>
                                                                    <option value="90/60">90/60</option>
                                                                    <option value="100/70">100/70</option>
                                                                    <option value="110/75">110/75</option>
                                                                    <option value="120/80">120/80</option>
                                                                    <option value="130/85">130/85</option>
                                                                    <option value="140/90">140/90</option>
                                                                    <option value="other">Other</option>
                                                                </select>
                                                                <input type="text" id="other-blood-pressure"
                                                                    class="form-control mt-2"
                                                                    name="other-blood-pressure"
                                                                    placeholder="Please specify" style="display:none;">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 col-12">
                                                            <div class="form-group">
                                                                <label for="heart-rate">Heart Rate</label>
                                                                <input type="text" id="heart-rate" class="form-control"
                                                                    name="Hearrate" placeholder="Heart Rate"
                                                                    style="width: 70%;">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 col-12">
                                                            <div class="form-group">
                                                                <label for="weight">Weight(lbs)</label>
                                                                <input type="text" id="weight" class="form-control"
                                                                    name="Weight" placeholder="Weight"
                                                                    style="width: 70%;">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 col-12">
                                                            <div class="form-group">
                                                                <label for="gender">Gender</label>
                                                                <select id="gender" class="form-control" name="gender"
                                                                    style="width: 70%;">
                                                                    <option value="" disabled selected>Select Gender
                                                                    </option>
                                                                    <option value="male">Male</option>
                                                                    <option value="female">Female</option>
                                                                    <option value="other">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 col-12">
                                                            <div class="form-group">
                                                                <label for="age">Age</label>
                                                                <input type="number" id="age" class="form-control"
                                                                    name="age" placeholder="Age" style="width: 70%;">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="height">Height (cm)</label>
                                                                <input type="text" id="height" class="form-control"
                                                                    name="Height" placeholder="Height"
                                                                    style="width: 30%;" maxlength="3">
                                                            </div>
                                                        </div>


                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button type="submit"
                                                                class="btn btn-primary me-1 mb-1">Submit</button>
                                                            <button type="reset"
                                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                        </div>
                                                    </div>




                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>




            </div>
        </div>

        <script>
        function toggleOtherInput(select) {
            const otherInput = document.getElementById('other-blood-pressure');
            if (select.value === 'other') {
                otherInput.style.display = 'block';
            } else {
                otherInput.style.display = 'none';
                otherInput.value = ''; // Clear the input if not selected
            }
        }
        </script>

        @if(Session::has('message'))
        <script>
        swal("Message", "{{Session::get('message')}}", 'success', {
            button: true,
            button: "Okay",
            timer: 3000,


        });
        </script>
        @endif



        <script src="{{asset('nursess/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('nursess/assets/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{asset('nursess/assets/vendors/apexcharts/apexcharts.js')}}"></script>
        <script src="{{asset('nursess/assets/js/pages/dashboard.js')}}"></script>

        <script src="{{asset('nursess/assets/js/main.js')}}"></script>
    </body>

</html>