@extends('layouts.frontend')
@section('title', 'Book Store | Account Information')

@push('styles')
    <style>
        .profile-picture {
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .profile-picture .img-circle {
            border-radius:50%;
            display:block;
            background-position-y:25%;
            width: 200px;
            height: 200px;
        }
        .profile-picture label {
            display: flex;
            justify-content: center;
        }

        .profile-picture label span input {

            display: none;
        }
        .profile-picture h5 {

            font-weight: 700;
            font-size: 1.14em;
            line-height: 1.4em;
            padding: 5px;
            margin-top: 15px;
            margin-bottom: 5px;

        }

        .profile-picture p.description{

            font-size: 1.14em;
            color: #A9A9A9;
            padding: 5px;
            margin-bottom: 20px;

        }
    </style>
@endpush

@section('content')
    <!-- Breadcrumbs Start -->
    <section class="breadcrumb-bg margin-bottom-80">
        <span class="gray-color-mask color-mask"></span>
        <div class="theme-container container">
            <div class="site-breadcrumb relative-block space-75">
                <h2 class="section-title">
                    <span>
                        <span class="funky-font blue-tag">My </span>
                        <span class="italic-font">Account</span>
                    </span>
                </h2>
                <h3 class="sub-title"> Account Information </h3>
                <hr class="dash-divider">
                <ol class="breadcrumb breadcrumb-menubar">
                    <li><a href="#">Home</a>  >  <span class="blue-color"> My Account </span> </li>
                </ol>
            </div>
        </div>
    </section>
    <!-- / Breadcrumbs Ends -->
    <article  class="container theme-container">
        <div class="row">
            <!-- Posts Start -->
            <aside class="col-md-12 col-sm-12 space-bottom-20">
                <div class="title-wrap  text-center space-bottom-25">
                    <h2 class="section-title with-border">
                        <span class="white-bg">
                            <span class="funky-font pink-tag">Account</span>
                            <span class="italic-font">Information</span>
                        </span>
                    </h2>
                </div>
                <div class="account-details-wrap">
                    <div class="title-2 sub-title-small">  My Account Information </div>
                    <div class="row">
                       <form action="{{route('user.profile.info', $user->id)}}" method="POST" enctype="multipart/form-data">
                           {{ csrf_field() }}
                           {{ method_field('patch') }}
                           <div class="col-md-4 col-sm-4">
                               <div class="account-box  light-bg default-box-shadow">
                                   <div class="profile-picture">
                                       <label for="avatar">
                                           @if($user->avatar === 'avatar.png')
                                               <img class="img-circle avatar-img" id="image-uploading" alt="{{$user->avatar}}" src="{{url('/img/user_profile/59563d4b9c.png')}}"/>
                                           @else
                                               <img class="img-circle avatar-img" id="image-uploading" alt="{{$user->avatar}}" src="{{url('img/user_profile/', $user->avatar)}}" />
                                           @endif
                                           <span class="text-danger">
                                           <input id="avatar" name="avatar" type="file" accept="image/jpg, image/gif, image/jpeg, image/png">
                                            {{$errors->first('avatar')}}
                                        </span>
                                       </label>
                                       <h5> {{ strtoupper($user->name) }} </h5>
                                       <p class="description">  " {{ $user->bio }} "   </p>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-8 col-sm-8">
                               <div class="account-box  light-bg default-box-shadow">
                                   <div class="row">
                                       <div class="col-md-6 col-sm-6{{$errors->has('name')?' has-error':''}}">
                                           <div class="form-group">
                                               <label for="name">Username</label>
                                               <input type="text" id="name" name="name" class="form-control" value="{{$user->name}}" placeholder="First Name" required="">
                                               <span class="text-danger">{{$errors->first('name')}}</span>
                                           </div>
                                       </div>
                                       <div class="col-md-6 col-sm-6{{$errors->has('email')?' has-error':''}}">
                                           <label for="email">Email Address</label>
                                           <div class="form-group">
                                               <input type="email" id="email" name="email" class="form-control" value="{{$user->email}}" placeholder="Email" required="">
                                               <span class="text-danger">{{$errors->first('email')}}</span>
                                           </div>
                                       </div>
                                       <div class="col-md-6 col-sm-6{{$errors->has('social_media_link')?' has-error':''}}">
                                           <div class="form-group">
                                               <label for="social_media_link">Link</label>
                                               <input type="text" id="social_media_link" name="social_media_link" class="form-control" value="{{$user->social_media_link}}" placeholder="Social_media_link" required="">
                                               <span class="text-danger">{{$errors->first('social_media_link')}}</span>
                                           </div>
                                       </div>
                                       <div class="col-md-6 col-sm-6{{$errors->has('career')?' has-error':''}}">
                                           <div class="form-group">
                                               <label for="career">Career</label>
                                               <input type="text" id="career" name="career" value="{{$user->career}}" class="form-control" placeholder="career" required="">
                                               <span class="text-danger">{{$errors->first('career')}}</span>
                                           </div>
                                       </div>
                                       <div class="col-md-12 col-sm-12{{$errors->has('bio')?' has-error':''}}">
                                           <div class="form-group">
                                               <label for="bio">Bio or Quote</label>
                                               <textarea class="bio form-control" id="bio" name="bio" rows="5" style="background-color: #cccccc">

                                                        {{ $user->bio }}

                                                    </textarea>
                                               <span class="text-danger">{{$errors->first('bio')}}</span>
                                           </div>
                                       </div>
                                       <div class="col-md-12 col-sm-12">
                                           <button type="submit" class="pink-btn btn">Update</button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </form>
                    </div>
                </div>
            </aside>
            <!-- Posts Ends -->
        </div>
    </article>
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
