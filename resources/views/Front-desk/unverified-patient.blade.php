<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fdesk/assets/css/bootstrap.css">

    <link rel="stylesheet" href="fdesk/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="fdesk/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="fdesk/assets/css/app.css">
    <link rel="shortcut icon" href="fdesk/assets/images/favicon.svg" type="image/x-icon">
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
                            <a href="{{url('Front')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>






                        <li class="sidebar-item active ">
                            <a href="{{route('chatat')}}" class="sidebar-link">
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>Live Chat</span>
                            </a>
                        </li>


                        <li class="sidebar-item  ">
                            <a href="{{route('ticket')}}" target=" _blank" class="sidebar-link">
                                <i class="bi bi-telephone-fill"></i>
                                <span>Send Ticket</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Forms &amp; Tables</li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Patients</span>
                            </a>
                            <ul class="submenu ">



                                <li class="submenu-item ">
                                    <a href="{{url('patient_list')}}">List Patient</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('appointments') }}">Schedule Today</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{url('patient_appointment')}}">Record of Appointment</a>
                                </li>
                            </ul>
                        </li>



                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-pen-fill"></i>
                                <span>Visit Registration</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{route('unverified')}}">Unverified Patient</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{route('verifieduser')}}">Verified Patients</a>
                                </li>

                                <li class="submenu-item ">
                                    <a href="{{route('archived')}}">Archived Patients</a>
                                </li>
                            </ul>
                        </li>


                        <li class="sidebar-item">
                            <a href="{{ route('logout') }}" class="sidebar-link">
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
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Unverified Account</h3>
                            <p class="text-subtitle text-muted">List Unverified</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('Front')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section class="section">

                    <div class="row" id="table-inverse">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Guest User Accounts</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <center>
                                            <p>List of Unverified Account</p>
                                        </center>
                                    </div>

                                    <!-- table with light -->
                                    <div class="table-responsive">
                                        <table class="table table-light mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                    <th>Date Created</th>
                                                    <th>Role</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($guestuser as $gues)
                                                <tr>
                                                    <td>{{ $gues->name}}</td>
                                                    <td>{{ $gues->email}}</td>
                                                    <td>{{ $gues->status}}</td>
                                                    <td>{{ $gues->created_at}}</td>
                                                    <td>{{ $gues->role_name}}</td>

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
    <script src="fdesk/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="fdesk/assets/js/bootstrap.bundle.min.js"></script>

    <script src="fdesk/assets/js/main.js"></script>
</body>

</html>