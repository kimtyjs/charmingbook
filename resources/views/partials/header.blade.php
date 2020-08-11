<!-- Header -->
<header class="light-bg">
    <!-- Header top bar starts-->
    <section class="top-bar">
        <div class="container theme-container">
            <div class="bg-with-mask box-shadow">
                <span class="blue-color-mask color-mask"></span>
                <nav class="navbar navbar-default top-navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="visible-xs logo" href="#"> <img src="{{url('img/logo.png')}}" alt="logo" /> </a>
                    </div>
                    <div class="collapse navbar-collapse no-padding" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="#"> <span class="fa fa-heart"></span> Wishlist</a></li>
{{--                            <li><a href="#"> <span class="fa fa-random"></span> Compare</a></li>--}}
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >English <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Dutch</a></li>
                                    <li><a href="#">French</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >USD <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">POUND</a></li>
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">EURO</a></li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav pull-right">
                            <li><a href="{{route('landing-page')}}">Home</a></li>
                            <li><a href="#">Track Order</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">
                                    @auth
                                        {{ auth()->user()->name }}
                                        @else
                                        Register/Login
                                    @endauth
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    @guest('web')
                                        @if(Route::has('register'))
                                            <li><a href="{{route('register')}}">Sign Up</a></li>
                                        @endif
                                        <li><a href="{{route('login')}}">Sign In</a></li>
                                    @else
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    @endguest
                                </ul>
                            </li>
                            @auth
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >My Account <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('user.profile.content', auth()->user()->name)}}">My Account</a></li>
                                        <li><a href="{{route('user.profile.info',auth()->user()->name)}}"> Account Information </a></li>
                                        <li><a href="{{route('user.profile.password',auth()->user()->name)}}">Change Password</a></li>
                                        <li><a href="{{route('user.profile.order', auth()->user()->name)}}">Order History</a></li>
                                    </ul>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </nav>
            </div>
            <img src="{{url('img/pattern/ziz-zag.png')}}" class="blue-zig-zag" alt=" ">
        </div>

    </section>
    <!-- /Header top bar ends -->
    <div class="container theme-container ">
        <section class="header-wrapper white-bg fixed">
            <div class="row">
                <div class="container theme-container ">
                    <article class="header-middle">
                        <!-- Logo -->
                        <div class="logo hidden-xs col-md-3  col-sm-3">
                            <a href="homepage.html"><img src="{{url('img/logo/logo.png')}}" alt=" "/></a>
                        </div>
                        <!-- /Logo -->

                        <!-- Header search -->
                        <div class="header-search col-md-6  col-sm-5">
                            <form action="#" class="search-form">
                                <div class="search-selectpicker form-group selectpicker-wrapper col-sm-4 no-padding">
                                    <select
                                        class="selectpicker input-price" data-live-search="true" data-width="100%"
                                        data-toggle="tooltip" title="Search In Categories">
                                        <option>Baby Clothes</option>
                                        <option>Kids Clothes</option>
                                        <option>Toys & Books </option>
                                    </select>
                                </div>
                                <div class="no-padding col-sm-8 search-cat">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" title="Search for:" name="s" value="" placeholder="Search for a Category, Brand or Product" class="search-field">
                                    </label>
                                    <input type="submit" value="Search" class="search-submit">
                                </div>
                            </form>
                        </div>
                        <!-- /Header search -->

                        <!-- Header shopping cart -->
                        <div class="header-cart col-md-3  col-sm-4">
                            <div class="cart-wrapper">
                                <a href="javascript:void(0)" class="btn cart-btn default-btn">
                                    <i class="fa fa-shopping-cart blue-color"></i>
                                    <span><b> cart: </b></span>   <span class="blue-color"> <strong> (02 items) </strong> </span>
                                    <span class="fa fa-caret-down"></span>
                                </a>
                            </div>
                            <div class="cart-dropdown bg2-with-mask">
                                <span class="blue-color-mask blue-box-shadow color-mask-radius"></span>
                                <div class="pos-relative">
                                    <table class="cart-table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-media">
                                                    <a href="#">  <img src="assets/img/cart/small-1.png" alt=" "></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <a href="#">Noddy Hooded Sweat</a>
                                                        <span> Shirt Full Sleeves </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <h5 class="price"><b> $200.00*2 </b></h5>
                                                        <a href="#" class="delete fa fa-close">  </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="product-media">
                                                    <a href="#"> <img src="assets/img/cart/small-2.png" alt=" "></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <a href="#">Noddy Hooded Sweat</a>
                                                        <span> Shirt Full Sleeves </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <h5 class="price"><b> $100.00*1 </b></h5>
                                                        <a href="#" class="delete fa fa-close">  </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td>
                                                <div class="sub-total">
                                                    <span class="title">Total:</span>
                                                    <span class="amount"> <b> $500 </b> </span>
                                                </div>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <div class="chk-out">
                                        <a href="check-out.html" class="btn default-btn">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Header shopping cart -->
                    </article>

                    <article class="header-navigation">
                        <nav class="navbar navbar-default product-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#product-menu" >
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse no-padding" id="product-menu">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown mega-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">shop by category <span class="caret"></span></a>
                                        <div class="dropdown-menu mega-dropdown-menu">
                                            <div class="block-bg  light-bg">
                                                <div class="col-md-3 col-sm-6  menu-block">
                                                    <div class="sub-list">
                                                        <h2 class="title-2 sub-title-small">Top Categories</h2>
                                                        <ul>
                                                            <li><a href="categories-listing.html">Category Listing</a> </li>
                                                            <li><a href="product-grid-fullwidth.html">Category Grid View Full Width</a> </li>
                                                            <li><a href="product-grid-rightsidebar.html">Category Grid View Right Sidebar</a> </li>
                                                            <li><a href="product-grid-leftsidebar.html">Category Grid View Left Sidebar</a> </li>
                                                            <li><a href="product-list-fullwidth.html">Category List View Full Width</a> </li>
                                                            <li><a href="product-list-rightsidebar.html">Category List View Right Sidebar</a> </li>
                                                            <li><a href="product-list-leftsidebar.html">Category List View Left Sidebar</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6  menu-block">
                                                    <div class="sub-list">
                                                        <h2 class="title-2 sub-title-small">Single Product</h2>
                                                        <ul>
                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-single-fullwidth.html">Single Product Full Width</a> </li>
                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-single-hover.html">Single Product Hover</a> </li>
                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-single-rightsidebar.html">Single Product Right Filter</a> </li>
                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="product-single-leftsidebar.html">Single Product Left Filter</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6  menu-block">
                                                    <div class="sub-list">
                                                        <h2 class="title-2 sub-title-small">Pages</h2>
                                                        <ul>
                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="about-us.html">About Us</a> </li>
                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="shopping-cart.html">Shopping Cart</a> </li>
                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="check-out.html">Checkout</a> </li>
                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="shortcodes.html">Shortcodes</a> </li>                                                                 <li> <i class="fa fa-angle-right pink-color"></i> <a href="typography.html">Typography</a> </li>
                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="coming-soon.html">Coming Soon</a> </li>
                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="404.html">Error Page</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6  menu-block">
                                                    <div class="sub-list">
                                                        <h2 class="title-2 sub-title-small">My Account</h2>
                                                        <ul>
                                                            <li>  <i class="fa fa-angle-right pink-color"></i> <a href="my-account.html">My Account</a></li>
                                                            <li>  <i class="fa fa-angle-right pink-color"></i> <a href="account-info.html"> Account Information </a></li>
                                                            <li>  <i class="fa fa-angle-right pink-color"></i> <a href="cng-pw.html">Change Password</a></li>
                                                            <li>  <i class="fa fa-angle-right pink-color"></i> <a href="address-book.html">Address Books</a></li>
                                                            <li>  <i class="fa fa-angle-right pink-color"></i> <a href="order-history.html">Order History</a></li>
                                                            <li>  <i class="fa fa-angle-right pink-color"></i> <a href="review-rating.html">Reviews and Ratings</a></li>
                                                            <li>  <i class="fa fa-angle-right pink-color"></i> <a href="return.html">Returns Requests</a></li>
                                                            <li>  <i class="fa fa-angle-right pink-color"></i> <a href="newsletter.html">Newsletter</a></li>
                                                            <li>  <i class="fa fa-angle-right pink-color"></i> <a href="myaccount-leftsidebar.html">Left Sidebar</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">Baby Clothes</a></li>
                                    <li><a href="#">Footwear</a></li>
                                    <li><a href="#">Toy & Books</a></li>
                                    <li><a href="#">Care & Feeding</a></li>
                                    <li><a href="#">Baby Gear & Nursery</a></li>
                                    <li><a href="#">Moms & Maternity</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Gifts <span class="caret"></span></a>
                                        <ul class="dropdown-menu ">
                                            <li><a href="#">Gift for Babies </a></li>
                                            <li><a href="#">Gift for Kids</a></li>
                                            <li><a href="#">Clothes</a></li>
                                            <li><a href="#">Toys & Gaming</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Nursery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Offers</a></li>
                                    <li><a href="shopping-cart.html">Stores</a></li>
                                </ul>
                            </div>
                        </nav>
                    </article>
                </div>
            </div>
        </section>
    </div>
</header>
<!-- /Header -->
