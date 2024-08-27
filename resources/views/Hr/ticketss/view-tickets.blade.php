<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
        padding: 20px;
    }

    .table-container {
        max-width: 800px;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .table-container h2 {
        margin-bottom: 20px;
        font-size: 24px;
        text-align: center;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }
    </style>
</head>

<body>

    <div class="table-container">
        <a href="{{url('HR')}}"><button class="btn btn-primary" style="margin-left:670px;">Back</button></a>
        <h2>Ticket List</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Description</th>
                        <th>Priority</th>
                        <th>Actions</th>

                    </tr>
                </thead>

                @foreach($datas as $tix )
                <tr>
                    <td>{{$tix->name}}</td>
                    <td>{{$tix->email}}</td>
                    <td>{{$tix->subject}}</td>
                    <td>{{$tix->description}}</td>
                    <td>{{$tix->priority}}</td>

                    <td>
                        <a href="{{url('/resolve',$tix->id)}}" class="btn btn-primary" style="font-size: 10px;
">View</a>
                        <a href="" class="btn btn-danger" style="font-size: 10px;
">Close</a>
                        <a href="" class="btn btn-success" style="font-size: 10px;
">Solve</a>


                    </td>


                </tr>
                @endforeach

            </table>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>