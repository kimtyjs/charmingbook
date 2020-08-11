<?php

use Gloudemans\Shoppingcart\Facades\Cart;


function presentPrice($price) {

    $fmt = new NumberFormatter( 'Cambodia', NumberFormatter::CURRENCY );
    return numfmt_format_currency($fmt, $price, 'USD');
}

function getStockLevel($quantity) {

    if($quantity >= 5) { // 5 up too .. In stock always available
        $stockLevel = '<span class="badge badge-success">In Stock</span>';
    } elseif ($quantity <= 3 && $quantity > 0) {
        $stockLevel = '<span class="badge badge-warning">Low Stock</span>';
    } else {
        $stockLevel = '<span class="badge badge-danger">Unavailable</span>';
    }

    return $stockLevel;
}

function getNumbers() {

    $tax = config('cart.tax') / 100;
    $discount = session()->get('coupon')['discount'] ?? 0;
    $code = session()->get('coupon')['name'] ?? null;
    $newSubtotal = (Cart::subtotal() - $discount);
    $newTax = $newSubtotal * $tax;
    $newTotal = $newSubtotal * (1 + $tax);

    return collect([
        'discount' => $discount,
        'code' => $code,
        'newSubtotal' => $newSubtotal,
        'newTax' => $newTax,
        'newTotal' => $newTotal
    ]);
}

function random_strings($length) {
    //sha1 the timestamp and returns substring
    return substr(sha1(time()),0, $length);
}

function generateISBN($min, $max) {

    return random_int($min, $max);
}


