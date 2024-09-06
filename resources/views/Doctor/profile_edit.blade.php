<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile Information</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .profile-card {
        max-width: 800px;
        margin: 50px auto;
        padding: 30px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .profile-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .profile-picture {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-right: 20px;
    }

    .profile-info {
        width: 100%;
    }

    .profile-info h4 {
        color: #007bff;
        margin-bottom: 5px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-control {
        background-color: #f2f2f2;
        border-radius: 4px;
        border: 1px solid #ced4da;
    }

    .btn-custom {
        background-color: #007bff;
        color: #ffffff;
    }

    .btn-custom:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>


    <div class="container">
        <a href="{{url('Doc')}}">
            <h3>Backs</h3>
        </a>
        <div class="profile-card">
            <div class="profile-header">
                <img src="{{ asset('profiledoc/' . $info->avats) }}" class="profile-picture" alt="Profile Picture">

                <div class="profile-info">
                    <h4>Dr.{{ old('fullName', $info->fullName) }}</h4>
                    <p>{{ old('email', $info->Department) }} Specialist</p>
                </div>
            </div>

            <!-- Editable Personal Information Section -->
            <form action="{{route('profile-store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter full name"
                        value="{{ old('fullName', $info->fullName) }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
                        value="{{ old('email', $info->email) }}">

                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phoneNum" placeholder="Enter phone number"
                        value="{{ old('phoneNum', $info->phoneNum) }}">

                </div>

                <div class="form-group">
                    <label for="department">Department</label>
                    <select class="form-control" id="department" name="Department"
                        value="{{ old('Department', $info->Department) }}">
                        <option selected>Cardiology</option>
                        <option>Neurology</option>
                        <option>Orthopaedic Surgery</option>
                        <option>General Surgery</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter full name"
                        value="{{ old('address', $info->address) }}">
                </div>
                <div class="form-group">
                    <label for="address">Birth Date</label>
                    <input type="date" name="birthdate" class="form-control"
                        value="{{ old('birthdate', $info->birthdate) }}" />
                </div>

                <div class="form-group">
                    <label for="profilePicture">Profile Picture</label>
                    <input type="file" name="file" class="form-control-file" id="profilePicture">
                </div>


                <button type="submit" class="btn btn-custom btn-block">Save Changes</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>