@extends('layouts.backend')
@section('title', 'Dashboard | Category List')

@section('contents')
    @component('components.dashboard')
        <div class="row">
            @slot('title')
                <h1 class="dash-title">Category List</h1>
            @endslot
            <div class="col-lg-12">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fas fa-table"></i>
                        </div>
                        <div class="easion-card-title">Listing Row</div>
                    </div>
                    <div class="card-body ">
                        <table class="table table-in-card">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Parent ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    @if($category->category_id === null)
                                        <td>NULL</td>
                                    @else
                                        <td>{{ $category->category_id }}</td>
                                    @endif
                                    <td>{{ $category->name }}</td>
                                    <td>Delete</td>
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
