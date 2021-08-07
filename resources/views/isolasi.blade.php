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

@if(session()->get('message'))
    <div class="alert alert-info alert-dismissable mt-20" role="alert">
        <h4>{{ session()->get('message') }}  </h4> 
    </div>
@endif

@if(session()->get('warning'))
    <div class="alert alert-danger alert-dismissable mt-20" role="alert">
        <h4>{{ session()->get('warning') }}  </h4> 
    </div>
@endif

<h6 class="mb-0 text-uppercase">DataTable Example</h6>
<hr/>
<!--end breadcrumb-->

<div class="row row-cols-1 row-cols-xl-2">
    <div class="col d-flex">
        <div class="card radius-10 w-100">
            <div class="card-body">

            <div class="text-center"><i class="bx bx-disc text-dark font-50"></i><h4 class="form-label ">Lapor Isolasi</h4>

            </div>
            <div class="login-separater text-center mb-4"> 
                <hr/>
            </div>
            
            @if(($isolasi->id_user ?? '') == null || ($isolasi->selesai ?? '') == 'sudah')
            <form method="post" action="/user/isolasimandiri" enctype="multipart/form-data" >
            @csrf
                <div class="mb-3">
                    <label class="form-label">Alasan Isolasi :</label>
                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="alasan" id="option" value="" required>                                        
                        <option value="covid">saya positif covid !</option>
                        <option value="gejala">saya bergejala covid !</option>
                        <option value="lainnya">alasan lain</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alasan lain :</label>
                    <textarea type="form-control" class="form-control" placeholder="kasih tanda - (bila tidak ada alasan lain)" name="alasan_lain" id="keterangan" required></textarea>
                </div>
                <!-- <div class="mb-3">
                    <label class="form-label">Butuh Kiriman Bantuan :</label>
                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="butuh_bantuan" id="option" value="" required>                                        
                        <option value="ya">ya </option>
                        <option value="tidak">tidak </option>
                    </select>
                </div> -->
                <div class="mb-3">
                    <label class="form-label">Alamat lengkap Kos/Asrama/Rumah sewa, disekitar UNS <br>(contoh, kos xx, jalan xx, gang xx, RT/RW, kelurahan, kecamatan, Surakarta) :</label>
                    <textarea type="form-control" class="form-control" placeholder="" name="alamat" id="alamat" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">URL tempat tinggal saat ini (koordinat G-Map) :</label>
                    <textarea type="form-control" class="form-control" placeholder="" name="url" id="url" required></textarea>
                </div>
                
                <br><br><br>
                
                <div class="col-12">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg px-5"><i class="bx bx-sun"></i>Saya sedang Isolasi Mandiri !</button>
                    </div>
                </div>
                
            </form>
            @endif

            @if(($isolasi->selesai ?? '') == 'belum')
            <form method="post" action="/user/isolasimandiri/{{$isolasi->id}}" enctype="multipart/form-data" >
            @method('PATCH')
            @csrf
                <div class="col-12">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-lg px-5"><i class="bx bx-sun"></i>Saya Sudah Selesai Isolasi !</button>
                    </div>
                </div>
            </form>
            @endif
        </div>
    </div>
</div>

@endsection