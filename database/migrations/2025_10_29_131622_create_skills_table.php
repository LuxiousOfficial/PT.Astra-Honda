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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(
                table: 'users', 
                indexName: 'skills_user_id'
            )->onDelete('cascade');
            $table->string('first_skill');
            $table->string('first_rate');
            $table->string('second_skill');
            $table->string('second_rate');
            $table->string('third_skill');
            $table->string('third_rate');
            $table->string('fourth_skill');
            $table->string('fourth_rate');
            $table->string('fifth_skill');
            $table->string('fifth_rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
