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
        Schema::create('pemesanan_admin', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_lengkap');
            $table->string('nomor_hp');
            $table->string('Lokasi');
            $table->string('service_detail');
            $table->string('Catatan');
            $table->string('pembayaran');
            $table->bigInteger('id_user') -> nullable();
            $table->string('status_pesanan') ->nullable();
            $table->integer('id_karyawan') ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan__admin');
    }
};
