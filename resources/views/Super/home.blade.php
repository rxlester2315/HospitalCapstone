@extends('Super.layouts.master')
@section('menu')
@endsection
@section('content')
@extends('Super.sidebar.dashboard')


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hospital Erp Systems</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="admins/assets/css/bootstrap.css">
        <link rel="stylesheet" href="admins/assets/vendors/chartjs/Chart.min.css">

        <link rel="stylesheet" href="admins/assets/vendors/iconly/bold.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="admins/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" href="admins/assets/vendors/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="admins/assets/css/app.css">
        <link rel="shortcut icon" href="admin/assets/images/favicon.svg" type="image/x-icon">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script>
        if (window.history && window.history.pushState) {
            window.history.pushState(null, null, window.location.href);
            window.onpopstate = function() {
                window.history.pushState(null, null, window.location.href);
            };
        }
        </script>


        <style>
        .unread_notification {
            margin-top: -32px;
            margin-left: 7px;
            background-color: red;
            color: white;
            height: 18px;
            width: 18px;
            text-align: center;
            border-radius: 50%;
            font-size: 12px;

        }
        </style>






        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
        <script>
        Pusher.logToConsole = true;

        var pusher = new Pusher('eaecfdbcb5ca2fba8266', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('notifmess');
        channel.bind('my-event', function(data) {
            $.ajax({
                url: "{{route('unreadcount')}}",
                method: "GET",
                success: function(data) {
                    $('.unread_notification').html(data.count);
                },
            });


        });
        </script>










    </head>

    <body>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <h3 style="color:white;">WELCOME TO SUPER ADMIN</h3>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon yellow">
                                                    <i class="fa-solid fa-users"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 stlye="color:white;" class="text-muted font-semibold">Activity Log
                                                </h6>
                                                <h6 class="font-extrabold mb-0">{{$activitylogsss}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon black">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Active User logins</h6>
                                                <h6 class="font-extrabold mb-0">{{$loginnum}}</h6>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon black">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">User Total</h6>
                                                <h6 class="font-extrabold mb-0">{{$totaluser}}</h6>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon black">
                                                    <i class="fa-solid fa-ticket"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Number of tickets</h6>
                                                <h6 class="font-extrabold mb-0">{{$totaltix}}</h6>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>








                            <section class="section">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <center>
                                                    <h4 class="card-title"><span class="badge bg-warning">Open
                                                            Ticket</span></h4>
                                                </center>
                                            </div>
                                            <div class="card-body">
                                                <table class="table mt-3">
                                                    <thead>
                                                        <tr>
                                                            <th>Ticket Number</th>
                                                            <th>Status</th>
                                                            <th>Ticket Sent</th>
                                                            <th>Subject</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($datas as $data)
                                                        <tr>
                                                            <td>{{$data->ticket_number}}</td>
                                                            <td>{{$data->status}}</td>
                                                            <td>{{$data->name}}</td>
                                                            <td>{{$data->subject}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <center>
                                                    <h4 class="card-title"><span class="badge bg-success">Resolve
                                                            Ticket</span></h4>

                                                </center>
                                            </div>
                                            <div class="card-body">
                                                <table class="table mt-3">
                                                    <thead>
                                                        <tr>
                                                            <th>Ticket Number</th>
                                                            <th>Status</th>
                                                            <th>Ticket Sent</th>
                                                            <th>Subject</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($numcsolve as $solves)
                                                        <tr>
                                                            <td>{{$solves->ticket_number}}</td>
                                                            <td>{{$solves->status}}</td>
                                                            <td>{{$solves->name}}</td>
                                                            <td>{{$solves->subject}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="section">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <center>
                                                    <h4 class="card-title"><span class="badge bg-danger">Critical
                                                            Severity</span></h4>
                                                </center>
                                            </div>
                                            <div class="card-body">
                                                <table class="table mt-3">
                                                    <thead>
                                                        <tr>
                                                            <th>Ticket Number</th>
                                                            <th>Status</th>
                                                            <th>Ticket Sent</th>
                                                            <th>Subject</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($numbcrit as $crit)
                                                        <tr>
                                                            <td>{{$crit->ticket_number}}</td>
                                                            <td>{{$crit->status}}</td>
                                                            <td>{{$crit->name}}</td>
                                                            <td>{{$crit->subject}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <center>
                                                    <h4 class="card-title"><span class="badge bg-warning">Moderate
                                                            Severity</span></h4>

                                                </center>
                                            </div>
                                            <div class="card-body">
                                                <table class="table mt-3">
                                                    <thead>
                                                        <tr>
                                                            <th>Ticket Number</th>
                                                            <th>Status</th>
                                                            <th>Ticket Sent</th>
                                                            <th>Subject</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($numbmode as $mode)
                                                        <tr>
                                                            <td>{{$mode->ticket_number}}</td>
                                                            <td>{{$mode->status}}</td>
                                                            <td>{{$mode->name}}</td>
                                                            <td>{{$mode->subject}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>

                        <div class="row">


                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card" data-bs-toggle="modal" data-bs-target="#default">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="{{ URL::to('/images/'. Auth::user()->avatars) }}"
                                            alt="{{ Auth::user()->avatars }}">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">{{ Auth::user()->name }}</h5>
                                        <h6 class="text-muted mb-0">{{ Auth::user()->email }}</h6>

                                    </div>



                                </div>

                            </div>
                            <a href="chat">
                                <i class="fa-solid fa-envelope"></i>
                                <div class="unread_notification">{{ auth()->user()->getMessageCount()}}</div>

                            </a>
                        </div>
                        {{-- user profile modal --}}
                        <div class="card-body">
                            <!--Basic Modal -->
                            <div class="modal fade text-left" id="default" tabindex="-1" aria-labelledby="myModalLabel1"
                                style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel1">User Profile</h5>
                                            <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Full Name</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="fullName"
                                                                    value="{{ Auth::user()->name }}" readonly>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Email Address</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="email" class="form-control" name="email"
                                                                    value="{{ Auth::user()->email }}" readonly>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-envelope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Mobile Number</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="number" class="form-control"
                                                                    value="{{ Auth::user()->phone_number }}" readonly>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-phone"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Status</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    value="{{ Auth::user()->status }}" readonly>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-bag-check"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Role Name</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    value="{{ Auth::user()->role_name }}" readonly>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-exclude"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end user profile modal --}}

                        <div class="card">
                            <div class="card-header">
                                <h4>System Updates</h4>
                            </div>
                            <div class="card-content pb-4">
                                <div class="recent-update d-flex px-4 py-3">
                                    <div class="update-icon avatar-lg">
                                        <i class="fa-solid fa-gear"></i>
                                    </div>
                                    <div class="update-info ms-4">
                                        <h5 style="color:white;" class="mb-1">{{$latestUpdate->descriptions}}</h5>
                                        <h6 style="color:white;" class="text-muted mb-0">
                                            {{$latestUpdate->maintenance_date}}</h6>
                                    </div>
                                </div>
                                <div class="recent-update d-flex px-4 py-3">
                                    <div class="update-icon avatar-lg">
                                        <i class="fa-solid fa-bug"></i>
                                    </div>
                                    <div class="update-info ms-4">
                                        <h5 style="color:white;" class="mb-1">{{$latestUpdate->bugs}}</h5>
                                        <h6 style="color:white;" class="text-muted mb-0">
                                            {{$latestUpdate->maintenance_date}}</h6>
                                    </div>
                                </div>
                                <div class="recent-update d-flex px-4 py-3">
                                    <div class="update-icon avatar-lg">
                                        <i class="fa-solid fa-shield"></i>
                                    </div>
                                    <div class="update-info ms-4">
                                        <h5 style="color:white;" class="mb-1">{{$latestUpdate->effect}}</h5>
                                        <h6 style="color:white;" class="text-muted mb-0">
                                            {{$latestUpdate->maintenance_date}}</h6>
                                    </div>
                                </div>
                                <div class="px-4">
                                    <a href="{{url('updates_system')}}">
                                        <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>View
                                            Update Log</button>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </section>
            </div>



            @endsection

            <script src="admins/assets/vendors/chartjs/Chart.min.js"></script>
            <script src="admins/assets/js/pages/ui-chartjs.js"></script>

            <script src="admins/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
            <script src="admins/assets/js/bootstrap.bundle.min.js"></script>

            <script src="admins/assets/vendors/apexcharts/apexcharts.js"></script>
            <script src="admins/assets/js/pages/dashboard.js"></script>

            <script src="admins/assets/js/main.js"></script>
    </body>

</html>