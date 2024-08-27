<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Laravel 11 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
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
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Create Product</h3>
                    </div>
                    <form enctype="multipart/form-data" action="{{ route('Hr.products.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label h5">Product Name</label>
                                <input value="{{ old('ProductName') }}" type="text"
                                    class="@error('ProductName') is-invalid @enderror form-control-lg form-control"
                                    placeholder="ProductName" name="ProductName">
                                @error('ProductName')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label h5">Status</label>
                                <select name="Status" id="status"
                                    class="@error('Status') is-invalid @enderror form-control form-control-lg">
                                    <option value="">Select Status</option>
                                    <option value="Available" {{ old('Status') == 'Available' ? 'selected' : '' }}>
                                        Available</option>
                                    <option value="Low-stock" {{ old('Status') == 'Low-stock' ? 'selected' : '' }}>
                                        Low-stock</option>
                                </select>
                                @error('Status')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label h5">Unit Orders</label>
                                <input value="{{ old('UnitOrders') }}" type="text"
                                    class="@error('UnitOrders') is-invalid @enderror form-control form-control-lg"
                                    placeholder="UnitOrders" name="UnitOrders">
                                @error('UnitOrders')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Unit Stock</label>
                                <input value="{{ old('UnitStock') }}" type="text"
                                    class="@error('UnitStock') is-invalid @enderror form-control form-control-lg"
                                    placeholder="UnitStock" name="UnitStock">
                                @error('UnitStock')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label h5">Image</label>
                                <input type="file" class="form-control form-control-lg" placeholder="Price"
                                    name="imagez">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>

                    @if(Session::has('message'))
                    <script>
                    swal("Message", "{{Session::get('message')}}", 'success', {
                        button: true,
                        button: "Okay",
                        timer: 3000,


                    });
                    </script>
                    @endif
                </div>
            </div>
        </div>
    </div>

</body>



</html>