<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="nursess/assets/css/bootstrap.css">
        <title>Comcare Nurse</title>

        <link rel="stylesheet" href="nursess/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" href="nursess/assets/vendors/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="nursess/assets/css/app.css">
        <link rel="shortcut icon" href="nursess/assets/images/favicon.svg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <style>
        .clock {
            font-size: 48px;
            color: #333;
        }

        .card-body {
            background: white;
        }
        </style>
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
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Schedule Appointment</h3>
                                <p class="text-subtitle text-muted">Expected Patient Today</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Schedule</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <section class="section  animate__animated animate__slideInRight
">
                        <div class="row" id="table-striped">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <center>
                                            <h4 class="card-title">Record of Patient Arrive at Hospital</h4>

                                        </center>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">

                                            <!-- table striped -->
                                            <div class="table-responsive">
                                                <table class="table table-striped mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Doctor</th>
                                                            <th>Schedule Date</th>
                                                            <th>Time Arrive</th>
                                                            <th>Time</th>
                                                            <th>Phone</th>
                                                            <th>Email</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($record as $arrive)

                                                        <tr>
                                                            <td>{{$arrive->name}}</td>
                                                            <td>{{$arrive->employees}}</td>
                                                            <td>{{$arrive->date}}</td>
                                                            <td>{{$arrive->time_arrive}}</td>
                                                            <td>{{$arrive->ampm}}</td>
                                                            <td>{{$arrive->phone}}</td>
                                                            <td>{{$arrive->email}}</td>
                                                            <td>
                                                                <span class="badge bg-success">Arrived</span>
                                                            </td>


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
            <script src="nursess/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
            <script src="nursess/assets/js/bootstrap.bundle.min.js"></script>

            <script src="nursess/assets/js/main.js"></script>


    </body>

</html>