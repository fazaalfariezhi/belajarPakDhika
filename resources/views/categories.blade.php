@extends('layouts.main')
@section('container')
    <h1 class=" mb-5 text-center">Halaman {{ $title }}</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 mb-4">
                    <a href="/categories/{{ $category -> slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/1200x400?{{ $category -> name }}" class="card-img" alt="{{ $category -> name }}">
                            <div class="card-img-overlay d-flex align-items-center" style="background-color: rgba(0, 0, 0, 0.3)">
                            <h5 class="card-title">{{ $category -> name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection