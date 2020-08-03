@extends('layouts.backend')
@section('title', 'Dashboard | Product Edit')

@push('styles')
    <style>
        .product-slug {
            margin-top: 15px;
        }
        input {
            border: none;
            width: 100%;
        }

        textarea.form-control {
            border: none;
        }

        #avatar {
            display: none;
        }


    </style>
@endpush

@section('contents')
    @component('components.dashboard')
        <div class="row">
            @slot('title')
                <h1 class="dash-title">Product Edition</h1>
            @endslot
                <div class="col-xl-12">
                    <div class="card easion-card">
                        <div class="card-header bg-warning text-dark">
                            <div class="easion-card-icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <div class="easion-card-title"> Product Profile </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">

                                @csrf
                                {{ method_field('patch') }}

                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="avatar{{$errors->has('image')?' has-error':''}}">
                                            <img id="image-uploading" src="{{url('img/product', $product->image)}}" width="200" height="300" alt="productImg">
                                            <span class="text-danger">
                                            <input id="avatar" name="image" type="file" accept="image/gif, image/jpeg, image/png">
                                            {{$errors->first('image')}}
                                        </span>
                                        </label>
                                        <div class="product-slug">
                                            <h5 title="Product Slug{{$errors->has('slug')?' has-error':''}}">
                                                <input title="Product Slug" id="slug" name="slug" value="{{ $product->slug }}">
                                                <span class="text-danger">{{$errors->first('slug')}}</span>
                                            </h5>
                                        </div>
                                        <div class="product-category">
                                            @foreach($product->categories as $categoryName)
                                                <h5 title="product Category">{{ $categoryName->name }}</h5>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <h4>
                                            <b class="{{$errors->has('name')?' has-error':''}}">
                                                <input title="Product Name" id="name" name="name" value="{{  $product->name  }}">
                                                <span class="text-danger">{{$errors->first('name')}}</span>
                                            </b>
                                        </h4>
                                        <hr>
                                        <div class="details{{$errors->has('description')?' has-error':''}}">
                                            <textarea class="description form-control" id="description" name="description" rows="5">
                                                {{ $product->description }}
                                            </textarea>
                                            <span class="text-danger">{{$errors->first('description')}}</span>
                                        </div>
                                        <div class="end">
                                            <div class="product-code{{$errors->has('codes')?' has-error':''}}">
                                                <input title="Product Codes" id="codes" name="codes" value="{{ $product->codes }}">
                                                <span class="text-danger">{{$errors->first('codes')}}</span>
                                            </div>
                                            <div class="product-price{{$errors->has('price')?' has-error':''}}">
                                                <input title="Product Price" id="price" name="price" value="{{ $product->price }}">
                                                <span class="text-danger">{{$errors->first('price')}}</span>
                                            </div>
                                            <div class="product-price{{$errors->has('quantity')?' has-error':''}}">
                                                <input title="Product Quantity" id="quantity" name="quantity" value="{{ $product->quantity }}">
                                                <span class="text-danger">{{$errors->first('quantity')}}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <span><b>Format: </b></span><span>Paperback|384 pages</span><br>
                                                <span><b>Dimensions: </b></span><span> 129 x 198 x 24mm | 266g </span><br>
                                                <span><b>Publication date: </b></span><span>05 Apr 2012</span><br>
                                                <span><b>Publisher: </b></span><span>Cornerstone</span><br>
                                                <span><b>Imprint: </b></span><span>ARROW BOOKS LTD</span><br>
                                            </div>
                                            <div class="col-lg-6">
                                                <span><b>Publication City/Country: </b></span><span>London, United Kingdom</span><br>
                                                <span><b>Language: </b></span><span>English</span><br>
                                                <span><b>ISBN10: </b></span><span>0099560437</span><br>
                                                <span><b>ISBN13: </b></span><span>9780099560432</span><br>
                                                <span><b>Bestseller rank: </b></span><span>1,625</span><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-submit d-flex justify-content-center m-t-35 m-b-20">
                                    <button class="btn btn-warning mb-1" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    @endcomponent
@endsection

@push('scripts')
    <script>
        function readURL(input) {

            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image-uploading').attr('src', e.target.result);

                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#avatar").change(function() {

            readURL(this);

        });
    </script>
    <script src="{{asset('js/tinymce.min.js')}}"></script>
    <script>
        tinymce.init({
            selector:'textarea.description',
        });
    </script>
@endpush
