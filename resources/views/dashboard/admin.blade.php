@extends('template.master')

@section('content')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Spp</h3>

                <p>Tambah Data</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('spp.index') }}" class="small-box-footer">More info <i class="nav-icon fas fa-money-check"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Siswa</h3>

                <p>Tambah Data</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('siswa.index') }}" class="small-box-footer">More info <i class="nav-icon fas fa-solid fa-users"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Kelas</h3>

                <p>Tambah Data</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ route('kelas.index') }}" class="small-box-footer">More info <i class="nav-icon fas fa-solid fa-school"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Petugas</h3>

                <p>Tambah Data</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ route('petugas.index') }}" class="small-box-footer">More info <i class="nav-icon fas fa-user-friends"></i></a>
            </div>
          </div>
    </section>

    @endsection