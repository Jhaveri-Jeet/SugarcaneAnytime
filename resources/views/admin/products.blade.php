@include('admin.includes.header')
@include('admin.includes.sideBar')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h4 class="card-title col">All Products</h4>
                            <a href="/admin/products/addProduct" class="btn btn-primary col-1">Add</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>CurrentQuantity</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/' . $product->image) }}"
                                                    alt="{{ $product->image }}" height="50px" width="50px" />
                                            </td>
                                            <td>{{ $product->currentQuantity }}</td>
                                            <td><a href="/admin/products/editProduct/{{ $product->id }}"
                                                    class="btn btn-dark">Update</a></td>
                                            <td> <a href="/admin/products/delete/{{ $product->id }}"
                                                    class="btn btn-dark">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.includes.footer')
    @include('admin.includes.script')
    @include('admin.includes.pageEnd')
