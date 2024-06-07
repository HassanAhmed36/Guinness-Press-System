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
        Schema::create('journal_matrices', function (Blueprint $table) {
            $table->id();
            $table->string('acceptance_rate');
            $table->string('submission_to_final_decision');
            $table->string('acceptance_to_publication');
            $table->string('dio_prefix');
            $table->string('publication_type');
            $table->string('publishing_model');
            $table->string('journal_category');
            $table->string('indexing_bodies')->nullable();
            $table->string('acp');
            $table->foreignId('journal_id')->constrained('journals')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journal_matrices');
    }
};
