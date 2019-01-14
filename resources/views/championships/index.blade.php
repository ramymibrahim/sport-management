@extends('layouts.admin')
@section('content')
<a href="{{url('championships/create')}}" class="btn btn-success">Create</a>
<table class='table'>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Start Date</th>
            <th>End Date</th>
        </tr>
    </thead>
    <tbody>
    @foreach($championships as $c)
    <tr>
            <td>{{$c['id']}}</td>
            <td>{{$c['name']}}</td>
            <td>{{$c['start_date']}}</td>
            <td>{{$c['end_date']}}</td>
        </tr>
    @endforeach
    </tbody>
</table>    
@endsection