<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Equipments in Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
</head>

<body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Hosptail ERP System</h3>
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
                        <h3 class="text-white">Products</h3>
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
                                <th>Action</th>
                            </tr>
                            @if ($products->isNotEmpty())
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>
                                    @if ($product->imagez != "")
                                    <img width="50" src="{{('uploads/products/'.$product->imagez) }}" alt="">
                                    @endif
                                </td>
                                <td>{{ $product->ProductName }}</td>
                                <td>{{ $product->Status }}</td>
                                <td>{{ $product->UnitOrders }}</td>
                                <td>{{ $product->UnitStock }}</td>

                                <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d M, Y') }}</td>
                                <td>
                                    <a href="{{ route('Hr.products.edit',$product->id) }}" class="btn btn-dark">Edit</a>
                                    <a onclick="confirmation(event)" class="btn btn-danger"
                                        href="{{url('delete',$product->id)}}">Delete</a>




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

</body>

</html>



<script type="text/javascript">
function confirmation(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');
    console.log(urlToRedirect);

    swal({
            title: "Are you sure to delete this?",
            text: "You will not be able to recover this!",
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