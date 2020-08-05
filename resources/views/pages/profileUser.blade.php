@extends('layouts.frontend')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/components/user_profile.css')}}">
@endpush

@section('content')
    <div class="container m-t-25">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('user.profile.img', $user->id)}}" method="POST" role="form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('patch') }}
                            <div class="profile-picture">
                                <label for="avatar">
                                    @if($user->avatar === 'avatar.png')
                                        <img class="rounded-circle" id="image-uploading" alt="{{$user->image}}" src="{{url('/img/user_profile/59563d4b9c.png')}}"/>
                                    @else
                                        <img class="rounded-circle" id="image-uploading" alt="{{$user->image}}" src="{{url('img/user_profile/', $user->avatar)}}" />
                                    @endif
                                    <span class="text-danger">
                                        <input id="avatar" name="avatar" type="file" accept="image/gif, image/jpeg, image/png">
                                        {{$errors->first('avatar')}}
                                    </span>
                                </label>
                                <h5> {{ strtoupper($user->name) }} </h5>
                                <p class="description">  " {{ $user->bio }} "   </p>
                                <hr>
                                <button type="submit" class="btn btn-light">Update Profile Image</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-account-tab" data-toggle="tab" href="#nav-account" role="tab" aria-controls="nav-account" aria-selected="true">My account</a>
                                <a class="nav-item nav-link" id="nav-setting-tab" data-toggle="tab" href="#nav-setting" role="tab" aria-controls="nav-setting" aria-selected="false">Setting</a>
                            </div>
                        </nav>
                    </div>
                    <div class="card-body">
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-account" role="tabpanel" aria-labelledby="nav-account-tab">
                                    <form method="post" action="{{route('user.profile.info', $user->id)}}" role="form">
                                        {{ csrf_field() }}
                                        {{ method_field('patch') }}
                                        <div class="row">
                                            <!--username-->
                                            <div class="col-md-4{{$errors->has('name')?' has-error':''}}">
                                                <div class="form-group">
                                                    <label for="name">UserName</label>
                                                    <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter UserName">
                                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                                </div>
                                            </div>

                                            <!--EMAIL ADDRESS-->
                                            <div class="col-md-8{{$errors->has('email')?' has-error':''}}">
                                                <div class="form-group">
                                                    <label for="email">Email address</label>
                                                    <input type="email" class="form-control" value="{{ $user->email }}" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!--SocialMediaLink-->
                                            <div class="col-md-6{{$errors->has('social_media_link')?' has-error':''}}">
                                                <div class="form-group">
                                                    <label for="social_media_link">SocialMedia Profile</label>
                                                    <input type="text" class="form-control" value="{{ $user->social_media_link }}" id="social_media_link" name="social_media_link" aria-describedby="SocialMediaLinkHelp" placeholder="Enter Link">
                                                    <span class="text-danger">{{$errors->first('social_media_link')}}</span>
                                                </div>
                                            </div>
                                            <!--Profession-->
                                            <div class="col-md-6{{$errors->has('career')?' has-error':''}}">
                                                <div class="form-group">
                                                    <label for="career">Career</label>
                                                    <input type="text" class="form-control" value="{{ $user->career }}" id="career" name="career" aria-describedby="careerHelp" placeholder="Enter Career">
                                                    <span class="text-danger">{{$errors->first('career')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12{{$errors->has('bio')?' has-error':''}}">
                                                <div class="form-group">
                                                    <label for="bio">Bio OR Quote</label>
                                                    <textarea class="bio form-control" id="bio" name="bio" rows="5">

                                                        {{ $user->bio }}

                                                    </textarea>
                                                    <span class="text-danger">{{$errors->first('bio')}}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="btn-update">
                                            <button type="submit" class="btn btn-secondary"> Update Profile </button>
                                        </div>

                                    </form> <!--end account setting form-->

                                </div>   <!--end tap one "Account"-->

                                <div class="tab-pane fade" id="nav-setting" role="tabpanel" aria-labelledby="nav-setting-tab">
                                    <form action="{{route('user.profile.password', $user->id)}}" role="form" method="POST" >
                                        {{ csrf_field() }}
                                        {{method_field('patch')}}
                                        <div class="row">
                                            {{-- Current Password--}}
                                            <div class="col-md-12{{$errors->has('password')?' has-error':''}}">
                                                <div class="form-group">
                                                    <label for="password">Old Password</label>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Old Password">
                                                    <span class="text-danger">{{$errors->first('password')}}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            {{-- New Password--}}
                                            <div class="col-md-6{{$errors->has('new_password')?' has-error':''}}">
                                                <div class="form-group">
                                                    <label for="new_password"> New Password</label>
                                                    <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Enter New Password">
                                                    <span class="text-danger">{{$errors->first('new_password')}}</span>
                                                </div>
                                            </div>

                                            {{-- Confirmed New Password--}}
                                            <div class="col-md-6{{$errors->has('confirm_password')?' has-error':''}}">
                                                <div class="form-group">
                                                    <label for="confirm_password"> Confirmed New Password </label>
                                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter New Password">
                                                    <span class="text-danger">{{$errors->first('confirm_password')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-update">
                                            <button type="submit" class="btn btn-secondary"> Update Profile </button>
                                        </div>
                                    </form>
                                </div>  <!--end password setting class-->
                            </div>
                        </div>
                    </div>  <!--end card-body class-->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('js/tinymce.min.js')}}"></script>
    <script>
        tinymce.init({
            selector:'textarea.bio',
        });
    </script>
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
@endpush
