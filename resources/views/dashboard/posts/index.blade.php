@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
</div>
<h2>Section title</h2>
@if (session()->has('success'))
<div class="alert alert-success col-lg-9" role="alert">
  {{ session('success') }}
</div>
@endif
@if (session()->has('delete'))
<div class="alert alert-danger col-lg-9" role="alert">
  {{ session('delete') }}
</div>
@endif
@if (session()->has('edit'))
<div class="alert alert-info col-lg-9" role="alert">
  {{ session('edit') }}
</div>
@endif
<a href="/dashboard/posts/create" class="btn btn-primary my-2"> <span data-feather="file-plus" style="margin-bottom: 1px"></span> Create Post</a>
<div class="table-responsive col-lg-9">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->category->name }}</td>
        <td>
          <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
          <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
          <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
          <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete this post?')"><span data-feather="trash-2"></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection


