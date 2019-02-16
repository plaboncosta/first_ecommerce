@extends('layouts.frontend.app')
@section('title', 'Product')
@push('css')
    <style>
        .quantity{
            width: 10%;
        }
        .slider-form form {
            position: relative;
            margin-right: 0px !important;
        }
        .quantity{
            margin-right: 15px !important;
            margin-top: -5px !important;
        }
        .slider-infoinstock button span {
            display: block;
            margin-bottom: -2px !important;
            font-weight: 500;
            text-align: left;
        }
    </style>
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
                            <p>Available MOU : 20,000.00 Utilized MOU : 20,000.00</p>
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
                            <h4>{{ $product->name }}</h4>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="products-title text-center text-md-right">
                            <h5><a href="#">Home »</a> <span>{{ $product->name }}</span></h5>
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
                                @foreach(json_decode($product->multiple_image) as $checking_image)
                                <div class="item">
                                    <img src="{{ Storage::disk('public')->url('product/checking/'. $checking_image) }}" />
                                </div>
                                @endforeach
                            </div>
                            <div class="slider-nav">
                                @foreach(json_decode($product->multiple_image) as $checking_image)
                                <div class="item">
                                    <img src="{{ Storage::disk('public')->url('product/checking/'. $checking_image) }}" />
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8">
                        <div class="product-slider-info">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-infoinstock">
                                        <h5><span>
                                            @if($product->stock == true)
                                            In Stock |
                                            @endif
                                        </span> SKU: 00{{ $product->id }}</h5>
                                        <h3>LKR {{ $product->present_price }} <del>LKR{{ $product->previous_price }}</del></h3>
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
                                        
                                        <form action="{{ route('cart.store') }}" method="post">
                                            @csrf
                                            <label>QTY:</label>
                                            <input class="quantity" class="custom-select" type="number" name="quantity" placeholder="1">
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" name="name" value="{{ $product->name }}">
                                            <input type="hidden" name="present_price" value="{{ $product->present_price }}">
                                            <button type="submit" class="red"><span class="pr-1">add to cart</span></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="slider-image">
                                        @if($product->compare == false)
                                            <h4><i class="fas fa-plus"></i> 
                                            <a href="{{ route('product.compare', $product->slug) }}">add to compare</a>
                                            </h4>
                                        @else
                                            <h4><i class="fas fa-minus"></i> 
                                            <a href="{{ route('product.uncompare', $product->slug) }}">un compare</a>
                                            </h4>
                                        @endif
                                        <div class="slider-flex ">
                                            @foreach(json_decode($product->featured_image) as $featured_image)
                                            <img src="{{ Storage::disk('public')->url('product/featured/'. $featured_image) }}" alt="">
                                            @endforeach
                                        </div>
                                        <p>{!! $product->description !!}</p>
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
                                <tbody>
                                    <tr>
                                        <th>Colour</th>
                                        <td>{{ $specification->Color }}</td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th>Network</th>
                                        <td>{{ $specification->Network }}</td>
                                    </tr>
                                    <tr>
                                        <th>Dimensions</th>
                                        <td>{{ $specification->Dimensions }}</td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th>Weight</th>
                                        <td>{{ $specification->Weight }}</td>
                                    </tr>
                                    <tr>
                                        <th>Build </th>
                                        <td>{{ $specification->Build }}</td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th>Sim </th>
                                        <td>{{ $specification->Sim }}</td>
                                    </tr>
                                    <tr>
                                        <th>Display </th>
                                        <td>{{ $specification->Display }}</td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th>Size </th>
                                        <td>{{ $specification->Size }}</td>
                                    </tr>
                                    <tr>
                                        <th>Resolution </th>
                                        <td>{{ $specification->Resolution }}</td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th>Multitouch </th>
                                        <td>{{ $specification->Multitouch }}</td>
                                    </tr>
                                    <tr>
                                        <th>Platform </th>
                                        <td>{{ $specification->Platform }}</td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th>Chipset </th>
                                        <td>{{ $specification->Chipset }}</td>
                                    </tr>
                                    <tr>
                                        <th>CPU </th>
                                        <td>{{ $specification->CPU }}</td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th>GPU </th>
                                        <td>{{ $specification->GPU }}</td>
                                    </tr>
                                    <tr>
                                        <th>Memory </th>
                                        <td>{{ $specification->Memory }}</td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th>Internal </th>
                                        <td>{{ $specification->Internal }}</td>
                                    </tr>
                                    <tr>
                                        <th>Main Camera </th>
                                        <td>{{ $specification->Main_Camera }}</td>
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