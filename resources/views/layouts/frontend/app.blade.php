@include('layouts.frontend.partial.top')
<!-- Add your site or application content here -->
<!--header-start-->
@include('layouts.frontend.partial.header')
<!--header-end-->
@yield('content')
@include('layouts.frontend.partial.footer')


@include('layouts.frontend.partial.bottom')