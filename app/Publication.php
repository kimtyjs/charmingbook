<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [ 'name', 'slug'];

    public function products() {
        return $this->hasMany(Product::class);
    }

}
