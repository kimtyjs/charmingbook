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
                                <a class="nav-item nav-link active" id="nav-account-tab" data-toggle="tab" href="#nav-account" role="tab" aria-controls="nav-account" aria-selected="true">My Account</a>
                                <a class="nav-item nav-link" id="nav-setting-tab" data-toggle="tab" href="#nav-setting" role="tab" aria-controls="nav-setting" aria-selected="false">Setting</a>
                                <a class="nav-item nav-link" id="nav-order-tab" data-toggle="tab" href="#nav-order" role="tab" aria-controls="nav-order" aria-selected="false">My Order</a>
                                <a class="nav-item nav-link" id="nav-address-tab" data-toggle="tab" href="#nav-address" role="tab" aria-controls="nav-address" aria-selected="false">Address</a>
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
                                <div class="tab-pane fade" id="nav-order" role="tabpanel" aria-labelledby="nav-order-tab">
                                    <div class="card">
                                       <div class="card-body">
                                           <table class="table">
                                               <thead class="thead-light">
                                               <tr>
                                                   <th scope="col">#Order</th>
                                                   <th scope="col">Ordered Date</th>
                                                   <th scope="col">Customer</th>
                                                   <th scope="col">Discount</th>
                                                   <th scope="col">Payment</th>
                                                   <th scope="col">Detail</th>
                                               </tr>
                                               </thead>
                                               <tbody>
                                               @foreach($orders as $order)
                                                   <tr>
                                                       <th scope="row">{{$order->id}}</th>
                                                       <td>{{$order->created_at}}</td>
                                                       <td>{{$order->billing_name}}</td>
                                                       <td>
                                                           @if($order->billing_discount === 0)
                                                               Yes
                                                               @else
                                                               No
                                                           @endif
                                                       </td>
                                                       <td>{{ $order->payment_gateway }}</td>
                                                       <td>
                                                           <a href="#" style="color: #28a745;" data-toggle="modal" data-target="#exampleModalCenter{{$order->id}}">
                                                               <i class="fas fa-info-circle"></i>
                                                           </a>
                                                           <div class="modal fade bd-example-modal-lg" id="exampleModalCenter{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                               <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                                   <div class="modal-content">
                                                                       <div class="modal-header">
                                                                           <h5 class="modal-title" id="exampleModalLongTitle">Ordered Products</h5>
                                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                               <span aria-hidden="true">&times;</span>
                                                                           </button>
                                                                       </div>
                                                                       <div class="modal-body">
                                                                           <table class="table table-striped">
                                                                               <thead>
                                                                               <tr>
                                                                                   <th scope="col">Name</th>
                                                                                   <th scope="col">Image</th>
                                                                                   <th scope="col">Price</th>
                                                                                   <th scope="col">Quantity</th>
                                                                                   <th scope="col">Total</th>
                                                                               </tr>
                                                                               </thead>
                                                                               <tbody>
                                                                               @foreach($order->products as $product)
                                                                                   <tr>
                                                                                       <td>{{ $product->name }}</td>
                                                                                       <td><img src="{{url('img/product', $product->image)}}" alt="{{$product->image}}" width="60" height="70"></td>
                                                                                       <td>{{ presentPrice($product->price) }}</td>
                                                                                       <td>{{ $product->pivot->quantity }}</td>
                                                                                       <td>{{ presentPrice($product->price * $product->pivot->quantity) }}</td>
                                                                                   </tr>
                                                                               @endforeach
                                                                               </tbody>
                                                                           </table>
                                                                           <div class="row d-flex justify-content-end m-t-30">
                                                                               <div class="col-md-5">
                                                                                   <div class="card">
                                                                                       <div class="card-header text-center" style="background-color: #dee2e6;">
                                                                                           <h5>Billing</h5>
                                                                                       </div>
                                                                                       <div class="card-body">
                                                                                            <p><strong class="m-r-15">SubTotal:</strong> {{ presentPrice($order->billing_subtotal) }}</p>
                                                                                            @if($order->shipped === 0)
                                                                                               <p><strong class="m-r-15">Shipping:</strong> {{ presentPrice(0) }}</p>
                                                                                           @endif
                                                                                           <p><strong class="m-r-15">Tax(%2):</strong>{{ presentPrice($order->billing_tax) }}</p>
                                                                                           <p><strong class="m-r-15">Total:</strong>{{ presentPrice($order->billing_total) }}</p>
                                                                                       </div>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                       <div class="modal-footer">
                                                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </td>
                                                   </tr>
                                               @endforeach
                                               </tbody>
                                           </table>
                                       </div>
                                    </div>
                                </div> <!--end My Order tab-->
                                <div class="tab-pane fade" id="nav-address" role="tabpanel" aria-labelledby="nav-address-tab">
                                    <div class="row justify-content-center">
                                        <div class="col-md-7">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="m-t-10 m-b-10">
                                                        <i class="fas fa-location-arrow"></i>
                                                        <span class="m-l-10">
                                                            <strong>Country: </strong>
                                                            {{ $order->billing_country }}
                                                        </span>
                                                    </div>
                                                    <div class="m-t-10 m-b-10">
                                                        <i class="fas fa-city"></i>
                                                        <span class="m-l-10">
                                                            <strong>City: </strong>
                                                            {{ $order->billing_city }}
                                                        </span>
                                                    </div>
                                                    <div class="m-t-10 m-b-10">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        <span class="m-l-10">
                                                            <strong>Address: </strong>
                                                            {{ $order->billing_address }}
                                                        </span>
                                                    </div>
                                                    <div class="m-t-10 m-b-10">
                                                        <i class="fas fa-mobile"></i>
                                                        <span class="m-l-10">
                                                            <strong>PhoneNumber: </strong>
                                                            {{ $order->billing_phone }}
                                                        </span>
                                                    </div>
                                                    <div class="m-t-10 m-b-10">
                                                        <i class="fas fa-boxes"></i>
                                                        <span class="m-l-10">
                                                            <strong>PostalCode: </strong>
                                                            {{ $order->billing_postal_code }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--end My address tab-->
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
