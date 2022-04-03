@extends('dashboard.layouts.main')
@section('container')
<div class="container mb-5">
  <div class="row justify-content-center my-2">
      <div class="col-md-9">
          <h2 class="mb-3">{{ $post -> title }}</h2>
          <a href="/dashboard/posts" class="btn btn-success mb-3"><span data-feather="arrow-left"></span>Back to All My Posts</a>
          <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-3 text-white"><span data-feather="edit"></span> Edit</a>
          <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
          <button class="btn bg-danger mb-3 text-white" onclick="return confirm('Are you sure to delete this post?')"><span data-feather="trash-2"></span> Delete</button>
          </form>

          @if ($post->image)
          <div style="max-height: 400px; overflow: hidden;">
            <img src="{{ asset('storage/' . $post->image) }}" class=" mb-2 img-fluid" alt="{{ $post-> category -> name }}">
          </div>
          @else
          <img src="https://source.unsplash.com/1200x400?{{ $post-> category -> name }}" class=" mb-2 img-fluid" alt="{{ $post-> category -> name }}">
          @endif

          <small class="text-muted">{{ $post -> created_at -> diffForHumans() }}</small>
          
          <article class="mt-3">
          {!! $post -> body !!}
          </article>

      </div>
  </div>
</div>
@endsection