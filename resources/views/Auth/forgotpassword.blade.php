<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
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
                    <h1 class="auth-title">Forgot Password</h1>
                    <p class="auth-subtitle mb-5">Please input Email Address of your account</p>

                   
                     <form action="{{route('forgotpass')}}" method="POST">
                              @csrf

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="Enter Your Email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        
                        </div>

                        <button type="submit"class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Submit</button>


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