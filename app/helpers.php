<?php

function presentPrice($price) {

    $fmt = new NumberFormatter( 'Cambodia', NumberFormatter::CURRENCY );
    return numfmt_format_currency($fmt, $price / 100, 'USD');
}


