@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/drivers/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">OIB</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Sex</th>
      <th scope="col">Date of birth</th>
      <th scope="col">City</th>
      <th scope="col">Brisanje</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($drivers as $driver)
    <tr>
      <td><?= $driver->id ?></td>
      <td><?= $driver->OIB ?></td>
      <td><?= $driver->first_name ?></td>
      <td><?= $driver->last_name ?></td>
      <td><?= $driver->sex ?></td>
      <td><?= $driver->date_of_birth ?></td>
      <td><?= $driver->city->city_name ?></td>
      <td><a href="/drivers/delete/{{ $driver->id }}" class="btn btn-sm btn-danger">X</a></td>

    </tr>
  @endforeach
  </tbody>
</table>

@endsection