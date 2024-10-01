<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Medical Receipt</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        padding: 20px;
    }

    .table-container {
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .table thead th {
        background-color: #007bff;
        color: #fff;
        text-align: center;
    }

    .table tbody td {
        text-align: center;
    }

    .btn-view {
        background-color: #28a745;
        color: white;
    }

    .btn-download {
        background-color: #007bff;
        color: white;
    }

    .btn-view:hover,
    .btn-download:hover {
        opacity: 0.8;
    }
    </style>
</head>

<body>1`


    <a href="{{url('User')}}">
        <h3 class="btn btn-info">Back</h3>
    </a>
    <div class="container table-container">
        <h2 class="text-center mb-4">Doctor Medical Receipt</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name of Doctor</th>
                    <th>Date</th>
                    <th>Note</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($receipts as $data)
                @if($data->date_receipt || $data->note_med_receipts)
                <tr>
                    <td>{{$data->employees}}</td>
                    <td>
                        @if($data->date_receipt)
                        {{$data->date_receipt}}
                        @else
                        <span>No Date Available</span>
                        @endif
                    </td>
                    <td>
                        @if($data->note_med_receipts)
                        {{$data->note_med_receipts}}
                        @else
                        <span>No Notes Available</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{url('view',$data->id)}}" class="btn btn-view">View</a>
                        <a href="{{url('dl_medicine',$data->id)}}" class="btn btn-download">Download PDF</a>
                        <a href="{{route('archivemed', $data->id)}}" class="btn btn-danger">Archive</a>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>

        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>