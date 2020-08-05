@extends('layouts.frontend')

@section('content')
    @component('components.register-login')
        <form method="POST" action="{{route('login')}}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
            @csrf
            <span class="login100-form-title">Sign In</span>

            <div class="wrap-input100 validate-input m-b-16{{$errors->has('email')?' has-error':''}}" data-validate="Please enter Email">
                <input id="email" type="text" class="input100" name="email" placeholder="Email">
                <span class="text-danger">{{$errors->first('email')}}</span>
            </div>

            <div class="wrap-input100 validate-input{{$errors->has('password')?' has-error':''}}" data-validate = "Please enter password">
                <input id="password" type="password" class="input100" name="password" placeholder="Password">
                <span class="text-danger">{{$errors->first('password')}}</span>
            </div>

            <div class="text-right p-t-13 p-b-23">
                <span class="txt1">Forgot</span>

                <a href="#" class="txt2">
                    Password?
                </a>
            </div>

            <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                    Sign in
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
