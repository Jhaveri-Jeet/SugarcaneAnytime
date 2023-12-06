@include('admin.includes.header')
@include('admin.includes.sideBar')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Product</h4>
                        <p class="card-description">Add New Product</p>
                        <form class="forms-sample" method="POST" action="/admin/products/insert"
                            enctype="multipart/form-data">@csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Name</label>
                                <input type="text" class="form-control" name="name"
                                    placeholder="Enter Product Name" autofocus />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input type="text" class="form-control" name="description"
                                    placeholder="Enter Product Description" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Price</label>
                                <input type="number" class="form-control" name="price"
                                    placeholder="Enter Product Price" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputConfirmPassword1">Current Quantity</label>
                                <input type="number" class="form-control" name="currentQuantity"
                                    placeholder="Enter Current Quantity" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputConfirmPassword1">Image</label>
                                <input type="file" class="form-control" name="image" />
                            </div>
                            <button type="submit" class="btn btn-primary me-2">
                                Submit
                            </button>
                            <a class="btn btn-light" href="/admin/products">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.includes.footer')
    @include('admin.includes.script')
    @include('admin.includes.pageEnd')
