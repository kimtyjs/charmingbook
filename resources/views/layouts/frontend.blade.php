<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('css/ico/favicon.ico')}}">

    <!-- CSS Global -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/main_style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/media.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('plugins/owl-carousel/owl.theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('plugins/jquery-ui-1.11.4.custom/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/subscribe-better.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="{{asset('plugins/iesupport/html5shiv.js')}}"></script>
    <script src="{{asset('plugins/iesupport/respond.js')}}"></script>
    <![endif]-->
    @stack('styles')
</head>
<body id="home" class="wide">
<main class="wrapper">

    <!-- HEADER AREA -->
   @include('partials.header')
    <!-- CONTENT AREA -->

    @yield('content')


<!-- Shopping Cart  Start -->
    <section id="news-latter" class="space-40 light-bg cart-newslatter">
        <div class="container theme-container">
            <div class="row">
                <div class="col-md-6 col-sm-6 space-25">
                    <div class="title-wrap space-bottom-25">
                        <h2 class="section-title">
                                    <span>
                                        <span class="funky-font blue-tag">Newsletter </span>
                                        <span class="italic-font">Sign Up</span>
                                    </span>
                        </h2>
                    </div>
                    <div class="newsletter-form">
                        <form class="newsletter">
                            <div class="form-group col-sm-8 no-padding">
                                <label class="sr-only">Enter Child Name</label>
                                <input type="text" class="form-control" placeholder="Enter your e-mail">
                            </div>
                            <div class="form-group col-sm-3 no-padding">
                                <button type="submit" class="blue-btn submit-btn btn">Submit</button>
                            </div>
                        </form>
                        <p class="col-sm-9 no-padding">Curabitur sit amet mi non justo blandit rhoncus in porttitor diam. In libero in libero ultricies scelerisque.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 space-25">
                    <div class="title-wrap space-bottom-25">
                        <h2 class="section-title">
                            <i class="fa fa-truck green-color"></i>
                            <span>
                                        <span class="funky-font green-tag">Free </span>
                                        <span class="italic-font">Shipping</span>
                                    </span>
                        </h2>
                    </div>

                    <div class="text-widget">
                        <p>For standard oders over 100 USD. disse lobortis vestibulum eros sit amet  rper donec mollis.</p>
                        <a class="green-color title-link" href="#"> Read More <i class="fa fa-caret-right"></i> </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 space-25">
                    <div class="title-wrap space-bottom-25">
                        <h2 class="section-title">
                            <i class="fa fa-reply pink-color"></i>
                            <span>
                                        <span class="funky-font pink-tag">free </span>
                                        <span class="italic-font">Returns</span>
                                    </span>
                        </h2>
                    </div>
                    <div class="text-widget">
                        <p>For standard oders over in 30 dsys. disse lobortis vestibulum eros sit amet  rper donec mollis.</p>
                        <a class="pink-color title-link" href="#"> Read More <i class="fa fa-caret-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Slider Start -->
    <section id="testimonials-slider">
        <div class="bg2-with-mask space-35">
            <span class="blue-color-mask color-mask"></span>
            <div class="container theme-container">
                <div class="testimonials-wrap space-35">
                    <div class="testimonials-slider">
                        <div class="item">
                            <div class="row">
                                <div class="testimonials-img col-md-1 col-sm-2">
                                    <a class="" href="#"><img  src="{{url('img/partners/testimonials.png')}}" alt=" "> </a>
                                </div>
                                <div class="testimonials-content col-md-10 col-sm-8">
                                    <p class="italic-font">--- Mauris in nisl justo. Integer dictum dolor at tortor dictum laoreet.  ut pharetra tortor. Phasellus rhoncus, dolor ac ornare tincidunt, tortor tellus finibus risus, vitae vehicula nulla risus at magna. Nunc sodales facilisis neque, Donec et aliquamo. Fusce libero sapien, egestas quis faucibus ornare...!! :) </p>
                                    <h4>- Aditi Doe </h4>
                                    <a class="italic-font" href="">http://themeforest.net/user/jthemes</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="testimonials-img col-md-1 col-sm-2">
                                    <a class="" href="#"><img  src="{{url('img/partners/testimonials.png')}}" alt=" "> </a>

                                </div>
                                <div class="testimonials-content col-md-10 col-sm-8">
                                    <p class="italic-font">--- Mauris in nisl justo. Integer dictum dolor at tortor dictum laoreet.  ut pharetra tortor. Phasellus rhoncus, dolor ac ornare tincidunt, tortor tellus finibus risus, vitae vehicula nulla risus at magna. Nunc sodales facilisis neque, Donec et aliquamo. Fusce libero sapien, egestas quis faucibus ornare...!! :) </p>
                                    <h4>- Aditi Doe </h4>
                                    <a class="italic-font" href="">http://themeforest.net/user/jthemes</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="testimonials-img col-md-1 col-sm-2">
                                    <a class="" href="#"><img  src="assets/img/partners/testimonials.png" alt=" "> </a>

                                </div>
                                <div class="testimonials-content col-md-10 col-sm-8">
                                    <p class="italic-font">--- Mauris in nisl justo. Integer dictum dolor at tortor dictum laoreet.  ut pharetra tortor. Phasellus rhoncus, dolor ac ornare tincidunt, tortor tellus finibus risus, vitae vehicula nulla risus at magna. Nunc sodales facilisis neque, Donec et aliquamo. Fusce libero sapien, egestas quis faucibus ornare...!! :) </p>
                                    <h4>- Aditi Doe </h4>
                                    <a class="italic-font" href="">http://themeforest.net/user/jthemes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-slider-links">
                                <span class="prev slider-btn"  data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </span>
                        <span class="next slider-btn"  data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                    </div>
                </div>
            </div>
        </div>
        <img  class="blue-zig-zag" src="{{url('img/pattern/ziz-zag.png')}}" alt=" ">
    </section>
    <!-- / Testimonials Slider Ends -->
    <!-- / CONTENT AREA -->

    <!-- FOOTER -->
    @include('partials.footer')
    <!-- /FOOTER -->

    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>
</main>
<!-- /WRAPPER -->

<!-- JS Global -->
<script src="{{asset('plugins/jquery/jquery-1.11.3.min.js')}}"></script>
<script src="{{asset('plugins/jquery-ui-1.11.4.custom/jquery-ui.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>

<script src="{{asset('js/jquery.subscribe-better.js')}}"></script>

<!-- JS Page Level -->
<script src="{{asset('js/moment-with-locales.min.js')}}"></script>
<script src="{{asset('plugins/countdown/jquery.plugin.min.js')}}"></script>
<script src="{{asset('plugins/countdown/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>
@include('sweetalert::alert');
@stack('scripts')

</body>
</html>
