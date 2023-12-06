@include('admin.includes.header')
@include('admin.includes.sideBar')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Orders</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Product Name</th>
                                        <th>Total Price</th>
                                        <th>Total Quantity</th>
                                        <th>Status</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $order->user->name }}</td>
                                            <td>{{ $order->product->name }}</td>
                                            <td>{{ $order->price }}</td>
                                            <td>{{ $order->quantity }}</td>
                                            <td>{{ $order->status }}</td>
                                            @if ($order->status === 'pending')
                                                <td><a href="/admin/orders/completeOrder/{{ $order->id }}"
                                                        class="btn btn-dark">Complete</a></td>
                                                <td> <a href="/admin/orders/notAvailable/{{ $order->id }}"
                                                        class="btn btn-dark">Not Available</a></td>
                                            @endif
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
