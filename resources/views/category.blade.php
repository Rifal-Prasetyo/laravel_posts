
@extends('layouts.main')
@section('container')
<h1>Post Category : {{ $category }}</h1>
@if ($posts === 0)
    <div class="alert alert-danger"> Tidak ada Data</div>
@else
@foreach ($posts as $post)
    <article class="mb-3">
        <h1>
            <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
        </h1>
        <p>{{ $post->excerpt }}</p>
    </article>   
    @endforeach
    

@endif
<a href="/categories">Ke Kategori</a>

@endsection
