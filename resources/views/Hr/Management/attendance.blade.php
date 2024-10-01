<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css"
        integrity="sha384-..." crossorigin="anonymous">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }

    th {
        background-color: #343a40;
        color: white;
    }

    td,
    th {
        text-align: center;
        vertical-align: middle;
    }
    </style>
</head>

<body>
    <div class="container mt-5">
        <form method="GET" action="{{ url('attendance') }}" class="mb-3">
            <div>
                <a href="{{url('HR')}}" class="btn btn-info">Back to Dashboard</a>
            </div>
            <div class="row">

                <div class="col-md-4 offset-md-4">
                    <input type="date" name="date" class="form-control" value="{{ request('date') }}">
                </div>
                <div class="col-md-2">

                    <button type="submit" class="btn btn-primary">Filter by Date</button>

                </div>

                <div class="col-md-2">
                    <a href="{{ url('dl_excell?date=' . request('date')) }}" class="btn btn-success"
                        style="margin-bottom:50px;">Download Record </a>




                </div>


        </form>





        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Description</th>
                    <th>Date Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attend as $key => $item)
                <tr>
                    <td>{{ ++$key + ($attend->currentPage() - 1) * $attend->perPage() }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->date_time }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $attend->appends(['date' => request('date')])->links('pagination::bootstrap-4') }}
        </div>
    </div>
</body>

</html>