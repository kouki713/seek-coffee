<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function carts(){
        return $this->hasMany('App\Models\Cart');
    }
    public function receipts(){
        return $this->hasMany('App\Models\Receipt');
    }
    public function order_details(){
        return $this->hasMany('App\Models\OrderDetail');
    }
}
