@include('includes.header')

<body class="d-flex align-items-center justify-content-center vh-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mx-auto">
                <div class="subscription-form text-center">
                    <a href="/" class="m-3" style="text-decoration: none;"><span
                            class="m-3 fa fa-arrow-left"></span>Back to
                        Dashboard</a>
                    <h3 class="d-flex align-items-center mb-3 mt-3"><span>Welcome To Sugarcane Anytime !</span></h3>
                    <form action="/users/insert" method="POST" class="mb-3">@csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter your Name" name="name"
                                autofocus>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Enter your Password"
                                name="password">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Enter your Email" name="email">
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" placeholder="Enter your Number" name="number">
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Sign Up" class="btn btn-primary w-100">
                        </div>
                    </form>
                    <p class="mt-3">Have an account? <a href="/login">Sign In</a></p>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ URL::asset('frontend/images/sofa.png') }}" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
    @include('includes.scripts')
    @include('includes.pageEnd')
