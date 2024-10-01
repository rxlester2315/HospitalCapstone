<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <div class="container mt-5">
        <a href="{{url('users_manage')}}">
            <h3>Backssss</h3>
        </a>
        <h2 class="mb-4">Edit User</h2>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @elseif (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <form action="{{ route('store', $data->id) }}" method="POST">
            @csrf
            @method('PUT')

            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Field</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name="name" class="form-control" value="{{ old('name', $data->name) }}">
                        </td>
                    </tr>
                    <tr>
                        <td>User ID</td>
                        <td><input type="text" name="id" class="form-control" value="{{ $data->id }}" readonly></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" class="form-control"
                                value="{{ old('email', $data->email) }}"></td>
                    </tr>
                    <tr>
                        <td>Contact Number</td>
                        <td><input type="text" name="phone_number" class="form-control"
                                value="{{ old('phone_number', $data->phone_number) }}"></td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td><input type="text" name="role_name" class="form-control"
                                value="{{ old('role_name', $data->role_name) }}" readonly></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <select name="status" class="form-select">
                                <option value="active" {{ old('status', $data->status) == 'active' ? 'selected' : '' }}>
                                    Active</option>
                                <option value="disabled"
                                    {{ old('status', $data->status) == 'disabled' ? 'selected' : '' }}>Disabled</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>