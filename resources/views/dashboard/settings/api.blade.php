@extends('dashboard.layouts.main', ['title' => 'Api Settings'])
@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Api Settings</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Settings</li>
        <li class="breadcrumb-item active">Api Settings</li>
      </ol>
    </div>
  </div>
</div><!-- /.container-fluid -->
@endsection
@section('content')
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Auth Token</h3>
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
    <form action="{{ url("/dashboard/settings/api") }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="inputUsername">Name</label>
                    <input type="text" class="form-control" id="token_name" name="token_name" placeholder="Token Name" value="{{ auth()->user()->api_name }}">
                </div>
                <div class="form-group">
                    <label for="inputUsername">Api Token</label>
                    <input type="text" class="form-control" placeholder="" value="{{ auth()->user()->api_token }}" readonly>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Create Token</button>
    </form>

</div>
  <!-- /.card-body -->
  <div class="card-footer">
    Api Token Diatas Bersifat Pribadi
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection