<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{    
    function championship(){
        return $this->belongsToMany('App\Championship');
    }
}
