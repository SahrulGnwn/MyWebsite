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
        <a href="#user-info-endpoint" data-toggle="tab" aria-expanded="false" class="nav-link active" style="color:black; text-decoration: none;">
        Endpoint
        </a>
      </li>
      <li class="nav-item">
        <a href="#user-info-header" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Header
        </a>
      </li>
      <li class="nav-item">
        <a href="#user-info-body" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Body
        </a>
      </li>
    </ul>
    <div class="tab-content pt-0">
      <div class="tab-pane active" id="user-info-endpoint">
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
      <div class="tab-pane show" id="user-info-header">
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
      <div class="tab-pane" id="user-info-body">
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
        <a href="#mahasiswa-list-endpoint" data-toggle="tab" aria-expanded="false" class="nav-link active" style="color:black; text-decoration: none;">
        Endpoint
        </a>
      </li>
      <li class="nav-item">
        <a href="#mahasiswa-list-header" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Header
        </a>
      </li>
      <li class="nav-item">
        <a href="#mahasiswa-list-body" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Body
        </a>
      </li>
    </ul>
    <div class="tab-content pt-0">
      <div class="tab-pane active" id="mahasiswa-list-endpoint">
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
      <div class="tab-pane show" id="mahasiswa-list-header">
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
      <div class="tab-pane" id="mahasiswa-list-body">
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
        <a href="#mahasiswas-detail-endpoint" data-toggle="tab" aria-expanded="false" class="nav-link active" style="color:black; text-decoration: none;">
        Endpoint
        </a>
      </li>
      <li class="nav-item">
        <a href="#mahasiswas-detail-header" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Header
        </a>
      </li>
      <li class="nav-item">
        <a href="#mahasiswas-detail-body" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Body
        </a>
      </li>
    </ul>
    <div class="tab-content pt-0">
      <div class="tab-pane active" id="mahasiswas-detail-endpoint">
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
      <div class="tab-pane show" id="mahasiswas-detail-header">
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
      <div class="tab-pane" id="mahasiswas-detail-body">
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
<div class="card">
  <div class="card-header">
    <h3 class="card-title"><span class="badge badge-success">POST</span> [ /api/mahasiswa ] Mahasiswa Create</h3>
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
    <p>Create Mahasiswa</p>
    <ul class="nav nav-tabs minimalist__tab">
      <li class="nav-item">
        <a href="#mahasiswas-create-endpoint" data-toggle="tab" aria-expanded="false" class="nav-link active" style="color:black; text-decoration: none;">
        Endpoint
        </a>
      </li>
      <li class="nav-item">
        <a href="#mahasiswas-create-header" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Header
        </a>
      </li>
      <li class="nav-item">
        <a href="#mahasiswas-create-body" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Body
        </a>
      </li>
    </ul>
    <div class="tab-content pt-0">
      <div class="tab-pane active" id="mahasiswas-create-endpoint">
        <table class="table table-bordered table-striped">
          <tbody>
            <tr>
              <td>Method</td>
              <td>POST</td>
            </tr>
            <tr>
              <td>URL</td>
              <td>{{env("APP_URL")}}/api/mahasiswa</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane show" id="mahasiswas-create-header">
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
      <div class="tab-pane" id="mahasiswas-create-body">
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
              <td>nama</td>
              <td>Sahrul Gunawan</td>
              <td>string</td>
              <td>Ya</td>
              <td>Nama Mahasiswa</td>              
            </tr>
            <tr>
              <td>nim</td>
              <td>7105534626</td>
              <td>integer</td>
              <td>Ya</td>
              <td>Nomor Induk Mahasiswa</td>              
            </tr>
            <tr>
              <td>email</td>
              <td>sahrulgunawan385@gmail.com</td>
              <td>string</td>
              <td>Ya</td>
              <td>Email Mahasiswa</td>              
            </tr>
            <tr>
              <td>telpon</td>
              <td>0857xxxxxxxx</td>
              <td>integer</td>
              <td>Ya</td>
              <td>Nomer Telpon Mahasiswa</td>              
            </tr>
            <tr>
              <td>jurusan</td>
              <td>Teknik Informatika</td>
              <td>string</td>
              <td>Ya</td>
              <td>Jurusan Mahasiswa</td>              
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
<div class="card">
  <div class="card-header">
    <h3 class="card-title"><span class="badge badge-warning">PATCH</span> [ /api/mahasiswa/{id} ] Mahasiswa Update</h3>
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
    <kbd>{{env("APP_URL")}}/api/mahasiswa/{id}</kbd>
    <br>
    <br>
    <p>Update Mahasiswa</p>
    <ul class="nav nav-tabs minimalist__tab">
      <li class="nav-item">
        <a href="#mahasiswas-update-endpoint" data-toggle="tab" aria-expanded="false" class="nav-link active" style="color:black; text-decoration: none;">
        Endpoint
        </a>
      </li>
      <li class="nav-item">
        <a href="#mahasiswas-update-header" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Header
        </a>
      </li>
      <li class="nav-item">
        <a href="#mahasiswas-update-body" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Body
        </a>
      </li>
    </ul>
    <div class="tab-content pt-0">
      <div class="tab-pane active" id="mahasiswas-update-endpoint">
        <table class="table table-bordered table-striped">
          <tbody>
            <tr>
              <td>Method</td>
              <td>PATCH</td>
            </tr>
            <tr>
              <td>URL</td>
              <td>{{env("APP_URL")}}/api/mahasiswa/{id}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane show" id="mahasiswas-update-header">
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
      <div class="tab-pane" id="mahasiswas-update-body">
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
              <td>nama</td>
              <td>Sahrul Gunawan</td>
              <td>string</td>
              <td>Ya</td>
              <td>Nama Mahasiswa</td>              
            </tr>
            <tr>
              <td>nim</td>
              <td>7105534626</td>
              <td>integer</td>
              <td>Ya</td>
              <td>Nomor Induk Mahasiswa</td>              
            </tr>
            <tr>
              <td>email</td>
              <td>sahrulgunawan385@gmail.com</td>
              <td>string</td>
              <td>Ya</td>
              <td>Email Mahasiswa</td>              
            </tr>
            <tr>
              <td>telpon</td>
              <td>0857xxxxxxxx</td>
              <td>integer</td>
              <td>Ya</td>
              <td>Nomer Telpon Mahasiswa</td>              
            </tr>
            <tr>
              <td>jurusan</td>
              <td>Teknik Informatika</td>
              <td>string</td>
              <td>Ya</td>
              <td>Jurusan Mahasiswa</td>              
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
<div class="card">
  <div class="card-header">
    <h3 class="card-title"><span class="badge badge-danger">DELETE</span> [ /api/mahasiswa/{id} ] Mahasiswa Delete</h3>
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
    <kbd>{{env("APP_URL")}}/api/mahasiswa/{id}</kbd>
    <br>
    <br>
    <p>Delete Mahasiswa</p>
    <ul class="nav nav-tabs minimalist__tab">
      <li class="nav-item">
        <a href="#mahasiswas-delete-endpoint" data-toggle="tab" aria-expanded="false" class="nav-link active" style="color:black; text-decoration: none;">
        Endpoint
        </a>
      </li>
      <li class="nav-item">
        <a href="#mahasiswas-delete-header" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Header
        </a>
      </li>
      <li class="nav-item">
        <a href="#mahasiswas-delete-body" data-toggle="tab" aria-expanded="true" class="nav-link" style="color:black; text-decoration: none;">
        Body
        </a>
      </li>
    </ul>
    <div class="tab-content pt-0">
      <div class="tab-pane active" id="mahasiswas-delete-endpoint">
        <table class="table table-bordered table-striped">
          <tbody>
            <tr>
              <td>Method</td>
              <td>DELETE</td>
            </tr>
            <tr>
              <td>URL</td>
              <td>{{env("APP_URL")}}/api/mahasiswa/{id}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane show" id="mahasiswas-delete-header">
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
      <div class="tab-pane" id="mahasiswas-delete-body">
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
@endsection