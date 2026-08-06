<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    // Sudo Su  
    function sellerData()
    {
        return $this->hasOne('App\Models\seller');
    }

    function sellerDataMany()
    {
        return $this->hasMany('App\Models\seller');
    }

    function seller() {
        return $this->belongsTo('App\Models\Seller');
    }
}
