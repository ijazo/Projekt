@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/categories/new">New</a>
<table class="table">
  <thead>
    <tr>
    <th scope="col">Category-ID</th>
      <th scope="col">Category name</th>
      <th scope="col">Brisanje</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($categories as $category)
  <tr>
    <td><?= $category->id ?></td>
    <td><?= $category->category_name?></td>
    <td><a href="/categories/delete/{{ $category->id }}" class="btn btn-sm btn-danger">X</a></td>
  </tr>
@endforeach
  </tbody>
</table>

@endsection