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
            <h5 class="card-title">Tambah Data Pasien</h5>
          </div>
          <div class="card-body">
            <form method='post' action='/home/operator' entype='form-data/multipart'>
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
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>No. Telpon</label>
                    <input type="text" name="no_telpon" class="form-control" placeholder="No. Telpon" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>RT/RW</label>
                    <input type="text" name="rt_rw" class="form-control" placeholder="RT/RW" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Kelurahan</label>
                    <select class="form-control" name="kelurahan_id">
                      @foreach ($kelurahans as $kelurahan)
                        <option value="{{ $kelurahan->id }}">{{$kelurahan->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jk">
                      <option value="L">Laki - Laki</option>
                      <option value="P">Perempuan</option>
                    </select>
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