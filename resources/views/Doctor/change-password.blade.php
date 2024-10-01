<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../assets/css/maicons.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css" />
    <link rel="stylesheet" href="../assets/vendor/animate/animate.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>
                {{-- message --}}
                {!! Toastr::message() !!}
                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('doctors')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('changesPassword')}}">Change Password</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <center>
                    <h2>Change Passwords</h2>
                </center>

                <form method="POST" action="{{ url('/changesPasswordDoc') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="password">Current Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" id="password" required>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-outline-secondary"
                                    onclick="togglePassword('password', this)">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        @error('password') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="Newpass">New Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="Newpass" id="Newpass" required>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-outline-secondary"
                                    onclick="togglePassword('Newpass', this)">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        @error('Newpass') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="Newpass_confirmation">Confirm Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="Newpass_confirmation"
                                id="Newpass_confirmation" required>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-outline-secondary"
                                    onclick="togglePassword('Newpass_confirmation', this)">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <center>
                        <button type="submit" class="btn btn-secondary">Change Password</button>
                    </center>
                </form>
            </div>
        </div>
    </div>

    <script>
    function togglePassword(fieldId, button) {
        const passwordField = document.getElementById(fieldId);
        const icon = button.querySelector('i');

        if (passwordField.type === "password") {
            passwordField.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }
    </script>




    @if(Session::has('message'))
    <script>
    swal({
        title: "Success",
        text: "{{ Session::get('message') }}",
        icon: "success",
        buttons: {
            confirm: {
                text: "Okay",
                value: true,
                visible: true,
                className: "btn btn-primary",
                closeModal: true
            }
        }
    }).then((value) => {
        if (value) {
            // Logout and redirect to login page
            window.location.href = "{{ route('logout') }}";
        }
    });
    </script>
    @endif





</body>

</html>