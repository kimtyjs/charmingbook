@extends('layouts.frontend')
@section('title', 'Book Store | Shopping Cart')

@section('content')
    <!-- Breadcrumbs Start -->
    <section class="breadcrumb-bg margin-bottom-80">
        <span class="gray-color-mask color-mask"></span>
        <div class="theme-container container">
            <div class="site-breadcrumb relative-block space-75">
                <h2 class="section-title">
                            <span>
                                <span class="funky-font blue-tag">Shopping</span>
                                <span class="italic-font">Cart</span>
                            </span>
                </h2>
                <h3 class="sub-title"> listed products in your cart</h3>
                <hr class="dash-divider">
                <ol class="breadcrumb breadcrumb-menubar">
                    <li><a href="#">Home</a>  > <span class="blue-color">Shopping Cart </span> </li>
                </ol>
            </div>
        </div>
    </section>
    <!-- / Breadcrumbs Ends -->
    <!-- Shopping Cart  Start -->
    <section id="shopping-cart" class="shopping-cart-wrap">
        <div class="theme-container container">
            <div class="light-bg default-box-shadow">
                <form class="cart-form">
                    <table class="product-table">
                        <thead>
                        <tr>
                            <th>Img</th>
                            <th>Product Name</th>
                            <th>QTY</th>
                            <th>Price</th>
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
                                <a href="#" class="remove pink-color"><i class="fa fa-times"></i> Remove </a>
                            </td>
                            <td class="quantity">
                                <div class="quantity buttons-add-minus">
                                    <input type="button" class="minus" value="-">
                                    <input type="text" class="input-text qty text" title="Qty" value="02" name="cart" >
                                    <input type="button" class="plus" value="+">
                                </div>
                            </td>
                            <td class="total"> <strong> $200 </strong> </td>
                        </tr>
                        <tr>
                            <td class="image">
                                <div class="white-bg cart-img">
                                    <a class="media-link" href="#"><img src="assets/img/cart/cart-2.png" alt=""></a>
                                </div>
                            </td>
                            <td class="description">
                                <a href="#">Babyhug Layer Pattern Skirt</a>
                                <p>Color : Black</p>
                                <p>Size : 2-4 Year</p>
                                <a href="#" class="remove pink-color"><i class="fa fa-times"></i> Remove </a>
                            </td>
                            <td class="quantity">
                                <div class="quantity buttons-add-minus">
                                    <input type="button" class="minus" value="-">
                                    <input type="text" class="input-text qty text" title="Qty" value="01" name="cart" >
                                    <input type="button" class="plus" value="+">
                                </div>
                            </td>
                            <td class="total"> <strong> $100 </strong> </td>
                        </tr>
                        <tr>
                            <td class="image">
                                <div class="white-bg cart-img">
                                    <a class="media-link" href="#"><img src="assets/img/cart/cart-3.png" alt=""></a>
                                </div>
                            </td>
                            <td class="description">
                                <a href="#">Babyhug Singlet Party Frock Flower Design </a>
                                <p>Color : Black</p>
                                <p>Size : 2-4 Year</p>
                                <a href="#" class="remove pink-color"><i class="fa fa-times"></i> Remove </a>
                            </td>
                            <td class="quantity">
                                <div class="quantity buttons-add-minus">
                                    <input type="button" class="minus" value="-">
                                    <input type="text" class="input-text qty text" title="Qty" value="03" name="cart" >
                                    <input type="button" class="plus" value="+">
                                </div>
                            </td>
                            <td class="total"> <strong> $300 </strong> </td>
                        </tr>
                        <tr>
                            <td class="image">
                                <div class="white-bg cart-img">
                                    <a class="media-link" href="#"><img src="assets/img/cart/cart-4.png" alt=""></a>
                                </div>
                            </td>
                            <td class="description">
                                <a href="#">Best SellerNoddy Full Sleeves Hooded Sweatshirt</a>
                                <p>Color : Black</p>
                                <p>Size : 2-4 Year</p>
                                <a href="#" class="remove pink-color"><i class="fa fa-times"></i> Remove </a>
                            </td>
                            <td class="quantity">
                                <div class="quantity buttons-add-minus">
                                    <input type="button" class="minus" value="-">
                                    <input type="text" class="input-text qty text" title="Qty" value="01" name="cart" >
                                    <input type="button" class="plus" value="+">
                                </div>
                            </td>
                            <td class="total"> <strong> $100 </strong> </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="continue-shopping">
                        <div class="shp-btn">
                            <a class="blue-btn btn" href="#">Continue Shopping<i class="fa fa-caret-right"></i></a>
                        </div>
                        <div class="cart-sub-total">
                            <span>Subtotal:</span>
                            <strong class="pink-color">$700</strong>
                        </div>
                    </div>
                </form>
            </div>
            <div class="cart-collaterals space-80">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="block-box">
                            <div class="title-wrap">
                                <h2 class="section-title">
                                            <span>
                                                <span class="funky-font blue-tag">Cupon </span>
                                                <span class="italic-font">code enter here</span>
                                            </span>
                                </h2>
                            </div>
                            <div class="newsletter-form">
                                <form class="newsletter">
                                    <div class="form-group col-sm-7 no-padding">
                                        <label class="sr-only">Enter your cupon code</label>
                                        <input type="text" class="form-control" placeholder="Enter your cupon code">
                                    </div>
                                    <div class="form-group col-sm-5 no-padding">
                                        <button type="submit" class="blue-btn submit-btn btn">apply</button>
                                    </div>
                                </form>
                                <p class="col-sm-12 no-padding">Suspendisse feugiat mi sit amet pellentesque dunt. Nulla quis nulla tellus. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="block-box">
                            <div class="title-wrap">
                                <h2 class="section-title">
                                            <span>
                                                <span class="funky-font green-tag">Shopping </span>
                                                <span class="italic-font">Availability</span>
                                            </span>
                                </h2>
                            </div>
                            <div class="shopping-available">
                                <form class="filter-form">
                                    <div class="form-group selectpicker-wrapper">
                                        <select
                                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                                            data-toggle="tooltip" title="Select Country">
                                            <option>Åland Islands</option>
                                            <option>Afghanistan</option>
                                            <option>Albania</option>
                                        </select>
                                    </div>
                                    <div class="form-group selectpicker-wrapper">
                                        <select
                                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                                            data-toggle="tooltip" title="Select State">
                                            <option>Tirana</option>
                                            <option>Durres</option>
                                            <option>Vlore</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Enter Zip Code">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="green-btn btn">Check</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="light-bg default-box-shadow cart_totals_wrap">
                            <div class="cart_totals_box">
                                <table class="cart_totals">
                                    <tr>
                                        <th>Subtotal:</th>
                                        <td><strong>$700</strong></td>
                                    </tr>
                                    <tr>
                                        <th>Shipping Cost :</th>
                                        <td><strong>$20</strong></td>
                                    </tr>
                                    <tr class="cupon-off">
                                        <th>Cupon off :</th>
                                        <td><strong class="blue-color">-$50</strong></td>
                                    </tr>
                                    <tr class="grand-total">
                                        <th>Total :</th>
                                        <td><strong class="pink-color">$670</strong></td>
                                    </tr>
                                </table>
                                <div class="chk-out">
                                    <a href="#" class="pink-btn btn">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Shopping Cart  Ends -->
@endsection
