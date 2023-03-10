<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPI extends Model
{
    protected $table='ppi_table';
    protected $fillable=['ppi','spa','target_tes','data_lengkap','id_data','nama_mitra','email_mitra','kontak'];
    use HasFactory;
}
