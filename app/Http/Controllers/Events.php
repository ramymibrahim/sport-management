<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Event;
class Events extends Controller
{
    //
    function index(){
        $events=Event::all();
        return view('events.index')->with('events',$events);
    }
}
