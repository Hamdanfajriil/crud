@extends('crud.layouts.main')
@section('container')

<main class="form-signin w-70 m-auto col-lg-6">
    <h1 class="h2 mb-3 fw-bold row justify-content-center mt-4">Edit</h1>
        <form method="post" action="{{ url('crud/'.$model->id) }}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
            <div class="mb-2">
              <label for="name">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $model->name }}">
            </div>
            <div class="mb-2">
                <label for="nim">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $model->email }}">
            </div>
            <div class="mb-2">
                <label for="alamat">Password</label>
                <input type="password" class="form-control mb-4" id="password" name="password" value="{{ $model->password }}">
              </div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
                <button class="btn btn-primary" type="submit">Simpan</button>
              </div>
        </form>
  </main>
@endsection
