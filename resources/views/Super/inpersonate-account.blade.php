@extends('Super.layouts.master')

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inpersonate</title>

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

                <div class="page-heading">
                    <h3 style="color:white;">Account View Access</h3>
                </div>
                <div class="page-content">

                </div>






                <section class="section">

                    <div class="card">
                        <div class="card-header">
                            Log Datatable
                        </div>
                        <div class="card-body">
                            @canImpersonate($guard = null)

                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Date Time</th>
                                        <th>Impersonate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alluser as $userz)
                                    <tr>
                                        <td>{{ $userz->id }}</td>
                                        <td>{{ $userz->name }}</td>
                                        <td>{{ $userz->email }}</td>
                                        <td>
                                            <span class="badge badge-info">{{ $userz->role_name }}</span>
                                        </td>
                                        <td>{{ $userz->created_at }}</td>
                                        <td>
                                            <a href="{{ route('impersonate', $userz->id) }}"
                                                class="btn btn-warning">Impersonate</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endCanImpersonate

                        </div>

                    </div>
                </section>






            </div>
        </div>
        <script src="admins/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="admins/assets/js/bootstrap.bundle.min.js"></script>

        <script src="admins/assets/vendors/apexcharts/apexcharts.js"></script>
        <script src="admins/assets/js/pages/dashboard.js"></script>

        <script src="admins/assets/js/main.js"></script>
    </body>

</html>