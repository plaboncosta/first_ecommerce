@extends('layouts.frontend.app')
@section('title', 'Shop')
@push('css')
    <style>
        .mobile-phones{
            color: #d3154b !important;
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

    <div class="shopping-list-2">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-lg-4 ">
                    <div class="shopping-list-sidebar">
                        <div class="sidebar">
                            <div class="sidebar-title">
                                <h3>Shop by</h3>
                            </div>
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                Categories
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collaps show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">

                                            <div class="sidebar-inner">
                                                @foreach($categories as $category)
                                                    <div class="d-flex align-items-center justify-content-between cat-1">
                                                        <h6><a href="{{ route('shop', ['category' => $category->slug]) }}">{{ $category->name }}</a></h6>
                                                        <span>({{ $category->products->count() }})</span>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar">
                            <div class="sidebar-title">
                                <h3>COMPARE PRODUCTS</h3>
                            </div>
                            @if($compare_products->count() > 0)
                                @foreach($compare_products as $compare_product)
                                    <div class="sidebar-inner">
                                        <a href="{{ route('product.show', $compare_product->slug) }}">{{ $compare_product->name }}</a>
                                    </div>
                                @endforeach
                            @else
                                <div class="sidebar-inner">
                                    <h5>You have no items to compare.</h5>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="col-md-8 col-lg-8 ">
                    <div class="main-content">
                        <div class="row">
                            <div class="col-12">
                                <div class="main-content-title">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <div class="content-title">
                                                <h5>{{ $categoryName }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="content-title">
                                                <a href="{{ route('welcome') }}">Home » <span><a class="mobile-phones" href="{{ route('shop') }}">Mobile Phones</a></span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="main-content-header">
                                            <div class="row">
                                                <div class="col-12 col-sm-5 col-md-6">
                                                    <div class="content-title">
                                                        <h6><i class="ti-layout-grid3-alt"></i> <span>Items 1-12 of 20</span></h6>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-7 col-md-6 text-left text-sm-right">
                                                    <div class="content-title">
                                                        <h6>Price: <span><a href="{{ route('shop', ['category' => request()->category, 'sort' => 'low_high']) }}">Low to High</a></span> | <span><a href="{{ route('shop', ['category' => request()->category, 'sort' => 'high_low']) }}">High to Low</a></span>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    @forelse($products as $product)
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-30">
                                            <div class="main-content-mobile text-center">
                                                <a href="{{ route('product.show', $product->slug) }}">
                                                    <img src="{{ Storage::disk('public')->url('product/display/'. $product->image) }}" alt="image">
                                                </a>
                                                <h6><a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a></h6>
                                                <span>LKR {{ $product->present_price }}</span>
                                                <button class=" btn">Add to cart</button>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-12">
                                            <div class="alert alert-info mt-3 mb-3">
                                                No item in this category!
                                            </div>
                                        </div>
                                    @endforelse
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="mypagination">
                                            <nav aria-label="Page navigation example">
                                                {{ $products->appends(request()->input())->links() }}
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>
</main>
@endsection
@push('js')

@endpush
