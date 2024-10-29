<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="nursess/assets/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="nursess/assets/vendors/iconly/bold.css">
        <title>Comcare Nurse</title>
        <link rel="stylesheet" href="nursess/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" href="nursess/assets/vendors/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="nursess/assets/css/app.css">
        <link rel="shortcut icon" href="nursess/assets/images/favicon.svg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
        .card-content {
            background: white;
        }

        .card {
            background: white;
            padding: 20px;
            color: black;
        }

        .card-img-top {
            height: 100px;
            width: 100px;
            object-fit: cover;
            border: 2px;
            border-radius: 50%;
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

                            <li class="sidebar-item">
                                <a href="{{url('set_assesment')}}" class='sidebar-link'><i
                                        class="fa-solid fa-magnifying-glass-plus"></i><span>Patient Assesment</span></a>
                            </li>

                            <li class="sidebar-item">
                                <a href="{{url('sendticket_nurse')}}" class='sidebar-link'><i
                                        class="fa-regular fa-rectangle-list"></i><span>Send Ticket</span></a>
                            </li>

                            <li class="sidebar-item">
                                <a href="{{ route('logout') }}" class='sidebar-link'>
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Log Out</span>
                                </a>
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
                    <center>
                        <h1>Welcome Nurse Dashboard</h1>
                    </center>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12 col-lg-9">
                            <div class="row">
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="stats-icon black">
                                                        <i class="fa-solid fa-hourglass-half"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h6 class="text-muted font-semibold">Pending Appointments</h6>
                                                    <h6 class="font-extrabold mb-0">{{$pending}}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="stats-icon black">
                                                        <i class="iconly-boldProfile"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h6 class="text-muted font-semibold">Total Appointments</h6>
                                                    <h6 class="font-extrabold mb-0">{{$totalappoint}}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="stats-icon black">
                                                        <i class="iconly-boldAdd-User"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h6 class="text-muted font-semibold">Patient Verified</h6>
                                                    <h6 class="font-extrabold mb-0">{{$verifiedpatients}}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="stats-icon black">
                                                        <i class="fa-solid fa-calendar-check"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h6 class="text-muted font-semibold">Appointment Complete</h6>
                                                    <h6 class="font-extrabold mb-0">{{$approveappoint}}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card">
                                <div class="card-body py-4 px-5">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl">
                                            <img src="nursess/assets/images/faces/5.jpg">
                                        </div>
                                        <div class="ms-3 name">
                                            <a href="chat">
                                                <i class="bi bi-envelope-fill"></i>
                                            </a>
                                            <h5 class="font-bold">Nurse</h5>
                                            <h6 class="text-muted mb-0">Nurse</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </section>


                    <div class="container mt-5">
                        <h2 class="text-center">Patient Arrivals</h2>
                        <div class="row">
                            @foreach($assespatients as $asses)
                            <div class="col-md-4">
                                <div class="card">
                                    @php
                                    $randomImage = $images[array_rand($images)]; // Get a random image
                                    @endphp
                                    <img src="{{ asset('nursess/assets/images/faces/' . $randomImage) }}"
                                        class="card-img-top" alt="{{ $asses->name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $asses->name }}</h5>
                                        <p class="card-text">Patient ID: {{ $asses->userid }}</p>
                                        <p class="card-text">Age: {{ $asses->age ?? 'N/A' }}</p>
                                        <p class="card-text">Gender: {{ $asses->gender ?? 'N/A' }}</p>
                                        <p class="card-text">Arrival Time:
                                            {{ \Carbon\Carbon::parse($asses->time_arrive)->format('h:i A') }}</p>
                                        <p class="card-text">Department: {{ $asses->departments ?? 'N/A' }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>


                    </div>
                    <section class="section">
                        <div class="row" id="table-striped">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <center>
                                            <h4 class="card-title">Patient Assesment Recently</h4>
                                        </center>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">

                                        </div>
                                        <!-- table striped -->
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>NAME</th>
                                                        <th>DOCTOR</th>
                                                        <th>PATIENT STATUS</th>
                                                        <th>MOBILITY</th>
                                                        <th>ALLERGIES</th>
                                                        <th>MENTAL STATUS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($assespatients as $asses)
                                                    <tr>
                                                        <td>{{$asses->name}}</td>
                                                        <td>{{$asses->employees}}</td>
                                                        <td>
                                                            @if($asses->completed == 'Observation')
                                                            <span
                                                                class="badge bg-warning">{{ $asses->completed }}</span>
                                                            @elseif($asses->completed == 'Discharged')
                                                            <span
                                                                class="badge bg-success">{{ $asses->completed }}</span>
                                                            @else
                                                            <span
                                                                class="badge bg-secondary">{{ $asses->completed }}</span>
                                                            @endif
                                                        </td>

                                                        <td>{{$asses->mobility}}</td>
                                                        <td>{{$asses->allergies}}</td>
                                                        <td>{{$asses->mentalstatus}}</td>



                                                    </tr>

                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>






                </div>


            </div>
        </div>
        <script src="nursess/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="nursess/assets/js/bootstrap.bundle.min.js"></script>

        <script src="nursess/assets/vendors/apexcharts/apexcharts.js"></script>
        <script src="nursess/assets/js/pages/dashboard.js"></script>

        <script src="nursess/assets/js/main.js"></script>
    </body>

</html>