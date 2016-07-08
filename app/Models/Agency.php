<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    //
    protected $fillable = [
        'code','name','description',
        'owner','phone','e_mail',
        'street','app_number','house_number','city','state','postal_code',
        'KRS','NIP','REGON'
    ];

    public function user() {
        return $this->hasMany('App\User');
    }
}
