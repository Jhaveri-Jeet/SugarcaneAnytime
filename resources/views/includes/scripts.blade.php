<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    // Get the current URL
    var currentURL = window.location.href;

    // Get all the navbar links
    var navLinks = document.querySelectorAll('.nav-item a');

    $('#dashboardlink').addClass('active');

    // Loop through each navbar link
    for (var i = 0; i < navLinks.length; i++) {
        var link = navLinks[i];
        // Check if the link's href matches the current URL
        if (link.href === currentURL) {
            $('#dashboardlink').removeClass('active');
            // Add the "active" class to the link's parent li element
            link.parentNode.classList.add('active');
        }
    }
</script>

<script src="{{ URL::asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('frontend/js/tiny-slider.js') }}"></script>
<script src="{{ URL::asset('frontend/js/custom.js') }}"></script>
