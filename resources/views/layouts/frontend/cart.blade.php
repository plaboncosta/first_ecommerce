@extends('layouts.frontend.app')
@section('title', 'Cart')
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



    <div class="shopping-list-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shopping-title text-capitalize">
                        <h3>Shopping Cart</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="row ">
                        <div class="col-12">
                            <div class="shopping-header">
                                <div class="responsive">
                                    <table class="table width-800 ">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="pt-0">
                                                    <div class="items">
                                                        <h2>Items</h2>
                                                    </div>
                                                </th>
                                                <th scope="col" class="pt-0">
                                                    <div class="items">
                                                        <h2>Unit price</h2>
                                                    </div>
                                                </th>
                                                <th scope="col" class="pt-0">
                                                    <div class="items">
                                                        <h2>QTY</h2>
                                                    </div>
                                                </th>
                                                <th scope="col" class="pt-0">
                                                    <div class="items">
                                                        <h2>MOU</h2>
                                                    </div>
                                                </th>
                                                <th scope="col" class="pt-0">
                                                    <div class="items">
                                                        <h2>Subtotal</h2>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <div class="shopping-border">
                                            <tbody>
                                                <tr class="">
                                                    <th scope="row">
                                                        <div class="shopping-item d-flex align-items-center">
                                                            <i class="fas fa-times"></i>
                                                            <img src="{{ asset('assets/frontend') }}/img/shopping/item-1.png" alt="image">
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="shopping-item">
                                                            <h5>Apple iPhone 6</h5>
                                                            <span>LKR 38,800.00</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="shopping-item">
                                                            <h6>Quantity:</h6>
                                                            <form action="#">
                                                                <input type="text" placeholder="1">
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="shopping-item">
                                                            <h4>LKR 212,100.00</h4>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="shopping-item">
                                                            <h3>LKR 38,800.00</h3>
                                                            <i class="my-pencile"><img src="{{ asset('assets/frontend') }}/img/shopping/edite-icon/edite.png"
                                                                    alt=""></i>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="my-gray-border-bottom">
                                                    <th scope="row">
                                                        <div class="shopping-item d-flex align-items-center">
                                                            <i class="fas fa-times"></i>
                                                            <img src="{{ asset('assets/frontend') }}/img/shopping/item-1.png" alt="image">
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="shopping-item">
                                                            <h5>Apple iPhone 6</h5>
                                                            <span>LKR 38,800.00</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="shopping-item">
                                                            <h6>Quantity:</h6>
                                                            <form action="#">
                                                                <input type="text" placeholder="1">
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="shopping-item">
                                                            <h4>LKR 212,100.00</h4>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="shopping-item">
                                                            <h3>LKR 38,800.00</h3>
                                                            <i class="my-pencile"><img src="{{ asset('assets/frontend') }}/img/shopping/edite-icon/edite.png"
                                                                    alt=""></i>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="my-gray-border-bottom">
                                                    <th scope="row">
                                                        <div class="shopping-item d-flex align-items-center">
                                                            <i class="fas fa-times"></i>
                                                            <img src="{{ asset('assets/frontend') }}/img/shopping/item-1.png" alt="image">
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="shopping-item">
                                                            <h5>Apple iPhone 6</h5>
                                                            <span>LKR 38,800.00</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="shopping-item">
                                                            <h6>Quantity:</h6>
                                                            <form action="#">
                                                                <input type="text" placeholder="1">
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="shopping-item">
                                                            <h4>LKR 212,100.00</h4>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="shopping-item">
                                                            <h3>LKR 38,800.00</h3>
                                                            <i class="my-pencile"><img src="{{ asset('assets/frontend') }}/img/shopping/edite-icon/edite.png"
                                                                    alt=""></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </div>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-12 col-lg-4">
                    <div class="Order-Summary">
                        <div class="Order-inner">
                            <h4>Order Summary</h4>
                            <div class="Order">
                                <h6>Subtotal (3 Items)</h6>
                                <h5>LKR 0.00</h5>
                            </div>


                            <div class="Order-check-out">
                                <h5>Tax (VAT + NBT)</h5>
                                <h5>LKR 0.00</h5>
                            </div>
                            <div class="final-check-out d-flex justify-content-between">
                                <h4>Total</h4>
                                <h4>LKR 175,050.00</h4>
                            </div>

                            <div class="check-out-btna text-center">
                                <a href="#">Check remaining MOU</a>
                                <button class=" btn-block mb-20">Proceed to checkout</button>
                                <button class=" btn-block red-btn">Continue Shopping</button>
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
