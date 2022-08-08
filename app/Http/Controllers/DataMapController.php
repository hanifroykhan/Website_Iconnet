<?php

namespace App\Http\Controllers;

use App\Models\Odp;
use App\Imports\Maps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class DataMapController extends Controller
{
    // public function importmap(Request $req)
    // {
    //     $this->validate($req,['file'=>'required']);
    //     $path = $req->file;
    //     excel::import(new Maps,$path);
    //     return redirect('/datamap');
    // }
}