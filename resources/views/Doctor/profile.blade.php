<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Information</title>
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

    .profile-info p {
        margin: 0;
        color: #6c757d;
    }

    .info-group {
        margin-bottom: 20px;
    }

    .info-group h5 {
        color: #343a40;
        margin-bottom: 10px;
    }

    .info-group p {
        background-color: #f2f2f2;
        padding: 10px;
        border-radius: 4px;
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="profile-card">
            <div class="profile-header">
                <img src="{{ asset('profiledoc/' . $doctor->avats) }}" class="profile-picture" alt="Profile Picture">
                <div class="profile-info">
                    <h4>Dr. {{ $doctor->fullName }}</h4>
                    <p>{{ $doctor->Department }} Specialist</p>
                </div>
            </div>

            <!-- Personal Information Section -->
            <div class="info-group">
                <h5>Full Name</h5>
                <p>{{ $doctor->fullName }}</p>

            </div>

            <div class="info-group">
                <h5>Email</h5>
                <p>{{ $doctor->email }}</p>
            </div>

            <div class="info-group">
                <h5>Phone Number</h5>
                <p>{{ $doctor->phoneNum }}</p>
            </div>

            <div class="info-group">
                <h5>Department</h5>
                <p>{{ $doctor->Department }}</p>
            </div>

            <div class="info-group">
                <h5>Address</h5>
                <p>{{ $doctor->address }}</p>
            </div>

            <div class="info-group">
                <h5>Birthday Date</h5>
                <p>{{ $doctor->birthdate }}</p>
            </div>

            <div>
                <a href="{{ url('doc_edit', $doctor->id) }}">
                    <h3 class="btn btn-primary">Edit</h3>
                </a>
                <a href="{{url('Doc')}}">
                    <h3 class="btn btn-info">Back</h3>
                </a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>