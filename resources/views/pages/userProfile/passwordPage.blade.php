@extends('layouts.frontend')
@section('title', 'Book Store | Changing Password')

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
        <div class="row" style="display: flex; justify-content: center">
            <!-- Posts Start -->
            <aside class="col-md-9 col-sm-9 d-flex space-bottom-45">
                <div class="title-wrap  text-center space-bottom-25">
                    <h2 class="section-title with-border">
                        <span class="white-bg">
                            <span class="funky-font pink-tag">Your </span>
                            <span class="italic-font">Password</span>
                        </span>
                    </h2>
                </div>
                <div class="account-details-wrap">
                    <div class="title-2 sub-title-small">  Change your password  </div>
                    <div class="account-box  light-bg default-box-shadow">
                        <form action="{{route('user.profile.password', $user->id)}}" class="form-delivery" method="POST">
                            {{csrf_field()}}
                            {{method_field('patch')}}
                            <div class="row">
                                <div class="col-md-12 col-sm-12{{$errors->has('password')?' has-error':''}}">
                                    <div class="form-group">
                                        <label for="password">Old Password</label>
                                        <input id="password" class="form-control" name="password" type="password" placeholder="Password" required>
                                        <span class="text-danger">{{$errors->first('password')}}</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6{{$errors->has('new_password')?' has-error':''}}">
                                    <div class="form-group">
                                        <label for="new_password">New Password</label>
                                        <input id="new_password" class="form-control" name="new_password" type="password" placeholder="Password" required>
                                        <span class="text-danger">{{$errors->first('new_password')}}</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6{{$errors->has('confirm_password')?' has-error':''}}">
                                    <div class="form-group">
                                        <label for="confirm_password">Confirm Password</label>
                                        <input id="confirm_password" class="form-control" name="confirm_password" type="password" placeholder="Password" required>
                                        <span class="text-danger">{{$errors->first('confirm_password')}}</span>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" class="pink-btn btn">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </aside>
            <!-- Posts Ends -->
        </div>
    </article>
@endsection
