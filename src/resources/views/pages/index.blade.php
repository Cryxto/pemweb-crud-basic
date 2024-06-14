@extends('layouts.main')
@section('content')
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $d)
      <tr>
        <th scope="row">{{ $d->id }}</th>
        <td>{{ $d->nim }}</td>
        <td>{{ $d->name }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
