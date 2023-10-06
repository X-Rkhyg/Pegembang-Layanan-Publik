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
        Schema::create('akses_fisik_data_center', function (Blueprint $table) {
            $table->increments('id_akses_fisik_data_center');
            $table->date('tanggal');
            $table->time('jam');
            $table->boolean('server_software_maintenance');
            $table->boolean('server_hardware_maintenance');
            $table->boolean('hanya_berkunjung');
            $table->boolean('server_ip');
            $table->boolean('penyelesaian_masalah');
            $table->boolean('server_hostname');
            $table->String('nama_penyetuju');
            $table->String('nip_penyetuju');
            $table->String('jabatan_penyetuju');
            $table->String('nama_penanggung_jawab');
            $table->String('nip_penanggung_jawab');
            $table->String('catatan');
            $table->jsonb('daftar_pengunjung');
            $table->jsonb('daftar_hardware_data_center');
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
