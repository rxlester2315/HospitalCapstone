<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        padding: 20px;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }
    </style>
</head>

<body>

    <div class="container">
        <h1>My Doctor List</h1>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>

                    <th scope="col">Name</th>
                    <th scope="col">Specialization</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Contact</th>


                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $doc)
                <tr>
                    <td>{{$doc->employees}}</td>
                    <td>{{$doc->departments}}</td>
                    <td>{{$doc->doctor->id}}</td>
                    <td>
                        <a href="{{url('chatdoc/' .$doc->doctor->id)}}" class="btn btn-info">Send Message</a>
                    </td>


                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>