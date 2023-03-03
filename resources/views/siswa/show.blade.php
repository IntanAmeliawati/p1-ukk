@extends('template.master')

@section('judul')
    <h1>Halaman Detail</h1>
@endsection

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">History Pembayaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNisn">Nisn</label>
                    <input type="number" name="nisn" class="form-control" id="inputnisn" value="{{ $siswa->nisn }}" disabled>
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
                    <label for="input_Kelas_id">Kelas Id</label>
                    <input type="" name="kelas_id" class="form-control" id="inputkelas_id" value="{{ $siswa->kelas->nama_kelas }}" disabled>
                  </div>
                </div>
            </div>
            <div class="card">
    <div class="card-header">
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
      <h3 class="card-title">Data Kelas</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>No</th>
          <th>Tgl bayar</th>
          <th>Bulan dibayar</th>
          <th>Tahun dibayar</th>
          <th>Jumlah bayar</th>
        </tr>
        </thead>
        <tbody>
          @forelse($pembayarans as $pembayaran)
         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $pembayaran->tgl_bayar }}</td>
          <td>{{ $pembayaran->bulan_dibayar }}</td>
          <td>{{ $pembayaran->tahun_dibayar }}</td>
          <td>{{ $pembayaran->jumlah_bayar }}</td>
        </td>
            @csrf
          </form>
            </td>
         </tr>
         @empty
         <tr>
          <td>Data Masih Kosong</td>
        </tr>

        @endforelse
      </table>
    </div>
    <div class="card-footer">
                <a class="btn btn-primary" href="/siswa">Back</a>
                </div>
@endsection