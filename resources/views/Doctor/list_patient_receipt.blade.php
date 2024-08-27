<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Table Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
    .custom-table {
        margin: 20px;
    }

    .custom-table th {
        background-color: #007bff;
        color: #fff;
    }

    .custom-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .custom-table tr:hover {
        background-color: #ddd;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="my-4">Sample Table</h2>
        <table class="table table-striped table-bordered custom-table">
            <thead>
                <tr>
                    <th>Patient Name:</th>
                    <th>Patient ID:</th>
                    <th>List of Medicine</th>
                    <th>Date</th>
                    <th>Display</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $info)
                <tr>
                    <td>{{ $info->patient_name }}</td>
                    <td>{{ $info->patient_id }}</td>
                    <td>
                        @php
                        $medicines = json_decode($info->list_of_medicine, true);
                        @endphp
                        <ul>
                            @foreach($medicines as $medicine)
                            <li>{{ $medicine['name'] }} - {{ $medicine['dosage'] }} -
                                Quantity-{{ $medicine['quantity'] }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{ $info->date }}</td>
                    <td>
                        <a href="{{url('/view_receipt',$info->id)}}" class="btn btn-info"
                            style="margin-left:20px;">View</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>