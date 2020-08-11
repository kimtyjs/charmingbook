@extends('layouts.front')
@section('title', 'Shopping Cart')

@push('styles')
    <style>
        a {
            color: #0066c0;
        }
        a:hover {
            color: #28a745;
        }

        .btn-outline-secondary {
            border-color: white;
        }

    </style>
@endpush

@section('search')
    <section class="hero hero-normal">
        @component('components.search') @endcomponent
    </section>
@endsection

@section('content')
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('landing-page')}}">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shoping-cart spad">
        <div class="container">

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
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>

            @if(Cart::count() > 0)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__table">
                            <table>
                                <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cartItems as $item)
                                    <tr>
                                        <td class="shoping__cart__item d-flex">
                                            <img src="{{url('img/product', $item->options->productImage)}}" alt="{{$item->name}}" width="80">
                                            <div class="d-flex align-items-center">
                                                <div class="text-black-50">
                                                    <h5>{{ $item->name }}</h5>
                                                    <h6>{{ $item->details }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__price">
                                           {{ presentPrice($item->price )}}
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <form action="{{ route('cart.update', $item->rowId) }}" method="POST">
                                                        <div class="input-group mb-3">
                                                            <input type="hidden" name="_method" value="PUT" />
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                            <input type="hidden" name="proId" value="{{ $item->id }}" />
                                                            <input type="number" min="1" max="10" class="form-control" value="{{ $item->qty }}" name="qty" aria-describedby="button-addon2">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Update</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">
                                            {{ presentPrice($item->options->totalPriceForEachProduct) }}
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <form id="delete_item" action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <span onclick="document.getElementById('delete_item').submit()" class="icon_close"></span>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h5 class="m-t-10 m-b-10">{{ Cart::count() }} item(s) in shopping cart.</h5>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__btns">
                            <a href="{{route('shop.index')}}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                            <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                                Upadate Cart</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping__continue">
                            <div class="shoping__discount">
                                <h5>Discount Codes</h5>
                                <form action="#">
                                    <input type="text" placeholder="Enter your coupon code">
                                    <button type="submit" class="site-btn">APPLY COUPON</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping__checkout">
                            <h5>Cart Total</h5>
                            <ul>
                                <li>Subtotal <span>{{ presentPrice($subtotal) }}</span></li>
                                <li>Tax(13) <span>{{ presentPrice($tax) }}</span></li>
                                <li>Total <span>{{ presentPrice($total)}}</span></li>
                            </ul>
                            <a href="{{route('checkout.index')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
                        </div>
                    </div>
                </div>

                @else
                    <div class="row">
                        <div class="col-lg-12">
                           <div class="display-4">
                               <p>Your Shopping Cart is empty.</p>
                               <p>Your Shopping Cart lives to serve. Give it purpose — fill it with books, CDs, DVDs, toys, electronics, and more.</p>
                               <p>
                                   Continue shopping on the
                                   <a href="{{route('landing-page')}}"> homepage</a>,
                                   learn about today's deals, or visit your Wish List.
                               </p>
                           </div>
                        </div>
                    </div>
            @endif

        </div>
    </section>
@endsection
