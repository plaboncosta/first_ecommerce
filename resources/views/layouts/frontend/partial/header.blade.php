<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-top-info text-right">
                        <h5><button style="color: blue;" data-toggle="modal" data-target="#exampleModalCenter">Check Cart List</button> | <a href="#">Total Balance: {{ Cart::total() }}</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-sm-3 col-md-2">
                    <div class="header-logo">
                    <a href="{{ route('welcome') }}"><img src="{{ asset('assets/frontend') }}/img/logo/logo.png" alt="header-logo"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-9 col-md-5 offset-md-2 col-lg-5 offset-lg-3">
                    <div class="search-bar d-flex align-items-center">
                        <div class="search-form d-flex align-items-center">
                            <span>search</span>
                        <form action="{{ route('search') }}" method="POST">
                            @csrf
                            <input id="name" type="text" name="name" value="{{ request()->input('name') }}">
                            <button type="submit">
                                <i style="color: #000; font-weight: 800;" class="ti-search"></i>
                            </button>
                        </form>
                        </div>
                    </div>
                </div>
                <div class=" col-6 col-sm-5 offset-1 offset-md-0 col-md-3 col-lg-2 pl-0">
                    <div class="My-cart"> <i class="fas fa-shopping-cart"></i><button class="btn" type="submit">My Cart: {{ Cart::count() }}</button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu-area theme-bg ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <!-- mobile-menu -->
                    <div class="mobile-menu"></div>
                    <div class="main-menu d-md-none">
                        <nav id="mobile-menu">
                            <ul class=" list-unstyled">
                            <li> <a href="{{ route('welcome') }}">Home <i class="ti-angle-down"></i></a> </li>
                                <li> <a href="{{ route('shop') }}">Shop <i class="ti-angle-down"></i></a> </li>
                                <li> <a href="#">Accessories by Device<i class="ti-angle-down"></i></a> </li>
                                <li> <a href="#">New Products </a> </li>
                                <li> <a href="#">Best Sellers </a> </li>
                                <li> <a href="{{ route('cart.index') }}">Cart</a> </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- mobile-menu-end -->
                    <div class="main-menu d-none d-md-block">
                        <nav>
                            <ul class=" list-unstyled">
                                <li> <a href="{{ route('welcome') }}">Home <i class="ti-angle-down"></i></a> </li>
                                <li> <a href="{{ route('shop') }}">Shop <i class="ti-angle-down"></i></a> </li>
                                @guest
                                    <li> <a href="{{ route('login') }}">Login </a> </li>
                                    <li> <a href="{{ route('register') }}">Register </a> </li>
                                @else
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="$
                                            event.preventDefault();
                                            document.getElementById('logout-form').submit();
                                        ">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        </form>
                                    </li>
                                @endguest
                                <li> <a href="{{ route('cart.index') }}">Cart</a> </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>