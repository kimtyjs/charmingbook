<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use NumberFormatter;

class Product extends Model
{
    public function presentPrice() {

        $fmt = new NumberFormatter( 'Cambodia', NumberFormatter::CURRENCY );

        return numfmt_format_currency($fmt, $this->price / 100, 'USD');
    }
}
