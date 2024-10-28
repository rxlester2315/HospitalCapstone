@extends('Super.layouts.master')
@section('menu')
@extends('Super.sidebar.usermanagement')
@endsection
@section('content')

<head>

    <style>
    body {
        background: #388e3c;
        background: linear-gradient(0deg, #388e3c 0%, #000000 100%);
        background: -webkit-linear-gradient(0deg, #388e3c 0%, #000000 100%);
        background: -moz-linear-gradient(0deg, #388e3c 0%, #000000 100%);
    }

    * {
        color: white;
    }
    </style>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
</head>
< <div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3 style="color:white;">User Management Control</h3>
                    <p style="color:white;" class="text-subtitle text-muted">User Control</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">

                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('sadview') }}"
                                    style="color:white;">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page" style="color:white; ">User Mangement
                            </li>


                        </ol>

                    </nav>

                </div>

            </div>
        </div>

        <section class="section">


            <div class="card">
                <div class="card-header">
                    User Datatable
                </div>

                <a style="margin-left:1350px;" href="{{ route('user/add/new') }}">
                    <h3 class="btn btn-primary">Add New User</h3>
                </a>
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif




                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Profile</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                                <th>Status</th>
                                <th>Role Name</th>
                                <th class="text-center">Modify</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                            <tr>
                                <td class="id">{{ ++$key }}</td>
                                <td class="name">{{ $item->name }}</td>
                                <td class="name">
                                    <div class="avatar avatar-xl">
                                        <img src="{{ URL::to('/images/'. $item->avatars) }}" alt="{{ $item->avatars }}">
                                    </div>
                                </td>
                                <td class="email">{{ $item->email }}</td>
                                <td class="phone_number">{{ $item->phone_number }}</td>
                                @if($item->status =='Active')
                                <td class="status"><span class="badge bg-success">{{ $item->status }}</span></td>
                                @endif
                                @if($item->status =='Disable')
                                <td class="status"><span class="badge bg-danger">{{ $item->status }}</span></td>
                                @endif
                                @if($item->status ==null)
                                <td class="status"><span class="badge bg-danger">{{ $item->status }}</span></td>
                                @endif
                                @if($item->role_name =='Admin')
                                <td class="role_name"><span class="badge bg-danger">{{ $item->role_name }}</span></td>
                                @endif
                                @if($item->role_name =='Super Admin')
                                <td class="role_name"><span class="badge bg-info">{{ $item->role_name }}</span></td>
                                @endif
                                @if($item->role_name =='Front Desk')
                                <td class="role_name"><span class="badge bg-success">{{ $item->role_name }}</span></td>
                                @endif
                                @if($item->role_name =='Nurse')
                                <td class="role_name"><span class="badge bg-info">{{ $item->role_name }}</span></td>
                                @endif
                                @if($item->role_name =='Human Resources')
                                <td class="role_name"><span class="badge bg-success">{{ $item->role_name }}</span></td>
                                @endif
                                @if($item->role_name =='Guess')
                                <td class="role_name"><span class="badge bg-danger">{{ $item->role_name }}</span></td>
                                @endif

                                @if($item->role_name =='Doctor')
                                <td class="role_name"><span class="badge bg-success">{{ $item->role_name }}</span></td>
                                @endif
                                @if($item->role_name =='Normal User')
                                <td class="role_name"><span class=" badge bg-warning">{{ $item->role_name }}</span></td>
                                @endif
                                <td class="text-center">

                                    <a href="{{ url('view/detail/'.$item->id) }}">
                                        <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                    </a>


                                    <a href="{{route('archivead', $item->id)}}" onclick="confirmation(event)"
                                        class="badge bg-danger"><i class="bi-trash"></i></a>

                                    <a href="{{ url('userspw/'.$item->id) }}" class="badge bg-info">
                                        <i class="bi bi-pen-fill"></i>
                                    </a>



                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    </div>

    @endsection

    <script type="text/javascript">
    function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);

        swal({
                title: "Are you sure to delete this?",
                text: "You can recover this in Archive!",
                icon: "warning",
                buttons: true,
                dangerMode: true,


            })
            .then((willCancel) => {
                if (willCancel) {
                    window.location.href = urlToRedirect;
                }
            });

    }
    </script>