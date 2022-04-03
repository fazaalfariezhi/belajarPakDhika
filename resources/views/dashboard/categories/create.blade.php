@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><a href="/dashboard/categories"><img src="{{ asset('img/arrow-left-circle.svg') }}" alt="arrowBack" style="margin-bottom: 1px"></a> Create New Category</h1>
</div>
<div class="col-lg-5">
    <form action="/dashboard/categories" method="POST" class="mb-5" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
          @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required>
          @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Category Image</label>
          <img class="img-preview img-fluid mb-3 img-thumbnail col-sm-5" style="max-height: 400px;">
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
          <p class="text-muted">*Tidak di wajibkan.</p>
        <button type="submit" class="btn btn-primary">Create Category</button>
    </form>
</div>

<script>

const name = document.querySelector('#name');
const slug = document.querySelector('#slug');

name.addEventListener('change', function(){
  fetch('/dashboard/categories/checkSlug?name=' + name.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
});

function previewImage() {
  const image = document.querySelector('#image');
  const imgPreview = document.querySelector('.img-preview');

  imgPreview.style.display = 'block';

  const oFReader = new FileReader();
  oFReader.readAsDataURL(image.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  }
}


</script>
@endsection