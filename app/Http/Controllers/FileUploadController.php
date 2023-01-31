<?php

namespace App\Http\Controllers;

use App\Models\file_upload;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class FileUploadController extends Controller
{
    public function index(){
        return view('file_upload');
      }

    public function fileUpload(Request $req){
        $req->validate([
        'file' => 'required|mimes:jpg,jpeg,png,pdf|max:2048'
        ]);

        $fileModel = new file_upload();

        if($req->file()) {
            // dd($req);
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
   }







}
