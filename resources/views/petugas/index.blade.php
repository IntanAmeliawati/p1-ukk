@extends('template.master')

@section('judul')
    <h1>Halaman Petugas</h1>
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
      <h3 class="card-title">Data Petugas</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a href="{{ route('petugas.create') }}" class="btn btn-primary">
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
          <th>Username</th>
          <th>Nama</th>
          <th>Level</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @forelse($users as $item)
         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->username }}</td>
          <td>{{ $item->nama_petugas }}</td>
          <td>{{ $item->level }}</td>
          <td>
          <form action="{{ route ('petugas.destroy', [$item->id])}}" method="POST">
              <a class="btn btn-info mr-3" href="petugas/{{$item->id}}">
              <i class="fas fas fa-exclamation-circle"></i> Detail</a> 
              <a class="btn btn-warning mr-3" href="petugas/{{$item->id}}/edit">
              <i class="fas fa-edit	"></i> Edit</a>
              <form action="/petugas/{{$item->id}}" method="POST">
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