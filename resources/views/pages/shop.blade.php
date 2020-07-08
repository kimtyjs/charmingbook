@extends('layouts.frontend')
@section('title', 'Product Detail')

@push('styles')
    <style>
        .page-item.active .page-link {
            background-color: #7fad39;
            border-color: #7fad39;
        }
        .page-link {
            color: darkgray;
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
                        <h2>Organi Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>category</h4>
                            <ul>
                                @foreach($parentCategories as $parentCategory)
                                    <li>
                                        <a href="{{ route('shop.shopFeatured',['categoryId' => $parentCategory->id, 'categorySlug' => $parentCategory->slug ]) }}">{{ $parentCategory->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @include('partials.shop.shopPriceFilter')
                        @include('partials.shop.shopColorFilter')
                        @include('partials.shop.shopLatestProduct')
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    @include('partials.shop.bestseller', ['title' => 'Bestselling', 'subTitle' => 'overAll'])
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>16</span> Products found</h6>
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
                        @foreach($products as $product)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{url('img/product', $product->image)}}">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li>
                                                <a href="{{route('cart.addItem', $product->id)}}">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="{{route('shop.show', $product->slug)}}">{{ $product->name }}</a></h6>
                                        <h5>{{ $product->presentPrice() }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
{{--                    <div class="product__pagination"></div>--}}
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
