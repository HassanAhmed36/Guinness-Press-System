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
        Schema::create('journal_board_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('affliation');
            $table->string('country');
            $table->longText('biography')->nullable();
            $table->foreignId('journal_id')->constrained('journals')->cascadeOnDelete();
            $table->string('google_scholar')->nullable();
            $table->string('scopus')->nullable();
            $table->string('orcid')->nullable();
            $table->string('order_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journal_board_members');
    }
};
