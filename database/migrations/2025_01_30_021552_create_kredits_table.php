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
        Schema::create('kredits', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('nohp');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('dp');
            $table->string('jumlahtenor');
            $table->string('varianmotor');
            $table->string('rencanapembelian');
            $table->text('pesan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kredits');
    }
};
