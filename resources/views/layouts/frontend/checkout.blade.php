@extends('layouts.frontend.app')
@section('title', 'Checkout')
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
            <div class="payment-border">
                <div class="row align-items-center">
                    <div class="col-5 col-sm-6">
                        <div class="payment-checkout text-md-left">
                            <h4>Checkout</h4>
                        </div>
                    </div>
                    <div class="col-7 col-sm-6">
                        <div class="payment-button text-md-right">
                            <button type="button">Continue Shopping</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- payment-header-area-end -->
    <!-- payment-area-start -->
    <section class="payment-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="payment-method-title text-left xs-mb-0">
                                <h3> <i class=" fas fa-check"></i> Payment Method</h3>
                            </div>
                        </div>
                    </div>
                    <div class="payment-method">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-xl-4">
                                <div class="payment-method-inner my-mt-30">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation1"
                                            name="radio-stacked" required>
                                        <label class="custom-control-label" for="customControlValidation1"></label>
                                    </div>
                                    <h5> Credit/Debit Card</h5>
                                    <span>Pay by credit/debit card</span>
                                    <img src="{{ asset('assets/frontend') }}/img/payment-img/visa.jpg" alt="payment-img">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                                <div class="payment-method-inner my-mt-30">
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" class="custom-control-input" id="customControlValidation3"
                                            name="radio-stacked" required>
                                        <label class="custom-control-label" for="customControlValidation3"></label>

                                    </div>
                                    <h5> Amex</h5>
                                    <span>Pay by Amex card</span>

                                    <img src="{{ asset('assets/frontend') }}/img/payment-img/american-express.jpg" alt="payment-img">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-xl-5">
                                <div class="payment-method-inner my-mt-30">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation2"
                                            name="radio-stacked" required>
                                        <label class="custom-control-label" for="customControlValidation2"></label>
                                    </div>
                                    <h5>Cheque </h5>
                                    <span>Pay by Cheque</span>
                                    <img src="{{ asset('assets/frontend') }}/img/payment-img/check.jpg" alt="payment-img">
                                    <div class="cheque-button text-left text-lg-right">
                                        <button class="gray-button" type="button">Back</button>
                                        <button type="button">Continue</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="company-info">
                        <div class="row">
                            <div class="col-12">
                                <div class="payment-method-title text-left">
                                    <h3> <span>2</span> Company and Delivery Details</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <form action="#">
                                    <label>Company Name*</label>
                                    <input type="text">
                                </form>
                            </div>
                            <div class="col-6 pr-0">
                                <form action="#">
                                    <label>Email address*</label>
                                    <input type="text">
                                </form>
                            </div>
                            <div class="col-6">
                                <form action="#">
                                    <label>Phone Number*</label>
                                    <input type="text">
                                </form>
                            </div>
                            <div class="col-12">
                                <form action="#">
                                    <label>Company Address*</label>
                                    <input type="text">
                                </form>
                            </div>
                            <div class="col-12">
                                <form action="#">
                                    <label>Country*</label>
                                    <input type="text" placeholder="Sri Lanka">
                                    <i class=" fas fa-angle-down"></i>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-6 pr-0">
                                <div class="form">
                                    <form action="#">
                                        <label>City*</label>
                                        <input type="text">
                                    </form>
                                </div>
                            </div>
                            <div class="col-12  col-md-12 col-lg-3 pr-0">
                                <div class="form">
                                    <form action="#">
                                        <label>State/Province*</label>
                                        <input type="text" placeholder="Select">
                                        <i class=" fas fa-angle-down"></i>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12  col-md-12 col-lg-3">
                                <div class="form">
                                    <form action="#">
                                        <label>Zip/Postal Code*</label>
                                        <input type="text">
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-info">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1"></label>
                                    </div>
                                    <h5>Ship to a different address</h5>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-info-button text-right">
                                    <button class="gray-button" type="button">Back</button>
                                    <button class="red-button" type="button">Confirm & Pay</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="Order-Summary">
                        <div class="Order-inner">
                            <h4>Order Summary</h4>
                            <div class="Order">
                                <h6>iPhone 5s</h6>
                                <h5>LKR 48,450.00</h5>
                            </div>
                            <div class="Order">
                                <h6>iPhone 5s</h6>
                                <h5>LKR 48,450.00</h5>
                            </div>
                            <div class="Order">
                                <h6>iPhone 5s</h6>
                                <h5>LKR 48,450.00</h5>
                            </div>
                            <div class="Order-check-out">
                                <h5>Tax (VAT + NBT)</h5>
                                <h5>LKR 0.00</h5>
                            </div>
                            <div class="final-check-out d-flex justify-content-between">
                                <h4>Total</h4>
                                <h4>LKR 175,050.00</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- payment-area-end -->
</main>
@endsection
@push('js')

@endpush
