<body>
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
        <div class="container">
            <img src="{{ URL::asset('frontend/images/logo-removebg.png') }}" alt="Sugarcane Anytime" height="20%"
                width="20%">
            {{-- <a class="navbar-brand" href="/">Sugarcane Anytime<span>.</span></a> --}}
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
                <!-- ... (previous code) ... -->
                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    @if (Auth::user() && Auth::user()->roleId == 2)
                        <li>
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="userDropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="/profile">Profile</a>
                                    <a class="dropdown-item" href="/orders">Orders</a>
                                    <a class="dropdown-item" href="/userLogout">Logout</a>
                                </div>
                            </div>
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
