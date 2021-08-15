<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\ClaimCovid;
use App\Imports\CovidImport;
use App\Http\Controllers\Controller;
use Session;

use App\Models\UserData;
use App\Models\User;
// use App\Models\ClaimCovid;
use App\Models\ClaimCovidHistory;

class ImportController extends Controller
{
    //
    public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_covid di dalam folder public
		$file->move('file_covid',$nama_file);
 
		// import data
		Excel::import(new CovidImport, public_path('/file_covid/'.$nama_file));

		// $duplicates = DB::table('claim_covid_history')
		// 	->select('nim_nip', DB::raw('COUNT(*) as `count`'))
		// 	->groupBy('nim_nip')
		// 	->havingRaw('COUNT(*) > 1')
		// 	->get();
		
		// 	return $duplicates;
 
		// notifikasi dengan session
		Session::flash('sukses','Data Covid Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('admin/datapositifcovid');
	}
}
