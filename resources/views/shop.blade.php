@include('includes.header')
@include('includes.navbar')

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Shop</h1>
                </div>
            </div>
            <div class="col-lg-7">

            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="">
                        <img src="{{ URL::asset('uploads/') . '/' . $product->image }}"
                            class="img-fluid product-thumbnail">
                        @if (Auth::check())
                            <input type="hidden" id="userId" value="{{ Auth::user()->id }}" />
                        @endif
                        <input type="hidden" id="productId" value="{{ $product->id }}" />
                        <input type="hidden" id="price" value="{{ $product->price }}" />
                        <h3 class="product-title">{{ $product->name }}</h3>
                        <strong class="product-price">₹ {{ $product->price }}</strong>
                        <span class="icon-cross" onclick="createOrder({{ $product->id }},{{ $product->price }})"><img
                                src="{{ URL::asset('frontend/images/cross.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>


@include('includes.footer')
@include('includes.scripts')
<script>
    function createOrder(productId, price) {
        var userId = $("#userId").val();
        if (!userId) {
            alert("Login first to add to cart");
            return;
        }

        let data = {
            userId: userId,
            productId: productId,
            price: price,
            quantity: 1,
        }

        let csrfToken = $('meta[name="csrf-token"]').attr('content');
        console.log(data);
        $.ajax({
            url: '/createOrder',
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
