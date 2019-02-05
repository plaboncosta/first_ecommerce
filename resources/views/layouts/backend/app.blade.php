@include('layouts.backend.partial.top')
<!-- WRAPPER -->
<div id="wrapper">
    @include('layouts.backend.partial.header')
    <!-- MAIN -->
    @yield('content')
    <!-- END MAIN -->
    <div class="clearfix"></div>
    @include('layouts.backend.partial.footer')
</div>
<!-- END WRAPPER -->
@include('layouts.backend.partial.bottom')
