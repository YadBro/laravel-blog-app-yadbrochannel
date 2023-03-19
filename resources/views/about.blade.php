@extends('layouts.main')

@section('container')
  <h1>Halaman About</h1>
  <h3>{{ $name }}</h3>
  <p>yadi@gmail.com</p>
  <img src="{{ $url_img }}" alt="stickman" width="200" class="img-thumbnail rounded-circle" />
@endsection
