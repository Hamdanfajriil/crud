@extends('auth.main')
@section('container')

<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <main class="form-signin w-70 m-auto">
            <h1 class="h2 mb-3 fw-bold row justify-content-center mt-4">Login..</h1>

                <form action="/" method="post">
                @csrf
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    placeholder="name@example.com" required name="email" value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-4 mt-1">
                    <input type="password" class="form-control" id="password"
                    placeholder="Password" name="password" required>
                    <label for="password">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
                </form>

            <small class="d-block text-center mt-3">Tidak mempunyai akun? <a href="{{ url('auth/register') }}">Daftar!</a> </small>
          </main>
    </div>
</div>
@endsection
