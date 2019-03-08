@extends('layouts.frontend.app')
@section('title', 'Checkout')
@push('css')
<script src="https://js.stripe.com/v3/"></script>
    <style>
        **
        * The CSS shown here will not be introduced in the Quickstart guide, but shows
        * how you can use CSS to style your Element's container.
        */
        .StripeElement {
            background-color: white;
            padding: 16px 16px;
            border: 1px solid #ebdfdf !important;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }

        #card-errors {
            color: #fa755a;
        }
    </style>
@endpush
@section('content')
<main>
    <!-- Modal -->
    @include('layouts.frontend.partial.modal')
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
                            <a href="{{ route('shop') }}"><button type="button">Continue Shopping</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- payment-header-area-end -->
    {{-- @php
        $payment_message = Session::get('payment_message');
    @endphp --}}
    <!-- payment-area-start -->
    <section class="payment-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    {{-- @if(Session::has('payment_message'))
                        <div class="alert alert-success" role="alert">
                            {{ $payment_message }}
                        </div>
                    @endif --}}
                    {{-- <div class="row">
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
                    </div> --}}
                    <div class="company-info">
                        <div class="row">
                            <div class="col-12">
                                <div class="payment-method-title text-left">
                                    <h3> <span>1</span> Payment with customer information</h3>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('checkout.store') }}" method="POST" id="payment-form">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <label for="name">Name*</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}">
                                </div>
                                <div class="col-6 pr-0">
                                    <label for="email">Email address*</label>
                                    <input type="text" id="email" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="col-6">
                                    <label for="phone">Phone Number*</label>
                                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
                                </div>
                                <div class="col-12">
                                    <label for="address">Address*</label>
                                    <input type="text" id="address" name="address" value="{{ old('address') }}">
                                </div>
                                <div class="col-12">
                                    <label for="country">Country*</label>
                                    <input id="country" type="text" placeholder="Sri Lanka" name="country" value="{{ old('country') }}">
                                    <i class=" fas fa-angle-down"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 pr-0">
                                    <div class="form">
                                        <label for="city">City*</label>
                                        <input id="city" name="city" type="text" value="{{ old('city') }}">
                                    </div>
                                </div>
                                <div class="col-12  col-md-12 col-lg-3 pr-0">
                                    <div class="form">
                                        <label name="province">State/Province*</label>
                                        <input id="province" name="province" type="text" placeholder="Select" value="{{ old('province') }}">
                                        <i class=" fas fa-angle-down"></i>
                                    </div>
                                </div>
                                <div class="col-12  col-md-12 col-lg-3">
                                    <div class="form">
                                        <label for="postalcode">Zip/Postal Code*</label>
                                        <input id="postalcode" name="postalcode" type="text" value="{{ old('postalcode') }}">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                {{-- <div class="col-12">
                                    <div class="form-info">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                        <h5>Ship to a different address</h5>
                                    </div>
                                </div> --}}

                                <div class="col-12">
                                    <label for="name_on_card">Name on card*</label>
                                    <input type="text" name="name_on_card" id="name_on_card" value="{{ old('name_on_card') }}">
                                </div>

                                {{-- Stripe Card Payment --}}
                                <div class="col-12">
                                    <label for="card-element">Credit or debit card*</label>
                                    <div id="card-element"></div>
                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>
                                </div>

                                <div class="col-12 mt-5">
                                    <div class="form-info-button text-right">
                                        {{-- <button class="gray-button" type="button">Back</button> --}}
                                        <button class="red-button" type="submit">Confirm & Pay</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="Order-Summary">
                        <div class="Order-inner">
                            <h4>Order Summary</h4>
                            @foreach(Cart::content() as $item)
                                <div class="Order">
                                    <h6>{{ $item->name }}</h6>
                                    @php 
                                        $single_product_subtotal = $item->model->present_price * $item->qty;
                                    @endphp
                                    <h5>LKR {{ $single_product_subtotal}}</h5>
                                </div>
                            @endforeach
                            <div class="subtotal-check-out">
                                <h5>Subtotal</h5>
                                <h5>LKR {{ Cart::subtotal() }}</h5>
                            </div>
                            <div class="Order-check-out">
                                <h5>Tax (VAT + NBT)</h5>
                                <h5>LKR {{ Cart::tax() }}</h5>
                            </div>
                            <div class="final-check-out d-flex justify-content-between">
                                <h4>Total</h4>
                                <h4>LKR {{ Cart::total() }}</h4>
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
    <script>
        (function(){

            // Create a Stripe client.
            var stripe = Stripe('pk_test_WoXmBxrthPJDfiIbWrQSjO0T');

            // Create an instance of Elements.
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true,
                });

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
            event.preventDefault();

            var options = {
                name: document.getElementById('name_on_card').value,
				address_line1: document.getElementById('address').value,
				address_city: document.getElementById('city').value,
				address_state: document.getElementById('province').value,
				address_zip: document.getElementById('postalcode').value
			}

            stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
                } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
                }
            });
            });

            // Submit the form with the token ID.
            function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
            }



        })();
    </script>
@endpush
