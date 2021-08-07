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
    <div class="btn btn-primary "> Sudah Vaksin ! dosis {{$vaksin->dosis_ke}} </div>
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

<h6 class="mb-0 text-uppercase">DataTable Example</h6>
<hr/>
<!--end breadcrumb-->

<div class="row row-cols-1 row-cols-xl-2">
    <div class="col d-flex">
        <div class="card radius-10 w-100">
            <div class="card-body">

            <div class="text-center"><i class="bx bx-disc text-dark font-50"></i><h4 class="form-label ">Lapor Bergejala Covid</h4>

            </div>
            <div class="login-separater text-center mb-4"> 
                <hr/>
            </div>

            @if(($gejala->id_user ?? '') == null || ($gejala->berhenti ?? '') == 'sudah')
            <form method="post" action="/user/gejalacovid" enctype="multipart/form-data" >
            @csrf
                <div class="mb-3">
                    <label class="form-label">Gejala Yang Dirasakan :</label>
                    <textarea type="form-control" class="form-control" placeholder="" name="gejala" id="gejala" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Apakah anda dalam keadaan Darurat dan Segera Butuh Penanganan ? :</label>
                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="keadaan" id="option" required>                                        
                        <option value="ya">ya</option>
                        <option value="tidak">tidak</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Apakah anda butuh ambulance ? :</label>
                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="ambulan" id="option" required>                                        
                        <option value="ya">ya</option>
                        <option value="tidak">tidak</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat lengkap Kos/Asrama/Rumah sewa, disekitar UNS <br>(contoh, kos xx, jalan xx, gang xx, RT/RW, kelurahan, kecamatan, Surakarta) :</label>
                    <textarea type="form-control" class="form-control" placeholder="" name="alamat" id="alamat" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">URL tempat tinggal saat ini (koordinat G-Map) :</label>
                    <textarea type="form-control" class="form-control" placeholder="" name="url" id="url" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Tempat Tinggal :</label>
                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="jenis" id="option" required>                                        
                        <option value="kos">kos</option>
                        <option value="rumah orang tua">rumah orang tua</option>
                        <option value="asrama">asrama</option>
                        <option value="kontrakan">kontrakan</option>
                        <option value="rumah pribadi / hotel / apartemen">rumah pribadi / hotel / apartemen</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Apakah ada orang lain yang tinggal bersama saya dalam satu bangunan tempat tinggal saya? :</label>
                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="orang" id="option" value="{{ $complete->status}}" required>                                        
                        <option value="tidak">tidak</option>
                        <option value="ya">ya</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Apakah saya memiliki kontak erat dengan penderita COVID-19? <br>(dalam kurun waktu 14 hari terakhir) :</label>
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="pilih / tulis sendiri" name="kontak" required>
                    <datalist id="datalistOptions">
                        <option value="Tidak ada"></option>
                        <option value="Saya tinggal dengan penderita COVID-19 di satu bangunan yang sama"></option>
                        <option value="Tetangga saya, selisih 1-2 bangunan dari tempat saya tinggal menderita COVID-19"></option>
                        <option value="Saya berada satu ruangan/berbincang dengan penderita COVID-19 lebih dari 60 menit"></option>
                        <option value="Saya kontak fisik (bersentuhan, berjabat tangan, dsb) dengan penderita COVID-19, Saya berada satu ruangan/berbincang dengan penderita COVID-19 lebih dari 60 menit"></option>
                        <option value="Saya kontak fisik (bersentuhan, berjabat tangan, dsb) dengan penderita COVID-19"></option>
                    </datalist>
                </div>
                <div class="mb-3">
                    <label class="form-label">Link G-Drive TTD dan Nama Lengkap :</label>
                    <textarea type="form-control" class="form-control" placeholder="" name="link" id="keterangan" required></textarea>
                </div>
                
                <br><br><br>
                
                <div class="col-12">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg px-5"><i class="bx bx-sun"></i>Saya Melapor !</button>
                    </div>
                </div>
                
            </form>
            @endif

            @if(($gejala->berhenti ?? '') == 'belum')
            <form method="post" action="/user/gejalacovid/{{$data->id}}" enctype="multipart/form-data" >
            @method('PATCH')
            @csrf
                <div class="col-12">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-lg px-5"><i class="bx bx-sun"></i>Saya Sudah Sehat !</button>
                    </div>
                </div>
            </form>
            @endif

        </div>
    </div>
</div>

@endsection