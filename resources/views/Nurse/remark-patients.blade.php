<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="{{asset('nursess/assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css')}}"
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


                </div>
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Patient Information</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="{{route('remark.store')}}" method="POST" class="form">
                                            @csrf
                                            <input type="hidden" name="appointment_id"
                                                value="{{ $selectpatients->id }}">

                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Full Name</label>
                                                        <input type="text" id="first-name-column" class="form-control"
                                                            placeholder="First Name"
                                                            value="{{ old('account_name', $selectpatients->name ?? '') }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="last-name-column">Contact Number</label>
                                                        <input type="text" id="last-name-column" class="form-control"
                                                            placeholder="Last Name"
                                                            value="{{ old('account_name', $selectpatients->phone ?? '') }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="city-column">Appointment Date</label>
                                                        <input type="text" id="city-column" class="form-control"
                                                            placeholder="City"
                                                            value="{{ old('account_name', $selectpatients->date ?? '') }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="country-floating">Status</label>
                                                        <input type="text" id="country-floating" class="form-control"
                                                            name="country-floating" placeholder="Country" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="company-column">Company</label>
                                                        <input type="text" id="company-column" class="form-control"
                                                            placeholder="Company"
                                                            value="{{ old('account_name', $selectpatients->status ?? '') }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="email-id-column">Doctor</label>
                                                        <input type="email" id="email-id-column" class="form-control"
                                                            name="email-id-column" placeholder="Email"
                                                            value="{{ old('account_name', $selectpatients->employees ?? '') }}"
                                                            readonly>
                                                    </div>


                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="doctor-select">Patient Status</label>
                                                        <select class="form-control" name="completed">
                                                            <option value="">Select a Status</option>
                                                            <option value="Observation">Under Observation</option>
                                                            <option value="Discharged">Discharged"</option>
                                                            <!-- Add more options as needed -->
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Case of Patients</label>
                                                        <input type="text" class="form-control" name="diseases"
                                                            placeholder="Case">
                                                    </div>


                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="doctor-notes">Remark</label>
                                                        <textarea id="doctor-notes" class="form-control" name="remarks"
                                                            placeholder="Enter doctor's notes here" rows="4"></textarea>
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