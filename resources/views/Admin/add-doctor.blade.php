<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Add Healthcare Staff</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="hrs/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="hrs/assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="hrs/assets/css/line-awesome.min.css">

    <link rel="stylesheet" href="hrs/assets/plugins/morris/morris.css">

    <link rel="stylesheet" href="hrs/assets/css/style.css">

    <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->


</head>

<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="{{url('Admin')}}" class="logo">
                    <img src="hrs/assets/img/logo.png" width="40" height="40" alt="">
                </a>
            </div>

            <a id="toggle_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <div class="page-title-box">
                <h3>Admin Dashboard</h3>

                <div class="container" style="  padding-top: 100px ;
">
                    @if(session()->has('message'))
                    <div class="alert alert-success">


                        <button type=" button" class="close" data-dismiss="alert">
                            ✔</button>
                        {{session()->get('message')}}


                    </div>









                    @endif
                </div>

                <div class="page-title-box" style="  margin-left: 600px;   padding-top: 50px; ">
                    <h1>ADD DOCTORS</h1>


                    <form action="{{route('adddoctor')}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div>
                            <label>
                                Doctor Name:
                            </label>
                            <input style="color:black;" type="text" name="name" placeholder="Enter Doctor Name"
                                required="">
                        </div>


                        <div>
                            <label>Doctor Specialty:</label>
                            <select name="specialty" style="color:black;">
                                <option value="">--Select Doctor Specialty--</option>
                                <option value="Cardiology">Cardiology</option>
                                <option value="General Surgery">General Surgery</option>
                                <option value="Neurology">Neurology</option>
                                <option value="Ophthalmic Surgery">Ophthalmic Surgery</option>
                                <option value="Orthopaedic Surgery">Orthopaedic Surgery</option>
                            </select>
                        </div>

                        <div>
                            <label>
                                Phone Number:
                            </label>
                            <input style="color:black;" type="text" name="number" placeholder="Contact Number"
                                required="">
                        </div>

                        <div>
                            <label>
                                Room Number:
                            </label>
                            <input style="color:black;" type="text" name="room" placeholder="Room Number" required="">
                        </div>

                        <div>
                            <label>
                                Department:
                            </label>
                            <input style="color:black;" type="text" name="dep" placeholder="Enter Department"
                                required="">
                        </div>

                        <div>
                            <label>
                                Doctor Image:
                                <input style="padding-left: 150px;" type="file" name="file" required="">
                        </div>


                        <div>
                            <label>

                                <input type="submit" class="btn btn-success">

                        </div>

                    </form>

                </div>


            </div>



            <a id=" mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

            <ul class="nav user-menu">

                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                        </a>
                        <form action="search.html">
                            <input class="form-control" type="text" placeholder="Search here">
                            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow flag-nav">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        <img src="hrs/assets/img/flags/us.png" alt="" height="20"> <span>English</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="hrs/assets/img/flags/us.png" alt="" height="16"> English
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="hrs/assets/img/flags/fr.png" alt="" height="16"> French
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="hrs/assets/img/flags/es.png" alt="" height="16"> Spanish
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="hrs/assets/img/flags/de.png" alt="" height="16"> German
                        </a>
                    </div>
                </li>








            </ul>




        </div>







    </div>


    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script>
    <script src="hrs/assets/js/jquery-3.5.1.min.js"></script>

    <script src="hrs/assets/js/popper.min.js"></script>
    <script src="hrs/assets/js/bootstrap.min.js"></script>

    <script src="hrs/assets/js/jquery.slimscroll.min.js"></script>

    <script src="hrs/assets/plugins/morris/morris.min.js"></script>
    <script src="hrs/assets/plugins/raphael/raphael.min.js"></script>
    <script src="hrs/assets/js/chart.js"></script>

    <script src="hrs/assets/js/app.js"></script>
</body>

</html>