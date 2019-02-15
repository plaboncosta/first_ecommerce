@extends('layouts.frontend.app')
@section('title', 'Welcome')
@push('css')
    <style>
        @foreach($sliders as $slider)
            .{{ str_slug($slider->title) }} {
                background-image: url({{ Storage::disk('public')->url('slider/') . $slider->image }}) !important;
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                height: 100%;
                width: 100%;
            }
        @endforeach
    </style>
@endpush
@section('content')
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
                            @foreach($sliders as $slider)
                            <div class="{{ str_slug($slider->title) }} single-slider"></div>
                            @endforeach
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
                        @foreach($products as $product)
                        <div class="single-pslider">
                            <div class="wrapper">
                                <div class="pslider-thumb">
                                    <img class="hover" src="{{ asset('assets/frontend') }}/img/slider-img/slider-7.jpg" alt="slider-img">
                                    <a href="{{ route('product.show', $product->slug) }}">
                                        <img style="height: 166px;" src="{{ Storage::disk('public')->url('product/display/'. $product->image) }}" alt="slider-img">
                                    </a>
                                </div>
                                <div class="pslider-text">
                                    <h3><a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a></h3>
                                    <h4>{{ $product->present_price }}</h4>
                                    <span><del>LKR {{ $product->previous_price }}</del></span>
                                    <form action="{{ route('cart.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                        <input type="hidden" name="present_price" value="{{ $product->present_price }}">
                                        <button type="submit">Add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest-mobile-phones-end -->
</main>
@endsection
@push('js')
    
@endpush