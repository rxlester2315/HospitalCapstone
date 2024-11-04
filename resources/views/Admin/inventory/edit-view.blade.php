<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <title>Admin Edit</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

        <link rel="shortcut icon" type="image/x-icon" href="adminz/assets/img/logo.jpg">
        <link rel="stylesheet" href="adminz/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="adminz/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="adminz/assets/css/line-awesome.min.css">
        <link rel="stylesheet" href="adminz/assets/plugins/morris/morris.css">
        <link rel="stylesheet" href="adminz/assets/css/style.css">

        <script>
        if (window.history && window.history.pushState) {
            window.history.pushState(null, null, window.location.href);
            window.onpopstate = function() {
                window.history.pushState(null, null, window.location.href);
            };
        }
        </script>

    </head>

    <body>

        <div class="main-wrapper">

            <!-- Header -->
            <div class="header">
                <div class="header-left">
                    <a href="{{ url('Admin') }}" class="logo">
                        <img src="adminz/assets/img/logo.jpg" width="70px" height="70px" alt="">
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
                    <h3>Inventory </h3>
                </div>
                <ul class="nav user-menu">
                    <!-- Notifications and other nav items -->
                    <li class="nav-item dropdown">

                        <!-- Notification dropdown -->
                    </li>
                    <li class="nav-item dropdown has-arrow main-drop">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <span class="user-img"><img src="adminz/assets/img/profiles/adminimg.jpg" alt="">
                                <span class="status online"></span></span>
                            <span>Admin</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile.html">My Profile</a>
                            <a class="dropdown-item" href="settings.html">Settings</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Sidebar -->
            <div class="sidebar animate__animated  animate__zoomInUp
" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li><a href="{{ url('products') }}"><i class="la la-cog"></i><span>Create</span></a>
                            </li>

                            <li><a href="{{ url('Admin') }}"><i class="la la-cog"></i><span>Home</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <div class="page-wrapper">
                <div class="content container-fluid  animate__animated animate__slideInRight
">
                    <div class="card borde-0 shadow-lg my-4">
                        <div class="card-header bg-dark">
                            <h3 class="text-white">Products</h3>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Status</th>
                                    <th>Unit Orders</th>
                                    <th>Unit Stock</th>
                                    <th>Created at</th>
                                    <th>Edit</th>
                                    <th>Archived</th>

                                </tr>
                                @if ($products->isNotEmpty())
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>
                                        @if ($product->imagez != "")
                                        <img width="50" src="{{ 'uploads/products/'.$product->imagez }}" alt="">
                                        @endif
                                    </td>
                                    <td>{{ $product->ProductName }}</td>
                                    <td>{{ $product->Status }}</td>
                                    <td>{{ $product->UnitOrders }}</td>
                                    <td>{{ $product->UnitStock }}</td>
                                    <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d M, Y') }}</td>
                                    <td>
                                        <a href="{{ route('Product.edit',$product->id) }}" class="btn btn-dark">Edit</a>

                                    </td>
                                    <td>
                                        <form id="delete-form-{{ $product->id }}"
                                            action="{{ url('delete', $product->id) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <button type="button" class="btn btn-danger"
                                            onclick="confirmation(event, '{{ $product->id }}')">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <script type="text/javascript">
        function confirmation(ev, productId) {
            ev.preventDefault();

            swal({
                    title: "Are you sure to delete this?",
                    text: "You will not be able to recover this!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        document.getElementById('delete-form-' + productId).submit();
                    }
                });
        }
        </script>
        <script src="adminz/assets/js/jquery.min.js"></script>
        <script src="adminz/assets/js/bootstrap.min.js"></script>
        <script src="adminz/assets/js/script.js"></script>

    </body>

</html>