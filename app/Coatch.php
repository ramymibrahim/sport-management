<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coatch extends Model
{
    //
    
    function club(){
        return $this->belongsTo('App\Club');
    }
    
    function players(){
        return $this->hasMany('App\Player');
    }
    
}
