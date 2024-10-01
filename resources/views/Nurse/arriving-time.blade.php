<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="nursess/assets/css/bootstrap.css">

    <link rel="stylesheet" href="nursess/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="nursess/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="nursess/assets/css/app.css">
    <link rel="shortcut icon" href="nursess/assets/images/favicon.svg" type="image/x-icon">

    <style>
    .clock {
        font-size: 48px;
        color: #333;
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
                                    <a href="auth-login.html">Records of Appointment</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="auth-register.html">Approve Appointments</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="auth-forgot-password.html">Patient List</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Forms &amp; Tables</li>





                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-pen-fill"></i>
                                <span>Departments</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{url('cardio')}}">Cardiology</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{url('orthos')}}">Orthopaedic Surgery</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{url('neurology')}}">Neurology</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{url('gsurgery')}}">General Surgery</a>
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

                <!-- Basic Tables start -->

                <!-- Basic Tables end -->

                <!--  Inverse table start -->
                <section class="section">
                    <div class="row" id="table-contexual">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Patient Appointment</h4>
                                    <form action="{{ route('arrive.store') }}" method="GET">
                                        @csrf
                                        <input type="date" name="filter_date" required>
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                    </form>
                                </div>
                                <div class="card-header">
                                    <h4 class="card-title">Time in Manila, Philippines</h4>
                                    <div class="clock" id="clock"></div>


                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                        @endif

                                        <p>Use contextual classes to color table rows or individual cells. Read full
                                            documnetation
                                            <a href="https://getbootstrap.com/docs/4.3/content/tables/#contextual-classes"
                                                target="_blank">here.</a>
                                        </p>
                                    </div>
                                    <!-- table contextual / colored -->
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>NAME</th>
                                                    <th>Doctor</th>
                                                    <th>Date Schedule</th>
                                                    <th>Phone Number</th>
                                                    <th>Email</th>
                                                    <th>Arrived</th>
                                                    <th>Rejected</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($appointment && $appointment->isNotEmpty())

                                                @foreach($appointment as $today)
                                                <tr class="table-info">
                                                    <td>{{$today->name}}</td>
                                                    <td>{{$today->employees}}</td>
                                                    <td>{{$today->date}}</td>
                                                    <td>{{$today->phone}}</td>
                                                    <td>{{$today->email}}</td>


                                                    <td>
                                                        <a href="{{ url('patienttm/'.$today->id) }}" target="_blank">
                                                            <h3 class="btn btn-success">Arrive</h3>
                                                        </a>
                                                    </td>






                                                    <td>
                                                        <a href="">
                                                            <h3 class="btn btn-danger">Not Attended</h3>
                                                        </a>
                                                    </td>

                                                </tr>


                                                @endforeach
                                                @else
                                                <tr>
                                                    <td colspan="7" class="text-center">Please select date today to see
                                                        available schedule today

                                                </tr>
                                                @endif
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

        <script>
        function updateClock() {
            const now = new Date();
            let hours = now.getHours();
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');

            const ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12 || 12; // Convert 0 to 12

            const timeString = `${hours}:${minutes}:${seconds} ${ampm}`;
            document.getElementById('clock').textContent = timeString;
        }

        setInterval(updateClock, 1000);
        updateClock(); // Initial call to display immediately
        </script>
</body>

</html>