@extends('layouts.backend')
@section('title', 'Login')

@section('contents')
    @component('components.dashboard.auth-admin')
        @slot('title')
            Login Account
        @endslot
        <form method="POST" action="{{route('admin.auth.login')}}">
            @csrf
            <div class="form-group">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required autocomplete="email" aria-describedby="emailHelp" placeholder="Enter Email">
                @if($errors->has('email'))
                <span class="alert-danger" role="alert">
                    <strong>{{ $error->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required autocomplete="password" placeholder="Password">
                @if($errors->has('password'))
                <span class="alert-danger" role="alert">
                        <strong>{{ $error->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="account-dialog-actions">
                <button type="submit" class="btn btn-primary">Sign up</button>
                <a class="account-dialog-link" href="{{route('admin.register')}}">Need an account?</a>
            </div>
        </form>
    @endcomponent
@endsection
