<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Management - HR View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .navbar {
        background-color: #007bff;
    }

    .navbar-brand {
        color: white;
    }

    .card-header {
        background-color: #007bff;
        color: white;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hospital ERP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/HR')}}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Leave Management</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 content">
                <!-- Pending Entries -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h3>Pending Entries</h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Employee/Doctor Name</th>
                                    <th>Employee ID</th>
                                    <th>Department</th>
                                    <th>Leave Type</th>
                                    <th>Note</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($emplo->where('status', 'pending') as $data)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->specialty }}</td>
                                    <td>{{ $data->reason }}</td>
                                    <td>{{ $data->addnote }}</td>
                                    <td>{{ $data->leave_start_date }}</td>
                                    <td>{{ $data->leave_end_date }}</td>
                                    <td>
                                        <span class="badge bg-warning text-dark">{{ $data->status }}</span>
                                    </td>
                                    <td>
                                        <a href="{{ url('leave_approved', $data->id) }}"
                                            class="btn btn-success btn-sm">Approve</a>
                                        <a href="{{ url('leave_canceled', $data->id) }}"
                                            class="btn btn-danger btn-sm">Reject</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Approved Entries -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h3>Approved Entries</h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Employee/Doctor Name</th>
                                    <th>Employee ID</th>
                                    <th>Department</th>
                                    <th>Leave Type</th>
                                    <th>Note</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($emplo->where('status', 'approved') as $data)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->specialty }}</td>
                                    <td>{{ $data->reason }}</td>
                                    <td>{{ $data->addnote }}</td>
                                    <td>{{ $data->leave_start_date }}</td>
                                    <td>{{ $data->leave_end_date }}</td>
                                    <td>
                                        <span class="badge bg-success">{{ $data->status }}</span>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Canceled Entries -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h3>Rejected Entries</h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Employee/Doctor Name</th>
                                    <th>Employee ID</th>
                                    <th>Department</th>
                                    <th>Leave Type</th>
                                    <th>Note</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($emplo->where('status', 'canceled') as $data)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->specialty }}</td>
                                    <td>{{ $data->reason }}</td>
                                    <td>{{ $data->addnote }}</td>
                                    <td>{{ $data->leave_start_date }}</td>
                                    <td>{{ $data->leave_end_date }}</td>
                                    <td>
                                        <span class="badge bg-danger">{{ $data->status }}</span>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>