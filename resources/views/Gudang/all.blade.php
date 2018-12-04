@extends('layouts.app')

@section('content')

<div class="content">
	<div class="content-header">
		<div class="page-title">
			<h3>Barang</h3>
		</div>
		<div class="page-breadcumb">
			
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="/welcome">Home</a></li>
			    <li class="breadcrumb-item"><a href="/barang">Barang</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Gudang</li>
			  </ol>
			</nav>
		</div>
	</div>			
	<div class="content-body">
		
		<section  class="chart">
			<div class="panel">
				<div class="panel-header d-flex align-items-center justify-content-between">
						<div class="panel-title">
							<i class="fa fa-book"></i> 	   Daftar Barang
						</div>
						<div>
							<a href="{{route('add_gudang')}}" class="btn btn-primary"><i class="fas fa-plus"></i> <span>Tambah</span></a>
						</div>
				</div>
				<div class="panel-body">
					<div class="row">
						@if(Session::has('success_add'))
						<div class="col-12">
							<div class="alert alert-success" role="alert">
								{{ Session::get('success_add') }}
							</div>
						</div>
						@endif
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
						<tr>
							<th>No</th>
							<th>Alamat</th>
							<th>Kapasitas</th>
							<th>Gambar</th>
							<th>Actions</th>
						</tr>
							</thead>
							<tbody>
								@foreach ($gudang as $gudang)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$gudang->alamat}}</td>
							<td>{{$gudang->kapasitas}}</td>
							<td><img src="{{asset('uploads/img/'.$gudang->pict)}}" alt=""></td>
							<td>
			<a href="{{route('edit_gudang', $gudang->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
			<a href="{{route('delete_gudang', $gudang->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
	</div>			
</div>
@endsection