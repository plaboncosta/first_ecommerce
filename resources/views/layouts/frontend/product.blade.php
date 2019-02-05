@extends('layouts.frontend.app')
@section('title', 'Product')
@push('css')

@endpush
@section('content')
<main>
    <!-- Modal -->
    <div class="modal fade modal-l" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
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
    <!-- payment-header-area-start -->
    <div class="payment-header">
        <div class="container">
            <div class="products-header">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-6">
                        <div class="products-title text-center text-md-left">
                            <h4>Samsung Galaxy S9 | 64GB</h4>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="products-title text-center text-md-right">
                            <h5><a href="#">Home »</a> <span>Samsung Galaxy S9 | 64GB</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- payment-header-area-end -->
    <!-- products-area-start -->
    <div class="products-area">
        <div class="container">
            <div class="border-gray">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4 ">
                        <div class="products-slider">
                            <!-- <div class="products-slider-active">
                            <div class="products-single-slider"></div>
                        </div> -->
                            <div class="slider-for">
                                <div class="item">
                                    <img src="{{ asset('assets/frontend') }}/img/product-img/product-1.png" />
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend') }}/img/product-img/product-2.png" />
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend') }}/img/product-img/product-3.png" />
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend') }}/img/product-img/product-2.png" />
                                </div>
                            </div>

                            <div class="slider-nav">
                                <div class="item">
                                    <img src="{{ asset('assets/frontend') }}/img/product-img/product-5.png" />
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend') }}/img/product-img/product-2.png" />
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend') }}/img/product-img/product-3.png" />
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend') }}/img/product-img/product-2.png" />
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-md-8 col-lg-8">
                        <div class="product-slider-info">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-infoinstock">
                                        <h5><span>In Stock</span> | SKU: 0002</h5>
                                        <h3>LKR 115,000.00 <del>LKR119,500.00</del></h3>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="slider-infoinstock">
                                        <button><a href="#"><img src="{{ asset('assets/frontend') }}/img/product-img/ribon.png" alt="product-img"></a>
                                            <span>24 months</span>

                                            <span>Warranty</span>
                                        </button>
                                        <button class="delivery"><a href="#"><img src="{{ asset('assets/frontend') }}/img/product-img/cart.png"
                                                    alt="product-img"></a>
                                            <span>Same day</span>

                                            <span>delivery</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="slider-infoinstock slider-infoinstock-p">
                                        <p><img src="{{ asset('assets/frontend') }}/img/product-img/track.png" alt="product-img">Islandwide
                                            delivery available</p>
                                        <p><img src="{{ asset('assets/frontend') }}/img/product-img/check.png" alt="product-img">TRCSL approved
                                            with agent warranty</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="slider-infoinstock slider-form">
                                        <form action="#">
                                            <label>QTY:</label>
                                            <input class="custom-select" type="number" placeholder="1">
                                        </form>
                                        <button class="red">add to cart</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="slider-image">
                                        <h4><i class="fas fa-plus"></i> add to compare</h4>
                                        <div class="slider-flex ">
                                            <img src="{{ asset('assets/frontend') }}/img/product-img/4g.png" alt="">
                                            <img src="{{ asset('assets/frontend') }}/img/product-img/display.png" alt="">
                                            <img src="{{ asset('assets/frontend') }}/img/product-img/processore.png" alt="">
                                            <img src="{{ asset('assets/frontend') }}/img/product-img/OS.png" alt="">
                                            <img src="{{ asset('assets/frontend') }}/img/product-img/mp.png" alt="">
                                            <img src="{{ asset('assets/frontend') }}/img/product-img/battery.png" alt="">
                                        </div>
                                        <p>The curved, 5.8-inch Infinity Screen stretches all the way to the edges, so
                                            you'll get the biggest picture possible, without added bulk. Get rich, deep
                                            contrast...</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="product-table">
        <div class="container">
            <div class="border-gray-2">
                <div class="row">
                    <div class="col-12">
                        <div class="my-table">
                            <table class="table">
                                <h4>Product Specification</h4>
                                <!-- <thead>
                                    <tr>
                                        <th scope="col"></th>
                                    </tr>
                                </thead> -->
                                <tbody>
                                    <tr>
                                        <th>Colour</th>
                                        <td>Midnight Black</td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th>Network</th>
                                        <td>GSM / HSPA / LTE</td>
                                    </tr>
                                    <tr>
                                        <th>Dimensions</th>
                                        <td> 161.9 x 76.4 x 8.8 mm (6.37 x 3.01 x 0.35 in)</td>

                                    </tr>
                                    <tr class="table-secondary">
                                        <th>Weight</th>
                                        <td> 201 g (7.09 oz)</td>

                                    </tr>
                                    <tr>
                                        <th>Build </th>
                                        <td> Front/back glass (Gorilla Glass 5), aluminum frame</td>

                                    </tr>
                                    <tr class="table-secondary">
                                        <th>Sim </th>
                                        <td> Hybrid Dual SIM (Nano-SIM, dual stand-by)</td>

                                    </tr>
                                    <tr>
                                        <th>Display </th>
                                        <td> Super AMOLED capacitive touchscreen, 16M colors</td>

                                    </tr>
                                    <tr class="table-secondary">
                                        <th>Size </th>
                                        <td> 6.4 inches, 103.2 cm2 (~83.4% screen-to-body ratio)</td>

                                    </tr>
                                    <tr>
                                        <th>Resolution </th>
                                        <td>1440 x 2960 pixels, 18.5:9 ratio (~516 ppi density)</td>

                                    </tr>
                                    <tr class="table-secondary">
                                        <th>Multitouch </th>
                                        <td>Yes</td>

                                    </tr>
                                    <tr>
                                        <th>Platform </th>
                                        <td>Android 8.1 (Oreo)</td>

                                    </tr>
                                    <tr class="table-secondary">
                                        <th>Chipset </th>
                                        <td>Exynos 9810 Octa (10 nm)</td>

                                    </tr>
                                    <tr>
                                        <th>CPU </th>
                                        <td>Octa-core (4x2.7 GHz Mongoose M3 & 4x1.8 GHz Cortex-A55)</td>

                                    </tr>
                                    <tr class="table-secondary">
                                        <th>GPU </th>
                                        <td>Mali-G72 MP18</td>

                                    </tr>
                                    <tr>
                                        <th>Memory </th>
                                        <td>microSD, up to 512 GB (uses SIM 2 slot)</td>

                                    </tr>
                                    <tr class="table-secondary">
                                        <th>Internal </th>
                                        <td>128 GB, 6 GB RAM</td>

                                    </tr>
                                    <tr>
                                        <th>Main Camera </th>
                                        <td>12 MP, f/1.5-2.4, 26mm (wide), 1/2.55", 1.4µm, dual pixel PDAF, OIS</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- products-area-end -->
</main>
@endsection
@push('js')

@endpush
