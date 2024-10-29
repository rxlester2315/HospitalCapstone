@extends('Super.layouts.master')

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tickets</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="admins/assets/css/bootstrap.css">

        <link rel="stylesheet" href="admins/assets/vendors/iconly/bold.css">

        <link rel="stylesheet" href="admins/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" href="admins/assets/vendors/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="admins/assets/css/app.css">
        <link rel="shortcut icon" href="admins/assets/images/favicon.svg" type="image/x-icon">
        <style>
        body {
            background: #388e3c;
            background: linear-gradient(0deg, #388e3c 0%, #000000 100%);
            background: -webkit-linear-gradient(0deg, #388e3c 0%, #000000 100%);
            background: -moz-linear-gradient(0deg, #388e3c 0%, #000000 100%);
        }

        * {
            color: white;
        }




        .table {
            border-radius: 0.5rem;
            overflow: hidden;
        }

        .table thead {
            background-color: #343a40;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .badge {
            font-size: 0.9rem;
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
                                <a href="{{ route('sadview') }}"><img
                                        style="width:100px; height:100px; margin-left:50px;"
                                        src="hrs/assets/img/logo.jpg" alt="Logo" srcset=""></a>
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
                                <a href="{{url('Superad')}}" class='sidebar-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>



                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-collection-fill"></i>
                                    <span>Tools</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item active">
                                        <a href="{{ route('userManagement') }}">User Control</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="{{ route('activity/log') }}">User Activity Log</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="{{ route('activity/login/logout') }}">User Logins</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="{{ route('archives-restore') }}">Restore Users</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a href="{{ route('update.list') }}">Changes Update </a>
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






                <div class="container mt-5">
                    <h2 style="color:white;" class="text-center mb-4">Doctor Support Tickets</h2>
                    <table class="table table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Ticket Subject</th>
                                <th>Department</th>
                                <th>Employee Name</th>
                                <th>Date Submitted</th>
                                <th>Priority</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($ticketfrmadmin as $ticket)
                            <tr>
                                <td>{{$ticket->ticket_number}}</td>
                                <td>{{$ticket->subject}}</td>
                                <td>{{$ticket->rolename}}</td>
                                <td>{{$ticket->name}}</td>
                                <td>{{$ticket->created_at}}</td>
                                <td>{{$ticket->priority}}</td>
                                <td>
                                    <a href="{{ url('checking_issue/' . $ticket->id) }}"
                                        class="btn btn-success">Solve</a>
                                </td>




                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>









            </div>
        </div>
        <script src="admins/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="admins/assets/js/bootstrap.bundle.min.js"></script>


        <script src="admins/assets/vendors/apexcharts/apexcharts.js"></script>
        <script src="admins/assets/js/pages/dashboard.js"></script>

        <script src="admins/assets/js/main.js"></script>
    </body>

</html>