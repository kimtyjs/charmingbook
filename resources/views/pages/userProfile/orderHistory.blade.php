@extends('layouts.frontend')
@section('title','Book Store | Order History')

@section('content')
    <!-- Breadcrumbs Start -->
    <section class="breadcrumb-bg margin-bottom-80">
        <span class="gray-color-mask color-mask"></span>
        <div class="theme-container container">
            <div class="site-breadcrumb relative-block space-75">
                <h2 class="section-title">
                            <span>
                                <span class="funky-font blue-tag">My </span>
                                <span class="italic-font">Account</span>
                            </span>
                </h2>
                <h3 class="sub-title"> Account Information </h3>
                <hr class="dash-divider">
                <ol class="breadcrumb breadcrumb-menubar">
                    <li><a href="#">Home</a>  >  <span class="blue-color"> My Account </span> </li>
                </ol>
            </div>
        </div>
    </section>
    <!-- / Breadcrumbs Ends -->
    <article  class="container theme-container">
        <div class="row">
            <!-- Posts Start -->
            <aside class="col-md-12 col-sm-12 space-bottom-45">
                <div class="title-wrap  text-center space-bottom-25">
                    <h2 class="section-title with-border">
                                <span class="white-bg">
                                    <span class="funky-font pink-tag">Order</span>
                                    <span class="italic-font">History</span>
                                </span>
                    </h2>
                </div>
                <div class="account-details-wrap">
                    <div class="title-2 sub-title-small">  Your Order History </div>
                    <div class="light-bg default-box-shadow">
                        <table class="product-table">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>QTY</th>
                                <th>Price</th>
                                <th>Order ID</th>
                                <th>Delivered on</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="image">
                                    <div class="white-bg cart-img">
                                        <a class="media-link" href="#"><img src="assets/img/cart/cart-1.png" alt=""></a>
                                    </div>
                                </td>
                                <td class="description">
                                    <a href="#">Noddy Hooded Sweatshirt Full Sleeves</a>
                                    <p>Color : Black</p>
                                    <p>Size : 2-4 Year</p>
                                </td>
                                <td class="quantity">
                                    x3
                                </td>
                                <td class="total"> <strong> $200 </strong> </td>
                                <td class="order-id"> OD31207 </td>
                                <td class="diliver-date"> 12th Dec'13 </td>
                                <td class="order-status">
                                    <a class="blue-btn btn" href="return.html">Order Detail</a>
                                    <a class="green-btn btn" href="#">Re Order</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="continue-shopping">
                            <div class="shp-btn">
                                <a class="pink-btn btn" href="{{route('user.profile.content', auth()->user()->name)}}"> Back To Account </a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Posts Ends -->
        </div>
    </article>
@endsection
