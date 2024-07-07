@extends('auth.main')
@section('container')

<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <main class="form-registration w-70 m-auto">
            <h1 class="h2 mb-3 fw-bold row justify-content-center mt-4">Registrasi..</h1>
                <form action="/auth/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid
                        @enderror" id="name" placeholder="name" name="name" required value="{{ old('name') }}">
                        <label for="name">Nama Lengkap</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="form-floating mt-1">
                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                        id="username" placeholder="username" name="username" required value="{{ old('usernam') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}
                    <div class="form-floating mt-1">
                        <input type="email" class="form-control @error('email') is-invalid
                        @enderror" id="email" placeholder="name@example.com" name="email" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4 mt-1">
                        <input type="password" class="form-control @error('password') is-invalid
                        @enderror" id="password" name="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
                    </form>

                <small class="d-block text-center mt-3">Mempunyai Akun? <a href="/">Login!</a> </small>

          </main>
    </div>
</div>
@endsection
