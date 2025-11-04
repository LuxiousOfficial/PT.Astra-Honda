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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(
                table: 'users', 
                indexName: 'experiences_user_id'
            )->onDelete('cascade');
            $table->string('company');
            $table->string('position');
            $table->string('entry_year');
            $table->string('year_stopped');
            $table->string('salary');
            $table->string('industry');
            $table->string('facility');
            $table->text('reason_to_stop');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
