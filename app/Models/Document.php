<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'data';

    protected $fillable = [
        'p_aktivasi_node_id',
        'isp_name',
        'isp_path',
        'osp_name',
        'osp_path',
        'lain_name',
        'lain_path'

    ];
}
