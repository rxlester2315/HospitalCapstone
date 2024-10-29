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
        <link rel="stylesheet" href="{{asset('admins/assets/css/bootstrap.css')}}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
        <link rel="stylesheet" href="{{asset('admins/assets/vendors/iconly/bold.css')}}">

        <link rel="stylesheet" href="{{asset('admins/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
        <link rel="stylesheet" href="{{asset('admins/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
        <link rel="stylesheet" href="{{asset('admins/assets/css/app.css')}}">
        <link rel="shortcut icon" href="{{asset('admins/assets/images/favicon.svg')}}" type="image/x-icon">
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
                                        src="{{asset('hrs/assets/img/logo.jpg')}}" alt="Logo" srcset=""></a>
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



                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Ticket Number : {{$ticketselect->ticket_number}}</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="{{ route('ticket.storez', ['id' => $ticketselect->id]) }}"
                                            method="POST" class="form form-vertical">

                                            class="form form-vertical">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label style="color:white;"
                                                                for="first-name-vertical">Employee Name</label>
                                                            <input style="color:black;" type="text"
                                                                id="first-name-vertical" class="form-control"
                                                                name="fname" placeholder="First Name"
                                                                value="{{ $ticketselect->name }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label style="color:white;"
                                                                for="email-id-vertical">Email</label>
                                                            <input style="color:black;" type="email"
                                                                id="email-id-vertical" class="form-control"
                                                                name="email-id" placeholder="Email"
                                                                value="{{ $ticketselect->email }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label style="color:white;"
                                                                for="contact-info-vertical">Subject</label>
                                                            <input style="color:black;" type="text"
                                                                id="contact-info-vertical" class="form-control"
                                                                name="subject" placeholder="Mobile"
                                                                value="{{ $ticketselect->subject }}" readonly>
                                                        </div>
                                                    </div>


                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label style="color:white;"
                                                                for="description">Priority</label>
                                                            <input style="color:black;" type="text" class="form-control"
                                                                value="{{ $ticketselect->priority }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="status">Status</label>
                                                        <select style="width:250px; height:40px; margin-top:10px;"
                                                            class="form-select" name="status" style="color:black;">
                                                            <option style="color:black;" value="open"
                                                                {{ $ticketselect->status == 'open' ? 'selected' : '' }}>
                                                                Open</option>
                                                            <option style="color:black;" value="close"
                                                                {{ $ticketselect->status == 'close' ? 'selected' : '' }}>
                                                                Close</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label style="color:white;"
                                                                for="description">Message</label>
                                                            <textarea id="reply" class="form-control" name="reply"
                                                                placeholder="Password"></textarea>
                                                        </div>
                                                    </div>






                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
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

        @if(Session::has('message'))
        <script>
        swal("Message", "{{Session::get('message')}}", 'success', {
            button: true,
            button: "Okay",
            timer: 3000,


        });
        </script>
        @endif

        <script src="{{asset('admins/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('admins/assets/js/bootstrap.bundle.min.js')}}"></script>


        <script src="{{asset('admins/assets/vendors/apexcharts/apexcharts.js')}}"></script>
        <script src="{{asset('admins/assets/js/pages/dashboard.js')}}"></script>

        <script src="{{asset('admins/assets/js/main.js')}}"></script>
    </body>

</html>