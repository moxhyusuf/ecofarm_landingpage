<!--====== Jquery js ======-->
<script src="{{ asset('landing/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('landing/js/vendor/modernizr-3.7.1.min.js') }}"></script>

<!--====== Bootstrap js ======-->
<script src="{{ asset('landing/js/popper.min.js') }}"></script>
<script src="{{ asset('landing/js/bootstrap.4.5.2.min.js') }}"></script>


<!--====== Scrolling Nav js ======-->
<script src="{{ asset('landing/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('landing/js/scrolling-nav.js') }}"></script>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        offset: 100
    });
</script>

<!--====== wow js ======-->
<script src="{{ asset('landing/js/wow.min.js') }}"></script>


<script>
    // const BASE_URL = "{{ url('/') }}";
    const ASSET_URL = "{{ asset('') }}";
</script>

<!--====== Main js ======-->
<script src="{{ asset('landing/js/main.js') }}"></script>

@stack('js')
