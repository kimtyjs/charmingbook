<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $fillable = ['billing_name', 'billing_email', 'billing_country', 'billing_city', 'billing_address',
        'billing_postal_code', 'billing_phone', 'billing_name_on_card', 'billing_discount', 'billing_discount_code',
        'billing_subtotal', 'billing_tax', 'billing_total', 'payment_gateway', 'shipped', 'error'
    ];

    public function user() {

        return $this->belongsTo(User::class);

    }

    public function products() {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

}

