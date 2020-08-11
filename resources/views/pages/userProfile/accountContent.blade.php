@extends('layouts.frontend')
@section('title', 'Book Store | Account Content')

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
            <aside class="col-md-8 col-sm-8 space-bottom-20">
                <div class="title-wrap  text-center space-bottom-25">
                    <h2 class="section-title with-border">
                                <span class="white-bg">
                                    <span class="funky-font pink-tag">My</span>
                                    <span class="italic-font">Account</span>
                                </span>
                    </h2>
                </div>
                <div class="account-details-wrap">
                    <div class="title-2 sub-title-small">  My Account</div>
                    <div class="account-box  light-bg default-box-shadow">
                        <ul>
                            <li>
                                <a href="{{route('user.profile.info', auth()->user()->name)}}">Edit your account information</a>
                            </li>
                            <li>
                                <a href="{{route('user.profile.password', auth()->user()->name)}}">Change your password</a>
                            </li>
                        </ul>
                    </div>

                    <div class="title-2 sub-title-small"> order and review </div>
                    <div class="account-box  light-bg default-box-shadow">
                        <ul>
                            <li>
                                <a href="{{route('user.profile.order',auth()->user()->name)}}">View your order history</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
            <!-- Posts Ends -->

            <!-- Sidebar Start -->
            <aside class="col-md-4 col-sm-4 space-bottom-20">
                <div class="blog-sidebar-widget light-bg default-box-shadow">
                    <h4 class="widget-title blue-bg"> <span>  Account  </span> </h4>
                    <div class="blog-widget-content">
                        <ul>
                            <li  class="accout-item"><a href="{{route('user.profile.info', auth()->user()->name)}}"> Account Information </a></li>
                            <li  class="accout-item"><a href="{{route('user.profile.password', auth()->user()->name)}}">Change Password</a></li>
                            <li  class="accout-item"><a href="{{route('user.profile.order', auth()->user()->name)}}">Order History</a></li>
                            <li  class="accout-item"><a href="order-history.html">Shopping Cart</a></li>
                            <li  class="accout-item"><a href="order-history.html">Go to Shop</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
            <!-- / Sidebar Ends -->
        </div>
    </article>
@endsection
