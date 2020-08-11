@extends('layouts.frontend')
@section('title', 'Error 404 Not Found')

@section('content')
    <!-- 404 Error  Start -->
    <section id="error-page" class="error-wrap light-bg space-80">
        <div class="theme-container container">
            <div class="row space-40">
                <div class="col-md-6 col-sm-5 text-right">
                    <h1 class="error-title funky-font">
                        <span class="blue-color">o</span><span class="pink-color">0</span><span class="green-color">p</span><span class="golden-color">s</span><span class="purple-color">!</span>
                    </h1>
                </div>
                <div class="col-md-6 col-sm-7 error-info">
                    <div class="title-wrap">
                        <h2 class="section-title">
                                    <span>
                                        <span class="funky-font blue-tag">We can't</span>
                                        <span class="italic-font">Find the page you're looking for </span>
                                    </span>
                        </h2>
                        <h3 class="sub-title">404 Error :<span class="blue-color"> Page not found </span></h3>
                        <hr class="dash-divider">
                    </div>
                    <div class="error-details">
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.  desktop publishing packages.
                        </p>
                        <a class="blue-btn btn" href="#"><i class="fa fa-caret-left"></i> Go Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / 404 Error  Ends -->
@endsection
