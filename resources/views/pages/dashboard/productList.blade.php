@extends('layouts.backend')
@section('title', 'Dashboard | User Management')

@section('contents')
    @component('components.dashboard')
        <div class="row">
            @slot('title')
                <h1 class="dash-title">Product Listing</h1>
            @endslot
                @if(session()->has('success_message'))
                    <div class="col-xl-12">
                        <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                            {{ session()->get('success_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
            <div class="col-lg-12">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fas fa-table"></i>
                        </div>
                        <div class="easion-card-title">Product table</div>
                    </div>
                    <div class="card-body ">
                        <table class="table table-in-card">
                            <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Code</th>
                                <th scope="col">Price($)</th>
                                <th scope="col">Type</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Detail</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $productList)
                                <tr>
                                    <td>
                                       <img src="{{url('img/product', $productList->image)}}" alt="{{ $productList->image }}" width="80px">
                                    </td>
                                    <td>{{ $productList->name }}</td>
                                    <td>{{ $productList->codes }}</td>
                                    <td>{{ $productList->price }}</td>
                                    @foreach($productList->categories as $category)
                                        <td>{{ $category->name }}</td>
                                    @endforeach
                                    <td>{{ $productList->quantity }}</td>
                                    <td>
                                        <a href="{{route('product.show', [$productList->id, $productList->slug])}}">
                                            <div class="icon">
                                                <i class="fas fa-edit"></i>
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endcomponent
@endsection
