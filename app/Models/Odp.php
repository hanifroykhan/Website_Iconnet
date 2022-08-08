<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odp extends Model
{
    use HasFactory;
    protected $table='odp';
    protected $guarded=[];

    protected $fillable = [
        'Nama_ODP',
        'New_labelODP',
        'Tikor_ODP',
        'Base',
        'Zona',
        'Cek',
        'Area',
        'Type_ODP',
        'Nama_OLT',
        'Type_OLT',
        'Port',
        'Tanggal_Instal',
        'Year',
        'Month',
        'Week',
        'Nama_Cluster',
        'Idle',
        'Home_Connected',
        'Capacity',
        'Utilisasi',
        'Utilisasi_fat',
        'Status_fat',
        'Keterangan',
        'Pic_sales',
        'Aging_cluster',
    ];
}
