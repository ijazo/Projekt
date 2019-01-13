@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/counties/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">County name</th>
      <th scope="col">Brisanje</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($counties as $county)
    <tr>
      <td><?= $county->id ?></td>
      <td><?= $county->county_name ?></td>
      <td><a href="/counties/delete/{{ $county->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection