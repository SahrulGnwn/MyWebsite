@extends('dashboard.layouts.main', ['title' => 'Mahasiswa'])
@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Daftar Mahasiswa</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Mahasiswa</li>
      </ol>
    </div>
  </div>
</div><!-- /.container-fluid -->
@endsection
@section('content')
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Mahasiswa</h3>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">NIM</th>
          <th scope="col">Email</th>
          <th scope="col">Telpon</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($mahasiswa as $siswa)
        <tr>
          <th scope="row">{{ $siswa->id }}</th>
          <td>{{ $siswa->nama }} </td>
          <td>{{ $siswa->nim }} </td>
          <td>{{ $siswa->email }} </td>
          <td>{{ $siswa->telpon }} </td>
          <td>{{ $siswa->jurusan }} </td>
          <td>
            {{-- <a href="/dashboard/mahasiswa/{{ $siswa->id }}" class="badge bg-info"><span data-feather="eye"></span></a> --}}
            <a href="/dashboard/mahasiswa/{{ $siswa->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/mahasiswa/{{ $siswa->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>   
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    Data Mahasiswa Diatas Bersifat Public
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection