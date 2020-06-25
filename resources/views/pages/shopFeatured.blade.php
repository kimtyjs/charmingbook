@extends('layouts.frontend')
@section('title', 'shop By Category')

@section('search')
    <section class="hero hero-normal">
        @component('components.search') @endcomponent
    </section>
@endsection

@section('content')
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>category</h4>
                            <ul>
                                @foreach($subCats as $subCat)
                                    <li><a href="{{route('shop.shopByCategory', ['categoryId' => $subCat->id, 'categorySlug' =>$subCat->slug ])}}">{{ $subCat->name }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                        @include('partials.shop.shopPriceFilter')
                        @include('partials.shop.shopColorFilter')
                        @include('partials.shop.shopLatestProduct')
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    @include('partials.shop.bestseller', ['title' => $categoryName, 'subTitle' => 'New & Recent' ])
                    @include('partials.shop.bestseller', ['title' => $categoryName, 'subTitle' => 'Bestselling' ])
                </div>
            </div>
        </div>
    </section>
@endsection
