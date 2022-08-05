@extends('dashboard.layouts.main', ['title' => 'Input Mahasiswa'])
@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Input Mahasiswa</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="/dashboard/mahasiswa">Mahasiswa</a></li>
        <li class="breadcrumb-item active">Input Mahasiswa</li>
      </ol>
    </div>
  </div>
</div><!-- /.container-fluid -->
@endsection
@section('content')
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Title</h3>
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
    <div class="col-lg-8">
      <form method="post" action="{{ url("/dashboard/mahasiswa") }}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control"  id="nama" name="nama">
          </div>
          <div class="mb-3">
              <label for="name" class="form-label">NIM</label>
              <input type="text" class="form-control"  id="nim" name="nim">
          </div>
          <div class="mb-3">
              <label for="name" class="form-label">Email</label>
              <input type="email" class="form-control"  id="email" name="email">
          </div>
          <div class="mb-3">
              <label for="name" class="form-label">Telpon</label>
              <input type="text" class="form-control"  id="telpon" name="telpon">
          </div>
          <div class="mb-3">
              <label for="name" class="form-label">Jurusan</label>
              <input type="text" class="form-control"  id="jurusan" name="jurusan">
          </div>
          <button type="submit" class="btn btn-primary">Input Mahasiswa</button>
      </form>
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
  Footer
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection