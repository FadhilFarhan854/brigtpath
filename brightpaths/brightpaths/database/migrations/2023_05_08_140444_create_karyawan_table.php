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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('password');
            $table->string('confirm_password');
            $table->string('jenis_kelamin');
            $table->string('email');
            $table->string('no_telephone');
            $table->string('adress');
            $table->string('kode_pos');
            $table->string('status')->default("available");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
