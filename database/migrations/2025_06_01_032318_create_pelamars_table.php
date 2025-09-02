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
        Schema::create('pelamars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jabatan_id')->constrained(
                table: 'karirs',
                indexName: 'pelamars_jabatan_id'
            );
            $table->string('email')->unique();
            $table->string('nik')->unique();
            $table->string('namalengkap');
            $table->string('tanggallahir');
            $table->string('tempatlahir');
            $table->string('jeniskelamin');
            $table->string('alamat');
            $table->string('agama');
            $table->string('nohp');
            $table->string('pasphoto');
            $table->string('cv');
            $table->string('ijazah');
            $table->string('transkripnilai');
            $table->string('ktp');
            $table->string('kk');
            $table->string('skck');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelamars');
    }
};
