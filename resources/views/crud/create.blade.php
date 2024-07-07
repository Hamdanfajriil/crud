@extends('crud.layouts.main')
@section('container')

<main class="form-signin w-70 m-auto col-lg-6">
    <h1 class="h2 mb-3 fw-bold row justify-content-center mt-4">Input Data</h1>
        <form method="POST" action="{{ url('crud') }}" >
        @csrf
            <div class="mb-2">
              <label for="name">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" name="name">
              @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="nim">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="alamat">Password</label>
                <input type="password" class="form-control mb-4" id="password" name="password">
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
                <button class="btn btn-primary" type="submit">Submit</button>
              </div>
        </form>


  </main>
@endsection
