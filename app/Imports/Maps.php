<?php

namespace App\Imports;

use App\Models\Odp;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;

class Maps implements ToCollection, WithCalculatedFormulas
{
    /**
    * @param Collection $collection
    */

    public function collection(Collection $collection)
    {
        foreach($collection as $key => $row){
            if ($key > 0){

          
        DB::table('odp')->insert([
            'BASE'=>$row[0],
            'ZONA'=>$row[1],
            'CEK'=>$row[2],
            'Area'=>$row[3],        
            'NAMA_ODP'=>$row[4],    
            'New_LabelODP'=>$row[5],
            'Type_ODP'=>$row[6],
            'Tikor_ODP'=>$row[7],
            'Nama_OLT'=>$row[8],
            'Type_OLT'=>$row[9],
            'Port'=>$row[10],
            'Tanggal_Instal'=>$row[11],
            'Year'=>$row[12],
            'Month'=>$row[13],
            'Week'=>$row[14],
            'Nama_Cluster'=>$row[15],
            'Idle'=>$row[16],
            'Home_Connected'=>$row[17],
            'Capacity'=>$row[18],
            'Utilisasi'=>$row[19],
            'Utilisasi_fat'=>$row[20],
            'Status_fat'=>$row[21],
            'Keterangan'=>$row[22],
            'Asal_OLT'=>$row[23],
            'Pic_Sales'=>$row[24],
            'Aging_cluster'=>$row[25],
        ]);
    }
}
session()->flash('Sukses',"Selamat Data Berhasil Di Import");
}


}
