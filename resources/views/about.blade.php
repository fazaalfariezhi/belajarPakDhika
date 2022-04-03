@extends('layouts.main')
@section('container')
    <h1 class="head">Halaman About</h1>
    <img src="img/{{ $image }}" alt="faza-al-fariezhi" width="200px" class="img-thumbnail rounded-circle">
    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>
@endsection