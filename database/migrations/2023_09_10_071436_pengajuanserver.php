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
        Schema::create('pengajuan_server', function (Blueprint $table) {
            $table->Increments('id_pengajuan_server');
            $table->Integer('id_layanan');
            $table->String('nomor');
            $table->String('sifat');
            $table->String('lampiran');
            $table->String('perihal');
            $table->String('nama_instansi');
            $table->String('keperluan');
            $table->String('tujuan');
            $table->String('nama');
            $table->String('no_telp');
            $table->String('nama_ttd');
            $table->String('nip_ttd');
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
