@extends('layouts.backend')
@section('title', 'Dashboard | Order History')

@section('contents')
    @component('components.dashboard')
        <div class="row">
            @slot('title')
                <h1 class="dash-title">Order </h1>
            @endslot
            <div class="col-lg-12">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fas fa-table"></i>
                        </div>
                        <div class="easion-card-title">User's Orders</div>
                    </div>
                    <div class="card-body ">
                        <table class="table table-in-card">
                            <thead>
                            <tr>
                                <th scope="col">Code</th>
                                <th scope="col">Date</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">PhoneNumber</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Shipped</th>
                                <th scope="col">Invoice</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id + 234566 }}</td>
                                    <td>{{ $order->created_at }}</td>
                                    <td>{{ $order->billing_name }}</td>
                                    <td>{{ $order->billing_email }}</td>
                                    <td>{{ $order->billing_address }}</td>
                                    <td>{{ $order->billing_phone }}</td>
                                    <td>{{ $order->payment_gateway }}</td>
                                    @if($order->shipped === true)
                                        <td>shipped</td>
                                        @else
                                        <td>No</td>
                                    @endif
                                    <td>
                                        <a href="{{route('user.invoice',([$order->user_id, $order->billing_name, $order->id]))}}">
                                            <i class="fas fa-receipt"></i>
                                        </a>
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
