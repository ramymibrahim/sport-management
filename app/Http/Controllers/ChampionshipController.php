<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Championship;
use Validator;
use Session;
class ChampionshipController extends Controller
{
    function index(){
        $championships=Championship::all();        
        return view('championships.index')->with('championships',$championships);
    }

    function show(){

    }

    function create(){
        return view('championships.create');
    }

    function store(Request $request){        
        $validator = Validator::make($request->all(),Championship::rules());
        if ($validator->fails())
        {           
            return redirect()->back()->withErrors($validator->errors())->withInput($request->all());
        }
        $championship = new Championship($request->all());
        $championship->save();
        Session::flash('message', 'Record Created Successfully!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/championships');
    }

    function edit($id){
        $championship = Championship::findOrFail($id);
        return view('championships.edit')->with('championship',$championship);
    }

    function update($id,Request $request){
        $championship = Championship::findOrFail($id);
        // $championship['name']=$request['name'];
        // $championship['start_date']=$request['start_date'];
        // $championship['end_date']=$request['end_date'];
        $championship->fill($request->all());
        $championship->save();
        Session::flash('message', 'Record Updated Successfully!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/championships');
    }

    function destroy($id){
        $championship = Championship::findOrFail($id);        
        $championship->delete();
        Session::flash('message', 'Record Deleted Successfully!'); 
        Session::flash('alert-class', 'alert-warning'); 
        return redirect('/championships');
    }
}