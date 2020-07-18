@extends('layouts.backend')
@section('title', 'Dashboard | User Buying History')

@push('styles')
    <style>
        .table > tbody > tr > .emptyrow {
            border-top: none;
        }

        .table > thead > tr > .emptyrow {
            border-bottom: none;
        }

        .table > tbody > tr > .highrow {
            border-top: 3px solid;
        }

        .iconbig {
            font-size: 77px;
            color: #5CB85C;
        }

    </style>
@endpush

@section('contents')
    @component('components.dashboard')
        <div class="row">
            @slot('title')
                <h1 class="dash-title">Buying History</h1>
            @endslot
            <div class="col-lg-12">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fas fa-table"></i>
                        </div>
                        <div class="easion-card-title">Invoice Table</div>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <h2>Invoice for purchase #{{ $order->id + 234566 }}</h2>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12 col-md-3 col-lg-3 pull-left">
                                        <div class="card m-b-20">
                                            <div class="card-header">
                                                Billing Details
                                            </div>
                                            <div class="card-body">
                                                {{ $order->billing_city }}<br>
                                                {{ $order->billing_country }}<br>
                                                {{ $order->billing_address }}<br>
                                                {{ $order->billing_phone }} <br>
                                                {{ $order->billing_postal_code }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3 col-lg-3 pull-left">
                                        <div class="card m-b-20">
                                            <div class="card-header">
                                                Payment Information
                                            </div>
                                            <div class="card-body">
                                                <strong>CardName:</strong> {{ $order->billing_name_on_card }}
                                                <strong>PaymentType:</strong> {{ $order->payment_gateway }}
                                                <br>
                                                <br>
                                                <br>
                                                <strong></strong><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3 col-lg-3 pull-left">
                                        <div class="card m-b-20">
                                            <div class="card-header">
                                                Order References
                                            </div>
                                            <div class="card-body">
                                                @if($order->billing_discount === 0)
                                                    <strong>Discount: N0</strong><br>
                                                    @else <strong>Discount: </strong>{{ presentPrice($order->billing_discount) }}<br>
                                                @endif
                                                @if($order->billing_discount_code === null)
                                                    <strong>DiscountCode:</strong> No<br>
                                                    @else
                                                    <strong>DiscountCode:</strong> {{ $order->billing_discount_code }}<br>
                                                @endif
                                                <strong>Tax: </strong>{{$order->billing_tax}}<br>
                                                @if($order->shipped === 0)
                                                    <strong>Shipped:</strong> No<br>
                                                    @else
                                                    <strong>Shipped:</strong> Yes<br>
                                                @endif
                                                @if($order->error === null)
                                                    <strong>Order:</strong> Successful<br>
                                                    @else
                                                    <strong>Order:</strong> Failure<br>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3 col-lg-3 pull-left">
                                        <div class="card m-b-20">
                                            <div class="card-header">
                                                Shipping Address
                                            </div>
                                            <div class="card-body">
                                                @if($order->shipped !== 0)
                                                    <strong>David Peere:</strong><br>
                                                    1111 Army Navy Drive<br>
                                                    Arlington<br>
                                                    VA<br>
                                                    <strong>22 203</strong><br>
                                                    @else
                                                    <strong>No shipping</strong><br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header justify-content-center">
                                        <h3 class="m-b-0"><strong>Order Summary</strong></h3>
                                    </div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col" class="text-right">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($order->products as $orderedProduct)
                                                <tr>
                                                    <td>{{ $orderedProduct->name }}</td>
                                                    <td>{{ presentPrice($orderedProduct->price) }}</td>
                                                    <td>{{ $orderedProduct->pivot->quantity }}</td>
                                                    <td scope="col" class="text-right">{{ presentPrice($orderedProduct->price * $orderedProduct->pivot->quantity) }}</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td class="highrow"></td>
                                                <td class="highrow"></td>
                                                <td class="highrow text-center"><strong>Subtotal</strong></td>
                                                <td class="highrow text-right">{{ presentPrice($order->billing_subtotal) }}</td>
                                            </tr>
                                            <tr>
                                                <td class="emptyrow"></td>
                                                <td class="emptyrow"></td>
                                                <td class="emptyrow text-center"><strong>Shipping</strong></td>
                                                <td class="emptyrow text-right">{{presentPrice(0)}}</td>
                                            </tr>
                                            <tr>
                                                <td class="emptyrow"></td>
                                                <td class="emptyrow"></td>
                                                <td class="emptyrow text-center"><strong>Tax(2%)</strong></td>
                                                <td class="emptyrow text-right">{{ presentPrice($order->billing_tax) }}</td>
                                            </tr>
                                            <tr>
                                                <td class="emptyrow"><i class="fa fa-barcode iconbig"></i></td>
                                                <td class="emptyrow"></td>
                                                <td class="emptyrow text-center"><strong>Total</strong></td>
                                                <td class="emptyrow text-right">{{ presentPrice($order->billing_total) }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcomponent
@endsection


