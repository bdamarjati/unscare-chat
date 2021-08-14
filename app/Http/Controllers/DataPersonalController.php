<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\UserData;
use App\Models\ClaimCovid;
use App\Models\ClaimVaksin;
use App\Models\ClaimGejala;

class DataPersonalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $complete = UserData::where('id_user',$user->id)->get()->first();
        $specific = UserData::where('id_user',$id)->get()->first();
        $covid = UserData::join('claim_covid','claim_covid.id_user','=','user_data.id_user')->where('claim_covid.id_user',$id)->get()->all();
        $vaksin = UserData::join('claim_vaksin','claim_vaksin.id_user','=','user_data.id_user')->where('claim_vaksin.id_user',$id)->get()->all();
        $gejala = UserData::join('claim_gejala','claim_gejala.id_user','=','user_data.id_user')->where('claim_gejala.id_user',$id)->get()->all();
        $isolasi = UserData::join('claim_isolasi','claim_isolasi.id_user','=','user_data.id_user')->where('claim_isolasi.id_user',$id)->get()->all();

        return view('datapersonalcomplete',compact('specific','complete','covid','vaksin','gejala','isolasi','user'));
    }

    public function showCovid($id)
    {
        $user = Auth::user();
        $complete = UserData::where('id_user',$user->id)->get()->first();
        $specific = UserData::join('claim_covid','claim_covid.id_user','=','user_data.id_user')->where('claim_covid.id',$id)->get()->first();
        
        return view('datapersonalcovid',compact('complete','specific','user'));
    }

    public function showVaksin($id)
    {
        // return $id;
        $user = Auth::user();
        $complete = UserData::where('id_user',$user->id)->get()->first();
        $specific = UserData::join('claim_vaksin','claim_vaksin.id_user','=','user_data.id_user')->where('claim_vaksin.id',$id)->get()->first();

        return view('datapersonalvaksin',compact('complete','specific','user'));
    }
    public function showGejala($id)
    {
        $user = Auth::user();
        $complete = UserData::where('id_user',$user->id)->get()->first();
        $specific = UserData::join('claim_gejala','claim_gejala.id_user','=','user_data.id_user')->where('claim_gejala.id',$id)->get()->first();

        return view('datapersonalgejala',compact('complete','specific','user'));
    }
    public function showIsolasi($id)
    {
        $user = Auth::user();
        $complete = UserData::where('id_user',$user->id)->get()->first();
        $specific = UserData::join('claim_isolasi','claim_isolasi.id_user','=','user_data.id_user')->where('claim_isolasi.id',$id)->get()->first();

        return view('datapersonalisolasi',compact('complete','specific','user'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        UserData::where('id_user',$id)->update([
            'verified'     => 'yes',
        ]);

        return redirect('admin/useradministration')->with('message','Data Berhasil Di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
