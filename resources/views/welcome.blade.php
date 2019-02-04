
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Site Title Here</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/meanmenu.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/default.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!--header-start-->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header-top-info text-right">
                            <h5><button data-toggle="modal" data-target="#exampleModalCenter">MOU Balance: XXXXXX</button> | <a href="#">Logout</a></h5>
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
                            <a href="#"><img src="{{ asset('assets/frontend') }}/img/logo/logo.png" alt="header-logo"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-9 col-md-5 offset-md-2 col-lg-5 offset-lg-3">
                        <div class="search-bar d-flex align-items-center">
                            <div class="search-form d-flex align-items-center">
                                <span>search</span>
                                <form action="#">
                                    <input type="text">
                                    <button>
                                    <i class="ti-search"></i>
                                </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=" col-6 col-sm-5 offset-1 offset-md-0 col-md-3 col-lg-2 pl-0">
                        <div class="My-cart"> <i class="fas fa-shopping-cart"></i><button class="btn" type="submit">My Cart: 8</button></div>
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
                                    <li> <a href="#">Brands <i class="ti-angle-down"></i></a> </li>
                                    <li> <a href="#">Devices <i class="ti-angle-down"></i></a> </li>
                                    <li> <a href="#">Accessories <i class="ti-angle-down"></i></a> </li>
                                    <li> <a href="#">Accessories by Device<i class="ti-angle-down"></i></a> </li>
                                    <li> <a href="#">New Products </a> </li>
                                    <li> <a href="#">Best Sellers </a> </li>
                                    <li> <a href="#">Big Sale</a> </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- mobile-menu-end -->
                        <div class="main-menu d-none d-md-block">
                            <nav>
                                <ul class=" list-unstyled">
                                    <li> <a href="#">Brands <i class="ti-angle-down"></i></a> </li>
                                    <li> <a href="#">Devices <i class="ti-angle-down"></i></a> </li>
                                    <li> <a href="#">Accessories <i class="ti-angle-down"></i></a> </li>
                                    <li> <a href="#">Accessories by Device<i class="ti-angle-down"></i></a> </li>
                                    <li> <a href="#">New Products </a> </li>
                                    <li> <a href="#">Best Sellers </a> </li>
                                    <li> <a href="#">Big Sale</a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header-end-->
    <main>
        <!-- Modal -->

        <div class="modal fade modal-l" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row no-gutters width-100">
                            <div class="col-12 col-sm-4 col-md-6 text-center text-sm-left">
                                <h5 class="modal-title" id="exampleModalLongTitle">MOU Balance</h5>
                            </div>
                            <div class="col-12 col-sm-8 col-md-6 text-right text-center text-sm-right">
                                <p>Available MOU : 20,000.00 Utilized MOU : 20,000.00 </p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive table-responsive-md table-responsive-lg">
                            <table class=" table width-950">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="pt-0">
                                            <div class="modal-inner">
                                                <h4>Device</h4>
                                            </div>
                                        </th>
                                        <th scope="col" class="pt-0">
                                            <div class="modal-inner">
                                                <h4>MOU Type</h4>
                                            </div>
                                        </th>
                                        <th scope="col" class="pt-0">
                                            <div class="modal-inner">
                                                <h4>MOU to be used</h4>
                                            </div>
                                        </th>
                                        <th scope="col" class="pt-0">
                                            <div class="modal-inner">
                                                <h4>Balance to pay</h4>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="modal-body-inner">
                                                <img src="{{ asset('assets/frontend') }}/img/mobile/mobile-1.png" alt="">
                                                <span>LKR 78,800.00</span>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="modal-body-inner">
                                                <form action="#">
                                                    <input type="text" placeholder="Designation Wise">
                                                    <i class="fas fa-caret-down"></i>
                                                </form>
                                                <form action="#">
                                                    <input type="text" placeholder="Manager">
                                                    <i class="fas fa-caret-down"></i>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="modal-body-inner2">
                                                <h5 class=" d-flex align-items-center">LKR 20,000.00</h5>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="modal-body-inner">
                                                <h5>LKR 20,000.00</h5>

                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="banner-slider">
                            <div class="banner-slider slider-active">
                                <div class="banner-single-slider single-slider"></div>
                                <div class="banner-single-slider single-slider"></div>
                                <div class="banner-single-slider single-slider"></div>
                                <div class="banner-single-slider single-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="banner">
                            <div class="row">
                                <div class="col-12 col-sm-6 mb-30">
                                    <div class="banner-inner">
                                        <div class="banner-thumb over-lay-1"><img src="{{ asset('assets/frontend') }}/img/banner-group-img/banner-g-1.png" alt="banner-thumb"></div>
                                        <div class="banner-text">
                                            <h4>Browse iPhones</h4>
                                            <span>iPhone X, iPhone 8...</span>
                                            <i class="fab fa-apple"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 mb-30">
                                    <div class="banner-inner">
                                        <div class="banner-thumb over-lay-2"><img src="{{ asset('assets/frontend') }}/img/banner-group-img/banner-g-2.png" alt="banner-thumb"></div>
                                        <div class="banner-text">
                                            <h4>Browse Android phones</h4>
                                            <span>Galaxy s8, Galaxy s9...</span>
                                            <i class="fab fa-android"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 my-mb-30">
                                    <div class="banner-inner">
                                        <div class="banner-thumb over-lay-3"><img src="{{ asset('assets/frontend') }}/img/banner-group-img/banner-g-3.png" alt="banner-thumb"></div>
                                        <div class="banner-text">
                                            <h4>Not sure what your are looking for?</h4>
                                            <span>Trending phones, new...</span>
                                            <i class="fas fa-question-circle"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 my-mb-30">
                                    <div class="banner-inner">
                                        <div class="banner-thumb over-lay-4"><img src="{{ asset('assets/frontend') }}/img/banner-group-img/banner-g-4.png" alt="banner-thumb"></div>
                                        <div class="banner-text">
                                            <h4>Phone repair centre</h4>
                                            <span>iPhone repair, Tab repair..</span>
                                            <i class="fas fa-wrench"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- steps-area-start -->
        <section class="steps-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-section text-center pb-60">
                            <h2>How to order with BizCare</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3 text-left">
                        <div class="single-steps angle-right">
                            <!-- <img class="lg-none" src="{{ asset('assets/frontend') }}/img/steps-img/steps-arow-1.jpg" alt="steps-img"> -->
                            <img class="none-sm" src="{{ asset('assets/frontend') }}/img/steps-img/steps-1.png" alt="">
                            <h3>Select phone</h3>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 text-left">
                        <div class="single-steps angle-right pink">
                            <!-- <img class="lg-none" src="{{ asset('assets/frontend') }}/img/steps-img/steps-arow-2.jpg" alt="steps-img"> -->
                            <img class="none-sm" src="{{ asset('assets/frontend') }}/img/steps-img/steps-2.png" alt="">
                            <h3>Checkout</h3>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 text-left">
                        <div class="single-steps angle-right blue">
                            <!-- <img class="lg-none" src="{{ asset('assets/frontend') }}/img/steps-img/steps-arow-3.jpg" alt="steps-img"> -->
                            <img class="none-sm" src="{{ asset('assets/frontend') }}/img/steps-img/steps-3.png" alt="">
                            <h3>Pay online</h3>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 text-center">
                        <div class="single-steps">
                            <!-- <img class="lg-none" src="{{ asset('assets/frontend') }}/img/steps-img/steps-arow-4.jpg" alt="steps-img"> -->
                            <img class="none-sm" src="{{ asset('assets/frontend') }}/img/steps-img/steps-4.png" alt="">
                            <h3>Get delivered</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- steps-area-end -->
        <!-- Latest-mobile-phones-strt -->
        <div class="Latest-phones-area grey-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="title-section text-center pb-60">
                            <h2>Latest mobile phones</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="Latest-phone-active owl-carousel">
                            <div class="single-pslider">
                                <div class="wrapper">
                                    <div class="pslider-thumb">
                                        <img class="hover" src="{{ asset('assets/frontend') }}/img/slider-img/slider-7.jpg" alt="slider-img">
                                        <img src="{{ asset('assets/frontend') }}/img/slider-img/slider-1.png" alt="slider-img">
                                    </div>
                                    <div class="pslider-text">
                                        <h3>Honor 9 light</h3>
                                        <h4>LKR 34,800.00</h4>
                                        <span><del>LKR 94,400.00</del></span>
                                        <button>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="single-pslider">
                                <div class="wrapper">
                                    <div class="pslider-thumb">
                                        <img class="hover" src="{{ asset('assets/frontend') }}/img/slider-img/slider-7.jpg" alt="slider-img">
                                        <img src="{{ asset('assets/frontend') }}/img/slider-img/slider-2.png" alt="slider-img">
                                    </div>
                                    <div class="pslider-text">
                                        <h3>Honor 9 light</h3>
                                        <h4>LKR 34,800.00</h4>
                                        <span><del>LKR 94,400.00</del></span>
                                        <button>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="single-pslider">
                                <div class="wrapper">
                                    <div class="pslider-thumb">
                                        <img class="hover" src="{{ asset('assets/frontend') }}/img/slider-img/slider-7.jpg" alt="slider-img">
                                        <img src="{{ asset('assets/frontend') }}/img/slider-img/slider-3.png" alt="slider-img">
                                    </div>
                                    <div class="pslider-text">
                                        <h3>Honor 9 light</h3>
                                        <h4>LKR 34,800.00</h4>
                                        <span><del>LKR 94,400.00</del></span>
                                        <button>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="single-pslider">
                                <div class="wrapper">
                                    <div class="pslider-thumb">
                                        <img class="hover" src="{{ asset('assets/frontend') }}/img/slider-img/slider-7.jpg" alt="slider-img">
                                        <img src="{{ asset('assets/frontend') }}/img/slider-img/slider-4.png" alt="slider-img">
                                    </div>
                                    <div class="pslider-text">
                                        <h3>Honor 9 light</h3>
                                        <h4>LKR 34,800.00</h4>
                                        <span><del>LKR 94,400.00</del></span>
                                        <button>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="single-pslider">
                                <div class="wrapper">
                                    <div class="pslider-thumb">
                                        <img class="hover" src="{{ asset('assets/frontend') }}/img/slider-img/slider-7.jpg" alt="slider-img">
                                        <img src="{{ asset('assets/frontend') }}/img/slider-img/slider-5.png" alt="slider-img">
                                    </div>
                                    <div class="pslider-text">
                                        <h3>Honor 9 light</h3>
                                        <h4>LKR 34,800.00</h4>
                                        <span><del>LKR 94,400.00</del></span>
                                        <button>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="single-pslider">
                                <div class="wrapper">
                                    <div class="pslider-thumb">
                                        <img class="hover" src="{{ asset('assets/frontend') }}/img/slider-img/slider-7.jpg" alt="slider-img">
                                        <img src="{{ asset('assets/frontend') }}/img/slider-img/slider-6.png" alt="slider-img">
                                    </div>
                                    <div class="pslider-text">
                                        <h3>Honor 9 light</h3>
                                        <h4>LKR 34,800.00</h4>
                                        <span><del>LKR 94,400.00</del></span>
                                        <button>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="single-pslider">
                                <div class="wrapper">
                                    <div class="pslider-thumb">
                                        <img class="hover" src="{{ asset('assets/frontend') }}/img/slider-img/slider-7.jpg" alt="slider-img">
                                        <img src="{{ asset('assets/frontend') }}/img/slider-img/slider-1.png" alt="slider-img">
                                    </div>
                                    <div class="pslider-text">
                                        <h3>Honor 9 light</h3>
                                        <h4>LKR 34,800.00</h4>
                                        <span><del>LKR 94,400.00</del></span>
                                        <button>Add to cart</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest-mobile-phones-end -->
    </main>
    <footer class="footer-area black-bg">
        <div class="footer-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class=" col-12 col-md-5">
                        <div class="footer-info-left text-center text-md-left">
                            <div class="footer-icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <div class="footer-text">
                                <h5>+94 785 952 354</h5>
                                <h6>info@Company.com</h6>
                            </div>
                        </div>
                    </div>

                    <div class=" col-12 col-md-2 text-center">
                        <div class="footer-logo">
                            <a href="#"><img src="{{ asset('assets/frontend') }}/img/logo/white-logo.png" alt="footer-logo"></a>
                        </div>
                    </div>
                    <div class=" col-12 col-md-5">
                        <div class="footer-info-right d-flex justify-content-md-end text-center text-md-right">
                            <div class="footer-icon-right">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>

                            <div class="footer-info-t-right">
                                <h6>River Street, Blue Building</h6>
                                <span>1st. floor,Sri Lanka</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bootom-info text-center">
                            <p>© Copyright 2018. Company . All Rights Reserved | Benworldwide</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


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
    <script src="{{ asset('assets/frontend') }}/js/main.js"></script>
</body>

</html>