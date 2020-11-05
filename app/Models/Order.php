<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function order_details(){
        return $this->hasMany('App\Models\OrderDetail');
    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
