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
        Schema::create('vps_perubahan', function (Blueprint $table) {
            $table->increments('id_vps_perubahan');
            $table->Integer('id_layanan');
            $table->String('nama_pemohon');
            $table->String('instansi');
            $table->String('nip');
            $table->String('tujuan_pembuatan_vps');
            $table->String('prosesor');
            $table->String('sistem_operasi');
            $table->String('hard_disk');
            $table->Integer('ram');
            $table->String('ip_address');
            $table->String('ssh');
            $table->String('remote_desktop');
            $table->String('nama_penyetuju');
            $table->String('nip_penyetuju');
            $table->String('jabatan_penyetuju');
            $table->String('nip_pemohon');
            $table->String('jabatan_pemohon');
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
