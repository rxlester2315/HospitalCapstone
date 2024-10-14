<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admins/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('admins/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admins/assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('admins/assets/css/pages/auth.css')}}">
    <style>
        
        .success-message {
    padding: 10px;
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
    border-radius: 5px;
    margin-top: 20px;
}

.error-message {
    padding: 10px;
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
    border-radius: 5px;
    margin-top: 20px;
}

    </style>
</head>

<body>

    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                     <img src="{{asset('admins/assets/images/logo/logo.png')}}" alt="Comcare">
                    </div>
                    <h1 class="auth-title">Reset Password</h1>
                    <p class="auth-subtitle mb-5">Please Enter New Password</p>


                        <form action="{{route('reset.post')}}" method="POST">
                           @csrf



                           <input type="text" name="token" hidden value="{{$token}}">
                      
                       <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                name="email"  placeholder="Enter Your Email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                          
                          
                        </div>
                      
                      
                      
                        <div class="form-group position-relative has-icon-left mb-4">
                            <label for="form-label">New Password</label>
                            <input type="password"
                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                name="password" placeholder="Enter New Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                     
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <label for="form-label">Confirm Password</label>
                            <input type="password"  class="form-control form-control-lg" name="password_confirmation"
                                placeholder=" Confirm Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Submit</button>
                 </form>
                   
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