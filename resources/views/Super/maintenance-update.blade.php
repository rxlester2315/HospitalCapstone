@extends('Super.layouts.master')

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Super Admin</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="admins/assets/css/bootstrap.css">

        <link rel="stylesheet" href="admins/assets/vendors/iconly/bold.css">

        <link rel="stylesheet" href="admins/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" href="admins/assets/vendors/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="admins/assets/css/app.css">
        <link rel="shortcut icon" href="admins/assets/images/favicon.svg" type="image/x-icon">
    </head>

    <body>
        <div id="app">
            <div id="sidebar" class="active">
                <div class="sidebar-wrapper active">
                    <div class="sidebar-header">
                        <div class="d-flex justify-content-between">
                            <div class="logo">
                                <a href="index.html"><img src="admins/assets/images/logo/logo.png" alt="Logo"
                                        srcset=""></a>
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
                    <h3>Update New Changes</h3>
                </div>
                <div class="page-content">

                </div>



                <section id="input-sizing">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">

                                    @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    @endif

                                    <h4 class="card-title">Updates System</h4>
                                </div>

                                <div class="card-body">
                                    <form action="{{ route('update.storezzz') }}" method="post">
                                        @csrf
                                        <!-- Add CSRF protection -->
                                        <div class="col-sm-4">
                                            <h6>Select Date</h6>
                                            <input name="maintenance_date" type="date" class="form-control"
                                                id="changeDate" />

                                            <h6>Description of Changes</h6>
                                            <textarea class="form-control" name="descriptions"
                                                placeholder="Describe the changes here..."
                                                id="changeDescription"></textarea>

                                            <h6>Bug Fixes</h6>
                                            <textarea name="bugs" class="form-control"
                                                placeholder="Describe any bug fixes..." id="bugFixes"></textarea>

                                            <h6>Impact</h6>
                                            <textarea name="effect" class="form-control"
                                                placeholder="Describe the impact..." id="impact"></textarea>

                                            <button type="submit" class="btn btn-primary mt-3" id="saveChange">Save
                                                Change</button>
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
        <script src="admins/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="admins/assets/js/bootstrap.bundle.min.js"></script>

        <script src="admins/assets/vendors/apexcharts/apexcharts.js"></script>
        <script src="admins/assets/js/pages/dashboard.js"></script>

        <script src="admins/assets/js/main.js"></script>
    </body>

</html>