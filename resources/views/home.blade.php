@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3><br>
      <a href="addPts"><button class="btn btn-default">Add Data</button></a>
      <a href="home/export/xlsx"><button class="btn btn-default">Excel</button></a>
      <a href="home/export/pdf"><button class="btn btn-default">PDF</button></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Nama Karyawan</th>
          <th>Hadir</th>
          <th>Izin</th>
          <th>Bolos</th>
          <th>Telat</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data as $item)
        <tr>
          <td>{{ $item->namaKaryawan }}</td>
          <td>{{ $item->hadirMasuk}}</td>
          <td>{{ $item->izinMasuk }}</td>
          <td>{{ $item->bolosMasuk }}</td>
          <td>{{ $item->telatMasuk}}</td>
          <td>{{$item->bolosMasuk + $item->telatMasuk < 3 ? "karyawan terbaik" : 
            ( $item->bolosMasuk + $item->telatMasuk > 7 ? "karyawan terburuk" :
            ( $item->hadirMasuk < 60 ? "karyawan terburuk" : 
             ""))
           }}</td>
          <td>
              <a href="editPts{{$item->id}}"><button class="btn btn-primary">Edit</button></a>
              <a href="deletePts{{$item->id}}"><button class="btn btn-danger">Delete</button></a>
          </td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection