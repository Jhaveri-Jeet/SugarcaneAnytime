@include('includes.header')
@include('includes.navbar')

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Profile</h1>
                </div>
            </div>
            <div class="col-lg-7">

            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->
<section class="section about-section gray-bg untree_co-section before-footer-section" id="about">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="about-text go-to">
                    <h3 class="dark-color">About Me</h3>
                    <h6 class="theme-color lead">{{ $user->name }}</h6>
                    <div class="row about-list">
                        <div class="col-md-6 mt-4">
                            <div class="media">
                                <label>Password</label>
                                <p>*******</p>
                            </div>
                            <div class="media">
                                <label>Address</label>
                                <p>{{ $user->address }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="media">
                                <label>E-mail</label>
                                <p>{{ $user->email }}</p>
                            </div>
                            <div class="media">
                                <label>Phone</label>
                                <p>{{ $user->number }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-avatar">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                </div>
            </div>
        </div>
        <div class="counter mt-4">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="500" data-speed="500">₹ {{ $totalPendingOrder }}</h6>
                        <p class="m-0px font-w-600">Current Pending Purchase</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="150" data-speed="150">₹ {{ $totalAmountOfOrderPlaced }}</h6>
                        <p class="m-0px font-w-600">Total Amount of Order Placed</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="850" data-speed="850">{{ $totalOrderPlaced }}</h6>
                        <p class="m-0px font-w-600">Total Order Placed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')
@include('includes.scripts')
@include('includes.pageEnd')
