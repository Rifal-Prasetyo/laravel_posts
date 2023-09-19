
@extends('layouts.main')
@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="container mb-3">
  <div class="row">
    <div class="col-md-4">
      <div class="input-group mb-3">
        <form action="/blog" method="get">
          @if (request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('user'))
              <input type="hidden" name="user" value="{{ request('user') }}">
          @endif
          <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
          <button class="btn btn-danger" type="submit" id="button-addon2">Search</button>
        </form>
      </div>
    </div>
  </div>
</div>
@if ($posts->count())
<div class="card mb-3 text-center">
  @if ($posts[0]->image)
  <img src="{{ asset('storage/'. $posts[0]->image) }}" alt="" srcset="" class="img-fluid" style="max-height: 340px; overflow:hidden;">
  @else
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" alt="" srcset="" class="img-fluid">
  @endif
    <div class="card-body">
      <h5 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none">{{ $posts[0]->title }}</a></h5>
        <small class="text-muted">Created By : <a href="/blog?user={{ $posts[0]->user->username }}" class="text-decoration-none" rel="noopener noreferrer">{{ $posts[0]->user->name }}</a>, Last updated <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->created_at->diffForHumans() }}</a>
        </small>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
    </div>
  </div>
@else
    <div class="alert alert-danger"> Tidak ada Data</div>
@endif
<div class="row">
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4">
        <div class="card" >
          <div class="position-absolute text-white px-3 py-2" style="background-color: rgba(0, 0, 0, 0.293); backdrop-filter:blur(5px); border-radius:5px; "><a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
            @if ($post->image)
            <img src="{{ asset('storage/'. $post->image) }}" alt="" srcset="" class="img-fluid" style="max-height: 340px; overflow:hidden;">
            @else
              <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="" srcset="" class="img-fluid">
            @endif
            <div class="card-body">
              <h5 class="card-title"><a href="/post/{{ $post->slug }}" class="text-decoration-none pb-2">{{ $post->title }}</a></h5>
              <small>By <a href="/blog?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></small>
              <p class="card-text">{{ $post->excerpt }}</p>
              <a href="/post/{{ $post->slug }}" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
    @endforeach
</div>
<br>

{{ $posts->links() }}
@endsection
