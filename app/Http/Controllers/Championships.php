<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Championship;
class Championships extends Controller
{
    //
    function index(){
        $championships=Championship::all();        
        return view('championships.index')->with('championships',$championships);
    }
}
