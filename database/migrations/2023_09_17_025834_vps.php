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
        Schema::create('vps', function (Blueprint $table) {
            $table->Increments('id_vps');
            $table->Integer('id_data_center');
            $table->String('nama_vps');
            $table->String('prosesor');
            $table->String('sistem_operasi');
            $table->Integer('hard_disk');
            $table->Integer('ram');
            $table->String('ip_address');
            $table->boolean('ssh');
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
