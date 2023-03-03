@extends('template.master')

@section('judul')
    <h1>Data User</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>x
            </button>
          </div>
      <h3 class="card-title">Data User</h3>
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
          <th>Nama Petugas</th>
          <th>Username</th>
          <th>Level</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @forelse($users as $user)
         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->nama_petugas}}</td>
          <td>{{ $user->level }}</td>
          <td>{{ $user->username }}</td>
          <td>
          <form action="{{ route ('petugas.destroy', [$user->id])}}" method="POST">
              <a class="btn btn-warning mr-3" href="petugas/{{$user->id}}/edit">
              <i class="fas fa-edit	"></i> Edit</a>
              <form action="/petugas/{{$user->id}}" method="POST">
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