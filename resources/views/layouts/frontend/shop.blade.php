@extends('layouts.frontend.app')
@section('title', 'Shop')
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

    <div class="shopping-list-2">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-lg-4 ">
                    <div class="shopping-list-sidebar">
                        <div class="sidebar">
                            <div class="sidebar-title">
                                <h3>Category</h3>
                            </div>
                            <div class="sidebar-inner">
                                <a href="#" class=" d-flex align-items-center justify-content-between">
                                    <h5>Brands</h5>
                                    <i class="ti-plus"></i>
                                </a>
                                <a href="#" class=" d-flex align-items-center justify-content-between">
                                    <h5>Devices</h5>
                                    <i class="ti-plus"></i>
                                </a>
                                <a href="#" class=" d-flex align-items-center justify-content-between">
                                    <h5>Accessories</h5>
                                    <i class="ti-plus"></i>
                                </a>
                                <a href="#" class=" d-flex align-items-center justify-content-between">
                                    <h5>Accessories By Device</h5>
                                    <i class="ti-plus"></i>
                                </a>
                            </div>
                        </div>
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
                                                        <h6>{{ $category->name }}</h6>
                                                        <span>({{ $category->products->count() }})</span>
                                                    </div>
                                                @endforeach
                                                <div id="accordion1">
                                                    <div class="card">
                                                        <div class="card-header" id="headingOne1">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                                    data-target="#collapseOne1" aria-expanded="true"
                                                                    aria-controls="collapseOne1">
                                                                    Price
                                                                </button>
                                                            </h5>
                                                        </div>


                                                        <div id="collapseOne1" class="collaps show" aria-labelledby="headingOne1"
                                                            data-parent="#accordion1">
                                                            <div class="card-body">
                                                                <div class="cat-3">
                                                                    <h5>LKR 0.00 - LKR 5,000.00 (54) </h5>
                                                                    <h5>LKR 5,000.00 - LKR 10,,000.00 (23) </h5>
                                                                    <h5>LKR 10,,000.00 - LKR 20,000.00 (45)</h5>
                                                                    <h5>LKR 20,000.00 - LKR 80,000.00 (34) </h5>
                                                                    <h5>LKR 80,000.00 and above (02) </h5>
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
                        <div class="sidebar">
                            <div class="sidebar-title">
                                <h3>COMPARE PRODUCTS</h3>
                            </div>
                            <div class="sidebar-inner">
                                <h5>You have no items to compare.</h5>
                            </div>
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
                                                <h5>Mobile phones</h5>
                                            </div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="content-title">
                                                <a href="#">Home » <span>Mobile Phones</span></a>
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
                                                        <form action="#">
                                                            <label for="for">sort By</label>
                                                            <input type="text" placeholder="Name">
                                                            <i class="ti-angle-down"></i>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-30">
                                        <div class="main-content-mobile text-center">
                                            <img src="{{ asset('assets/frontend') }}/img/mobile/mobile-1.png" alt="image">
                                            <h6>Apple iPhone 5s</h6>
                                            <span>LKR 38,800.00</span>
                                            <button class=" btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-30">
                                        <div class="main-content-mobile text-center">
                                            <img src="{{ asset('assets/frontend') }}/img/mobile/mobile-2.png" alt="image">
                                            <h6>Apple iPhone 5s</h6>
                                            <span>LKR 38,800.00</span>
                                            <button class=" btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-30">
                                        <div class="main-content-mobile text-center">
                                            <img src="{{ asset('assets/frontend') }}/img/mobile/mobile-3.png" alt="image">
                                            <h6>Apple iPhone 5s</h6>
                                            <span>LKR 38,800.00</span>
                                            <button class=" btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-30">
                                        <div class="main-content-mobile text-center">
                                            <img src="{{ asset('assets/frontend') }}/img/mobile/mobile-4.png" alt="image">
                                            <h6>Apple iPhone 5s</h6>
                                            <span>LKR 38,800.00</span>
                                            <button class=" btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-30">
                                        <div class="main-content-mobile text-center">
                                            <img src="{{ asset('assets/frontend') }}/img/mobile/mobile-5.png" alt="image">
                                            <h6>Apple iPhone 5s</h6>
                                            <span>LKR 38,800.00</span>
                                            <button class=" btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-30">
                                        <div class="main-content-mobile text-center">
                                            <img src="{{ asset('assets/frontend') }}/img/mobile/mobile-6.png" alt="image">
                                            <h6>Apple iPhone 5s</h6>
                                            <span>LKR 38,800.00</span>
                                            <button class=" btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-30">
                                        <div class="main-content-mobile text-center">
                                            <img src="{{ asset('assets/frontend') }}/img/mobile/mobile-7.png" alt="image">
                                            <h6>Apple iPhone 5s</h6>
                                            <span>LKR 38,800.00</span>
                                            <button class=" btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-30">
                                        <div class="main-content-mobile text-center">
                                            <img src="{{ asset('assets/frontend') }}/img/mobile/mobile-8.png" alt="image">
                                            <h6>Apple iPhone 5s</h6>
                                            <span>LKR 38,800.00</span>
                                            <button class=" btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-30">
                                        <div class="main-content-mobile text-center">
                                            <img src="{{ asset('assets/frontend') }}/img/mobile/mobile-9.png" alt="image">
                                            <h6>Apple iPhone 5s</h6>
                                            <span>LKR 38,800.00</span>
                                            <button class=" btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-30">
                                        <div class="main-content-mobile text-center">
                                            <img src="{{ asset('assets/frontend') }}/img/mobile/mobile-10.png" alt="image">
                                            <h6>Apple iPhone 5s</h6>
                                            <span>LKR 38,800.00</span>
                                            <button class=" btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-30">
                                        <div class="main-content-mobile text-center">
                                            <img src="{{ asset('assets/frontend') }}/img/mobile/mobile-11.png" alt="image">
                                            <h6>Apple iPhone 5s</h6>
                                            <span>LKR 38,800.00</span>
                                            <button class=" btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-30">
                                        <div class="main-content-mobile text-center">
                                            <img src="{{ asset('assets/frontend') }}/img/mobile/mobile-12.png" alt="image">
                                            <h6>Apple iPhone 5s</h6>
                                            <span>LKR 38,800.00</span>
                                            <button class=" btn">Add to cart</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="mypagination">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-center justify-content-md-start">

                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <span aria-hidden="true"><i class="ti-angle-right"></i></span>

                                                        </a>
                                                    </li>
                                                </ul>
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
