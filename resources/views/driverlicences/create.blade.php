@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/driverlicences" class="col-md-5 mx-auto">

<form method="post" action="/driverlicences">
@csrf

<div class="form-group">
    <input class="form-control" name="date_of_issue" type="text" placeholder="Date of issue">
</div>
<div class="form-group">
    <input class="form-control" name="expiration_date" type="text" placeholder="Expiration date">
</div>
<div class="form-group">
    <select class="form-control" name="county_id">
        @foreach($counties as $county)
        <option value="{{ $county->id }}">{{ $county->county_name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <select class="form-control" name="driver_id">
        @foreach($drivers as $driver)
        <option value="{{ $driver->id }}">{{ $driver->first_name }} {{ $driver->last_name }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection
