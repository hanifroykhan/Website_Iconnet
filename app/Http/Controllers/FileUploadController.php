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








//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         return view('file_upload');
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {

//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */

//     public function store(Request $request)
//         {
//            $this->validate($request,[
//             'file'=>'file|mimes:csv,txt,xlx,xls,pdf|max:2048'
//         ]);
//         $document = $request->file('file');
//         $name_docs = $request->file('file')->getClientOriginalName();

      

//         Telegram::sendDocument([
//             'chat_id' => env('TELEGRAM_CHANNEL_ID','-1001547156093'),
//             'document'=>InputFile::createFromContents(file_get_contents($document->getRealPath()), $name_docs . '.' . $document->getClientOriginalExtension())

//         ]);
//         return redirect()->back();
//         }


//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }

//     // public function updatedActivity(Telegram $telegram)
//     // {
//     //     $activity = $telegram::getUpdates();
//     //     dd($activity);
//     // }
}
