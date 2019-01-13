@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/drivers" class="col-md-5 mx-auto">

<form method="post" action="/drivers">
@csrf

<div class="form-group">
    <input class="form-control" name="OIB" type="text" placeholder="OIB">
</div>
<div class="form-group">
    <input class="form-control" name="first_name" type="text" placeholder="First name">
</div>
<div class="form-group">
    <input class="form-control" name="last_name" type="text" placeholder="Last name">
</div>
<div class="form-group">
    <input class="form-control" name="sex" type="text" placeholder="Sex">
</div>
<div class="form-group">
    <input class="form-control" name="date_of_birth" type="date" placeholder="Date of birth">
</div>
<div class="form-group">
    <select class="form-control" name="city_id">
        @foreach($cities as $city)
        <option value="{{ $city->id }}">{{ $city->city_name }}</option>
        @endforeach
    </select>
</div>


<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection