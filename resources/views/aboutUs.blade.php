@include('includes.header')
@include('includes.navbar')
@include('includes.heroSection')

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
