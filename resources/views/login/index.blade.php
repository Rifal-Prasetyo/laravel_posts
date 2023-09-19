@extends('layouts.main')

@section('container')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signin w-100 m-auto">
              @if(session()->has('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('status') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
              @if(session()->has('errorMessage'))
              <div class="alert alert-warning  alert-dismissible fade show" role="alert">
                {{ session('errorMessage') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
                <form action="/login" method="POST">
                  @csrf
                  <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                  <h1 class="h3 mb-3 fw-normal">Login</h1>
              
                  <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                  </div>
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <label for="password">Password</label>
                  </div>
              
                  <div class="form-check text-start my-3">
                  </div>
                  <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                </form>
                <p>Belum punya akun? <a href="/register">Daftar Sini</a></p>
              </main>
        </div>
    </div>
</div>
@endsection