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
                <a href="{{ route('Hr.products.index') }}" class="btn btn-dark">Back</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Edit Product</h3>
                    </div>
                    <form enctype="multipart/form-data" action="{{ route('products.update',$product->id) }}"
                        method="post">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label h5">Name</label>
                                <input value="{{ old('ProductName',$product->ProductName) }}" type="text"
                                    class="@error('ProductName') is-invalid @enderror form-control-lg form-control"
                                    placeholder="Name" name="ProductName">
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
                                <input value="{{ old('UnitOrders',$product->prUnitOrdersice) }}" type="text"
                                    class="@error('UnitOrders') is-invalid @enderror form-control form-control-lg"
                                    placeholder="UnitOrders" name="UnitOrders">
                                @error('UnitOrders')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Unit Stock</label>
                                <input value="{{ old('UnitStock',$product->UnitStock) }}" type="text"
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

                                @if ($product->imagez != "")
                                <img class="w-50 my-3" src="{{ ('uploads/products/'.$product->imagez) }}" alt="">
                                @endif
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>