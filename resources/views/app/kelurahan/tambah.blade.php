@extends('app.base')

@section('title', 'Admin')

@section('sidebar')
<li>
  <a href="./dashboard.html">
    <i class="nc-icon nc-bank"></i>
    <p>Kelurahan</p>
  </a>
</li>
@endsection

@section('content')
<div class="row">
	<div class="col-md-8">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Tambah Data Kelurahan</h5>
          </div>
          <div class="card-body">
            <form method='post' action='/home/admin' entype='form-data/multipart'>
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Kota</label>
                    <input type="text" name="kota" class="form-control" placeholder="Kota" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary btn-round">Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection