@include('includes.header')
@include('includes.navbar')

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Orders</h1>
                </div>
            </div>
            <div class="col-lg-7">

            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->



<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-quantity">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td class="product-thumbnail">
                                        <img src="{{ URL::asset('uploads/') . '/' . $order->product->image }}"
                                            alt="Image" class="img-fluid">
                                    </td>
                                    <td class="product-name">
                                        <h2 class="h5 text-black">{{ $order->product->name }}</h2>
                                    </td>
                                    <td>₹ {{ $order->price }}</td>
                                    <td>
                                        {{ $order->quantity }}
                                    </td>
                                    <td>
                                        @if ($order->status == 'pending')
                                            <i class="fa-solid fa-hourglass-half"></i>
                                        @elseif($order->status == 'completed')
                                            <i class="fa-solid fa-check-double"></i>
                                        @elseif($order->status == 'ordered')
                                            <i class="fa-solid fa-check"></i>
                                        @else
                                            <i class="fa-solid fa-ban"></i>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <button class="btn btn-outline-black btn-sm btn-block"
                            onclick="window.location='/shop'">Continue Shopping</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('includes.footer')
@include('includes.scripts')
@include('includes.pageEnd')
