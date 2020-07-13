<?php

function presentPrice($price) {

    $fmt = new NumberFormatter( 'Cambodia', NumberFormatter::CURRENCY );
    return numfmt_format_currency($fmt, $price / 100, 'USD');
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


