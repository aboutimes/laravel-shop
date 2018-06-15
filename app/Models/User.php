<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'email_verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * 支持 integer，real，float，double，string，boolean，object，
     * array，collection，date，datetime 和 timestamp
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * 类型转换
     *
     * @var array
     */
    protected $casts = [
        'email_verified' => 'boolean',
    ];
}
