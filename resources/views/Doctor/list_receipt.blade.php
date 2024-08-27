<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Receipts Table</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
    .table-custom {
        margin: 20px auto;
        width: 80%;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .table-custom thead {
        background-color: #f8f9fa;
    }

    .table-custom th,
    .table-custom td {
        text-align: center;
        vertical-align: middle;
    }

    .table-custom th {
        font-weight: bold;
    }

    .table-custom td {
        padding: 10px;
    }
    </style>
</head>

<body>

    <div class="container">

        <h2 class="text-center mt-4">Patient Receipts</h2>
        <table class="table table-hover table-custom">
            <a href="{{'Doc'}}">
                <h3 class="btn btn-danger">Back</h3>
            </a>
            <thead>
                <tr>
                    <th>Name of Patient</th>
                    <th>Date</th>
                    <th>Note</th>
                    <th>Medicines</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $infos)
                <tr>
                    <td>{{$infos->name}}</td>
                    <td>{{$infos->date_receipt}}</td>
                    <td>{{$infos->note_med_receipts}}</td>
                    <td>{{$infos->list_medicine}}</td>


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