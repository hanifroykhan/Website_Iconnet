<?php

namespace App\Http\Controllers;
use App\Models\Data;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
    


    public function surveyView($id)
    {
        $data = Survey::where('id', '=', $id)->get();
        return view('tampil', ['data' => $data]);
    }

    

    public function updateSurvey(Request $req,$id)
    {
        

    
        $fileModel = Survey::findOrFail($id);

      
        $file = $req->file('file');
        $fileName = time().'_'.$req->file->getClientOriginalName();
        $filePath = $req->file('file')->move("assets/document/Survey/", $fileName);

        $fileModel->survey_name = time()."_".$file->getClientOriginalName();
        $fileModel->survey_path = $filePath;
        $fileModel->rab = $req->rab;
        $fileModel->save();
      

        return redirect('/data')->with('sukses','Data Survey Berhasil Diupdate');
        
    }
}