<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Role extends Model
{
    const ROLE_ADMIN   = 1;
    const ROLE_MANAGER = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public static $getRoles = [
        self::ROLE_ADMIN    => 'Admin',
        self::ROLE_MANAGER  => 'Manager',
    ];
}
