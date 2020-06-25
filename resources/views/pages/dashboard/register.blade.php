@extends('layouts.backend')
@section('title', 'AdminMiddleware')

@section('contents')
   @component('components.auth-admin')
       @slot('title')
           Create Account
       @endslot
       <form method="POST" action="{{route('admin.auth.register')}}">
           @csrf
           <div class="form-group">
               <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" aria-describedby="nameHelp" placeholder="Enter Username">
               @if($errors->has('name'))
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $error->first('name') }}</strong>
                   </span>
               @endif
           </div>
           <div class="form-group">
               <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required autocomplete="email" aria-describedby="emailHelp" placeholder="Enter Email">
               @if($errors->has('email'))
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $error->first('email') }}</strong>
                   </span>
               @endif
           </div>
           <div class="form-group">
               <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required autocomplete="new-password" placeholder="Password">
               @if($errors->has('password'))
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $error->first('password') }}</strong>
                   </span>
               @endif
           </div>
           <div class="form-group">
               <input type="password" name="password_confirmation" class="form-control" id="re_password" required autocomplete="new-password" placeholder="Password Confirmation">
           </div>
           <div class="account-dialog-actions">
               <button type="submit" class="btn btn-primary">Sign up</button>
               <a class="account-dialog-link" href="{{route('admin.login')}}">Already have an account?</a>
           </div>
       </form>
   @endcomponent
@endsection
