@extends('dashboard.layouts.main')

@section('container')

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-4">{{ $post->title }}</h1>
            
            <p>By <a href="/blog?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a>  IN <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            @if ($post->image)
                <img src="{{ asset('storage/'. $post->image) }}" alt="" srcset="" class="img-fluid" style="max-height: 340px; overflow:hidden;">
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="" srcset="" class="img-fluid">
            @endif
            
            <article class="my-4 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/dashboard/posts" class="text-decoration-none mt-3 btn btn-primary ">Back</a>
        </div>
    </div>
</div>

@endsection