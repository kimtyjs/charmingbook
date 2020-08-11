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
                                <div class="form-group col-md-4{{$errors->has('name')?' has-error':''}}">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" name="name" id="inputName" placeholder="Name ...">
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputAuthor">Select Author</label>
                                    <select id="inputAuthor" name="author_id" class="custom-select">
                                        @foreach($authors as $id => $author)
                                            <option value="{{ $id }}"> {{ $author }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPublisher">Select Publisher</label>
                                    <select id="inputPublisher" name="publication_id" class="custom-select">
                                        @foreach($publishers as $id => $publisher)
                                            <option value="{{ $id }}"> {{ $publisher }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4{{$errors->has('details')?' has-error':''}}">
                                    <div class="form-group">
                                        <label for="inputDetails">Details</label>
                                        <input type="text" class="form-control" name="details" id="inputDetails" placeholder="Details">
                                        <span class="text-danger">{{$errors->first('details')}}</span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4{{$errors->has('price')?' has-error':''}}">
                                    <div class="form-group">
                                        <label for="inputPrice">Price</label>
                                        <input type="text" class="form-control" name="price" id="inputPrice" placeholder="Price">
                                        <span class="text-danger">{{$errors->first('price')}}</span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4{{$errors->has('quantity')?' has-error':''}}">
                                    <div class="form-group">
                                        <label for="inputQuantity">Quantity</label>
                                        <input type="text" class="form-control" name="quantity" id="inputQuantity" placeholder="Quantity">
                                        <span class="text-danger">{{$errors->first('quantity')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4{{$errors->has('format')?' has-error':''}}">
                                    <div class="form-group">
                                        <label for="inputFormat">Format</label>
                                        <input type="text" class="form-control" name="format" id="inputFormat" placeholder="Format">
                                        <span class="text-danger">{{$errors->first('format')}}</span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputLanguage">Select Language</label>
                                    <select id="inputLanguage" name="language_id" class="custom-select">
                                        @foreach($languages as $id => $language)
                                            <option value="{{ $id }}"> {{ $language }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4{{$errors->has('dimensions')?' has-error':''}}">
                                    <div class="form-group">
                                        <label for="inputFormat">Dimensions</label>
                                        <input type="text" class="form-control" name="dimensions" id="inputDimensions" placeholder="Dimension">
                                        <span class="text-danger">{{$errors->first('dimensions')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4{{$errors->has('publication_date')?' has-error':''}}">
                                    <div class="form-group">
                                        <label for="inputPublicationDate">PublicationDate</label>
                                        <input type="date" class="form-control" name="publication_date" id="inputPublicationDate" placeholder="Details">
                                        <span class="text-danger">{{$errors->first('publication_date')}}</span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputCat">Select Category</label>
                                    <select id="inputCat" name="category_id" class="custom-select">
                                        @foreach($categories as $id => $category)
                                            <option value="{{ $id }}"> {{ $category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4{{$errors->has('image')?' has-error':''}}">
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

