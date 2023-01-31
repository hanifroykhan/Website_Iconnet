<?php

namespace App\Http\Controllers;

use App\Imports\Maps;
use App\Models\Data;
use App\Models\Odp;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\Console\Input\Input;

use function PHPSTORM_META\map;

class MapsController extends Controller
{
    public function index(){
        $koor=Odp::get();

        return view('maps',['data'=>$koor]);
    }
    public function proses(Request $request){
        $long=$request->long;
        $lat=$request->lati;
        $maps="https://maps.google.com/maps?q={$long},{$lat}&output=embed";
        return view('hasilmaps',['maps'=>$maps]);
    }

    public function getDetailKoor(Request $request)
    {
        $odp = $request->odp;
        $model = Odp::where('NAMA_ODP', $odp)->first();

        return response()->json($model);
    }

}
