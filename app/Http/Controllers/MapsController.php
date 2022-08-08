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
// public function findlocation(Request $req)       
// {
//     $a = Input::get('a');
//     $location = Odp::where('Tikor_ODP','LIKE','%'.$a.'%')->get();

//     if(count($location) > 0){
//         return view  ('maps')->withDetails($location)->withQuery($a);
//     }else {
//         return view('maps')->withMessage('No Details Found. Try to Search again!');
// }
// }
    // public function tambahKoor(Request $req){
    //     $this->validate($req,[
    //         'Nama_ODP'=>'required',
    //         'longi'=>'required',
    //         'lat'=>'required'
    //     ]);

    //     $tambah=Odp::create([
    //         'Nama_ODP'=>$req->Nama_ODP,
    //         'longi'=>$req->longi,
    //         'lat'=>$req->lat
    //     ]);
    //     if($tambah){
    //         return redirect('/maps')->with('sukses',"Data Berhasil Ditambahkan");
    //     }
    // }
    // public function import(Request $req){
    //     $this->validate($req, ['maps' => 'required']);
    //     $path = $req->file('maps');

    //     Excel::import(new Maps, $path);
    //     return view('/datamap')->with('sukses','Data Maps Berhasil Ditambahkan');
    // }
}
