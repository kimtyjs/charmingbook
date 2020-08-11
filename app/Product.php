<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use NumberFormatter;

class Product extends Model
{

    protected $fillable = [
        'name', 'slug', 'details', 'price', 'description', 'featured', 'codes', 'image', 'quantity',
        'category_id', 'author_id', 'publication_id', 'publication_date', 'isbn', 'format', 'dimensions',
        'popular', 'language_id'
    ];

    public function categories() {  //many-to-many
        return $this->belongsToMany(Category::class);
    }

    public function orders() {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }

    public function publication() {
        return $this->belongsTo(Publication::class);
    }

    public function author() {
        return $this->belongsTo(Author::class);
    }

    public function language() {
        return $this->belongsTo(Language::class);
    }


}
