<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Championship;
use Validator;
class Championships extends Controller
{
    //
    function index(){
        $championships=Championship::all();
        return view('championships.index')->with('championships',$championships);
    }

    function create(){
        return view('championships.create');
    }

    function store(Request $request){        
        $validator = Validator::make($request->all(),Championship::rules());
        if ($validator->fails())
        {           
            return redirect()->back()->withErrors($validator->errors());
        }
        $championship = new Championship($request->all());
        $championship->save();
        return redirect('/championships');
    }

}
