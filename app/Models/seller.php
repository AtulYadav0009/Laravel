<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    function productData(){
        return $this->hasOne('App\Models\Product');
    }

     function productDataMany(){
        return $this->hasMany('App\Models\Product');
    }

}