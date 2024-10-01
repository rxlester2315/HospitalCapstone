<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soengsouy.com</title>

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

                                <li class="submenu-item ">
                                    <a href="{{url('unverified')}}">Request Verified Patient</a>
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
                            <h3>Table</h3>
                            <p class="text-subtitle text-muted">For user to check they list</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Table</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>







                <section class="section">
                    <div class="row" id="table-contexual">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Contextual classes</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
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
                                                    <th>ID</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Birthday</th>
                                                    <th>Address</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($unverified as $verified)
                                                <tr class="table-danger">
                                                    <td>{{$verified->user_id}}</td>
                                                    <td>{{$verified->firstName}}</td>
                                                    <td>{{$verified->lastName}}</td>
                                                    <td>{{$verified->birthdate}}</td>
                                                    <td>{{$verified->email}}</td>
                                                    <td>{{$verified->address}}</td>
                                                    <td>
                                                        <!-- Update this link to point to the route with user ID -->
                                                        <a href="{{ route('verify.user', $verified->id) }}">
                                                            <h3 class="btn btn-success">Verify</h3>
                                                        </a>
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
    <script src="fdesk/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="fdesk/assets/js/bootstrap.bundle.min.js"></script>

    <script src="fdesk/assets/js/main.js"></script>
</body>

</html>