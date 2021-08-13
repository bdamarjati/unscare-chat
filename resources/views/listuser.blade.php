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
            <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                    href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
                <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
            </div>
        </div>
    </div>
</div>
<p class="mb-0 text-uppercase display-6 text-center">List User UNS Care</p>
<hr />
<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>NIM / NIP</th>
                        <th>No Telp</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Verivikasi Status</th>
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
                        <td>{{$row->email}}</td>
                        <td>{{$row->nim_nip}}</td>
                        <td>{{$row->no_telp}}</td>
                        <td>{{$row->alamat}}</td>
                        <td>{{$row->status}}</td>
                        <td>{{$row->verified}}</td>
                        <td class="text-center">
                            <a href="" class="btn btn-sm btn-warning mr-5 mb-5"><i class="bx bx-edit-alt"></i></a>
                            <a href="" class="btn btn-sm btn-danger mr-5 mb-5"><i class="bx bx-eraser"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
