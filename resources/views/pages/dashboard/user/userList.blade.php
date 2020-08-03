@extends('layouts.backend')
@section('title', 'Dashboard | User Management')

@section('contents')
    @component('components.dashboard')
        <div class="row">
            @slot('title')
                <h1 class="dash-title">User List</h1>
            @endslot
                <div class="col-lg-12">
                    <div class="card easion-card">
                        <div class="card-header">
                            <div class="easion-card-icon">
                                <i class="fas fa-table"></i>
                            </div>
                            <div class="easion-card-title">Default table</div>
                        </div>
                        <div class="card-body ">
                            <table class="table table-in-card">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Permission</th>
                                    <th scope="col">Profile</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td> {{ $user->name }} </td>
                                            <td> {{ $user->email }}</td>
                                            @foreach($user->roles as $role)
                                                <td>{{ $role->name }}</td>
                                            @endforeach
                                            @foreach($user->permissions as $permission)
                                                <td> {{ $permission->name }}</td>
                                            @endforeach
                                            <td>
                                                <a href="{{route('user.checkProfile', [$user->id, $user->name])}}">
                                                    <div class="icon">
                                                        <i class="fas fa-user-check"></i>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenu1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Disable
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                        <a class="dropdown-item" href="#">Banned</a>
                                                        <a class="dropdown-item" href="#">Remove</a>
                                                    </div>
                                                </div>
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

@push('scripts')
    <script>
        $(".dropdown-menu a").click(function(){
            $(this).parents(".btn-group").find('.btn').html($(this).text() + ' <span class="caret"></span>');
            $(this).parents(".btn-group").find('.btn').val($(this).data('value'));
        });
    </script>
@endpush
