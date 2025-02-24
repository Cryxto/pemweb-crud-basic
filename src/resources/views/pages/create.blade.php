@extends('layouts.main')

@section('content')
  {{-- <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIM</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> --}}
  @if ($errors->any())
      <div>{{ $errors }}</div>
  @endif
  <form action="/save" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">NIM</label>
      {{-- NIM INPUT --}}
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nim">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Name</label>
      {{-- Name INPUT --}}
      <input type="text" class="form-control" id="exampleInputPassword1" name="name">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
