<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    //

    public function user() {
        return $this->hasMany('App\User');
    }
}
