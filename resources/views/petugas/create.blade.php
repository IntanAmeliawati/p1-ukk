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
                    <label for="InputEmail">Username</label>
                    <input type="text" value="{{ old('username') }}" name="username" class="form-control" id="InputEmail" placeholder="Enter username">
                </div>
                    @error('username')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                <div class="form-group">
                    <label for="InputPassword">Password</label>
                    <input type="text" value="{{ old('password') }}" name="password" class="form-control" id="InputPassword" placeholder="Enter password">
                </div>
                    @error('password')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                <div class="form-group">
                    <label for="InputPassword">Nama Petugas</label>
                    <input type="text" value="{{ old('nama_petugas') }}" name="nama_petugas" class="form-control" id="Inputnama_petugas" placeholder="Enter nama_petugas">
                </div>
                    @error('nama_petugas')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                <div class="form-group">
                    <label for="InputPassword">Level</label>
                    <select class="form-control" name="level" id="level">
                    <option disabled selected>Silahkan Pilih Level</option>
                    <option value="Petugas">Petugas</option>
                    </select>
                </div>
                    @error('level')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection