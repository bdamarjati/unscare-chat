<!-- Halaman Ini Sudah Sesuai Tata Penulisan -->

@extends('layouts.backend')

@section('data')
{{ $complete->nama_lengkap }}
@endsection

@if(($complete->status ?? '') != 'biasa' && ($complete->verified ?? '') == 'yes')
    @section('status')
        {{ $complete->status }} &nbsp;&&nbsp; {{ $user->role }}
    @endsection
@else 
    @section('status')
        {{ $user->role }}
    @endsection
@endif

@section('content')
	<!--breadcrumb-->				
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Tables</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Data Table</li>
				</ol>
			</nav>
		</div>
			
		<div class="ms-auto">
			<div class="btn-group">
				<button type="button" class="btn btn-primary">Settings</button>
				<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
					<span class="visually-hidden">Toggle Dropdown</span>
				</button>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	
					<a class="dropdown-item" href="javascript:;">Action</a>
					<a class="dropdown-item" href="javascript:;">Another action</a>
					<a class="dropdown-item" href="javascript:;">Something else here</a>
					<div class="dropdown-divider"></div>	
					<a class="dropdown-item" href="javascript:;">Separated link</a>
				</div>
			</div>
		</div>
	</div>
	<!--end of breadcrumb-->	

	<!-- Page Break -->
	<hr/>
	<p class="mb-0 text-uppercase display-6 text-center">Data user yang positif covid-19</p>
	<hr/>
	<!-- end of Page Break -->
    
	<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
		<div class="col">
			<div class="card radius-10">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0 text-secondary">Total Pasien Sembuh </p>
							<h4 class="my-1">{{$sembuh}}</h4>
							<p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
						</div>
						<div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-capsule'></i>
						</div>
					</div>
					<!-- <div id="chart1"></div> -->
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card radius-10">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0 text-secondary">Total User Yang Pernah Positif</p>
							<h4 class="my-1">{{$pernahcovid}}</h4>
							<p class="mb-0 font-13 text-warning"><i class='bx bxs-up-arrow align-middle'></i>14% Since last week</p>
						</div>
						<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-group'></i>
						</div>
					</div>
					<!-- <div id="chart2"></div> -->
				</div>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="card radius-10">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0 text-secondary">Total Pasien Positif Saat Ini </p>
							<h4 class="my-1">{{$total}}</h4>
							<p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i>12.4% Since last week</p>
						</div>
						<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-virus'></i>
						</div>
					</div>
					<!-- <div id="chart3"></div> -->
				</div>
			</div>
		</div>
	</div>

	<!-- Stat -->
	<div class="card">
		<div class="card-body">
			<div class="container">
				<div id="chart3"></div>
			</div>
		</div>
	</div>
	<!-- end of Stat -->

	<!-- Main Table -->
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table id="example2" class="table table-striped table-bordered text-center">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Lengkap</th>
							<th>File Hasil Test</th>
							<th>Keterangan</th>
							<th>Sudah Sembuh ?</th>
							<th>Tanggal Lapor</th>
							<th>Action</th>
							<!-- <th>Updated at</th> -->
						</tr>
					</thead>
					<tbody>
					<?php $no=1; ?>
					@foreach ($data as $row)  
						<tr>
							<td>{{$no++}}</td>
							<td>{{$row->nama_lengkap}}</td>
							<td><a href="{{url('/admin/downloadcovid/'.$row->id_user)}}" class="btn btn-success"><i class="bx bx-arrow-to-bottom" ></i></a></td>
							<td>{{$row->keterangan}}</td>
							<td>{{$row->sembuh}}</td>
							<td>{{$row->created_at}}</td>					
							<td>
							<a href="{{url('/datapersonalcovid/'.$row->id)}}" class="btn btn-sm btn-primary " ><i class="lni lni-eye"></i></a>
							</td>					
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- end of Main Table -->
@endsection