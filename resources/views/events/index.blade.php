@extends('layouts.admin')
@section('content')
<table class='table'>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>            
        </tr>
    </thead>
    <tbody>
    @foreach($events as $event)        
    <tr>
            <td>{{$event['id']}}</td>
            <td>{{$event['name']}}</td>            
        </tr>
    @endforeach
    </tbody>
</table>    
@endsection