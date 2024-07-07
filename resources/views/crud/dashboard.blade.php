@extends('crud.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h3">Selamat Datang, {{ auth()->user()->name }}</h1>
  </div>
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    @endif
  <div class="table-responsive md-5">
    <div class="mb-3">
        <a class="btn btn-primary mb-30 md-10" href="{{ url('crud/create') }}" role="button">Add Anggota</span></a>
    </div>
    <table class="table-bordered table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          {{-- <th scope="col">Aksi</th> --}}
        </tr>
      </thead>
      @foreach ($data as $key=>$value)
      <tbody>
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->password }}</td>
                <td><a class="btn btn-info btn-sms" href="{{ url('crud/' .$value->id.'/edit') }}">Update<a></td>
                <td>
                    <form action="{{ url('crud/'.$value->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
      </tbody>
      @endforeach
    </table>
  </div>
</div>


@endsection
