@extends('layouts.app')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Data</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/updatePts" method="POST">
        @csrf
      <input type="hidden" name="id" value="{{ $data->id }}">
      <div class="card-body">
        <div class="form-group">
          <label for="namaKaryawan">Nama Karyawan</label>
          <input type="text" class="form-control" id="namaKaryawan" placeholder="Enter Name" name="namaKaryawan">
        </div>
        <div class="form-group">
          <label for="hadirMasuk">Hadir Masuk</label>
          <input type="number" max="1000" class="form-control" id="hadirMasuk" placeholder="Enter Nilai" name="hadirMasuk">
        </div>
        <div class="form-group">
          <label for="izinMasuk">Izin Masuk</label>
          <input type="number" max="1000" class="form-control" id="izinMasuk" placeholder="Enter Nilai" name="izinMasuk">
        </div>
        <div class="form-group">
          <label for="bolosMasuk">Bolos Masuk</label>
          <input type="number" max="1000" class="form-control" id="bolosMasuk" placeholder="Enter Nilai" name="bolosMasuk">
        </div>
        <div class="form-group">
          <label for="telatMasuk">Telat Masuk</label>
          <input type="number" max="1000" class="form-control" id="telatMasuk" placeholder="Enter Nilai" name="telatMasuk">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection