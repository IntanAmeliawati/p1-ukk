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
              <form action="{{ route('petugas.update', $users->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="input_petugas">Nama Petugas</label>
                    <a href="{{ route('petugas.update', $users->id) }}">aaa</a>
                    <input type="text" name="nama_petugas" class="form-control" id="input_petugas" value="{{ $users->nama_petugas }}"placeholder="Silahkan Masukan Petugas">
                  </div>
                  <div class="form-group">
                    <label for="input_username">Username</label>
                    <input type="text" name="username" class="form-control" id="input_username" value="{{ $users->username }}" placeholder="Silahkan Masukan Username">
                </div>
                  <div class="form-group">
                    <label for="input_password">Password</label>
                    <input type="password"  name="password" class="form-control" id="input_password" value="{{ $users->password }}" placeholder="Silahkan Masukan Password">
                </div>
                 
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>

                </div>
              </form>
            </div>
@endsection