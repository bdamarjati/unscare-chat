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
    <div class="font 50">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item active" aria-current="page"><div class="btn btn-light ">Status saat ini </div></li>
            </ol>
        </nav>
    </div>&nbsp;&nbsp;

    @if(($data ?? '') == null)
    <div class="btn btn-primary "> Belum Ada </div>
    @endif
    @if(($data->sembuh ?? '') == 'belum')
    <div class="btn btn-danger "> Terinfeksi Covid 19 !!</div>
    @endif
    @if(($data->sembuh ?? '') == 'sudah')
    <div class="btn btn-success "> Sudah Sembuh ! </div>
    @endif

    &nbsp;&nbsp;

    @if(($vaksin ?? '') != null)
    <div class="btn btn-primary "> Sudah Vaksin ! dosis {{$vaksin->dosis_ke}}</div>
    @endif
    @if(($vaksin ?? '') == null)
    <div class="btn btn-warning "> Belum Vaksin Covid !  </div>
    @endif
    

    <div class="ms-auto">
        <div class="btn-group">
            <button type="button" class="btn btn-primary">Settings</button>
            <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"><a class="dropdown-item" href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
            <div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:;">Separated link</a>
            </div>
        </div>
    </div>
</div>

@if(session()->get('message'))
    <div class="alert alert-info alert-dismissable mt-20" role="alert">
        <h4>{{ session()->get('message') }}  </h4> 
    </div>
@endif

<h6 class="mb-0 text-uppercase">DataTable Example</h6>
<hr/>
<!--end breadcrumb-->

<div class="row row-cols-1 row-cols-xl-2">
    <div class="col d-flex">
        <div class="card radius-10 w-100">
            <div class="card-body">

                @if(($data ?? '') == null)
                <div class="text-center"><i class="bx bx-disc text-dark font-50"></i><h4 class="form-label ">Claim Positif Covid - 19</h4>
                @endif
                @if(($data->sembuh ?? '') == 'belum')
                <div class="text-center"><i class="bx bx-disc text-dark font-50"></i><h4 class="form-label ">Claim Sembuh</h4>
                @endif
                @if(($data->sembuh ?? '') == 'sudah')
                <div class="text-center"><i class="bx bx-disc text-dark font-50"></i><h4 class="form-label ">Claim Positif Covid - 19</h4>
                @endif

            </div>
            <div class="login-separater text-center mb-4"> 
                <hr/>
            </div>

            <form method="post" action="/user/claimcovid" enctype="multipart/form-data" >
            @csrf
                <div class="mb-3">
                    <label class="form-label">Keterangan :</label>
                    <textarea type="form-control" class="form-control" placeholder="" name="keterangan" id="keterangan" required></textarea>
                </div>

                @if(($data->sembuh ?? '') == 'belum')
                <div class="mb-3">
                    <label class="form-label">Surat Keterangan Sehat :</label>
                    <input type="file" class="form-control" id="file_hasil" name="file_hasil" data-toggle="custom-file-input" required multiple>
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-label" for="flexCheckChecked"> Saya menkonfirmasi bahwa saya sudah sembuh</label>
                </div>
                @endif

                @if(($data->sembuh ?? '') == null)
                <div class="mb-3">
                    <label class="form-label">Hasil Test Positif Covid <span>(SWAB Antigen)</span> :</label>
                    <input type="file" class="form-control" id="file_hasil" name="file_hasil" data-toggle="custom-file-input" required multiple>
                </div>
                <div class="mb-3">
                    <label class="form-label">Hasil Test Positif Covid <span>(SWAB PCR)</span> :</label>
                    <input type="file" class="form-control" id="file_hasil_pcr" name="file_hasil_pcr" data-toggle="custom-file-input" required multiple>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Terkonfirmasi Covid :</label>
                    <input type="date" class="form-control">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-label" for="flexCheckChecked"> Saya menkonfirmasi bahwa saya terpapar covid</label>
                </div>
                @endif
                
                @if(($data->sembuh ?? '') == 'sudah')
                <div class="mb-3">
                    <label class="form-label">Hasil Test Positif Covid <span>(SWAB Antigen)</span> :</label>
                    <input type="file" class="form-control" id="file_hasil" name="file_hasil" data-toggle="custom-file-input" required multiple>
                </div>
                <div class="mb-3">
                    <label class="form-label">Hasil Test Positif Covid <span>(SWAB PCR)</span> :</label>
                    <input type="file" class="form-control" id="file_hasil_pcr" name="file_hasil_pcr" data-toggle="custom-file-input" required multiple>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Terkonfirmasi Covid :</label>
                    <input type="date" class="form-control">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-label" for="flexCheckChecked"> Saya menkonfirmasi bahwa saya terpapar covid</label>
                </div>
                @endif
                
                @if(($data ?? '') == null)
                <div class="col-12">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-danger btn-lg px-5"><i class="bx bx-sun"></i>Saya Positif Covid 19</button>
                    </div>
                </div>
                @endif
                @if(($data->sembuh ?? '') == 'sudah')
                <div class="col-12">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-danger btn-lg px-5"><i class="bx bx-sun"></i>Saya Positif Covid 19</button>
                    </div>
                </div>
                @endif

            </form>

            @if(($data->id_user ?? '') != null)
            <form method="post" action="/user/claimcovid/{{$data->id}}" enctype="multipart/form-data" >
            @method('PATCH')
            @csrf
                @if(($data->sembuh ?? '') == 'belum')
                <div class="col-12">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-lg px-5"><i class="bx bx-sun"></i>Saya Sudah Sembuh !</button>
                    </div>
                </div>
                @endif
            @endif
            </form>
        </div>
    </div>
</div>
@endsection