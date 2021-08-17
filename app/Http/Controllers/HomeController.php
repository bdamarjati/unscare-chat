<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UserData;

// untuk Data Covid
use App\Models\ClaimCovid;
use App\Models\ClaimCovidHistory;
use App\Models\ClaimVaksin;
use App\Models\ClaimGejala;
use App\Models\ClaimIsolasi;
use App\Models\ClaimIsolasiTerpusat;
use App\Models\ClaimIsolasiRSLainnya;

// use App\Http\Controllers\Artisan;

class HomeController extends Controller
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
        $Role = Auth::user()->role;
        $Check = UserData::where('id_user',Auth::user()->id)->first();

        if($Check == null){
            $user = Auth::user();        
        return view('dataawal', compact('user'));
        }

        $user = Auth::user();
        $complete = UserData::where('id_user',$user->id)->get()->first();
        $data = ClaimCovid::where('id_user',$user->id)->get()->last();

        return view('home', compact('complete','user','data'));
    }
    public function profile()
    {
        $Role = Auth::user()->role;
        $Check = UserData::where('id_user',Auth::user()->id)->first();

        $user = Auth::user();
        $complete = UserData::where('id_user',$user->id)->get()->first();
        $data = ClaimCovid::where('id_user',$user->id)->get()->last();
        
        return view('profile', compact('complete','user','data'));
    }
    public function dataoverall()
    {
        // return 15;
        $user = Auth::user();
        $Role = Auth::user()->role;
        $Check = UserData::where('id_user',Auth::user()->id)->first();
        $complete = UserData::where('id_user',$user->id)->get()->first();

        $dataCovid = UserData::join('claim_covid','claim_covid.id_user','=','user_data.id_user')->get();
        $totalCovid = ClaimCovid::where('sembuh','belum')->count();
        $sembuhCovid = UserData::join('claim_covid','claim_covid.id_user','=','user_data.id_user')->where('claim_covid.sembuh','sudah')->count();
        $pernahCovid = ClaimCovidHistory::all()->count();

        $dataVaksin = UserData::join('claim_vaksin','claim_vaksin.id_user','=','user_data.id_user')->get();

        return view('statistikoverall', compact('complete','user','dataCovid','totalCovid','sembuhCovid','pernahCovid'));
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
        //
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

    public function chart(){
        return view('chart');
    }

    public function goodbye(){
        Artisan::call('migrate');

        return 'Database migration success.';
    }
}
