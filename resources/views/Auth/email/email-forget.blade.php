<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            border:5px solid black;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            text-align: center;
background: #cdffd8;
background: linear-gradient(0deg,#cdffd8 0%, #94b9ff 20%);
background: -webkit-linear-gradient(0deg,#cdffd8 0%, #94b9ff 20%);
background: -moz-linear-gradient(0deg,#cdffd8 0%, #94b9ff 20%);            color: black;
            padding: 10px 0;
            border-radius: 8px 8px 0 0;
        }
        .email-content {
            padding: 20px;
        }
        .email-content h2 {
            color: black;
        }
        .reset-button {
            display: inline-block;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .reset-button:hover {
            background-color: #0056b3;
        }
        .email-footer {
            text-align: center;
            margin-top: 30px;
            font-size: 25px;
            color: #888;
        }

        .email-content p{
            font-size:15px;
            color:black;
        }


         .email-header img {
            max-height: 50px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>Password Reset Request</h1>
       <img src="{{asset('admins/assets/images/logo/logo.png')}}" alt="Comcare">


        </div>
        <div class="email-content">
            <h2>Hello,</h2>
            <p>We received a request to reset your password. Please click the button below to reset your password:</p>
            
            <a href="{{ route('reset', $token) }}" class="reset-button">Reset Password</a>
            
            <p>If you did not request a password reset, please ignore this email.</p>
            <p>Thank you, <br> Comcare Clinic</p>
        </div>
        <div class="email-footer">
            <p>&copy; {{ date('Y') }} Comcare Medical Clinic. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
