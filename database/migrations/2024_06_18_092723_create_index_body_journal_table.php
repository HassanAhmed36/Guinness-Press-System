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
        Schema::create('index_body_journal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('index_body_id')->constrained('index_bodies')->onDelete('cascade');
            $table->foreignId('journal_id')->constrained('journals')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('index_body_journal');
    }
};
