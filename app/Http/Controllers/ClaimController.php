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
        
        $history = ClaimCovid::where('id_user',$user->id)->get();
        // $history = ClaimCovid::Mhsaktif($user->id);

        // return $history;

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
        // return $request;
        $user = Auth::user();
        $complete = UserData::where('id_user',$user->id)->get()->first();

        $variable_kosong = 0;
        $pilih = $request->radio1;

        if($pilih == null){
            return redirect('user/claimcovid')->with('warning','Maaf, tolong data di isi lengkap !');
        }

        if($pilih == 'milih_covid'){
            if($request->keterangan==null || $request->alamat==null || $request->url==null){
                return redirect('user/claimcovid')->with('warning','Maaf, tolong data di isi lengkap !');
            }else{
                ClaimIsolasi::create( 
                ['id_user'          => $complete->id_user,
                'alasan'            => 'covid', 
                'alamat'            => $request->alamat,
                'url_map'           => $request->url,
                'kiriman_bantuan'   => 'belum',
                'selesai'           => 'belum'
           ]);    
            }
        }
        if($pilih == 'milih_rumahsehat'){
            if($request->rumahsehat==null){
                return redirect('user/claimcovid')->with('warning','Maaf, tolong data di isi lengkap !');
            }else{
                ClaimIsolasiTerpusat::create( 
                ['id_user'          => $complete->id_user,
                'rumah_sehat'       => $request->rumahsehat,
                'selesai'           => 'belum'
           ]);    
            }
        }
        if($pilih == 'milih_rslain'){
            if($request->nama_tempat==null || $request->alamat_tempat==null || $request->url_tempat==null){
                return redirect('user/claimcovid')->with('warning','Maaf, tolong data di isi lengkap !');
            }else{
                ClaimIsolasiRSLainnya::create( 
                ['id_user'          => $complete->id_user,
                'nama_tempat'       => $request->nama_tempat,
                'alamat_tempat'     => $request->alamat_tempat,
                'url_tempat'        => $request->url_tempat,
                'selesai'           => 'belum'
                ]);   
            }
        }
        
        // return $pilih;


        $hasiltest = $request->file('file_hasil');
        $hasilpcr = $request->file('file_pcr');
        
        $hasil_upload = 'folder_covid';

        if($hasiltest != null && $hasilpcr == null){
            $nama_gambar = "foto_antigen_".$complete->nim_nip.".".$hasiltest->getClientOriginalExtension();
            $hasiltest->move($hasil_upload,$nama_gambar);
            $nama_pcr = null;
        }
        else if($hasilpcr != null && $hasiltest == null){
            $nama_pcr = "foto_pcr_".$complete->nim_nip.".".$hasilpcr->getClientOriginalExtension();
            $hasilpcr->move($hasil_upload,$nama_pcr);
            $nama_gambar = null;
        }
        else if($hasilpcr != null && $hasiltest != null){
            $nama_gambar = "foto_antigen_".$complete->nim_nip.".".$hasiltest->getClientOriginalExtension();
            $nama_pcr = "foto_pcr_".$complete->nim_nip.".".$hasilpcr->getClientOriginalExtension();

            $hasiltest->move($hasil_upload,$nama_gambar);
            $hasilpcr->move($hasil_upload,$nama_pcr);
        }        
        // $hasiltest->move($hasil_upload,$nama_gambar);
        // $hasilpcr->move($hasil_upload,$nama_pcr);
        
        $check = ClaimCovid::where('id_user',$user->id)->get()->first();
        ClaimCovid::create( 
            ['id_user'         => $complete->id_user,
            'gambar_hasiltest' => $nama_gambar, 
            'gambar_pcr'       => $nama_pcr, 
            'keterangan'       => ($request->keterangan),
            'tanggal_confirmed'=>$request->tanggal_confirmed,
            'sembuh'           => 'belum'
        ]);
        
        if($check == null){
            ClaimCovidHistory::create( 
                ['id_user'         => $complete->id_user,
                'sembuh'           => 'belum'
            ]);
            return redirect('user/claimcovid')->with('message','Anda saat ini terinfeksi Covid-19, Segera lakukan isolasi mandiri atau Hubungi pihak yang berwenang !');
        }
        return redirect('user/claimcovid')->with('message','Anda saat ini terinfeksi Covid-19, Segera lakukan isolasi mandiri atau Hubungi pihak yang berwenang !');
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

        ClaimIsolasi::where('id_user',$user->id)->update(
                [
                        'selesai'=>'sudah'
                    ]
                );

        ClaimIsolasiRSLainnya::where('id_user',$user->id)->update(
                [
                        'selesai'=>'sudah'
                    ]
                );

        ClaimIsolasiTerpusat::where('id_user',$user->id)->update(
                [
                        'selesai'=>'sudah'
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
