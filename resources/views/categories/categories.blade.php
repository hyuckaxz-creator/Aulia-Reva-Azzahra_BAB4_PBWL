@extends('layouts.app')

@section('title', 'Tes Database')

@section('content')
<h1 class="h4">Database: fasilitas_kota</h1>
<p class="text-primary">Tabel categories</p>

<table class="table table-bordered bg-white">
  <thead>
    <tr><th>id</th><th>name</th><th>description</th></tr>
  </thead>
  <tbody>
    @foreach ($categories as $c)
      <tr>
        <td>{{ $c->id }}</td>
        <td>{{ $c->name }}</td>
        <td>{{ $c->description }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection