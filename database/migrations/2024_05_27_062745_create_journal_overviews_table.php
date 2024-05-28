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
        Schema::create('journal_overviews', function (Blueprint $table) {
            $table->id();
            $table->longText('manuscript_prepation_guideline');
            $table->longText('aims_and_scope');
            $table->longText('editorial_polices');
            $table->longText('author_guideline');
            $table->longText('role_of_eic');
            $table->longText('role_of_ebm');
            $table->foreignId('journal_id')->constrained('journals')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journal_overviews');
    }
};
