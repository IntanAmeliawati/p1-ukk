
@extends('template.master')

@section('judul')
    <h1>Halaman Detail</h1>
@endsection

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Spp</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="siswa/create" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNisn">Nisn</label>
                    <input type="number" name="nisn" class="form-control" id="inputnisn" value="{{ $siswa->nisn }}" disabled  >
                  </div>
                <div class="form-group">
                    <label for="input_Nis">Nis</label>
                    <input type="number" name="nis" class="form-control" id="inputnis" value="{{ $siswa->nis }}" disabled>
                  </div>
                <div class="form-group">
                    <label for="input_Nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="inputnama" value="{{ $siswa->nama }}" disabled>
                  </div>
                <div class="form-group">
                    <label for="input_Alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputalamat" value="{{ $siswa->alamat }}" disabled>
                  </div>
                <div class="form-group">
                    <label for="input_No_Telp">No Telp</label>
                    <input type="number" name="no_telp" class="form-control" id="inputno_telp" value="{{ $siswa->no_telp }}" disabled>
                  </div>
                <div class="form-group">
                    <label for="input_Kelas_id">Kelas Id</label>
                    <input type="" name="kelas_id" class="form-control" id="inputkelas_id" value="{{ $siswa->kelas_id }}" disabled>
                  </div>
                <div class="form-group">
                    <label for="input_Spp_id">Spp Id</label>
                    <input type="" name="spps_id" class="form-control" id="inputspps_id" value="{{ $siswa->spps_id }}" disabled>
                  </div>
                </select>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <a class="btn btn-primary" href="/siswa">Back</a>
                </div>
              </form>
            </div>
@endsection