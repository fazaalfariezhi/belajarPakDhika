@extends('layouts.main')

@section('container')


    <div class="container">
        <div class="row justify-content-center my-2">
            <div class="col-md-9">
                <h2 class="mb-3">{{ $post -> title }}</h2>
                <h5>By. <a href="/posts?author={{ $post -> author -> username }}" class="text-decoration-none">{{ $post -> author -> name }}</a> in <a href="/posts?category={{ $post -> category -> slug }}" class="text-decoration-none">{{ $post -> category -> name }}</a></h5>

                @if ($post->image)
                <div style="max-height: 400px; overflow: hidden;">
                  <img src="{{ asset('storage/' . $post->image) }}" class=" mb-2 img-fluid" alt="{{ $post-> category -> name }}">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post-> category -> name }}" class=" mb-2 img-fluid" alt="{{ $post-> category -> name }}">
                @endif
                
                <small class="text-muted">{{ $post -> created_at -> diffForHumans() }}</small>
                
                <article class="my-3">
                {!! $post -> body !!}
                </article>

                    <p class="mb-5"><a href="/posts" class="text-decoration-none">Back to Posts...</a></p>
            </div>
        </div>
    </div>
    
@endsection