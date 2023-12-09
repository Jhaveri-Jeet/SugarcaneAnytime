@include('includes.header')

<body class="d-flex align-items-center justify-content-center vh-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <div class="subscription-form text-center">
                    <a href="/" class="m-3" style="text-decoration: none;"><span
                            class="m-3 fa fa-arrow-left"></span>Back to
                        Dashboard</a>
                    <h3 class="d-flex align-items-center mb-3 mt-3"><span>Welcome Back !</span></h3>
                    <form class="mb-3" action="/checkUser" method="POST">@csrf
                        <div class="mb-4">
                            <input type="email" class="form-control" name="email" placeholder="Enter your Email"
                                autofocus>
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control" name="password"
                                placeholder="Enter your Password">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary w-100" type="submit">
                                Sign In
                            </button>
                        </div>
                    </form>
                    <p class="mt-3">Don't have an account? <a href="/register">Sign Up</a></p>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ URL::asset('frontend/images/sofa.png') }}" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
    @include('includes.scripts')
    @include('includes.pageEnd')
    {{-- </body> --}}
