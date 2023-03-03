@extends('template.master')

@section('judul')
    <h1>Halaman Siswa</h1>
@endsection

@section('content')
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
      <h3 class="card-title">Data Siswa</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a href="{{ route('siswa.create') }}" class="btn btn-primary">
          <i class="fas fa-plus-square"></i>
        Tambah   
        </a>
        <br>
        </tr>
        <br>
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>No</th>
          <th>Nisn</th>
          <th>Nis</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No_Telp</th>
          <th>Kelas_id</th>
          <th>Spp_id</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @forelse($siswa as $siswa)
         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $siswa->nisn }}</td>
          <td>{{ $siswa->nis }}</td>
          <td>{{ $siswa->nama }}</td>
          <td>{{ $siswa->alamat }}</td>
          <td>{{ $siswa->no_telp }}</td>
          <td>{{ $siswa->kelas->nama_kelas }}</td>
          <td>{{ $siswa->spp->nominal }}</td>
          <td>
          <form action="{{ route ('siswa.destroy', [$siswa->id])}}" method="POST">
              <a class="btn btn-info mr-3" href="siswa/{{$siswa->id}}">
              <i class="fas fas fa-exclamation-circle"></i> History Pembayaran</a> 
              <a class="btn btn-warning mr-3" href="{{ route ('pembayaran.create', [$siswa->id])}}">
              <i class="fas fa-edit	"></i> Tambah Pembayaran</a>
              <form action="/siswa/{{$siswa->id}}" method="POST">
            @csrf
            @method('DELETE')
           <button type="submit" class="btn btn-danger" value="Delete">
           <i class="far fa-trash-alt"></i> 
           Delete
          </button>
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
    <!-- /.card-body -->
  
@endsection