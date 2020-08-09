@extends('layouts.frontend')
@section('title', 'WishList Page')

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
                        <h2>Wishlist</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('landing-page')}}">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{ $productWishlists }}
@endsection
