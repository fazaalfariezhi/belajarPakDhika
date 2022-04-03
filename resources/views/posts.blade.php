@extends('layouts.main')
@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

{{-- -------------------------------------------------------FUNGSI SEARCH------------------------------------------------------------------------------ --}}
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                    
                @if (request('author'))    
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

{{-- -----------------------------------------------------------HERO CARD---------------------------------------------------------------------------------- --}}
    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
            <div style="max-height: 400px; overflow: hidden;">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" class=" mb-2 img-fluid" alt="{{ $posts[0]-> category -> name }}">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]-> category -> name }}" class="card-img-top" alt="{{ $posts[0]-> category -> name }}">
            @endif
            <div class="card-body text-center">
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark"><h2 class="card-title">{{ $posts[0]->title }}</h2></a>
                    <small>
                        <p>By. <a href="/posts?author={{ $posts[0] -> author -> username }}" class="text-decoration-none">{{ $posts[0] -> author -> name }}</a> in <a href="/posts?category={{ $posts[0] -> category -> slug }}" class="text-decoration-none">{{ $posts[0] -> category -> name }} </a> {{ $posts[0] -> created_at -> diffForHumans() }}</p>
                    </small>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-muted"><p class="card-text">{{ $posts[0]-> excerpt }}</p></a>
                    <a href="/posts/{{ $posts[0]->slug }}" class=" text-decoration-none btn btn-primary mt-3">Read More</a>
            </div>
        </div>   
    
{{-------------------------------------------------------------CARD KECIL KECIL---------------------------------------------------------------------------------}}
    <div class="row">
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="position-absolute px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.6)"><a href="/posts?category={{ $post-> category -> slug }}" class="text-white text-decoration-none">
                        {{ $post -> category -> name }}</a>
                    </div>
                    @if ($post->image)
                    <div style="max-height: 300px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class=" mb-2 img-fluid" alt="{{ $post-> category -> name }}">
                    </div>
                    @else
                    <img src="https://source.unsplash.com/500x300?{{ $post-> category -> name }}" class="card-img-top" alt="{{ $post-> category -> name }}">
                    @endif
                    <div class="card-body">
                    <h5 class="card-title">{{ $post -> title }}</h5>
                    <small>
                            <p>By. <a href="/posts?author={{ $post -> author -> username }}" class="text-decoration-none">{{ $post -> author -> name }}</a> {{ $post -> created_at -> diffForHumans() }}</p>
                        </small>
                    <p class="card-text">{{ $post -> excerpt }}</p>
                    <a href="/posts/{{ $post -> slug }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    @else 
        <p class="fs-4 text-center text-muted">No Posts Found</p>
    @endif
    <div class="container-page">
        <div class="row justify-content-center">
            <div class="col-md-6">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection