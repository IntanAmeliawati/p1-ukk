@extends('template.master')

@section('judul')
    <h1>Edit Data</h1>
@endsection

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('petugas.uptade') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputid">nama_petugas</label>
                        <input type="text" name="nama_petugas" class="form-control" id="inputusername" placeholder="Enter username" value="{{ $users->username }}" require>
                  </div>
                    <div class="form-group">
                        <label for="inputNamaKelas">Password</label>
                        <input type="text" name="password" class="form-control" id="inputpassword" placeholder="Enter password"  value="{{ $users->password }}" require>
                    <div class="form-group">
                        <label for="inputid">Nama Petugas</label>
                        <input type="text" name="nama_petugas" class="form-control" id="inputnama_petugas" placeholder="Enter nama_petugas" value="{{ $users->nama_petugas }}" require>
                        <div class="form-group">
                    <label for="inputid">Level</label>
                    <input type="text" name="level" class="form-control" id="inputlevel" placeholder="Enter level" value="{{ $users->level }}" require>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
@endsection