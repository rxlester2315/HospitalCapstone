<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Doctor Appointments</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style>
        .table-custom {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            margin: 20px 0;
        }

        .table-custom th {
            background-color: #343a40;
            color: #ffffff;
        }

        .table-custom tbody tr:hover {
            background-color: #e9ecef;
        }

        .table-custom tbody td {
            vertical-align: middle;
        }

        .table-custom .status-active {
            color: green;
            font-weight: bold;
        }

        .table-custom .status-inactive {
            color: red;
            font-weight: bold;
        }
        </style>
    </head>

    <body>
        <a href="{{url('Doc')}}">
            <h3 style="margin-left:20px;" class="btn btn-info">Back</h3>
        </a>
        <div class="container">
            <h2 class="mt-5">Doctor Appointments</h2>
            <table class="table table-hover table-custom">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Medical Receipt</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $info)
                    <tr>
                        <td>{{ $info->name }}</td>
                        <td>{{ $info->date }}</td>
                        <td>{{ $info->status }}</td>
                        <td>
                            <a href="{{ url('create-receipt', $info->id) }}" class="btn btn-success">Create</a>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

</html>