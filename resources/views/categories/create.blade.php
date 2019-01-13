@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/categories" class="col-md-5 mx-auto">


<form method="post" action="/categories">
@csrf

<div class="form-group">
    <input class="form-control" name="category_name" type="text" placeholder="Category name">
</div>


<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection

