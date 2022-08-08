<?php

namespace App\Http\Controllers;

use App\Imports\DataImport;
use App\Exports\dataExport;
use App\Models\Data;
use App\Models\PPI;
use App\Models\Vendor;
use App\Models\Tescom;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class DataController extends Controller
{
    public function index()
    {
        $data = DB::table('data')
        
        ->join('ppi_table','data.p_aktivasi_node_id','=','ppi_table.spa')
        // ->join('vendor','data.p_aktivasi_node_id','=','vendor.nama_mitra')
        ->paginate(20);
        // dd($data);
       return view('tampil', ['data' => $data]);
        
      
    }

    public function caridatatable(Request $req)
    {
     
        $caridata = $req->caridata;

        $caridata=DB::table('data')->join('ppi_table','data.p_aktivasi_node_id','=','ppi_table.spa')
        ->where('c_name','like','%'.$caridata.'%')
        ->orWhere('p_aktivasi_node_id','like','%'.$caridata.'%')
        ->orWhere('service_id','like','%'.$caridata.'%')
        ->paginate(10);

       return view ('tampil',['data' => $caridata]);

    }

    public function import(Request $req)
    {
        $this->validate($req, ['file' => 'required']);
        $path = $req->file;
        Excel::import(new DataImport, $path);
        return redirect('/data');
    }
    public function detail($id)
    {
        $data = Data::where('c_name', '=', $id)->get();
        return view('detail', ['data' => $data]);
    }

    public function export()
    {
        return Excel::download(new dataExport,'data.xlsx');
    }



    public function updateView($id)
    {
        $data = Data::where('id', '=', $id)->get();
        return view('tampil', ['data' => $data]);
    }
    public function update(Request $req, $id)
    {
        $updatedata = Data::where('id', '=', $id)->update([
            'p_aktivasi_node_id' => $req->p_aktivasi_node_id,
            'c_name' => $req->c_name,
            'address' => $req->address,
            'bandwidth' => $req->bandwidth,
            'service_id' => $req->service_id,
            'status' => $req->status

        ]);
        if ($updatedata) {
            return redirect('/data')->with('sukses', 'Data Berhasil DiUpdate');
        }
    }

    public function hapus($id)
    {
        $dataall = Data::where('c_name', '=', $id)->get();
        $data = Data::where('c_name', '=', $id)->delete();
        $hapusppi=PPI::where('spa','=',$dataall[0]->p_aktivasi_node_id)->delete();
        if ($data) {
            if($hapusppi){
                return redirect('/data')->with('sukses', 'Data Berhasil Dihapus');
            }
        }
    }

    public function cari(Request $req)
    {
        $this->validate($req,[
            'cari'=>'required'
        ]);
        $datacari=Data::where('c_name','like','%'.$req->cari.'%')
        ->orWhere('p_aktivasi_node_id','like','%'.$req->cari.'%')
        ->orWhere('service_id','like','%'.$req->cari.'%')
        ->get();

        if (!$datacari->isEmpty()){
            return view('caridata.cari',['data'=>$datacari]);
        }else{
            return view('caridata.cari',['data'=>'kosong']);
        }
    }

    public function surveyView($id)
    {
        $data = Survey::where('id', '=', $id)->get();
        return view('tampil', ['data' => $data]);
    }

    public function updateSurvey(Request $req,$id)
    {
        // return $req->file('file')->store('public');
        // dd($req);
        $this->validate($req,[
            // 'rab'=>'required',
            'file'=>'required|mimes:zip,rar,pdf,jpg,png|max:2048'
        ]);

        $fileModel = Survey::findOrFail($id);
        $file = $req->file('file');
        $fileName = time().'_'.$req->file->getClientOriginalName();
        $filePath = $req->file('file')->move("assets/img/produk/", $fileName);

        $fileModel->survey_name = time()."_".$file->getClientOriginalName();
        $fileModel->survey_path = $filePath;
        $fileModel->save();
        // $tujuan_upload = 'data_survey';
        // $file->move($tujuan_upload,$fileModel);
        
         $updateSurvey=Survey::where('id','=',$id)->update([
            'rab'=>$req->rab,
            'file'=>$fileModel,
        ]);

         if ($updateSurvey){
            return redirect('/data')->with('sukses','Data Survey Berhasil Diupdate');
        }


        // $updateSurvey=Survey::where('id','=',$id)->update([
        //     'rab'=>$req->rab,
        //     'file'=>$req->file,
        // ]);
        
        // $fileModel = new Survey;

        // if($req->file()) {
        //     $fileName = time().'_'.$req->file->getClientOriginalName();
        //     $filePath = $req->file('file')->storeAs('Survey', $fileName, 'public');

        //     $fileModel->survey_name = time().'_'.$req->file->getClientOriginalName();
        //     $fileModel->survey_path = '/storage/' . $filePath;
        //     $fileModel->save();

        //     return back()
        //     ->with('success','File has been uploaded.')
        //     ->with('file', $fileName);
        // }
        
    }

    // public function tescomView($id)
    // {
    //     $data = Tescom::where('id', '=', $id)->get();
    //     return view('tampil', ['data' => $data]);
    // }

    // public function updateTescom(Request $req,$id)
    // {
    // //    return $req->file('file')->store('public');

    //     $updateSurvey=Tescom::where('id','=',$id)->update([
    //         'p_aktivasi_node_id' => $req->p_aktivasi_node_id,

    //         // 'file' => 'file|mimes:jpeg,png'

    //     ]);

    //     if ($updateSurvey){
    //         return redirect('/data')->with('sukses','Data Berhasil Diupdate');
    //     }
    // }

}
