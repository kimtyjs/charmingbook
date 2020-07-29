@extends('layouts.frontend')
@section('title', 'SearchResult')

@section('search')
    <section class="hero hero-normal">
        @component('components.search') @endcomponent
    </section>
@endsection

@section('content')
    <section class="product spad">
        <div class="container">
            @if($items->count() !== 0)
                <div class="row">
                    <div class="col-lg-3 col-md-5">
                        <div class="sidebar">
                            @include('partials.shop.shopPriceFilter')
                            @include('partials.shop.shopColorFilter')
                            @include('partials.shop.shopLatestProduct')
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7">
                        <div class="m-b-25">
                            <h3> Searching for <b>{{ request()->input('query') }}</b> </h3>
                        </div>
                        <div class="filter__item">
                            <div class="row">
                                <div class="col-lg-4 col-md-5">
                                    <div class="filter__sort">
                                        <span>Sort By</span>
                                        <select id="select_query">
                                            <option value="1" ref="https://www.google.com">Default</option>
                                            <option value="2" ref="https://www.facebook.com">Price</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="filter__found">
                                        <h6><span>{{ $items->count() }}</span> Product(s) found</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-3">
                                    <div class="filter__option">
                                        <span class="icon_grid-2x2"></span>
                                        <span class="icon_ul"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($items as $item)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="{{url('img/product', $item->image)}}">
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li>
                                                    <a href="{{route('cart.addItem', $item->id)}}">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__item__text">
                                            <h6><a href="{{route('shop.show', $item->slug)}}">{{ $item->name }}</a></h6>
                                            <h5>{{ presentPrice($item->price) }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @else
                <div class="row">
                    <h3>Product Not found</h3>
                </div>
            @endif
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.getElementById('select_query').onchange = function () {
            window.location.href = this.children[this.selectedIndex].getAttribute('ref');
        }
    </script>
@endpush
