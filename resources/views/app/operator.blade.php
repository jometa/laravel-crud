@extends('app.base')

@section('title', 'Operator')

@section('sidebar')
<li>
  <a href="./dashboard.html">
    <i class="nc-icon nc-bank"></i>
    <p>Pasien</p>
  </a>
</li>
@endsection

@section('content')
	<div class="row">
	  <div class="col-md-12">
	    <div class="card">
	      <div class="card-header">
	        <h4 class="card-title">Data Pasien</h4>
	        <a href="/home/operator/create" class="btn btn-primary">Tambah</a>
	      </div>
	      <div class="card-body">
	        <div class="table-responsive">
	          <table class="table">
	            <thead class=" text-primary">
	              <th>
	                Id
	              </th>
	              <th>
	                Nama
	              </th>
	              <th>
	                Alamat
	              </th>
	              <th>
	                No. Telpon
	              </th>
	              <th>
	                RT/RW
	              </th>
	              <th>
	                Kelurahan
	              </th>
	              <th>
	                JK
	              </th>
	              <th class="text-right">
	              </th>
	            </thead>
	            <tbody>
	              @foreach($pasiens as $key => $value)
		              <tr>
		                <td>
		                  {{ $value->id }}
		                </td>
		                <td>
		                  {{ $value->nama }}
		                </td>
		                <td>
		                  {{ $value->no_telpon }}
		                </td>
		                <td>
		                  {{ $value->rt_rw }}
		                </td>
		                <td>
		                  {{ $value->kelurahan->nama }}
		                </td>
		                <td>
		                  {{ $value->tanggal_lahir }}
		                </td>
		                <td>
		                  @if ($value->jk == 'L')
		                  	Laki - Laki
		                  @else
		                  	Perempuan
		                  @endif
		                </td>
		                <td class="text-right">
		                	<div class="d-flex justify-content-center align-items-center">
		                		<a href="/home/operator/{{$value->id}}/edit" class="btn btn-info btn-sm mr-2">
		                			Edit
		                		</a>
		                		
	                			<form method="POST" action="/home/operator/{{$value->id}}">
	                				@csrf
	                				@method('DELETE')
	                				<button type="submit" class="btn btn-danger btn-sm">
	                					Hapus
	                				</a>
	                			</form>
		                	</div>
		                </td>
		              </tr>
	              @endforeach
	            </tbody>
	          </table>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
@endsection