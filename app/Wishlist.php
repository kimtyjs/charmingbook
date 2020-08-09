<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model {

    protected $table = 'wishlists';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'product_id'];

}
