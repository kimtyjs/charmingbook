<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use NumberFormatter;

class Product extends Model
{

    protected $fillable = [
        'name', 'slug', 'details', 'price', 'description', 'featured', 'codes', 'image', 'images',
        'quantity', 'category_id'
    ];

    public function categories() {  //many-to-many

        return $this->belongsToMany(Category::class);

    }

    public function orders() {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }


}
