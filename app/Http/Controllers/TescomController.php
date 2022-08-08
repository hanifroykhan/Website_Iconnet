<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Document;
use App\Models\Tescom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TescomController extends Controller
{
    public function createForm(){
        $data=Tescom::all();
        return view('tampil',['data'=>$data]);
    }


    public function tescomView($id)
    {
        $data = Tescom::where('id', '=', $id)->get();
        return view('tampil', ['data' => $data]);
    }

    public function docView($id)
    {
        $data = Tescom::where('id', '=', $id)->get();
        return view('tampil', ['data' => $data]);
    }

    public function updateTescom(Request $req,$id)
    {

        $fileModel = Tescom::findOrFail($id);

      
        $file = $req->file('file');
        $fileName = time().'_'.$req->file->getClientOriginalName();
        $filePath = $req->file('file')->move("assets/document/tescom/", $fileName);

        $fileModel->tescom_name = time()."_".$file->getClientOriginalName();
        $fileModel->tescom_path = $filePath;
        
        // Bakl
        $fileBakl = $req->file('bakl_path');
        $fileNameBakl = time().'_'.$req->file->getClientOriginalName();
        $filePathBakl = $req->file('bakl_path')->move("assets/document/BAKL/", $fileNameBakl);

        $fileModel->bakl_name = time()."_".$fileBakl->getClientOriginalName();
        $fileModel->bakl_path = $filePathBakl;

        // BAI 
        $fileBai = $req->file('bai_path');
        $fileNameBai = time().'_'.$req->file->getClientOriginalName();
        $filePathBai = $req->file('bai_path')->move("assets/document/BAI/", $fileNameBai);

        $fileModel->bai_name = time()."_".$fileBai->getClientOriginalName();
        $fileModel->bai_path = $filePathBai;    


        $fileModel->save();

        return redirect('/data')->with('sukses','Data Tescom Berhasil Diupdate');

    }

    public function updateDoc(Request $req, $id)
    {
        $fileModel = Document::findOrFail($id);

      
        $file = $req->file('file');
        $fileName = time().'_'.$req->file->getClientOriginalName();
        $filePath = $req->file('file')->move("assets/document/OSP/", $fileName);

        $fileModel->osp_name = time()."_".$file->getClientOriginalName();
        $fileModel->osp_path = $filePath;
        
        // isp
        $fileisp = $req->file('isp_path');
        $fileNameisp = time().'_'.$req->file->getClientOriginalName();
        $filePathisp = $req->file('isp_path')->move("assets/document/ISP/", $fileNameisp);

        $fileModel->isp_name = time()."_".$fileisp->getClientOriginalName();
        $fileModel->isp_path = $filePathisp;

        // BAI 
        $filelain = $req->file('lain_path');
        $fileNamelain = time().'_'.$req->file->getClientOriginalName();
        $filePathlain = $req->file('lain_path')->move("assets/document/Lain-lain/", $fileNamelain);

        $fileModel->lain_name = time()."_".$filelain->getClientOriginalName();
        $fileModel->lain_path = $filePathlain;    


        $fileModel->save();

        return redirect('/data')->with('sukses','Data Tescom Berhasil Diupdate');
    }
}
