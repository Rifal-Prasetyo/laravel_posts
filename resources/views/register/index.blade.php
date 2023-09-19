@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signin w-100 m-auto">
                <form action="/register" method="POST">
                    @csrf
                  <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                  <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
              
                  <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nama Lengkap" value="{{ old('name') }}">
                    <label for="name">Nama</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Rifal_pras000" value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('uername')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                    <label for="email">Email Address </label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" >
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
              
                  <div class="form-check text-start my-3">
                  </div>
                  <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                </form>
              </main>
        </div>
    </div>
</div>
@endsection