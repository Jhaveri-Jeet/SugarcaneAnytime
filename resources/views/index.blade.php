@include('includes.header')
@include('includes.navbar')
@include('includes.heroSection')

<!-- Start Product Section -->
<div class="product-section">
    <div class="container">
        <div class="row">

            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
                <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                    vulputate velit imperdiet dolor tempor tristique. </p>
                <p><a href="shop.html" class="btn">Explore</a></p>
            </div>
            <!-- End Column 1 -->

            <!-- Start Column 2 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="cart.html">
                    <img src="{{ URL::asset('frontend/images/product-1.png') }}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Nordic Chair</h3>
                    <strong class="product-price">$50.00</strong>

                    <span class="icon-cross">
                        <img src="images/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 2 -->

            <!-- Start Column 3 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="cart.html">
                    <img src="{{ URL::asset('frontend/images/product-2.png') }}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Kruzo Aero Chair</h3>
                    <strong class="product-price">$78.00</strong>

                    <span class="icon-cross">
                        <img src="images/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 3 -->

            <!-- Start Column 4 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="cart.html">
                    <img src="{{ URL::asset('frontend/images/product-3.png') }}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Ergonomic Chair</h3>
                    <strong class="product-price">$43.00</strong>

                    <span class="icon-cross">
                        <img src="images/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 4 -->

        </div>
    </div>
</div>
<!-- End Product Section -->

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h2 class="section-title">Why Choose Us</h2>
                <p>People choose Sugarcane Anytime for the unrivaled freshness that defines our sugarcane juice.
                    Harvested from the choicest sugarcane fields, our beverage encapsulates the pure essence of nature,
                    delivering a crisp and invigorating experience with every sip.</p>
                <div class="row my-5">
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{URL::asset('frontend/images/truck.svg')}}" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Fast &amp; Free Delivery</h3>
                            <p>At Sugarcane Anytime, we understand that your craving for the pure joy of sugarcane juice
                                should be satisfied swiftly. That is why we offer lightning-fast and free shipping to
                                ensure your favorite elixirs reach your doorstep without delay.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{URL::asset('frontend/images/bag.svg')}}" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Easy to Shop</h3>
                            <p>At Sugarcane Anytime, simplicity is key. Our user-friendly interfacee ensures that even
                                first-time visitors can effortlessly navigate through the website. Enjoy a clean design
                                that makes the shopping process enjoyable and stress-free.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{URL::asset('frontend/images/support.svg')}}" alt="Image" class="imf-fluid">
                            </div>
                            <h3>24/7 Support</h3>
                            <p>At Sugarcane Anytime, we understand that your sugarcane cravings do not keep regular
                                hours. That is why we are proud to offer 24/7 customer support, ensuring that assistance
                                and information are just a message or call away, day or night.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{URL::asset('frontend/images/return.svg')}}" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Hassle Free Returns</h3>
                            <p> At Sugarcane Anytime, we are committed to ensuring your satisfaction. If, for any
                                reason, you are not delighted with your purchase, our hassle-free return policy makes it
                                easy to savor the sweetness worry-free.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="{{ URL::asset('frontend/images/why-choose-us-img.jpg') }}" alt="Image"
                        class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start We Help Section -->
<div class="we-help-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="imgs-grid">
                    <div class="grid grid-1"><img src="{{URL::asset('frontend/images/img-grid-1.jpg')}}"></div>
                    <div class="grid grid-2"><img src="{{URL::asset('frontend/images/img-grid-2.jpg')}}"></div>
                    <div class="grid grid-3"><img src="{{URL::asset('frontend/images/img-grid-3.jpg')}}"></div>
                </div>
            </div>
            <div class="col-lg-5 ps-lg-5">
                <h2 class="section-title mb-4">We Help You Be Healthy</h2>
                <p>Discover a new dimension of health and well-being with our pure and natural sugarcane juice at
                    Sugarcane Anytime. We believe in the transformative power of this golden elixir, offering you not
                    just a refreshing beverage but a partner in your journey to a healthier lifestyle.</p>

                <ul class="list-unstyled custom-list my-4">
                    <li>Pure and Natural Goodness:
                        Sweet Sips Oasis Sugarcane Juice is a celebration of purity. Made from the finest, handpicked
                        sugarcane, our juice is free from artificial additives and preservatives. Enjoy the
                        unadulterated taste of nature sweetness, ensuring a refreshing and wholesome beverage
                        experience.</li>
                    <li>Health-Conscious Elixir:
                        Elevate your well-being with every sip. Our sugarcane juice is a nutrient-rich elixir, packed
                        with essential vitamins, minerals, and antioxidants. Promoting digestion, boosting immunity, and
                        offering a natural energy kick, it is a health-conscious choice for those seeking a delicious
                        way to support their overall health.</li>
                    <li>Diverse and Delightful Flavors:
                        Sweet Sips Oasis takes sugarcane juice to the next level with a diverse range of flavors. From
                        the classic pure sugarcane nectar to innovative blends featuring hints of ginger, mint, or lime,
                        our menu caters to a variety of taste preferences. Enjoy the richness of flavor in every sip,
                        ensuring there is a refreshing option for everyone.</li>
                </ul>
                <p><a herf="#" class="btn">Explore</a></p>
            </div>
        </div>
    </div>
</div>
<!-- End We Help Section -->

<!-- Start Testimonial Slider -->
<div class="testimonial-section before-footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="section-title">Testimonials</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonial-slider-wrap text-center">
                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                        <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                    </div>
                    <div class="testimonial-slider">
                        @foreach ($data['feedbacks'] as $feedback)
                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">
                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;{{ $feedback->description }}&rdquo;</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonial Slider -->

@include('includes.footer')
@include('includes.scripts')
@include('includes.pageEnd')
