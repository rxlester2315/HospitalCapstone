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

        <style>
        .form-groupss {
            width: 100%;
            /* Make the width responsive */
            max-width: 350px;
            /* Set a maximum width */
            padding-left: 10px;
            /* Reduced padding for smaller screens */
            margin: 0 auto;
            /* Center the form group */
        }



        label {
            padding: 15px;
            color: black;
            font-weight: 700;
        }

        .btn-primary {
            display: block;
            /* Make the button block-level */
            margin: 10px auto 0;
            /* Center the button and add margin on top */
            width: 100%;
            /* Full width on smaller screens */
            max-width: 200px;
            /* Set a maximum width for the button */
            position: relative;
            /* Remove absolute positioning */
            top: auto;
            /* Reset top positioning */
        }

        /* Media Query for smaller screens */
        @media (max-width: 768px) {
            .form-groupss {
                padding-left: 0;
                /* Remove left padding on smaller screens */
            }
        }

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
                <section class="section">
                    <div class="row" id="table-striped">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Patients Approved Appointment</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <!-- Filter Form -->
                                        <form action="{{ route('filter_appointments') }}" method="GET">
                                            <div class="form-groupss">
                                                <label for="department-select">Select Department</label>
                                                <select name="department" id="department-select" class="form-control">
                                                    <option value="">All Departments</option>
                                                    <option value="Cardiology">Cardiology</option>
                                                    <option value="Neurology">Neurology</option>
                                                    <option value="Ophthalmic Surgery">Ophthalmic Surgery</option>
                                                    <option value="General Surgery">General Surgery</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </form>
                                    </div>

                                    <!-- Table striped -->
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th>NAME</th>
                                                    <th>DOCTOR</th>
                                                    <th>DEPARTMENTS</th>
                                                    <th>TIME</th>
                                                    <th>DATE</th>
                                                    <th>CONTACT</th>
                                                    <th>STATUS</th>
                                                    <th>REMARK</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($approveapp as $approved)
                                                <tr>
                                                    <td>{{$approved->name}}</td>
                                                    <td>{{$approved->employees}}</td>
                                                    <td>{{$approved->departments}}</td>
                                                    <td>{{$approved->time}}</td>
                                                    <td>{{$approved->date}}</td>
                                                    <td>{{$approved->phone}}</td>

                                                    <td>
                                                        @if($approved->status == 'Approved')
                                                        <span class="badge bg-success">{{ $approved->status }}</span>
                                                        @elseif($approved->status == 'Pending')
                                                        <span class="badge bg-warning">{{ $approved->status }}</span>
                                                        @else
                                                        <span class="badge bg-secondary">{{ $approved->status }}</span>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <a href="{{ url('remark_patients/' . $approved->id) }}"
                                                            class="btn btn-warning">Remark</a>
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

        <script src="nursess/assets/vendors/apexcharts/apexcharts.js"></script>
        <script src="nursess/assets/js/pages/dashboard.js"></script>

        <script src="nursess/assets/js/main.js"></script>
    </body>

</html>