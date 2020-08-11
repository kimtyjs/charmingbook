@extends('layouts.front')
@section('title', 'Home')

@section('search')

    @foreach($categories as $category)
        <li>{{ $category }}</li>

    @endforeach




@endsection
