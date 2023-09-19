@extends('layouts.main')

@section('container')
    <h1>halaman About</h1>
    <p>
    Halo Nama Saya {{ $nama }},
    Email Saya {{ $email }},
    </p>
    <img src="img/{{ $image }}" alt="{{ $nama }}" srcset="" width="200">
    <?php echo phpversion() ?>
@endsection
