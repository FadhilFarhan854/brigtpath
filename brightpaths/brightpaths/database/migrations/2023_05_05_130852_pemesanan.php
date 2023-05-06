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
        Schema::create('Pemesanan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_lengkap');
            $table->string('nomor_hp');
            $table->string('Lokasi');
            $table->string('service_detail');
            $table->string('Catatan');
            $table->string('pembayaran');
            
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
