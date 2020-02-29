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
	  <div class="col-md-12">
	    <div class="card">
	      <div class="card-header">
	        <h4 class="card-title">Data Kelurahan</h4>
	        <a href="/home/admin/create" class="btn btn-primary">Tambah</a>
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
	                Kecamatan
	              </th>
	              <th>
	                Kota
	              </th>
	              <th class="text-right">
	              </th>
	            </thead>
	            <tbody>
	              @foreach($kelurahans as $key => $value)
		              <tr>
		                <td>
		                  {{ $value->id }}
		                </td>
		                <td>
		                  {{ $value->nama }}
		                </td>
		                <td>
		                  {{ $value->kecamatan }}
		                </td>
		                <td>
		                  {{ $value->kota }}
		                </td>
		                <td class="text-right">
		                	<div class="d-flex justify-content-center align-items-center">
		                		<a href="/home/admin/{{$value->id}}/edit" class="btn btn-info btn-sm mr-2">
		                			Edit
		                		</a>
		                		
	                			<form method="POST" action="/home/admin/{{$value->id}}">
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