@extends('layouts.backend')
@section('title', 'Dashboard | Product')

@section('contents')
    @component('components.dashboard')
        <div class="row">
            @slot('title')
                <h1 class="dash-title">Product Section</h1>
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
            <div class="col-xl-12">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <div class="easion-card-title"> Product Form </div>
                    </div>
                    <div class="card-body ">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6{{$errors->has('name')?' has-error':''}}">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" name="name" id="inputName" placeholder="Name ...">
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                </div>
                                <div class="form-group col-md-6{{$errors->has('slug')?' has-error':''}}">
                                    <label for="inputSlug">Slug</label>
                                    <input type="text" class="form-control" name="slug" id="inputSlug" placeholder="Slug">
                                    <span class="text-danger">{{$errors->first('slug')}}</span>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6{{$errors->has('codes')?' has-error':''}}">
                                    <div class="form-group">
                                        <label for="inputCode">Code</label>
                                        <input type="text" class="form-control" name="codes" id="inputCode" placeholder="Code">
                                        <span class="text-danger">{{$errors->first('codes')}}</span>
                                    </div>
                                </div>
                                <div class="form-group col-md-6{{$errors->has('details')?' has-error':''}}">
                                    <div class="form-group">
                                        <label for="inputDetails">Details</label>
                                        <input type="text" class="form-control" name="details" id="inputDetails" placeholder="Details">
                                        <span class="text-danger">{{$errors->first('details')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6{{$errors->has('price')?' has-error':''}}">
                                    <div class="form-group">
                                        <label for="inputPrice">Price</label>
                                        <input type="text" class="form-control" name="price" id="inputPrice" placeholder="Price">
                                        <span class="text-danger">{{$errors->first('price')}}</span>
                                    </div>
                                </div>
                                <div class="form-group col-md-6{{$errors->has('quantity')?' has-error':''}}">
                                    <div class="form-group">
                                        <label for="inputQuantity">Quantity</label>
                                        <input type="text" class="form-control" name="quantity" id="inputQuantity" placeholder="Quantity">
                                        <span class="text-danger">{{$errors->first('quantity')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCat">Select Category</label>
                                    <select id="inputCat" name="category_id" class="custom-select">
                                        @foreach($categories as $id => $category)
                                            <option value="{{ $id }}"> {{ $category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6{{$errors->has('image')?' has-error':''}}">
                                    <label for="inputImage">Filter Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg" class="custom-file-input" id="inputImage">
                                        <label class="custom-file-label" for="inputImage">Choose file...</label>
                                    </div>
                                    <span class="text-danger">{{$errors->first('image')}}</span>
                                </div>
                                <div class="form-group col-md-12{{$errors->has('description')?' has-error':''}}">
                                    <label for="inputDesc">Description</label>
                                    <textarea class="description form-control" id="inputDesc" rows="5" name="description"></textarea>
                                    <span class="text-danger">{{$errors->first('description')}}</span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endcomponent
@endsection
@push('scripts')
    <script src="{{asset('js/tinymce.min.js')}}"></script>
    <script>
        tinymce.init({
            selector:'textarea.description',
        });
    </script>
@endpush

