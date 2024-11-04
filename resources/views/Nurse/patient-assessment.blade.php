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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

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

                            <li class="sidebar-item">
                                <a href="{{url('set_assesment')}}" class='sidebar-link'><i
                                        class="fa-solid fa-magnifying-glass-plus"></i><span>Patient Assesment</span></a>
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

                    <section class="section  animate__animated animate__zoomIn

">
                        <div class="row" id="table-striped">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Patient Mark as Arrived</h4>
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
                                                        <th>CONTACT</th>
                                                        <th>DATE</th>
                                                        <th>DOCTOR</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($assesment as $asses)
                                                    <tr>
                                                        <td>{{$asses->name}}</td>
                                                        <td>{{$asses->phone}}</td>
                                                        <td>{{$asses->date}}</td>
                                                        <td>{{$asses->employees}}</td>
                                                        <td>
                                                            <a href="{{url('select_assesment/'.$asses->id)}}"
                                                                class="btn btn-info">Make Assesment</a>
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
        </div>
        <script src="nursess/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="nursess/assets/js/bootstrap.bundle.min.js"></script>

        <script src="nursess/assets/vendors/apexcharts/apexcharts.js"></script>
        <script src="nursess/assets/js/pages/dashboard.js"></script>

        <script src="nursess/assets/js/main.js"></script>
    </body>

</html>