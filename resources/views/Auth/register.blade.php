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
        <link rel="stylesheet" href="admins/assets/css/pages/auth.css">
    </head>

    <body>

        <div id="auth">
            <div class="row h-100">
                <div class="col-lg-5 col-12">
                    <div id="auth-left">
                        <div class="auth-logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo"></a>
                        </div>
                        <h1 class="auth-title">Join Us Today
                        </h1>
                        <p class="auth-subtitle mb-5">Please input Basic information to proceed Appointment/Inquire</p>

                        <form method="POST" action="{{ route('registerAccount') }}" class="md-float-material">
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
                            {{-- insert defaults --}}
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
                                <fieldset class="form-group">
                                    <select class="form-select @error('role_name') is-invalid @enderror"
                                        name="role_name" id="role_name">
                                        <option selected disabled>Select Role Name</option>
                                        <option value="Super Admin">Super Admin</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Front Desk">Front Desk</option>
                                        <option value="Doctor">Doctor</option>
                                        <option value="Nurse">Nurse</option>
                                        <option value="Normal User">Normal User</option>
                                    </select>
                                    <div class="form-control-icon">
                                        <i class="bi bi-exclude"></i>
                                    </div>
                                </fieldset>
                                @error('role_name')
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