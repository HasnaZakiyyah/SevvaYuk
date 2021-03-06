<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'noktp', 'notelp', 'username', 'email', 'password',
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

    public function carts() {
        return $this->hasManyThrough('App\Cart', 'App\Product');
    }

    public function wishlists() {
        return $this->belongsToMany('App\Product', 'wishlists')->using('App\Wishlist');
    }

    public function orders() {
        return $this->hasManyThrough('App\Order', 'App\OrderDetail');
    }
}
