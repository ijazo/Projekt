@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/categorydriverlicence" class="col-md-5 mx-auto">

<form method="post" action="/categorydriverlicence">
@csrf

<div class="form-group">
    <input class="form-control" name="date_of_pass" type="text" placeholder="Date of pass">
</div>
<div class="form-group">
    <input class="form-control" name="driver_licence_id" type="text" placeholder="Driver licence-ID">
</div>
<div class="form-group">
    <input class="form-control" name="category_id" type="text" placeholder="Category-ID">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection