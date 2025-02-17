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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
        <title>Comcare Nurse</title>
        <link rel="stylesheet" href="nursess/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" href="nursess/assets/vendors/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="nursess/assets/css/app.css">
        <link rel="shortcut icon" href="nursess/assets/images/favicon.svg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
        .card-content {
            background: white;
        }

        .card {
            background: white;
            padding: 20px;
            color: black;
        }

        .card-img-top {
            height: 100px;
            width: 100px;
            object-fit: cover;
            border: 2px;
            border-radius: 50%;
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

                            <li class="sidebar-item">
                                <a href="{{url('sendticket_nurse')}}" class='sidebar-link'><i
                                        class="fa-regular fa-rectangle-list"></i><span>Send Ticket</span></a>
                            </li>

                            <li class="sidebar-item">
                                <a href="{{ route('logout') }}" class='sidebar-link'>
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



                <div class="col-md-6 col-12  animate__animated animate__slideInRight
">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ticketing Support</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{route('nurse.storetix')}}" method="POST" class="form form-vertical">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Nurse Name</label>
                                                    <div class="position-relative">
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Name" id="first-name-icon"
                                                            value="{{ old('name', $nurse->name) }}" required>
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">

                                                <div class="form-group has-icon-left">
                                                    <label for="email-id-icon">Email</label>
                                                    <div class="position-relative">
                                                        <input type="text" name="email" class="form-control"
                                                            placeholder="Email" id="email-id-icon"
                                                            value="{{ old('email', $nurse->email) }}" required>
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-envelope"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="mobile-id-icon">Issue</label>
                                                    <div class="position-relative">
                                                        <select class="form-control" name="subject" id="issueSelect">
                                                            <option value="" disabled selected>Select Issue
                                                            </option>
                                                            <option value="ui_glitch">UI Glitch</option>
                                                            <option value="email_failure">Email Notifications Failure
                                                            </option>

                                                            <option value="ticket_duplication">Ticket Duplication
                                                            </option>
                                                            <option value="system_downtime">System Downtime </option>

                                                        </select>
                                                        <div class="form-control-icon">
                                                            <i class="fa-solid fa-circle-exclamation"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="description-id-icon">Description</label>
                                                    <div class="position-relative">
                                                        <textarea class="form-control" name="description"
                                                            placeholder="Description" id="description-id-icon"
                                                            rows="4"></textarea>
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-file-text"></i>
                                                            <!-- Icon for description -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12" style="display: none;">
                                                <div class="form-group has-icon-left">
                                                    <label for="mobile-id-icon">Issue</label>
                                                    <div class="position-relative">
                                                        <select class="form-control" name="priority"
                                                            id="prioritySelect">
                                                            <option value="" disabled selected>Priority</option>
                                                            <option value="Low Severity">Low Severity</option>
                                                            <option value="Moderate Severity">Moderate Severity</option>
                                                            <option value="High Severity">High Severity</option>
                                                            <option value="Critical Severity">Critical Severity</option>
                                                        </select>
                                                        <div class="form-control-icon">
                                                            <i class="fa-solid fa-circle-exclamation"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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
        </div>


        <script>
        document.getElementById('issueSelect').addEventListener('change', function() {
            const issueValue = this.value;
            const prioritySelect = document.getElementById('prioritySelect');

            let priorityValue;
            switch (issueValue) {
                case 'ui_glitch':
                    priorityValue = 'Low Severity';
                    break;
                case 'email_failure':
                    priorityValue = 'Moderate Severity';
                    break;
                case 'ticket_duplication':
                    priorityValue = 'High Severity';
                    break;
                case 'system_downtime':
                    priorityValue = 'Critical Severity';
                    break;
                default:
                    priorityValue = '';
            }

            // Update the priority select box value and disable user interaction
            prioritySelect.value = priorityValue;
        });
        </script>



        @if(Session::has('message'))
        <script>
        swal("Message", "{{Session::get('message')}}", 'success', {
            button: true,
            button: "Okay",
            timer: 3000,


        });
        </script>
        @endif


        <script src="nursess/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="nursess/assets/js/bootstrap.bundle.min.js"></script>

        <script src="nursess/assets/vendors/apexcharts/apexcharts.js"></script>
        <script src="nursess/assets/js/pages/dashboard.js"></script>

        <script src="nursess/assets/js/main.js"></script>
    </body>

</html>