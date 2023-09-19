{{-- menggabungkan html yang berada di layouts/main.blade.php  --}}
@extends('layouts.main') 

@section('container')

<div class="container my-5">
    <div class="row ">
        <div class="col-lg-8">
            <h1 class="mb-4">{{ $post->title }}</h1>
            
            <p><a href="/blog">Kembali ke semua post</a></p>

            @if ($post->image)
            <img src="{{ asset('storage/'. $post->image) }}" alt="" srcset="" class="img-fluid" style="max-height: 340px; overflow:hidden;">
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="" srcset="" class="img-fluid">
            @endif
            
            <article class="my-4 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/blog" class="text-decoration-none mt-3 btn btn-primary ">Back</a>
        </div>
    </div>
</div>


  
@endsection