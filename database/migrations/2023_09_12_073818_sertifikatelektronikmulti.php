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
        Schema::create('sertifikatelmultis', function (Blueprint $table) {
            $table->id();
            $table->Integer('id_layanan');
            $table->String('nomor');
            $table->String('nama_lengkap');
            $table->String('nip');
            $table->String('pangkat_gol');
            $table->String('jabatan');
            $table->String('instansi');
            $table->String('unit_kerja');
            $table->String('alamat_email');
            $table->String('tempat_tinggal');
            $table->String('provinsi');
            $table->Binary('ttd_pemohon');
            $table->jsonb('daftar_rekomendasi');
            $table->timestamps();
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
