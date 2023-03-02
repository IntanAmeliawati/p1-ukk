
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
              <form action="spp/create" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputTahun">Tahun</label>
                    <input type="integer" name="tahun" class="form-control" id="inputtahun" value="{{ $spps->tahun }}" disabled  >
                  </div>
                  <div class="form-group">
                    <label for="inputNominal">Nominal</label>
                    <input type="text" name="nominal" class="form-control" id="inputnominal" value="{{ $spps->nominal }}" disabled>
                  </div>
                </select>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <a class="btn btn-primary" href="/spp">Back</a>
                </div>
              </form>
            </div>
@endsection