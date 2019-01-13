@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/municipalities/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Municipality name</th>
      <th scope="col">County name</th>
      <th scope="col">Brisanje</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($municipalities as $municipality)
    <tr>
      <td><?= $municipality->id ?></td>
      <td><?= $municipality->municipality_name ?></td>
      <td><?= $municipality->county->county_name ?></td>
      <td><a href="/municipalities/delete/{{ $municipality->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection