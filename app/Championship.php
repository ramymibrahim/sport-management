<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Championship extends Model
{
    public $timestamps=false;
    protected $guarded=[];
    // protected $fillable=[];
    function events(){
        return $this->belongsToMany('App\Event');
    }

    public static function rules(){
        return [
            'name' => 'required|unique:championships|max:255',
            'start_date' => 'required',
            'end_date' => 'required'
        ];
    }
}