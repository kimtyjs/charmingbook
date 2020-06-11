@extends('layouts.frontend')

@section('content')
    @component('components.register-login')
        <form method="POST" action="{{route('register')}}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
            @csrf
            <span class="login100-form-title">Sign Up</span>

            <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                <input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus placeholder="Username">
                <span class="focus-input100"></span>
                @if($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $error->first('name') }}</strong>
                </span>
                @endif
            </div>

            <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email address">
                <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email"  required autocomplete="email" placeholder="Email Address">
                <span class="focus-input100"></span>
                @if($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $error->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
                <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                <span class="focus-input100"></span>
                @if($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                        <strong> {{ $errror->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter confirm password">
                <input id="re_password" type="password" class="input100" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                <span class="focus-input100"></span>

            </div>

            <div class="text-right p-t-13 p-b-23">
                <span class="txt1">Forgot</span>
                <a href="#" class="txt2">
                    Password?
                </a>
            </div>

            <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                    Sign up
                </button>
            </div>

            <div class="flex-col-c p-t-50 p-b-40">
                <span class="txt1 p-b-9">
                    Don’t have an account?
                </span>
                <a href="#" class="txt3">
                    Sign up now
                </a>
            </div>
        </form>
    @endcomponent
@endsection
