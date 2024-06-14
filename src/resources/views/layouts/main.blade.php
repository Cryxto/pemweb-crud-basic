<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CRUD</title>
  @include('layouts.style')
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        {{-- <h1>Cek</h1> --}}
        @yield('content')
      </div>
    </div>
  </div>
  @include('layouts.script')
</body>

</html>
