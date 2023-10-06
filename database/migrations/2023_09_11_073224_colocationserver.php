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
        Schema::create('colocation_server', function (Blueprint $table) {
            $table->increments('id_colocation_server');
            $table->Integer('id_layanan');
            $table->String('no_formulir');
            $table->String('nama_instansi_perusahaan');
            $table->String('nama_penanggung_jawab');
            $table->String('nip');
            $table->String('no_telp');
            $table->String('jenis_server');
            $table->date('tanggal_masuk');
            $table->String('alamat_ip');
            $table->String('posisi_server');
            $table->String('nama_penyetuju');
            $table->String('nip_penyetuju');
            $table->String('jabatan_penyetuju');
            $table->String('nama_pemohon');
            $table->String('nip_pemohon');
            $table->String('jabatan_pemohon');
            $table->jsonb('formulir_pernagkat_colocation');
            $table->jsonb('formulir_hak_akses_server');
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
