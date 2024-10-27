<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="admins/assets/css/bootstrap.css">
        <link rel="stylesheet" href="admins/assets/vendors/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="admins/assets/css/app.css">
        <link rel="shortcut icon" type="image/x-icon" href="admins/assets/images/logo/logo.png" />

        <link rel="stylesheet" href="admins/assets/css/pages/auth.css">

        <style>
        .checkbox-container {
            display: flex;
            align-items: center;
            font-size: 14px;
            /* Match the font size */
        }

        input[type="checkbox"] {
            margin-right: 10px;
            cursor: pointer;
            width: 20px;
            height: 20px;
        }

        .link {
            color: #007BFF;
            /* Change to your desired link color */
            text-decoration: none;
        }

        .link:hover {
            text-decoration: underline;
        }
        </style>
    </head>

    <body>

        <div id="auth">
            <div class="row h-100">
                <div class="col-lg-5 col-12">
                    <div id="auth-left">
                        <div class="auth-logo">
                            <a href="{{url('/')}}"><img src="admins/assets/images/logo/logo.png" alt="Logo"></a>
                        </div>
                        <h1 class="auth-title">Sign Up</h1>
                        <p class="auth-subtitle mb-5">Please input Basic information to proceed Appointment/Inquire</p>

                        <form method="POST" action="{{ route('createguess') }}" class="md-float-material">
                            @csrf
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="text"
                                    class="form-control form-control-lg @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" placeholder="Enter Your Name">
                                <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <input type="hidden" class="image" name="image" value="photo_defaults.jpg">

                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="text"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Enter Your Email">
                                <div class="form-control-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    name="password" placeholder="Choose Password">
                                <div class="form-control-icon">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="password" class="form-control form-control-lg" name="password_confirmation"
                                    placeholder="Choose Confirm Password">
                                <div class="form-control-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                            </div>

                            <div class="form-group position-relative has-icon-left mb-4">
                                <div class="checkbox-container">
                                    <input type="checkbox" id="terms" required>
                                    <label for="terms">I agree to the <a href="{{ route('conditioncreated') }}"
                                            class="link" target="_blank">terms and conditions</a>.</label>
                                </div>
                            </div>

                            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                        </form>


                        <div class="text-center mt-5 text-lg fs-4">
                            <p class='text-gray-600'>Already have an account? <a href="{{ route('login') }}"
                                    class="font-bold">Login</a>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <div id="auth-right">
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>