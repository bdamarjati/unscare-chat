@extends('layouts.Backup')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <!--end breadcrumb-->
    <div class="container-fluid">
        <div class="main-body">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <br>
                    <br>
						<div class="card">
							<div class="card-body">
                            <div class="text-center"><i class="bx bxs-user-circle font-50"></i><h4 class="form-label ">Isi Data Anda</h4>
                                        <!-- <p>Silahkan Isi Data ID dan Password Anda<a href="authentication-signup.html"></a> -->
                                    </div>
                                    <div class="login-separater text-center mb-4"> 
                                        <hr/>
                                    </div>
								<form method="post" action="/userdata/{{$user->id}}" enctype="multipart/form-data" >
                                @method('PATCH')
                                @csrf
									<div class="mb-3">
										<label class="form-label">Nama Lengkap :</label>
										<input type="text" class="form-control" placeholder="" name="nama_lengkap" id="nama_lengkap">
									</div>
									<div class="mb-3">
										<label class="form-label">NIM / NIP :</label>
										<input type="text" class="form-control" placeholder="" name="nim_nip" id="nim_nip">
									</div>
									<div class="mb-3">
										<label class="form-label">No Telp :</label>
										<input type="text" class="form-control" placeholder="" name="no_telp" id="no_telp">
									</div>
                                    <div class="mb-3">
                                        <label class="form-label">Status :</label>
                                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="option" id="option">
                                            <!-- <option selected>Open this select menu</option> -->
                                                <option value="dokter">dokter</option>
                                                <option value="tenaga medis">tenaga medis</option>
                                                <option value="biasa">biasa</option>
                                        </select>
                                    </div>
									<div class="mb-3">
										<label class="form-label">Alamat :</label>
										<textarea type="form-control" class="form-control" placeholder="" name="alamat" id="alamat"></textarea>
									</div>
                                    <div class="mb-3">
										<label class="form-label">Foto KTP :</label>
										<input type="file" class="form-control" id="file_ktp" name="file_ktp" data-toggle="custom-file-input" multiple>
									</div>
                                    <br>
                                    <div class="mb-3">
                                        <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-dark px-4" value="Simpan Data" />
                                        </div>
                                    </div>
								</form>
							</div>
						</div>
                </div>
            </div>
        </div>
    </div>
</div>