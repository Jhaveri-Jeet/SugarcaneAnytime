<body>
    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
        <div class="container">
            <a class="navbar-brand" href="/">Furni<span>.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active" id="dashboardlink">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/shop">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="/aboutUs">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contactUs">Contact us</a></li>
                </ul>
                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    @if (Auth::user() && Auth::user()->roleId == 2)
                        <li><a class="nav-link" href="/userLogout"><img src="{{ URL::asset('frontend/images/logout.png') }}"
                                    width="18" height="20"></a>
                        </li>
                    @else
                        <li><a class="nav-link" href="/login"><img
                                    src="{{ URL::asset('frontend/images/user.svg') }}"></a>
                        </li>
                    @endif
                    <li><a class="nav-link" href="/cart"><img src="{{ URL::asset('frontend/images/cart.svg') }}"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header/Navigation -->
