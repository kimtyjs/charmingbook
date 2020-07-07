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

    public function presentPrice() {

        $fmt = new NumberFormatter( 'Cambodia', NumberFormatter::CURRENCY );
        return numfmt_format_currency($fmt, $this->price / 100, 'USD');
    }

    public function categories() {  //many-to-many

        return $this->belongsToMany(Category::class);

    }
    
}
