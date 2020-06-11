<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions() {

        return $this->belongsToMany(Permission::class)->withTimestamps();
    }

    public function users() {

        return $this->belongsToMany(User::class)->withTimestamps();

    }

    public function admins() {

        return $this->belongsToMany(Admin::class)->withTimestamps();

    }
}
