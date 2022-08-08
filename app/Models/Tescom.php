<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tescom extends Model
{

    public $timestamps = false;
    use HasFactory;
    protected $table = 'data';

    protected $fillable = [
        'p_aktivasi_node_id',
        'tescom_name',
        'tescom_path',
        'bai_name',
        'bai_path',
        'bakl_name',
        'bakl_path'

    ];



}
