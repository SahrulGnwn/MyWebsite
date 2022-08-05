@extends('dashboard.layouts.main', ['title' => 'List API'])
@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>List API</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        {{-- <li class="breadcrumb-item active">Blank Page</li> --}}
      </ol>
    </div>
  </div>
</div><!-- /.container-fluid -->
@endsection
@section('content')
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title"><span class="badge badge-primary">GET</span> [ /api/users ] User Details</h3>
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
    <kbd>{{env("APP_URL")}}/api/users</kbd>
    <br>
    <br>
    <p>Get users information</p>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Headers</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Accept</td>
            <td>application/json</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Content-Type</td>
            <td>application/json</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Authorization</td>
            <td><kbd>Bearer apikey</kbd></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title"><span class="badge badge-primary">GET</span> [ /api/mahasiswa ] List Mahasiswa</h3>
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
    <kbd>{{env("APP_URL")}}/api/mahasiswa</kbd>
    <br>
    <br>
    <p>Retrieves all mahasiswa</p>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Headers</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Accept</td>
            <td>application/json</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Content-Type</td>
            <td>application/json</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Authorization</td>
            <td><kbd>Bearer apikey</kbd></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title"><span class="badge badge-primary">GET</span> [ /api/mahasiswa/{id} ] Mahasiswa Details</h3>
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
    <kbd>{{env("APP_URL")}}/api/mahasiswa/1</kbd>
    <br>
    <br>
    <p>Retrieves the specified Mahasiswa</p>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Headers</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Accept</td>
            <td>application/json</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Content-Type</td>
            <td>application/json</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Authorization</td>
            <td><kbd>Bearer apikey</kbd></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection