@include('includes.header')
@include('includes.navbar')

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Cart</h1>
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
                                <th class="product-remove">Remove</th>
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
                                    <td><a href="#" class="btn btn-black btn-sm"
                                            onclick="removeFromCart({{ $order->productId }},{{ Auth::user()->id }})">X</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <button class="btn btn-outline-black btn-sm btn-block"
                            onclick="window.location='/shop'">Continue Shopping</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-5">
                <div class="row justify-content-end">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12 text-right border-bottom mb-5">
                                <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-black">Total Quantity</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">{{ $totalQuantity }}</strong>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <span class="text-black">Total Price</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">₹ {{ $totalPrice }}</strong>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-black btn-lg py-3 btn-block"
                                    onclick="window.location='/purchaseOrder/{{ Auth::user()->id }}'">Make a
                                    purchase</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('includes.footer')
@include('includes.scripts')
<script>
    function removeFromCart(productId, userId) {
        let data = {
            productId: productId,
            userId: userId
        }
        let csrfToken = $('meta[name="csrf-token"]').attr('content');
        console.log(data);
        $.ajax({
            url: '/removeOrder',
            type: 'POST',
            data: data,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(response) {
                console.log(response);
                window.location = '/cart'
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>
@include('includes.pageEnd')
