<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Carbon;

use App\Models\ClaimCovid;

class GraphController extends Controller
{
    // Daily Positive Case Graph
    public function graphPositif(){
        $number = new Collection();
        $day = new Collection();
        $date = new Collection();
        for($i=1;$i<=31;$i++){
            $data = ClaimCovid::whereDay('created_at',$i)->pluck('created_at');
            $count = count($data);
            if($count != null){
                $number->push($count);
                $day->push($data[0]);
            }
        }
        for($i=0;$i<count($day);$i++){
            $d = Carbon::parse($day[$i])->format('M/d/Y');
            $date->push($d);
        }
        return ['number' => $number, 'day' => $date];
    }
}
