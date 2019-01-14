@extends('layouts.admin')
@section('content')
<form action="{{url('/championships/store')}}" method="POST">
    {{ csrf_field() }}
    @if ($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
    <input class="form-control" type="text" name="name" placeholder="Name" required/>
    <input class="form-control" type="date" name="start_date"/>
    <input class="form-control" type="date" name="end_date"/>
    <button type="submit" class="btn btn-primary">Save</button>
    <a class="btn btn-default" href="{{url('/championships')}}">Back</a>
</form>
@endsection