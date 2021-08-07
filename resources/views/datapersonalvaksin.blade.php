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
				<h4 class="mb-0 text-uppercase text-center">Data Personal Specific User Vaksin</h4>
				<hr/>
            <!--end breadcrumb-->

    <!--end breadcrumb-->

        <div class="main-body">
            <div class="row">
                <div class="col mx-auto">
                    <br>
                    <br>
						<div class="card">
							<div class="card-body">
                            <div class="text-center"><i class="bx bxs-user-circle text-primary font-50"></i><h4 class="form-label ">Suspect : {{$specific->nama_lengkap}}</h4>
                                        <!-- <p>Silahkan Isi Data ID dan Password Anda<a href="authentication-signup.html"></a> -->
                                    </div>
                                    <div class="login-separater text-center mb-4"> 
                                        <hr/>
                                    </div>


									<div class="mb-3">
										<label class="form-label">Nama Lengkap :</label>
										<input type="text" class="form-control" value="{{$specific->nama_lengkap}}" name="nama_lengkap" id="nama_lengkap" readonly>
									</div>
									<div class="mb-3">
										<label class="form-label">NIM / NIP :</label>
										<input type="text" class="form-control" value="{{$specific->nim_nip}}" name="nim_nip" id="nim_nip" readonly>
									</div>
									<div class="mb-3">
										<label class="form-label">Keterangan :</label>
										<input type="text" class="form-control" value="{{$specific->keterangan}}" name="nim_nip" id="nim_nip" readonly>
									</div>
									<div class="mb-3">
										<label class="form-label">Dosis Ke :</label>
										<input type="text" class="form-control" value="{{$specific->dosis_ke}}" name="nim_nip" id="nim_nip" readonly>
									</div>
									<div class="mb-3">
										<label class="form-label">Tanggal Lapor Vaksin (Ke Aplikasi UNS Care) :</label>
										<input type="text" class="form-control" value="{{$specific->updated_at}}" name="nim_nip" id="nim_nip" readonly>
									</div>
                                    <div class="mb-3">
                                        <label class="form-label">Link G-Drive Kartu Vaksin :</label><br>
										<input type="text" class="form-control" value="{{$specific->link}}" name="nim_nip" id="nim_nip" readonly>
                                    </div>
                                    <br>
                                    
							</div>
						</div>
                </div>
            </div>
        </div>


			
				
@endsection