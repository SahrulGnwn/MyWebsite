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
    <h3 class="card-title"><span class="badge badge-primary">GET</span> [ /api/user ] User Token Details</h3>
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
    <kbd>{{env("APP_URL")}}/api/user</kbd>
    <br>
    <br>
    <p>Get users information</p>
    <ul class="nav nav-tabs minimalist__tab">
      <li class="nav-item">
        <a href="#user-instruction-endpoint" data-toggle="tab" aria-expanded="false" class="nav-link active" style="color:black; text-decoration: none;">
        Endpoint
        </a>
      </li>
      <li class="nav-item">
        <a href="#user-instruction-header" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Header
        </a>
      </li>
      <li class="nav-item">
        <a href="#user-instruction-body" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Body
        </a>
      </li>
    </ul>
    <div class="tab-content pt-0">
      <div class="tab-pane active" id="user-instruction-endpoint">
        <table class="table table-bordered table-striped">
          <tbody>
            <tr>
              <td>Method</td>
              <td>GET</td>
            </tr>
            <tr>
              <td>URL</td>
              <td>{{env("APP_URL")}}/api/user</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane show" id="user-instruction-header">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
            <th>Key</th>
            <th>Value</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Accept</td>
              <td>application/json</td>
            </tr>
            <tr>
              <td>Content-Type</td>
              <td>application/json</td>
            </tr>
            <tr>
              <td>Authorization</td>
              <td><kbd>Bearer apikey</kbd></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane" id="user-instruction-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
            <th>Parameter</th>
            <th>Contoh Nilai</th>
            <th>Tipe</th>
            <th>Wajib</th>
            <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>              
            </tr>
          </tbody>
        </table>
      </div>
    </div>
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
    <ul class="nav nav-tabs minimalist__tab">
      <li class="nav-item">
        <a href="#mahasiswa-instruction-endpoint" data-toggle="tab" aria-expanded="false" class="nav-link active" style="color:black; text-decoration: none;">
        Endpoint
        </a>
      </li>
      <li class="nav-item">
        <a href="#mahasiswa-instruction-header" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Header
        </a>
      </li>
      <li class="nav-item">
        <a href="#mahasiswa-instruction-body" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Body
        </a>
      </li>
    </ul>
    <div class="tab-content pt-0">
      <div class="tab-pane active" id="mahasiswa-instruction-endpoint">
        <table class="table table-bordered table-striped">
          <tbody>
            <tr>
              <td>Method</td>
              <td>GET</td>
            </tr>
            <tr>
              <td>URL</td>
              <td>{{env("APP_URL")}}/api/mahasiswa</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane show" id="mahasiswa-instruction-header">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
            <th>Key</th>
            <th>Value</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Accept</td>
              <td>application/json</td>
            </tr>
            <tr>
              <td>Content-Type</td>
              <td>application/json</td>
            </tr>
            <tr>
              <td>Authorization</td>
              <td><kbd>Bearer apikey</kbd></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane" id="mahasiswa-instruction-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
            <th>Parameter</th>
            <th>Contoh Nilai</th>
            <th>Tipe</th>
            <th>Wajib</th>
            <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>              
            </tr>
          </tbody>
        </table>
      </div>
    </div>
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
    <ul class="nav nav-tabs minimalist__tab">
      <li class="nav-item">
        <a href="#mahasiswas-instruction-endpoint" data-toggle="tab" aria-expanded="false" class="nav-link active" style="color:black; text-decoration: none;">
        Endpoint
        </a>
      </li>
      <li class="nav-item">
        <a href="#mahasiswas-instruction-header" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Header
        </a>
      </li>
      <li class="nav-item">
        <a href="#mahasiswas-instruction-body" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Body
        </a>
      </li>
    </ul>
    <div class="tab-content pt-0">
      <div class="tab-pane active" id="mahasiswas-instruction-endpoint">
        <table class="table table-bordered table-striped">
          <tbody>
            <tr>
              <td>Method</td>
              <td>GET</td>
            </tr>
            <tr>
              <td>URL</td>
              <td>{{env("APP_URL")}}/api/mahasiswa/{id}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane show" id="mahasiswas-instruction-header">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
            <th>Key</th>
            <th>Value</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Accept</td>
              <td>application/json</td>
            </tr>
            <tr>
              <td>Content-Type</td>
              <td>application/json</td>
            </tr>
            <tr>
              <td>Authorization</td>
              <td><kbd>Bearer apikey</kbd></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane" id="mahasiswas-instruction-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
            <th>Parameter</th>
            <th>Contoh Nilai</th>
            <th>Tipe</th>
            <th>Wajib</th>
            <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>id</td>
              <td>1</td>
              <td>integer</td>
              <td>Ya</td>
              <td>Id Dari Mahasiswa Yang Ingin Di Cek</td>              
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection