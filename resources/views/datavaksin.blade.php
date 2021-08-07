@extends('layouts.backend')

@section('data')
{{ $complete->nama_lengkap }}
@endsection

@section('status')
{{ $user->role }}
@endsection

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
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<p class="mb-0 text-uppercase display-6 text-center">Data user yang sudah vaksin covid-19</p>
				<hr/>
            <!--end breadcrumb-->

				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered text-center">
								<thead>
									<tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Dosis ke</th>
                        <th>link kartu vaksin</th>
                        <th>Keterangan</th>
                        <th>Tanggal</th>
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
                        <td>{{$row->dosis_ke}}</td>
                        <td><a href="">{{$row->link}}</a></td>
                        <td>{{$row->keterangan}}</td>
                        <td>{{$row->created_at}}</td>	
						<td>
						<a href="{{url('/datapersonalvaksin/'.$row->id)}}" class="btn btn-sm btn-primary " ><i class="lni lni-eye"></i></a>
						</td>				
                    </tr>
                @endforeach

								</tbody>
							</table>
						</div>
					</div>
				</div>
@endsection