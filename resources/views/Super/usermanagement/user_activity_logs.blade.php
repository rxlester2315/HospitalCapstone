@extends('Super.layouts.master')
@section('menu')
@extends('Super.sidebar.user_activity_log')
@endsection
@section('content')

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
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3 style="color:white;">User Activity Log</h3>
                    <p style="color:white;" class="text-subtitle text-muted">For user log lists</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('sadview') }}"
                                    style="color:white;">Dashboard</a></li>
                            <li style="color:white;" class="breadcrumb-item active" aria-current="page">User Activity
                                Log</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Log Datatable
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                                <th>Status</th>
                                <th>Role Name</th>
                                <th>Edit Info</th>

                                <th>Modify ID</th>
                                <th>Date Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activityLog as $key => $item)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone_number }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->role_name }}</td>
                                <td>{{ $item->edit_info }}</td>
                                <td>{{ $item->editor_id }}</td>
                                <td>{{ $item->date_time }}</td>
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