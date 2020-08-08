@extends('layouts.notfound')
@section('title', 'Error 404 Not Found')

@push('page_style')
    <link type="text/css" rel="stylesheet" href="{{asset('css/components/notfound.css')}}" />
@endpush

@section('pages')
    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>404</h1>
            </div>
            <h2>Oops! This Page Could Not Be Found</h2>
            <p>Sorry but the page you are looking for does not exist, have been removed. name changed or is temporarily unavailable</p>
            <a href="{{ route('landing-page') }}">Go To Homepage</a>
        </div>
    </div>
@endsection
