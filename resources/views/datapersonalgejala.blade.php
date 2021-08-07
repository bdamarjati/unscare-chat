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
				<h4 class="mb-0 text-uppercase text-center">Data Personal Specific User Bergejala Covid</h4>
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
										<label class="form-label">Gejala :</label>
										<input type="text" class="form-control" value="{{$specific->gejala}}" name="nim_nip" id="nim_nip" readonly>
									<div class="mb-3">
										<label class="form-label">Kondisi Darurat ? (saat melapor ke Aplikasi UNS Care) :</label>
										<input type="text" class="form-control" value="{{$specific->keadaan}}" name="nim_nip" id="nim_nip" readonly>
									</div>
									<div class="mb-3">
										<label class="form-label">Butuh Ambulan ? (saat melapor ke Aplikasi UNS Care) :</label>
										<input type="text" class="form-control" value="{{$specific->ambulan}}" name="nim_nip" id="nim_nip" readonly>
									</div>
									<div class="mb-3">
										<label class="form-label">Alamat Tempat Tinggal Sekarang :</label>
										<input type="text" class="form-control" value="{{$specific->alamat}}" name="nim_nip" id="nim_nip" readonly>
									</div>
									<div class="mb-3">
										<label class="form-label">Url G-Maps Alamat Tempat Tinggal Sekarang :</label>
										<input type="text" class="form-control" value="{{$specific->url_map}}" name="nim_nip" id="nim_nip" readonly>
									</div>
									<div class="mb-3">
										<label class="form-label">Jenis Tempat Tinggal :</label>
										<input type="text" class="form-control" value="{{$specific->jenis}}" name="nim_nip" id="nim_nip" readonly>
									</div>
									<div class="mb-3">
										<label class="form-label">Apakah ada orang lain yang tinggal bersama saya dalam satu bangunan tempat tinggal saya ? :</label>
										<input type="text" class="form-control" value="{{$specific->orang}}" name="nim_nip" id="nim_nip" readonly>
									</div>
									<div class="mb-3">
										<label class="form-label">Tanggal Lapor Bergejala Covid (Ke Aplikasi UNS Care) :</label>
										<input type="text" class="form-control" value="{{$specific->created_at}}" name="nim_nip" id="nim_nip" readonly>
									</div>
                                    <div class="mb-3">
                                        <label class="form-label">Link Google Drive Tanda Tangan:</label><br>
										<input type="text" class="form-control" value="{{$specific->link}}" name="nim_nip" id="nim_nip" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Sekarang Sudah Berhenti Gejala ? :</label>
                                        <input type="text" class="form-control" value="{{$specific->berhenti }}" name="nim_nip" id="nim_nip" readonly>
                                    </div>
									@if(($specific->updated_at ?? '') != $specific->created_at)
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Lapor Berhenti Gejala :</label>
                                        <input type="text" class="form-control" value="{{$specific->updated_at}}" name="nim_nip" id="nim_nip" readonly>
                                    </div>
									@endif
                                    <br>
                                    
							</div>
						</div>
                </div>
            </div>
        </div>


			
				
@endsection