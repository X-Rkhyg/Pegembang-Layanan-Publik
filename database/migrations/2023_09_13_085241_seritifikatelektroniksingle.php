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
        Schema::create('sertifikat_elektronik_single', function (Blueprint $table) {
            $table->increments('id_sertif_elektronik_single');
            $table->Integer('id_layanan');
            $table->String('nomor');
            $table->String('nama_lengkap');
            $table->String('nip');
            $table->String('pangkat_gol');
            $table->String('jabatan');
            $table->String('nama_lengkap_rekomendasi');
            $table->String('nip_rekomendasi');
            $table->String('nik_rekomendasi');
            $table->String('pangkat_gol_rekomendasi');
            $table->String('jabatan_rekomendasi');
            $table->String('instansi_rekomendasi');
            $table->String('unit_kerja_rekomendasi');
            $table->String('alamat_email_rekomendasi');
            $table->String('tempat_tinggal');
            $table->String('instansi');
            $table->String('provinsi');
            $table->Binary('ttd_pemohon');
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
