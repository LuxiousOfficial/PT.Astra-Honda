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
        Schema::create('karirs', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('jabatan');
            $table->string('jeniskelamin');
            $table->string('pendidikan');
            $table->string('pengalaman');
            $table->string('keahlian');
            $table->string('kerjasama');
            $table->string('vaksin');
            $table->string('lokasi');
            $table->string('link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karirs');
    }
};
