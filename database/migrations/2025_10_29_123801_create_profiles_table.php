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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(
                table: 'users', 
                indexName: 'profiles_user_id'
        )->onDelete('cascade');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('nik')->unique();
            $table->string('gender');
            $table->string('place_of_birth');
            $table->string('date_of_birth');
            $table->string('address');
            $table->string('phone_number');
            $table->string('religion');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
