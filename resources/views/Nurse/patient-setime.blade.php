<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Information Form</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 20px;
    }

    .container {
        max-width: 400px;
        margin: auto;
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        min-height: 450px;
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #555;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="time"],
    select {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f9f9f9;
        color: #777;
        font-size: 16px;
        transition: border-color 0.3s;
    }

    input[readonly] {
        background-color: #e9ecef;
        cursor: not-allowed;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="time"]:focus,
    select:focus {
        border-color: #007bff;
        outline: none;
    }

    button {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 4px;
        background-color: #007bff;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #0056b3;
    }

    .time-selection {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .time-selection input[type="time"] {
        flex: 1;
        margin-right: 10px;
    }

    select {
        flex: 1;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Patient Information</h1>
        <form action="{{ route('submit.arrive', $patient->id) }}" method="POST">
            @csrf
            <!-- CSRF Token is necessary for form security -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" value="{{ $patient->name }}" readonly>
            </div>
            <div class="form-group">
                <label for="doctor">Doctor:</label>
                <input type="text" id="doctor" value="{{ $patient->employees }}" readonly>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" value="{{ $patient->phone }}" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" value="{{ $patient->email }}" readonly>
            </div>
            <div class="form-group time-selection">
                <label for="time">Arrive Time:</label>
                <input type="time" name="time" id="time" />

                <select id="time-period" name="ampm">
                    <option value="AM">AM</option>
                    <option value="PM">PM</option>
                </select>
            </div>
            <center>
                <button type="submit" class="btn btn-secondary">Submit Arrive Time</button>
            </center>
        </form>
    </div>




</body>

</html>