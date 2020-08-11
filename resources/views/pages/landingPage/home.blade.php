@extends('layouts.frontend')
@section('title', 'Book Store | Homepage')

@section('content')
    {{--homepage_slider--}}
    <section id="main-slider" class="carousel slide main-slider style-1 light-bg" >
        <div class="carousel-inner slider">
            <div class="item active">
                <img src="{{url('https://cdn.pixabay.com/photo/2017/12/22/08/01/literature-3033196_960_720.jpg')}}" alt=" ">
                <div class="theme-container container">
                    <div class="caption-text">
                        <div class="title-wrap">
                            <h2 class="section-title">
                                <span >
                                    <span class="funky-font blue-tag">Online </span>
                                    <span class="italic-font">Book Store </span>
                                </span>
                            </h2>
                        </div>
                        <div class="discount-wrap">
                            <h2 class="discount pink-color">Buy <span> 20% </span> off</h2>
                            <ul class="discount-list">
                                <li> <a href="#">Reading</a> </li>
                                <li> <a href="#">Discovering</a> </li>
                                <li> <a href="#">Investigating</a> </li>
                                <li> <a href="#">More</a> </li>
                            </ul>
                            <hr class="dash-divider">
                        </div>
                        <div class="slider-link">
                            <a class="blue-btn btn" href="#"> <i class="fa  fa-th-large"></i> Discover </a>
                            <a class="pink-btn btn" href="#"> Shop Now! <i class="fa fa-caret-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{url('img/slider/slide-1.png')}}" alt=" ">
                <div class="theme-container container">
                    <div class="caption-text">
                        <div class="title-wrap">
                            <h2 class="section-title">
                                <span >
                                    <span class="funky-font blue-tag">Online </span>
                                    <span class="italic-font">Shopping Store </span>
                                </span>
                            </h2>
                        </div>
                        <div class="discount-wrap">
                            <h2 class="discount pink-color">Flat <span> 20% </span> off</h2>
                            <ul class="discount-list">
                                <li> <a href="#">Apparel</a> </li>
                                <li> <a href="#">Toys</a> </li>
                                <li> <a href="#">Baby Gear</a> </li>
                                <li> <a href="#">More</a> </li>
                            </ul>
                            <hr class="dash-divider">
                        </div>
                        <div class="slider-link">
                            <a class="blue-btn btn" href="#"> <i class="fa  fa-th-large"></i> Discover </a>
                            <a class="pink-btn btn" href="#"> Shop Now! <i class="fa fa-caret-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Carousel Slide Button Start-->
        <div class="slider-pagination">
            <a class="left carousel-control slider-btn" href="#main-slider" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right carousel-control slider-btn" href="#main-slider" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </section>
    <!-- Category Start -->
    <section id="category" class="space-15">
        <div class="container theme-container">
            <div class="row">
                <div class="col-md-4 col-sm-4 category-wrap">
                    <div class="pink-border light-bg" >
                        <div class="category-content col-md-6 no-padding">
                            <div class="title-wrap">
                                <h2 class="section-title">
                                            <span>
                                                <span class="funky-font pink-tag">Chlid </span>
                                                <span class="italic-font">Collections</span>
                                            </span>
                                </h2>
                                <h3 class="sub-title-small">Up to 80% Off</h3>
                            </div>
                            <hr class="dash-divider">
                            <h4 class="baby-years pink-color">0 - 5 Years</h4>
                            <div class="category-shop">
                                <a href="#" class="pink-btn-small btn"> Shop </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 category-wrap">
                    <div class="green-border light-bg" >
                        <div class="category-content col-md-6 no-padding">
                            <div class="category-new">
                                <div class="green-new-tag new-tag">
                                    <a href="#" class="funky-font">New</a>
                                </div>
                            </div>
                            <div class="title-wrap">
                                <h2 class="section-title">
                                            <span>
                                                <span class="funky-font green-tag">Kids </span>
                                                <span class="italic-font">Collections</span>
                                            </span>
                                </h2>
                                <h3 class="sub-title-small">Up to 20% Off</h3>
                            </div>
                            <hr class="dash-divider">
                            <h4 class="baby-years green-color">0 - 5 Years</h4>
                            <div class="category-shop">
                                <a href="#" class="green-btn-small btn"> Shop </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 category-wrap">
                    <div class="blue-border light-bg">
                        <div class="category-content col-md-6 no-padding">
                            <div class="title-wrap">
                                <h2 class="section-title">
                                            <span>
                                                <span class="funky-font blue-tag">Mom </span>
                                                <span class="italic-font">& Maternity</span>
                                            </span>
                                </h2>
                                <h3 class="sub-title-small">Up to 40% Off</h3>
                            </div>
                            <hr class="dash-divider">
                            <h4 class="baby-years blue-color">0 - 5 Years</h4>
                            <div class="category-shop">
                                <a href="#" class="blue-btn-small btn"> Shop </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Category Ends -->
    <!-- Product Most Popular Start -->
    <section id="product-tabination-1">
        <div class="container theme-container">
            <div class="light-bg product-tabination">
                <div class="col-md-12 product-wrap default-box-shadow">
                    <div class="title-wrap">
                        <h2 class="section-title">
                            <span>
                                <span class="funky-font blue-tag">Most</span>
                                <span class="italic-font">Popular</span>
                            </span>
                        </h2>
                        <div class="poroduct-pagination">
                            <span class="product-slide blue-background next"> <i class="fa fa-chevron-left"></i> </span>
                            <span class="product-slide blue-background prev"> <i class="fa fa-chevron-right"></i> </span>
                        </div>
                    </div>
                    <div class="product-slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="product-details">
                                <div class="product-media">
                                                            <span class="hover-image white-bg">
                                                                <img alt="" src="{{url('img/product/cat-7.png')}}">
                                                            </span>
                                    <img src="{{url('img/product/product1.png')}}" alt=" ">
                                    <div class="product-new">
                                        <div class="golden-new-tag new-tag">
                                            <a class="funky-font" href="#">New</a>
                                        </div>
                                    </div>
                                    <div class="product-overlay">
                                        <a class="addcart blue-background fa fa-shopping-cart" href="#"></a>
                                        <a class="likeitem green-background fa fa-heart" href="#"></a>
                                        <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="rating">
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star half"></span>
                                        <span class="star"></span>
                                    </div>
                                    <div class="product-name">
                                        <p><a href="#">Babyhug Frock Style Top And Leggings</a></p>

                                    </div>
                                    <div class="product-price">
                                        <h4 class="pink-btn-small"> $50.00 </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-details">
                                <div class="product-media">                                                             <span class="hover-image white-bg">                                                                <img alt="" src="assets/img/product/cat-7.png">                                                            </span>
                                    <img src="{{url('img/product/product2.png')}}" alt=" ">
                                    <div class="product-overlay">
                                        <a class="addcart blue-background fa fa-shopping-cart" href="#"></a>
                                        <a class="likeitem green-background fa fa-heart" href="#"></a>
                                        <a class="compare pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="rating">
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star half"></span>
                                        <span class="star"></span>
                                    </div>
                                    <div class="product-name">
                                        <p><a href="#">Babyhug Frock Style Top And Leggings</a></p>

                                    </div>
                                    <div class="product-price">
                                        <h4 class="pink-btn-small"> $50.00 </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-details">
                                <div class="product-media">                                                             <span class="hover-image white-bg">                                                                <img alt="" src="assets/img/product/cat-7.png">                                                            </span>
                                    <img src="{{url('img/product/product3.png')}}" alt=" ">
                                    <div class="product-new">
                                        <div class="blue-new-tag new-tag">
                                            <a class="funky-font" href="#">New</a>
                                        </div>
                                    </div>
                                    <div class="product-overlay">
                                        <a class="addcart blue-background fa fa-shopping-cart" href="#"></a>
                                        <a class="likeitem green-background fa fa-heart" href="#"></a>
                                        <a class="compare pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="rating">
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star half"></span>
                                        <span class="star"></span>
                                    </div>
                                    <div class="product-name">
                                        <p><a href="#">Babyhug Frock Style Top And Leggings</a></p>

                                    </div>
                                    <div class="product-price">
                                        <h4 class="pink-btn-small"> $50.00 </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-details">
                                <div class="product-media">                                                             <span class="hover-image white-bg">                                                                <img alt="" src="assets/img/product/cat-7.png">                                                            </span>
                                    <img src="{{url('img/product/product4.png')}}" alt=" ">
                                    <div class="product-overlay">
                                        <a class="addcart blue-background fa fa-shopping-cart" href="#"></a>
                                        <a class="likeitem green-background fa fa-heart" href="#"></a>
                                        <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="rating">
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star half"></span>
                                        <span class="star"></span>
                                    </div>
                                    <div class="product-name">
                                        <p><a href="#">Babyhug Frock Style Top And Leggings</a></p>

                                    </div>
                                    <div class="product-price">
                                        <h4 class="pink-btn-small"> $50.00 </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-details">
                                <div class="product-media">                                                             <span class="hover-image white-bg">                                                                <img alt="" src="assets/img/product/cat-7.png">                                                            </span>
                                    <img src="{{url('img/product/product1.png')}}" alt=" ">
                                    <div class="product-overlay">
                                        <a class="addcart blue-background fa fa-shopping-cart" href="#"></a>
                                        <a class="likeitem green-background fa fa-heart" href="#"></a>
                                        <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="rating">
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star half"></span>
                                        <span class="star"></span>
                                    </div>
                                    <div class="product-name">
                                        <p><a href="#">Babyhug Frock Style Top And Leggings</a></p>

                                    </div>
                                    <div class="product-price">
                                        <h4 class="pink-btn-small"> $50.00 </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-details">
                                <div class="product-media">                                                             <span class="hover-image white-bg">                                                                <img alt="" src="assets/img/product/cat-7.png">                                                            </span>
                                    <img src="{{url('img/product/product2.png')}}" alt=" ">
                                    <div class="product-overlay">
                                        <a class="addcart blue-background fa fa-shopping-cart" href="#"></a>
                                        <a class="likeitem green-background fa fa-heart" href="#"></a>
                                        <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="rating">
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star half"></span>
                                        <span class="star"></span>
                                    </div>
                                    <div class="product-name">
                                        <p><a href="#">Babyhug Frock Style Top And Leggings</a></p>

                                    </div>
                                    <div class="product-price">
                                        <h4 class="pink-btn-small"> $50.00 </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Product Most Popular Ends -->
    <!-- Product Most Popular second dubplicate Start -->
    <section id="product-tabination-1" style="padding-top: 15px">
        <div class="container theme-container">
            <div class="light-bg product-tabination">
                <div class="col-md-12 product-wrap default-box-shadow">
                    <div class="title-wrap">
                        <h2 class="section-title">
                            <span>
                                <span class="funky-font blue-tag">Most</span>
                                <span class="italic-font">Popular</span>
                            </span>
                        </h2>
                        <div class="poroduct-pagination">
                            <span class="product-slide blue-background next"> <i class="fa fa-chevron-left"></i> </span>
                            <span class="product-slide blue-background prev"> <i class="fa fa-chevron-right"></i> </span>
                        </div>
                    </div>
                    <div class="product-slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="product-details">
                                <div class="product-media">
                                                            <span class="hover-image white-bg">
                                                                <img alt="" src="{{url('img/product/cat-7.png')}}">
                                                            </span>
                                    <img src="{{url('img/product/product1.png')}}" alt=" ">
                                    <div class="product-new">
                                        <div class="golden-new-tag new-tag">
                                            <a class="funky-font" href="#">New</a>
                                        </div>
                                    </div>
                                    <div class="product-overlay">
                                        <a class="addcart blue-background fa fa-shopping-cart" href="#"></a>
                                        <a class="likeitem green-background fa fa-heart" href="#"></a>
                                        <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="rating">
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star half"></span>
                                        <span class="star"></span>
                                    </div>
                                    <div class="product-name">
                                        <p><a href="#">Babyhug Frock Style Top And Leggings</a></p>

                                    </div>
                                    <div class="product-price">
                                        <h4 class="pink-btn-small"> $50.00 </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-details">
                                <div class="product-media">                                                             <span class="hover-image white-bg">                                                                <img alt="" src="assets/img/product/cat-7.png">                                                            </span>
                                    <img src="{{url('img/product/product2.png')}}" alt=" ">
                                    <div class="product-overlay">
                                        <a class="addcart blue-background fa fa-shopping-cart" href="#"></a>
                                        <a class="likeitem green-background fa fa-heart" href="#"></a>
                                        <a class="compare pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="rating">
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star half"></span>
                                        <span class="star"></span>
                                    </div>
                                    <div class="product-name">
                                        <p><a href="#">Babyhug Frock Style Top And Leggings</a></p>

                                    </div>
                                    <div class="product-price">
                                        <h4 class="pink-btn-small"> $50.00 </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-details">
                                <div class="product-media">                                                             <span class="hover-image white-bg">                                                                <img alt="" src="assets/img/product/cat-7.png">                                                            </span>
                                    <img src="{{url('img/product/product3.png')}}" alt=" ">
                                    <div class="product-new">
                                        <div class="blue-new-tag new-tag">
                                            <a class="funky-font" href="#">New</a>
                                        </div>
                                    </div>
                                    <div class="product-overlay">
                                        <a class="addcart blue-background fa fa-shopping-cart" href="#"></a>
                                        <a class="likeitem green-background fa fa-heart" href="#"></a>
                                        <a class="compare pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="rating">
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star half"></span>
                                        <span class="star"></span>
                                    </div>
                                    <div class="product-name">
                                        <p><a href="#">Babyhug Frock Style Top And Leggings</a></p>

                                    </div>
                                    <div class="product-price">
                                        <h4 class="pink-btn-small"> $50.00 </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-details">
                                <div class="product-media">                                                             <span class="hover-image white-bg">                                                                <img alt="" src="assets/img/product/cat-7.png">                                                            </span>
                                    <img src="{{url('img/product/product4.png')}}" alt=" ">
                                    <div class="product-overlay">
                                        <a class="addcart blue-background fa fa-shopping-cart" href="#"></a>
                                        <a class="likeitem green-background fa fa-heart" href="#"></a>
                                        <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="rating">
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star half"></span>
                                        <span class="star"></span>
                                    </div>
                                    <div class="product-name">
                                        <p><a href="#">Babyhug Frock Style Top And Leggings</a></p>

                                    </div>
                                    <div class="product-price">
                                        <h4 class="pink-btn-small"> $50.00 </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-details">
                                <div class="product-media">                                                             <span class="hover-image white-bg">                                                                <img alt="" src="assets/img/product/cat-7.png">                                                            </span>
                                    <img src="{{url('img/product/product1.png')}}" alt=" ">
                                    <div class="product-overlay">
                                        <a class="addcart blue-background fa fa-shopping-cart" href="#"></a>
                                        <a class="likeitem green-background fa fa-heart" href="#"></a>
                                        <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="rating">
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star half"></span>
                                        <span class="star"></span>
                                    </div>
                                    <div class="product-name">
                                        <p><a href="#">Babyhug Frock Style Top And Leggings</a></p>

                                    </div>
                                    <div class="product-price">
                                        <h4 class="pink-btn-small"> $50.00 </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-details">
                                <div class="product-media">                                                             <span class="hover-image white-bg">                                                                <img alt="" src="assets/img/product/cat-7.png">                                                            </span>
                                    <img src="{{url('img/product/product2.png')}}" alt=" ">
                                    <div class="product-overlay">
                                        <a class="addcart blue-background fa fa-shopping-cart" href="#"></a>
                                        <a class="likeitem green-background fa fa-heart" href="#"></a>
                                        <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="rating">
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star half"></span>
                                        <span class="star"></span>
                                    </div>
                                    <div class="product-name">
                                        <p><a href="#">Babyhug Frock Style Top And Leggings</a></p>

                                    </div>
                                    <div class="product-price">
                                        <h4 class="pink-btn-small"> $50.00 </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Product Most Popular second duplicate Ends -->
    <!-- Filter & All Fashion 3 Start -->
    <section id="all-fashion-3">
        <div class="container theme-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 fashion-bg3">
                            <div class="fashion-wrap  light-bg">
                                <div class="box-container height-205">
                                    <div class="box-img-wrap img-right">
                                        <img alt=" " src="{{url('img/fashion/fashion-8.png')}}">
                                    </div>
                                    <div class="col-md-6 text-center pull-left">
                                        <div class="title-wrap">
                                            <h2 class="section-title with-divider">
                                                <span>
                                                    <span class="funky-font blue-tag">Dolls </span>
                                                    <span class="italic-font">& Dollhouses</span>
                                                </span>
                                            </h2>
                                            <a class="blue-color title-link" href="#"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                        </div>
                                    </div>
                                    <div class="fashion-icon">
                                        <img src="{{url('img/fashion/icon-6.png')}}" alt=" ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 fashion-bg3">
                            <div class="fashion-wrap light-bg">
                                <div class="box-container height-205">
                                    <div class="box-img-wrap">
                                        <img alt=" " src="{{url('img/fashion/fashion-9.png')}}">
                                    </div>
                                    <div class="col-md-7 pull-right text-center no-padding-left">
                                        <div class="title-wrap">
                                            <h2 class="section-title with-divider">
                                                <span>
                                                    <span class="funky-font green-tag"> Art </span>
                                                    <span class="italic-font">& Creativity Toys</span>
                                                </span>
                                            </h2>
                                            <a class="green-color title-link" href="#"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                        </div>
                                    </div>
                                    <div class="fashion-icon-right">
                                        <img src="{{url('img/fashion/icon-7.png')}}" alt=" ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 fashion-bg3">
                            <div class="fashion-wrap height-205 light-bg">
                                <div class="box-container height-205">
                                    <div class="box-img-wrap img-right">
                                        <img alt=" " src="{{url('img/fashion/fashion-10.png')}}">
                                    </div>
                                    <div class="col-md-6 text-center pull-left">
                                        <div class="title-wrap">
                                            <h2 class="section-title with-divider">
                                                <span>
                                                    <span class="funky-font pink-tag"> Pretend </span>
                                                    <span class="italic-font">Play House</span>
                                                </span>
                                            </h2>
                                            <a class="pink-color title-link" href="#"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                        </div>
                                    </div>
                                    <div class="fashion-icon">
                                        <img src="{{url('img/fashion/icon-8.png')}}" alt=" ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 fashion-bg3">
                            <div class="fashion-wrap height-205 light-bg">
                                <div class="box-container height-205">
                                    <div class="box-img-wrap">
                                        <img alt=" " src="{{url('img/fashion/fashion-11.png')}}">
                                    </div>
                                    <div class="col-md-7 pull-right text-center ">
                                        <div class="title-wrap">
                                            <h2 class="section-title with-divider">
                                                <span>
                                                    <span class="funky-font golden-tag"> Remote </span>
                                                    <span class="italic-font">& Controlled Toy</span>
                                                </span>
                                            </h2>
                                            <a class="golden-color title-link" href="#"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                        </div>
                                    </div>
                                    <div class="fashion-icon-right">
                                        <img src="{{url('img/fashion/icon-9.png')}}" alt=" ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Filter & All Fashion 3 Ends -->
    <!-- Blog Start -->
    <section id="home-blog">
        <div class="light-bg">
            <div class="container theme-container">
                <div class="blog-wrap space-top-35">
                    <div class="title-wrap with-border">
                        <h2 class="section-title with-border">
                                    <span class="light-bg">
                                        <span class="funky-font blue-tag">News</span>
                                        <span class="italic-font">From Blogs</span>
                                    </span>
                        </h2>
                        <h3 class="sub-title">Latest News About Store</h3>
                        <hr class="dash-divider">
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="post-wrap">
                                <div class="post-media">
                                    <img src="{{url('img/blog/blog-1.jpg')}}" alt=" ">
                                    <div class="blog-new">
                                        <div class="green-new-tag new-tag">
                                            <a href="#" class="fa  fa-picture-o"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg2-with-mask green-box-shadow">
                                    <span class="green-color-mask color-mask"></span>
                                    <div class="post-content">
                                        <a href="blog-single.html" class="post-title">Standard Blog Post</a>
                                        <ul class="post-meta">
                                            <li> <span class="fa fa-user"></span> <a href="#">My Admin</a> </li>
                                            <li> <span class="fa fa-clock-o"></span> <a href="#">6 Days Ago </a> </li>
                                            <li> <span class="fa  fa-comment"></span> <a href="#">10</a> </li>
                                        </ul>
                                        <div class="post-detail">
                                            <p>Phasellus rhoncus quis nunc vitae dapibus. Integer vehicula urna ut nisl ullamcorper.</p>
                                        </div>
                                        <div class="read-more">
                                            <a class="title-link" href="#"> Read More <i class="fa fa-caret-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="post-wrap">
                                <div class="post-media">
                                    <img src="{{url('img/blog/blog-3.jpg')}}" alt=" ">
                                    <div class="blog-new">
                                        <div class="pink-new-tag new-tag">
                                            <a href="#" class=" fa fa-video-camera"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg2-with-mask pink-box-shadow">
                                    <span class="pink-color-mask color-mask"></span>
                                    <div class="post-content">
                                        <a href="blog-single.html" class="post-title">Standard Blog Post</a>
                                        <ul class="post-meta">
                                            <li> <span class="fa fa-user"></span> <a href="#">My Admin</a> </li>
                                            <li> <span class="fa fa-clock-o"></span> <a href="#">6 Days Ago </a> </li>
                                            <li> <span class="fa  fa-comment"></span> <a href="#">10</a> </li>
                                        </ul>
                                        <div class="post-detail">
                                            <p>Phasellus rhoncus quis nunc vitae dapibus. Integer vehicula urna ut nisl ullamcorper.</p>
                                        </div>
                                        <div class="read-more">
                                            <a class="title-link" href="#"> Read More <i class="fa fa-caret-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="post-wrap">
                                <div class="post-media">
                                    <img src="{{url('img/blog/blog-3.jpg')}}" alt=" ">
                                    <div class="blog-new">
                                        <div class="blue-new-tag new-tag">
                                            <a href="#" class="fa fa-picture-o"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg2-with-mask blue-box-shadow">
                                    <span class="blue-color-mask color-mask"></span>
                                    <div class="post-content">
                                        <a href="blog-single.html" class="post-title">Standard Blog Post</a>
                                        <ul class="post-meta">
                                            <li> <span class="fa fa-user"></span> <a href="#">My Admin</a> </li>
                                            <li> <span class="fa fa-clock-o"></span> <a href="#">6 Days Ago </a> </li>
                                            <li> <span class="fa  fa-comment"></span> <a href="#">10</a> </li>
                                        </ul>
                                        <div class="post-detail">
                                            <p>Phasellus rhoncus quis nunc vitae dapibus. Integer vehicula urna ut nisl ullamcorper.</p>
                                        </div>
                                        <div class="read-more">
                                            <a class="title-link" href="#"> Read More <i class="fa fa-caret-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Blog Ends -->
@endsection
