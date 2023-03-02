
@extends('template.master')

@section('judul')
    <h1>Halaman Detail</h1>
@endsection

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Kelas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="kelas/create" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputnama_kelas">Nama Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" id="inputnamakelas" value="{{ $kelas->nama_kelas }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="inputkompetensi_keahlian">Kompetensi Keahlian</label>
                    <input type="" name="kompetensi_keahlian" class="form-control" id="inputkompetensikeahlian" value="{{ $kelas->kompetensi_keahlian }}" disabled>
                  </div>
                </select>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <a class="btn btn-primary" href="/kelas">Back</a>
                </div>
              </form>
            </div>
@endsection