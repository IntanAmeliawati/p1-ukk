
@extends('template.master')

@section('judul')
    <h1>Halaman Detail</h1>
@endsection

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="route{{('petugas.create')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" value="{{ $users->username }}" disabled>
                  </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control" id="password" value="{{ $users->password }}" disabled>
                  </div>
                <div class="form-group">
                    <label for="nama_petugas">Nama Petugas</label>
                    <input type="text" name="nama_petugas" class="form-control" id="nama_petugas" value="{{ $users->nama_petugas }}" disabled>
                  </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <input type="text" name="level" class="form-control" id="level" value="{{ $users->level }}" disabled>
                  </div>
                </select>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <a class="btn btn-primary" href="/petugas">Back</a>
                </div>
              </form>
            </div>
@endsection