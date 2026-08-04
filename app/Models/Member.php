<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Override;

class Member extends Model
{
    protected $table = 'member';
    function getNameAttribute($val)
    {
        return strtolower($val);
    }

    function setNameAttribute($val){
        $this->attributes['name']=ucfirst($val);
    }
}
