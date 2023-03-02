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
              <form action="/siswa/{{ $siswa->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="input_nisn">Nisn</label>
                    <input type="number" name="nisn" class="form-control" id="inputnisn" value="{{ $siswa->nisn }}" require>
                  </div>
                  <div class="form-group">
                    <label for="input_nis">Nis</label>
                    <input type="number" name="nis" class="form-control" id="inputnis" value="{{ $siswa->nis }}" require>
                  </div>
                  <div class="form-group">
                    <label for="input_nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="inputnama" value="{{ $siswa->nama }}" require>
                  </div>
                  <div class="form-group">
                    <label for="input_alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputalamat" value="{{ $siswa->alamat }}" require>
                  </div>
                  <div class="form-group">
                    <label for="inputno_telp">No Telp</label>
                    <input type="number" name="no_telp" class="form-control" id="inputno_telp" value="{{ $siswa->no_telp }}" require>
                  </div>
                  <div class="form-group">
                    <label for="inputkelas_id">kelas_id</label>
                    <input type="" name="kelas_id" class="form-control" id="kelas_id" value="{{ $siswa->kelas_id }}" require>
                  </div>
                  <div class="form-group">
                    <label for="inputspps_id">Spp Id</label>
                    <input type="" name="spps_id" class="form-control" id="inputspps_id" placeholder="Enter spps_id"  value="{{ $siswa->spps_id }}" require>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>

                </div>
              </form>
            </div>
@endsection