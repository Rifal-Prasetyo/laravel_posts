@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Buat Baru</h1>
  </div>
<div class="col-lg-6">
    <form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Judul / Title </label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="emailHelp" name="title" value="{{ old('title') }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
          
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <select class="custom-select" name="category_id">
            @foreach ($categories as $category)
            @if(old('category_id') == $category->id) 
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else 
              <option value="{{ $category->id }}" >{{ $category->name }}</option>
            @endif
            @endforeach
            
          </select>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <div class="input-group mb-3">
            <img class="img-fluid img-preview mb-3 col-sm-5">
            <div class="custom-file">
              <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" aria-describedby="inputGroupFileAddon01" name="image" onchange="previewImage()">
              <label class="custom-file-label" for="image">Choose file</label>
            </div>
            @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <div class="mb-3">
          <h2>Konten</h2>
          @error('body')
          <p class="text-danger">{{ $message }}</p>
          @enderror
          
          <input id="body" type="hidden" name="body" value="{{ old('body') }}">
          <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Buat Postingan</button>
      </form>
</div>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function () {
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

  document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
  })
 
 function previewImage() {
  const image = document.querySelector('#image');
  const imgPreview = document.querySelector('.img-preview');

  imgPreview.style.display = 'block';

  const oFReader = new FileReader();
  
  oFReader.readAsDataURL(image.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src =oFREvent.target.result;

  }
 }
</script>

@endsection