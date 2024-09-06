<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
    .table-container {
        margin: 20px;
    }

    .table thead th {
        background-color: #007bff;
        color: #fff;
    }

    .table td,
    .table th {
        vertical-align: middle;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>


    <div class="container">
        <div class="table-container">
            <div>
                <a href="{{url('users_manage')}}">
                    <h3 class="btn btn-info">Back</h3>
                </a>
            </div>
            <h2 class="text-center">Employee Information Archives</h2>
            <table class="table table-striped table-bordered">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Role</th>
                        <th>Action</th>



                    </tr>
                </thead>
                <tbody>
                    @foreach($deletedUsers as $archive)
                    <tr>
                        <td>{{$archive->id}}</td>
                        <td>{{$archive->name}}</td>
                        <td>{{$archive->email}}</td>
                        <td>{{$archive->status}}</td>
                        <td>{{$archive->role_name}}</td>
                        <td>
                            <form action="{{ route('restore', $archive->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">Restore</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>