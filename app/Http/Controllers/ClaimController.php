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

class ClaimController extends Controller
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
        
        $history = ClaimCovid::where('id_user',$user->id)->get()->all();

        return view('claim',compact('user','complete','data','vaksin','history'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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

        $hasiltest = $request->file('file_hasil');
        
        $nama_gambar = "foto_positif_".$complete->nim_nip.".".$hasiltest->getClientOriginalExtension();

        $hasil_upload = 'folder_covid';
        $hasiltest->move($hasil_upload,$nama_gambar);
        
        ClaimCovid::create( 
            ['id_user'         => $complete->id_user,
            'gambar_hasiltest' => $nama_gambar, 
            'keterangan'       => $request->keterangan,
            'sembuh'           => 'belum'
        ]);

        $check = ClaimCovid::where('id_user',$user->id)->get()->first();
        if($check == null){
            ClaimCovidHistory::create( 
                ['id_user'         => $complete->id_user,
                'sembuh'           => 'belum'
            ]);
            return redirect('user/claimcovid')->with('message','Anda saat ini terinfeksi Covid-19, Segera lakukan isolasi mandiri atau Hubungi pihak yang berwenang !');
        }else{
            return redirect('user/claimcovid')->with('message','Anda saat ini terinfeksi Covid-19, Segera lakukan isolasi mandiri atau Hubungi pihak yang berwenang !');
        }
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
        // return $request;
        // return $id;
        $user = Auth::user();
        $complete = ClaimCovid::where('id_user',$user->id)->get()->first();
        
        ClaimCovid::where('id',$id)->update(
                [
                        'keterangan'=>$request->keterangan,
                        'sembuh'=>'sudah'
                    ]
                );

        ClaimCovidHistory::where('id_user',$user->id)->update(
                [
                        'sembuh'=>'sudah'
                    ]
                );
                
        return redirect('user/claimcovid');
    }

    public function update2(Request $request, $id)
    {
        return 0;
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
