<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="admins/assets/images/logo/logo.png" />

        <title>Login</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="admins/assets/css/bootstrap.css">
        <link rel="stylesheet" href="admins/assets/vendors/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="admins/assets/css/app.css">
        <link rel="stylesheet" href="admins/assets/css/pages/auth.css">
        <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.30/build/spline-viewer.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    </head>


    <body>




        <div id="auth">
            <div class="row h-100">
                <div class="col-lg-5 col-12">
                    <div id="auth-left">
                        <div class="auth-logo" style="width:10vh;">
                            <a href="{{url('/')}}"><img src="admins/assets/images/logo/logo.png" alt="Comcare"></a>
                        </div>
                        {{-- message --}}
                        {!! Toastr::message() !!}
                        <h1 class="auth-title animate__animated animate__zoomInDown ">Login</h1>
                        <p class="auth-subtitle mb-5 animate__animated animate__zoomInDown">Welcome! Please Log In to
                            Manage Your Healthcare Needs.


                        </p>
                        @if(session()->has('error'))
                        <div class="text-danger text-center text-bold">
                            {{ session()->get('error') }}
                        </div>
                        @endif
                        <br>
                        <form method="POST" action="{{ route('login') }}" class="md-float-material">
                            @csrf

                            @if (session('wrong'))
                            <div class="alert alert-light-danger color-danger" role="alert"><i
                                    class="bi bi-exclamation-circle"></i>
                                {{ session('wrong') }}
                            </div>
                            @endif





                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="text"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror animate__animated animate__zoomInDown "
                                    name="email" value="{{ old('email') }}" placeholder="Enter email">
                                <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror animate__animated animate__zoomInDown"
                                    name="password" placeholder="Enter Password">
                                <div class="form-control-icon">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                        </form>


                        <div class="text-center mt-5 text-lg fs-4">
                            <p class="text-gray-600">Don't have an account? <a href="{{url('guessaccount')}}"
                                    class="font-bold animate__animated animate__zoomInDown ">Sign
                                    up</a>.</p>
                            <p><a class="font-bold animate__animated animate__zoomInDown "
                                    href="{{url('forgotpassword')}}">Forgot password?</a>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <div id="auth-right">


                        <div class="info">
                            <h2><span class="auto-type"> </span></h2>

                        </div>

                        <div class="logos">


                            <img width="300px;" src="admins/assets/images/logo/logo.png" alt="Comcare">



                        </div>
                        <!-- <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

                    <script>
                    var typed = new Typed(".auto-type", {
                        strings: ["Welcome to Comcare ", "Your Health is Our Priority"],
                        typeSpeed: 50, // Faster typing speed
                        backSpeed: 100, // Adjust back speed if desired
                        loop: true
                    });
                    </script> -->





                    </div>
                </div>
            </div>
        </div>


    </body>

</html>