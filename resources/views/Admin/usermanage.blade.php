<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .table-form {
        margin: 50px auto;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        background-color: #ffffff;
    }

    .table thead {
        background-color: #007bff;
        color: #ffffff;
    }

    .table tbody tr {
        transition: background-color 0.3s ease;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }
    </style>
</head>

<body>

    <div class="container">
        <a href="{{ url('Admin') }}">
            <h3 class="btn btn-primary">Back</h3>
        </a>
        <div class="table-form">
            <h3 class="text-center">User Management</h3>
            <div>
                <a href="{{route('list')}}">
                    <h3 class="btn btn-primary">View Archives</h3>
                </a>
            </div>


            <table class="table table-bordered mt-5">
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
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Status</th>
                        <th scope="col">Role</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $datas)
                    <tr>
                        <td>{{ $datas->id }}</td>
                        <td>{{ $datas->name }}</td>
                        <td>{{ $datas->email }}</td>
                        <td>{{ $datas->phone_number }}</td>
                        <td>{{ $datas->status }}</td>
                        <td>{{ $datas->role_name }}</td>
                        <td>
                            <a href="{{ route('profiles', $datas->id) }}">
                                <button type="button" class="btn btn-info">Edit</button>
                            </a>
                            <a href="{{ route('archives', $datas->id) }}">
                                <button type="button" class="btn btn-danger">Archive</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>