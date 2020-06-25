@extends('layouts.notfound')
@section('title', 'Thank You')

@push('page_style')
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
@endpush

@section('pages')
    <div class="jumbotron text-center">
        <h1 class="display-3">Thank You!</h1>
        <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
        <hr>
        <p>
            Having trouble? <a href="">Contact us</a>
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="https://bootstrapcreative.com/" role="button">Continue to homepage</a>
        </p>
    </div>
@endsection
