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
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Category Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCat">Select parent</label>
                                    <select id="inputCat" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
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
