@extends('layouts.backend')
@section('title', 'Dashboard | Category')

@section('contents')
    @component('components.dashboard')
        <div class="row">
            @slot('title')
                <h1 class="dash-title">Adding Category</h1>
            @endslot
            <div class="col-xl-12">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <div class="easion-card-title"> Category Form </div>
                    </div>
                    <div class="card-body ">
                        <form action="{{ route('category.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-6{{$errors->has('name')?' has-error':''}}">
                                    <label for="inputName">Name</label>
                                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Category Name">
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCat">Select Category</label>
                                    <select id="inputCat" name="inputCat" class="form-control">
                                        <option value="null"> ParentCategory </option>
                                        @foreach($categories as $id => $category)
                                            <option value="{{ $id }}"> {{$category}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12{{$errors->has('slug')?' has-error':''}}">
                                    <label for="inputSlug">Slug of Category</label>
                                    <input type="text" name="slug" class="form-control" id="inputSlug" placeholder="Category Slug">
                                    <span class="text-danger">{{$errors->first('slug')}}</span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endcomponent
@endsection
