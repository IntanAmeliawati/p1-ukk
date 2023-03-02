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
              <form action="/kelas/{{ $kelas->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputnamakelas">Nama kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" id="inputnama_kelas" value="{{ $kelas->nama_kelas }}" require>
                  </div>
                  <div class="form-group">
                    <label for="inputkompetensikeahlian">Kompetensi Keahlian</label>
                    <input type="" name="kompetensi_keahlian" class="form-control" id="inputkompetensi_keahlian" value="{{ $kelas->kompetensi_keahlian }}" require>
                </select>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>

                </div>
              </form>
            </div>
@endsection