<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'address', 'city', 'country', 'phone', 'postalCode', 'ship_address' ,'avatar',
        'last_login_at', 'last_login_ip', 'current_login_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function permissions() {

        return $this->belongsToMany(Permission::class)->withTimestamps();

    }

    public function roles() {

        return $this->belongsToMany(Role::class)->withTimestamps();

    }

    public function hasARole($role) {

        return null !== $this->roles()->where('slug', $role);
    }

    public function orders() {

        return $this->hasMany(Order::class);
    }

}
