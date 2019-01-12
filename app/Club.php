<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    //
    function players(){
        return $this->hasMany('App\Player');
    }

    function coatches(){
        return $this->hasMany('App\Coatch');
    }

    function  championshipEvent(){
       return $this->belongsToMany('App\ChampionshipEvent');
    }
}
