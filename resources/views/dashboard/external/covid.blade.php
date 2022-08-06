@extends('dashboard.layouts.main', ['title' => 'Covid 19'])
@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Covid 19</h1>
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
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-plus"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Positif</span>
                <span class="info-box-number">
                  {{ number_format($data['total']['positif'])}}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-ambulance"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Dirawat</span>
                <span class="info-box-number">{{ number_format($data['total']['dirawat'])}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-hand-holding-medical"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Sembuh</span>
                <span class="info-box-number">{{ number_format($data['total']['sembuh'])}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-skull"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Meninggal Dunia</span>
                <span class="info-box-number">{{ number_format($data['total']['meninggal'])}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <p>Last Update {{ $data['total']['lastUpdate']}}</p>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection