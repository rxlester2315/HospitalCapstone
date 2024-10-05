<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Weekly Schedule</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
    body {
        background-color: #f4f7f9;
        font-family: Arial, sans-serif;
    }

    .container {
        margin-top: 50px;
    }

    h2 {
        color: #333;
        font-weight: bold;
    }

    .table-custom {
        margin: 20px auto;
        width: 100%;
        max-width: 1200px;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .table-custom thead {
        background-color: #343a40;
        color: #fff;
    }

    .table-custom th,
    .table-custom td {
        text-align: center;
        vertical-align: middle;
        padding: 15px;
        font-size: 14px;
    }

    .table-custom th {
        font-weight: bold;
        text-transform: uppercase;
    }

    .table-custom tbody tr:nth-child(odd) {
        background-color: #f8f9fa;
    }

    .table-custom tbody tr:hover {
        background-color: #e9ecef;
    }

    .off-day {
        color: #bbb;
        font-style: italic;
    }

    .work-day {
        color: #28a745;
        font-weight: bold;
    }

    @media (max-width: 768px) {
        .table-custom thead {
            display: none;
        }

        .table-custom,
        .table-custom tbody,
        .table-custom tr,
        .table-custom td {
            display: block;
            width: 100%;
        }

        .table-custom tr {
            margin-bottom: 15px;
        }

        .table-custom td {
            text-align: right;
            padding-left: 50%;
            position: relative;
        }

        .table-custom td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            width: 50%;
            padding-left: 15px;
            font-weight: bold;
            text-align: left;
            text-transform: uppercase;
        }
    }
    </style>
</head>

<body>

    <div class="container">
        <a href="{{url('HR')}}">
            <h3 class="btn btn-primary">Back</h3>
        </a>
        <h2 class="text-center">Employee Weekly Schedule</h2>
        <table class="table table-hover table-custom">
            <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                    <th>Sunday</th>
                </tr>
            </thead>
            <tbody>
                @foreach($schedules as $sched)
                @php
                $presentDays = json_decode($sched->present_days, true) ?? [];
                $daysOff = json_decode($sched->dayoff, true) ?? [];
                @endphp

                <tr>
                    <td>{{ $sched->name }}</td>

                    @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                    <td data-label="{{ $day }}">
                        @if(in_array($day, $presentDays))
                        <span class="work-day">
                            <p>Shift Time</p> {{ $sched->shift_start_time }} -
                            {{ $sched->shift_end_time }}
                        </span>
                        @elseif(in_array($day, $daysOff))
                        <span class="off-day">Day Off</span>
                        @else
                        N/A
                        @endif
                    </td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>