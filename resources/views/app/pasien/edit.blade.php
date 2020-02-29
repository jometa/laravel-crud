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
            <h5 class="card-title">Edit Data Pasien</h5>
          </div>
          <div class="card-body">
            <form method='post' action='/home/operator/{{ $pasien->id }}' entype='form-data/multipart'>
              @csrf
              @method('PUT')

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" required value="{{ $pasien->nama }}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" required value="{{ $pasien->alamat }}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>No. Telpon</label>
                    <input type="text" name="no_telpon" class="form-control" placeholder="No. Telpon" required value="{{ $pasien->no_telpon }}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>RT/RW</label>
                    <input type="text" name="rt_rw" class="form-control" placeholder="RT/RW" required value="{{ $pasien->rt_rw }}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Kelurahan</label>
                    <select class="form-control" name="kelurahan_id">
                      @foreach ($kelurahans as $kelurahan)
                        <option
                          @if($kelurahan->id == $pasien->kelurahan_id)
                            selected
                          @endif
                          value="{{ $kelurahan->id }}"
                        >{{$kelurahan->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required value="{{ $pasien->tanggal_lahir }}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jk">
                      <option
                        @if($pasien->jk == 'L')
                            selected
                        @endif
                        value="L"
                      >Laki - Laki</option>
                      <option
                        @if($pasien->jk == 'P')
                            selected
                        @endif
                        value="P">Perempuan</option>
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