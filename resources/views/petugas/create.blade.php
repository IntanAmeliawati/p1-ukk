@extends('template.master')

@section('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('petugas.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="input_petugas">Nama Petugas</label>
                    <input type="text" name="nama_petugas" class="form-control" id="input_petugas" placeholder="Silahkan Masukan Petugas">
                  </div>
                  <div class="form-group">
                    <label for="input_username">Username</label>
                    <input type="text" name="username" class="form-control" id="input_username" placeholder="Silahkan Masukan Username">
                </div>
                  <div class="form-group">
                    <label for="input_password">Password</label>
                    <input type="password"  name="password" class="form-control" id="input_password" placeholder="Silahkan Masukan Password">
                </div>
                <label for="input_level">Level</label>
                  <div class="form-group">
                  <select class="form-control" name="level" id="level">
                    <option disabled selected>Level</option>
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                 </select>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection