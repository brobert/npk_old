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
        'login', 'name', 'second_name', 'sur_name', 'email', 'password', 'type', 'agency_id', 'unit_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    private $types_order = [
        'child',
        'worker',
        'admin',
        'agency',
        'developer',
    ];

    public function get_full_name() {
        return sprintf('%s %s %s', $this->name, $this->second_name, $this->sur_name );
    }

    public function check_type( $type ) {

        foreach ( $this->types_order as $t) {
            if ( $t === $type ) {
                return true;
            }
            if ( $t === $this->type ) {
                return;
            }
        }

        return;
    }

    public function is_super_admin() {
        return $this->type === 'developer';
    }

    public function agency() {
        return $this->belongsTo('App\Models\Agency');
    }
}
