<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fdesk/assets/css/bootstrap.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">




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
                            <h3>Sending Ticket</h3>
                            <p class="text-subtitle text-muted">Ticket Support</p>
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

                <section id="basic-vertical-layouts">
                    <div class="row match-height">

                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Creating Ticket</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="{{route('sendticket')}}" method="POST" class="form form-vertical">
                                            @csrf

                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Name</label>
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="name"
                                                                placeholder="First Name" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">Email</label>
                                                            <input type="email" id="email-id-vertical"
                                                                class="form-control" name="email" placeholder="Email"
                                                                required>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="issue" class="form-label">Select Issue</label>
                                                            <select class="form-select" id="issueSelect" name="subject"
                                                                required>
                                                                <option value="" disabled selected>Select an issue
                                                                </option>
                                                                <option value="ui_glitch">UI Glitch (Low Severity)
                                                                </option>
                                                                <option value="email_failure">Email Notifications
                                                                    Failure (Moderate Severity)</option>
                                                                <option value="ticket_duplication">Ticket Duplication
                                                                    (High Severity)</option>
                                                                <option value="system_downtime">System Downtime
                                                                    (Critical Severity)</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">Description</label>
                                                        <textarea class="form-control" name="description" rows="4"
                                                            placeholder="Describe your issue" required></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="priority" class="form-label">Priority</label>
                                                        <div class="form-control-plaintext" id="priorityDisplay">
                                                            <select class="form-select" id="prioritySelect"
                                                                name="priority" disabled required>
                                                                <option value="" selected disabled>Select priority
                                                                </option>
                                                                <option value="Low Severity">Low Severity</option>
                                                                <option value="Moderate Severity">Moderate Severity
                                                                </option>
                                                                <option value="High Severity">High Severity</option>
                                                                <option value="Critical Severity">Critical Severity
                                                                </option>
                                                            </select>

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

            </div>
            </section>







        </div>


    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
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


    <script src="fdesk/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="fdesk/assets/js/bootstrap.bundle.min.js"></script>

    <script src="fdesk/assets/js/main.js"></script>
</body>

</html>