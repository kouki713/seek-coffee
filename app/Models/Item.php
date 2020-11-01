<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function carts(){
        return $this->hasMany('App\Models\Cart');
    }
}
