@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
          {{-- ------------------------Pesan berhasil Regsitrasi---------------------- --}}
          @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          {{-- End --}}

          {{-- ------------------------Pesan Eror Login---------------------- --}}
          @if (session()->has('loginEror'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginEror') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          {{-- End --}}

            <main class="form-signin">
                <h1 class="h3 mb-4 fw-normal text-center"><b>Please Login</b></h1>              
                <form action="/login" method="POST">
                  @csrf
                  <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror " id="email" placeholder="name@example.com" autofocus required>
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-2"> Belum punya akun? <a href="/register" class="text-decoration-none">Registrasi sekarang!</a></small>
              </main>
        </div>
    </div>
</div>

@endsection
