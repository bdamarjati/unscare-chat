<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UserData;

// untuk Data Covid
use App\Models\ClaimCovid;
use App\Models\ClaimVaksin;
use App\Models\ClaimGejala;
use App\Models\ClaimIsolasi;

class GejalaController extends Controller
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
        $user = Auth::user();
        $complete = UserData::where('id_user',$user->id)->get()->first();
        $data = ClaimCovid::where('id_user',$user->id)->get()->last();
        $vaksin = ClaimVaksin::where('id_user',$user->id)->get()->last();
        $gejala = ClaimGejala::where('id_user',$user->id)->get()->last();
        // $data = ClaimCovid::where('id_user',$user->id)->get()->last();

        return view('gejala',compact('user','complete','data','vaksin','gejala'));
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
        $user = Auth::user();
        $complete = UserData::where('id_user',$user->id)->get()->first();

        // return $request;
        
        ClaimGejala::create( [
            'id_user'       => $user->id,
            'gejala'        => $request->gejala,
            'alamat'        => $request->alamat,
            'url_map'       => $request->url,
            'jenis'         => $request->jenis,
            'orang'         => $request->orang,
            'kontak_covid'  => $request->kontak,
            'link'          => $request->link,
            'keadaan'       => $request->keadaan,
            'berhenti'      => 'belum',
            'ambulan'       => $request->ambulan]);

       return redirect('user/gejalacovid');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $user = Auth::user();
        // $complete = UserData::where('id_user',$user->id)->get()->first();

        // return $request;

        ClaimGejala::where('id',$id)->update(
            [
                    'berhenti'=>'sudah'
                ]
            );

        return redirect('user/gejalacovid');
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
