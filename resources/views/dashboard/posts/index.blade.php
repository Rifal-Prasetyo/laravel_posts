@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Halaman Posts</h1>
  </div>
  
  <div class="table-responsive small col-lg-8">

    <a href="/dashboard/posts/create" class="btn btn-primary mb-4">Tambah Pesan Baru</a>
    @if(session()->has('sukses'))
    <div class="alert alert-success" role="alert">
      {{ session('sukses') }}
    </div>
    @endif
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Judul</th>
          <th scope="col">Kategory</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-primary">Detail</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning">Update</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline border-0" >
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger text-white" onclick="return confirm('Apa kamu yakin menghapusnya??')">Delete</button>
                </form>
            </td>
          </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
@endsection