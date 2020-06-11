<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function roles() {

        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function users() {

        return $this->belongsToMany(User::class)->withTimestamps();

    }

    public function admins() {

        return $this->belongsToMany(Admin::class)->withTimestamps();

    }
}
