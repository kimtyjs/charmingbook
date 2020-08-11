@extends('layouts.front')
@section('title', 'Checkout Page')

@push('styles')
    <style>

        .StripeElement {

            width: 100%;
            height: 46px;
            border: 1px solid #ebebeb;
            padding: 16px 16px 16px 20px;
            font-size: 16px;
            color: #b2b2b2;
            border-radius: 4px;
        }

        .StripeElement--focus {
        // box-shadow: 0 1px 3px 0 #cfd7df;
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

        .remove-coupon {
            display: inline-block;
            margin-left: 15px;
            margin-right: 15px;
        }

    </style>
@endpush

@section('search')
    <section class="hero hero-normal">
       @component('components.search') @endcomponent
    </section>
@endsection

@section('content')
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="checkout spad">
        <div class="container">
            <div class="row justify-content-center">
                @if(!session()->has('coupon'))
                    <div class="col-lg-7 col-md-5">
                        <div class="shoping__continue">
                            <div class="shoping__discount">
                                <h5>Discount Codes</h5>
                                <form action="{{route('coupon.store')}}" method="post">
                                    {{ csrf_field() }}
                                    <input type="text" name="coupon_code" id="coupon_code" placeholder="Enter your coupon code">
                                    <button type="submit" class="site-btn">APPLY COUPON</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
                @if(session()->has('coupon'))
                    <div class="col-lg-5 col-md-7 d-flex align-items-end">
                        <h5>Discount Removing</h5>
                        <span>Want to remove the Coupon? Price of prodcut will be not affected</span>
                        <div class="remove-coupon">
                            <form action="{{route('coupon.destroy')}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <button class="btn btn-secondary btn-sm" type="submit">Remove</button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-sm-12">
                    @if (session()->has('success_message'))
                        <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                            {{ session()->get('success_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if(count($errors) > 0)
                        <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    @endif
                </div>
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code--}}
{{--                    </h6>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row">
                <div class="col-sm-12">
                    <div class="checkout__form">
                        <h4>Billing Details</h4>
                        <form action="{{route('checkout.store')}}" method="POST" id="payment-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-7 col-md-5">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="checkout__input">
                                                <p>UserName<span>*</span></p>
                                                <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" readonly required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="checkout__input">
                                                <p>Email<span>*</span></p>
                                                <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" readonly required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="checkout__input">
                                                <p>Country<span>*</span></p>
                                                <input type="text" name="country" id="country" value="{{old('country')}}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="checkout__input">
                                                <p>City/State<span>*</span></p>
                                                <input type="text" name="city" id="city" value="{{old('city')}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkout__input">
                                        <p>Address<span>*</span></p>
                                        <input type="text" name="address" id="address" value="{{old('address')}}" class="checkout__input__add" required>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="checkout__input">
                                                <p>Postcode / ZIP<span>*</span></p>
                                                <input type="text" name="postalcode" id="postalcode" value="{{old('postalcode')}}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="checkout__input">
                                                <p>Phone Number<span>*</span></p>
                                                <input type="text" name="phonenumber" id="phonenumber" value="{{old('phonenumber')}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <h4>Payment Details</h4>
                                    <div class="checkout__input">
                                        <p>Name on card<span>*</span></p>
                                        <input type="text" name="name_on_card" id="name_on_card" value="" class="checkout__input__add">
                                    </div>
                                    <div class="checkout__input">
                                        <label for="card-element" class="m-b-20">Credit card or Debit Card</label>
                                        <div id="card-element"></div>
                                        <div id="card-errors" role="alert"></div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-7">
                                    <div class="checkout__order">
                                        <h4>Your Order</h4>
                                        <div class="checkout__order__products">Products <span>Total</span></div>
                                        <ul>
                                            @foreach(Cart::content() as $item)
                                                <li>
                                                    {{ $item->name }} <span> {{ $item->qty }} item(s)</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="checkout__order__subtotal">Subtotal
                                            <span>{{ presentPrice($subtotal) }}</span>
                                        </div>
                                        @if(session()->has('coupon'))
                                            <div class="checkout__order__discount">
                                                Discount
                                                <span>{{ presentPrice($discount) }}</span>
                                            </div>
                                            <hr>
                                            <div class="checkout__order__discount">
                                                NewSubtotal
                                                <span>{{ presentPrice($newSubtotal) }}</span>
                                            </div>
                                            <hr>
                                        @endif
                                        <div class="checkout__order__discount">
                                            Tax(13%) <span>{{ presentPrice($newTax) }}</span>
                                        </div>
                                        <div class="checkout__order__total">
                                            Total<span>{{ presentPrice($newTotal) }}</span>
                                        </div>
                                        <div class="checkout__input__checkbox">
                                            <label for="payment">
                                                Check Payment
                                                <input type="checkbox" id="payment">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="checkout__input__checkbox">
                                            <label for="paypal">
                                                Paypal
                                                <input type="checkbox" id="paypal">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <button type="submit" id="complete-order" class="site-btn">ORDER NOW</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        (function () {

            var stripe = Stripe('pk_test_51GtV53G6PkKgKGoEhmttSDq3pjd6EaEicSeayVSHrBL0pDELq8qiaBU5uvnX5N5ISOycjfIxETynzrALydouOHE0003zFvnl4J');

            // Create an instance of Elements
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
                base: {
                    color: '#32325d',
                    lineHeight: '18px',
                    fontFamily: '"Roboto", Helvetica Neue", Helvetica, sans-serif',
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

            // Create an instance of the card Element
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });

            // Add an instance of the card Element into the `card-element` <div>
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

            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                // Disable the submit button to prevent repeated clicks
                document.getElementById('complete-order').disabled = true;

                var options = {
                    name: document.getElementById('name_on_card').value,
                    address_line1: document.getElementById('address').value,
                    address_city: document.getElementById('city').value,
                    address_state: document.getElementById('country').value,
                    address_zip: document.getElementById('postalcode').value
                };

                stripe.createToken(card, options).then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                        // Enable the submit button
                        document.getElementById('complete-order').disabled = false;
                    } else {
                        // Send the token to your server
                        stripeTokenHandler(result.token);
                    }
                });

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

            });

        })();
    </script>
@endpush
