<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Championship extends Model
{
    function events(){
        return $this->belongsToMany('App\Event');
    }
}
