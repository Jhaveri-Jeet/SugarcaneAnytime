<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    var currentURL = window.location.href;
    var navLinks = document.querySelectorAll('.nav-item a');
    $('#dashboardlink').addClass('active');

    for (var i = 0; i < navLinks.length; i++) {
        var link = navLinks[i];
        if (link.href === currentURL) {
            $('#dashboardlink').removeClass('active');
            link.parentNode.classList.add('active');
        }
    }
</script>

<script src="{{ URL::asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('frontend/js/tiny-slider.js') }}"></script>
<script src="{{ URL::asset('frontend/js/custom.js') }}"></script>
