<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Kyslik\ColumnSortable\Sortable;

class Data extends Model
{

    public $timestamps = false;
    use HasFactory;
    use Sortable;
    protected $table = 'data';

    protected $fillable = [
        'p_aktivasi_node_id',
        'a_request_id',
        'c_name',
        'bandwidth',
        'status',
        'service_id',
        'io_number',
        'address',
        'create_on',
        'bai_date',
        'total_duration',
        'week_pa_diterima',
        'week_pa_close',
        'tahun_pa',
        'tahun_pa_close',
        'lokasi',
        'kelurahan',
        'kecamatan',
        'klasifikasi_pa',
        'mitra_feeder',
        'mitra',
        'status_pa',
        'status_pa_open',
        'keterangan',
        'fat',
        'port_fat',
        'koordinat',
        'sn_ont',
        'olt',
        'port_olt',
        'reservasi_ont',
        'type_ont',
        'add_on_tv',
        'status1',
        'sn_stb',
        'aging',
        'rab',
        'survey_name',
        'survey_path',
        'tescom_name',
        'tescom_path',
        'bai_name',
        'bai_path',
        'bakl_name',
        'bakl_path',
        'osp_name',
        'osp_path',
        'isp_name',
        'isp_path',
        'lain_name',
        'lain_path',
        'final_aging',
    ];

    public $sortable = [
        'p_aktivasi_node_id',
        'a_request_id',
        'c_name',
        'bandwidth',
        'status',
        'service_id',
        'io_number',
        'address',
        'create_on',
        'bai_date',
        'total_duration',
        'week_pa_diterima',
        'week_pa_close',
        'tahun_pa',
        'tahun_pa_close',
        'lokasi',
        'kelurahan',
        'kecamatan',
        'klasifikasi_pa',       
        'mitra_feeder',
        'mitra',
        'status_pa',
        'status_pa_open',
        'keterangan',
        'fat',
        'port_fat',
        'koordinat',
        'sn_ont',
        'olt',
        'port_olt',
        'reservasi_ont',
        'type_ont',
        'add_on_tv',
        'status1',
        'sn_stb',
        'aging',
        'rab',
        'survey_name',
        'survey_path',
        'tescom_name',
        'tescom_path',
        'bai_name',
        'bai_path',
        'bakl_name',
        'bakl_path',
        'osp_name',
        'osp_path',
        'isp_name',
        'isp_path',
        'lain_name',
        'lain_path',
        'final_aging',
    ];



}
