
@extends('layouts.main')
@section('container')
<h1>{{ $title }}</h1>

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
            
                <div class="col-md-4">
                    <a href="/blog?category={{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/1200x400?{{ $category->name }}"  class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay">
                            <h5 class="card-title py-2 px-1" style="background-color: rgba(0,0,0,0.6); backdrop-filter:blur(8px);">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
          
        @endforeach
    </div>
</div>

@endsection
