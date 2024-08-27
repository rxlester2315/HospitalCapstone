<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Laravel 11 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">ERP SYSTEM</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-4">

            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{url('/HR')}}" class="btn btn-primary" style="margin-right:50px;">Back Dashboard</a>





            </div>

        </div>
        <div class="row d-flex justify-content-center">
            @if (Session::has('success'))
            <div class="col-md-10 mt-4">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
            @endif
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Current Stock as of August 17,2024</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th></th>
                                <th>Product Name</th>
                                <th>Status</th>
                                <th>Unit Orders</th>
                                <th>Unit Stock</th>
                                <th>Created at</th>
                            </tr>
                            @if ($products->isNotEmpty())
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>
                                    @if ($product->imagez != "")
                                    <img width="50" src="{{asset('uploads/products/'.$product->imagez) }}" alt="">
                                    @endif
                                </td>
                                <td>{{ $product->ProductName }}</td>
                                <td>{{ $product->Status }}</td>
                                <td>{{ $product->UnitOrders }}</td>
                                <td>{{ $product->UnitStock }}</td>

                                <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d M, Y') }}</td>


                            </tr>
                            @endforeach

                            @endif

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>