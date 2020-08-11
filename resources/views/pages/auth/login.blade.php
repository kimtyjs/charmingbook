@extends('layouts.frontend')
@section('title', 'Book Store | Login Account')

@section('content')
    <!-- Breadcrumbs Start -->
    <section class="breadcrumb-bg margin-bottom-80">
        <span class="gray-color-mask color-mask"></span>
        <div class="theme-container container">
            <div class="site-breadcrumb relative-block space-75">
                <h2 class="section-title">
                    <span>
                        <span class="funky-font blue-tag">Check</span>
                        <span class="italic-font">Out</span>
                    </span>
                </h2>
                <h3 class="sub-title"> listed products in your cart</h3>
                <hr class="dash-divider">
                <ol class="breadcrumb breadcrumb-menubar">
                    <li><a href="#">Home</a>  > <span class="blue-color">Checkout</span> </li>
                </ol>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs end -->
    <!-- Register start -->
    <section id="register" class="register_wrap">
        <div class="theme-container container">
            <div class="row">
                <div class="title-wrap space-bottom-25 col-sm-12">
                    <h2 class="section-title">
                        <span>
                            <span class="funky-font blue-tag">Account</span>
                            <span class="italic-font">Sign In</span>
                        </span>
                    </h2>
                </div>
                <div class="col-sm-4 col-md-5">
                    <div class="login-wrap">
                        <h2 class="title-2 sub-title-small">Sign In</h2>
                        <form method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="form-group{{$errors->has('email')?' has-error':''}}">
                                <input id="email" type="email" class="form-control" name="email"  required autocomplete="email" placeholder="Email Address">
                                <i class="blue-color fa fa-user"></i>
                                <span class="text-danger">{{$errors->first('email')}}</span>
                            </div>
                            <div class="form-group{{$errors->has('password')?' has-error':''}}">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Password">
                                <i class="pink-color fa  fa-unlock-alt"></i>
                                <span class="text-danger">{{$errors->first('password')}}</span>
                            </div>
                            <div class="form-group">
                                <label class="chk-box"><input type="checkbox" name="optradio">Keep me logged In</label>
                                <label class="forgot-pwd">
                                    <a class="blue-color title-link" href="#">Forgot Password?</a>
                                </label>
                            </div>
                            <div class="form-group">
                                <button class="blue-btn btn" type="submit">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="register-wrap">
                        <h2 class="title-2 sub-title-small">New User Here?</h2>
                        <p class="italic-font">Registration is free and easy!</p>
                        <ul>
                            <li>Faster Login</li>
                            <li>Remember login</li>
                            <li>Account has been protected</li>
                        </ul>
                        <a class="pink-btn btn" href="{{route('register')}}"> Create An Account </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="social-register-wrap">
                        <h2 class="title-2 sub-title-small">Sign In With Social</h2>
                        <a href="#" class="green-btn btn"> <i class="fa fa-facebook"></i> Sign in with Facebook</a>
                        <a href="#" class="blue-btn btn"> <i class="fa fa-twitter"></i> Sign in with Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register end -->
@endsection
