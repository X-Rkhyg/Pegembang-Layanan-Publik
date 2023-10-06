<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proses_formulir', function (Blueprint $table) {
            $table->Increments('id_proses_formulir');
            $table->Integer('id_colocation_server');
            $table->Integer('id_pengajuan_server');
            $table->Integer('id_akses_fisik_data_center');
            $table->Integer('id_vps_baru');
            $table->Integer('id_vps_perubahan');
            $table->Integer('id_sertif_elektronik_single');
            $table->Integer('id_sertif_elektronik_multi');
            $table->Integer('id_user');
            $table->String('status');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
