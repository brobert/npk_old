<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login', 'name', 'second_name', 'sur_name', 'email', 'password', 'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function get_full_name() {
        return sprintf('%s %s %s', $this->name, $this->second_name, $this->sur_name );
    }

    public function is_super_admin() {
        return $this->type === 'developer';
    }
}
