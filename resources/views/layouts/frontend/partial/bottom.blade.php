<!-- JS here -->
<script src="{{ asset('assets/frontend') }}/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/popper.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/isotope.pkgd.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/one-page-nav-min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/slick.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/jquery.meanmenu.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/ajax-form.js"></script>
<script src="{{ asset('assets/frontend') }}/js/wow.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/jquery.scrollUp.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
@stack('js')
<script src="{{ asset('assets/frontend') }}/js/main.js"></script>
<script>
    @if($errors->any())
        @foreach($errors->all() as $error)
            toastr.error('{{ $error }}', 'Access denied!', {
                closeButton: true,
                progressBar: true,
            });
        @endforeach
    @endif
</script>

{!! Toastr::message() !!}
</body>

</html>