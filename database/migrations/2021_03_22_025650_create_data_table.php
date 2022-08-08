<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('p_aktivasi_node_id');
            $table->string('a_request_id');
            $table->string('c_name');
            $table->string('bandwidth');
            $table->string('status');
            $table->string('service_id');
            $table->string('io_number');
            $table->string('address');
            $table->string('create_on');
            $table->string('bai_date');
            $table->string('total_duration');
            $table->string('week_pa_diterima');
            $table->string('week_pa_close');
            $table->string('tahun_pa');
            $table->string('tahun_pa_close');
            $table->string('lokasi');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('klasifikasi_pa');
            $table->string('mitra_feeder');
            $table->string('mitra');
            $table->string('status_pa');
            $table->string('status_pa_open');
            $table->string('keterangan');
            $table->string('fat');
            $table->string('port_fat');
            $table->string('koordinat');
            $table->string('sn_ont');
            $table->string('olt');
            $table->string('port_olt');
            $table->string('reservasi_ont');
            $table->string('type_ont');
            $table->string('add_on_tv');
            $table->string('status1');
            $table->string('sn_stb');
            $table->string('aging');
            $table->string('rab');
            $table->string('survey_name')->nullable;
            $table->string('survey_path')->nullable;
            $table->string('tescom_name')->nullable;
            $table->string('tescom_path')->nullable;
            $table->string('bai_name')->nullable;
            $table->string('bai_path')->nullable;
            $table->string('bakl_name')->nullable;
            $table->string('bakl_path')->nullable;
            $table->string('osp_name')->nullable;
            $table->string('osp_path')->nullable;
            $table->string('isp_name')->nullable;
            $table->string('isp_path')->nullable;
            $table->string('lain_name')->nullable;
            $table->string('lain_path')->nullable;
            $table->string('need_sc');
            $table->string('reason1');
            $table->string('aging_after_sc');
            $table->string('start_date1');
            $table->string('end_date1');
            $table->string('sc_spkk');
            $table->string('final_aging');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
