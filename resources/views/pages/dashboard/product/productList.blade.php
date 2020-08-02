@extends('layouts.backend')
@section('title', 'Dashboard | Product')

@push('styles')
    <style>
        .fa-trash-alt-ic {  color: red; }
    </style>
@endpush

@section('contents')
    @component('components.dashboard')
        <div class="row">
            @slot('title')
                <h1 class="dash-title">Product Listing</h1>
            @endslot
{{--                @if(session()->has('success_message'))--}}
{{--                    <div class="col-xl-12">--}}
{{--                        <div class="alert alert-success text-center alert-dismissible fade show" role="alert">--}}
{{--                            {{ session()->get('success_message') }}--}}
{{--                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                                <span aria-hidden="true">&times;</span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endif--}}
            <div class="col-lg-12">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="w-full">
                            <div class="row align-items-center">
                                <div class="col-md-10 fs-0">
                                    <div class="easion-card-icon d-inline-block fs-16">
                                        <i class="fas fa-table"></i>
                                    </div>
                                    <div class="easion-card-title d-inline-block fs-16">Product table</div>
                                </div>
                                <div class="col-md-2">
                                   <div class="d-flex justify-content-end">
                                       <div class="btn-group dropleft">
                                           <button class="btn btn-secondary btn-sm dropdown-toggle w-100" id="dropdownMenu1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               View
                                           </button>
                                           <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                               <a class="dropdown-item" href="{{route('product.index')}}">All</a>
                                               @foreach($categories as $category)
                                                   <a class="dropdown-item" href="{{ route('product.index', ['view_by' => $category->slug]) }}">{{ $category->name }}</a>
                                               @endforeach
                                           </div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                        </div>
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
                                <th scope="col">Remove</th>
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
                                    <td>
                                        <form id="form-delete" method="post" action="{{route('product.destroy', $productList->id)}}">
                                            @csrf
                                            {{ method_field('delete') }}
                                            <a class="fa-trash-alt-ic" href="#" onclick="document.getElementById('form-delete').submit()">
                                                <div class="icon">
                                                    <i class="fas fa-trash-alt"></i>
                                                </div>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if($products->hasPages())
                        <div class="card-footer p-l-32">
                            {{ $products->appends(request()->input())->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endcomponent
@endsection

@push('scripts')
    <script>
        $(".dropdown-menu a").click(function(){
            $(this).parents(".btn-group").find('.btn').html($(this).text() + ' <span class="caret"></span>');
            $(this).parents(".btn-group").find('.btn').val($(this).data('value'));
        });
    </script>
@endpush
