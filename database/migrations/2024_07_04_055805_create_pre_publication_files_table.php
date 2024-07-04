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
        Schema::create('pre_publication_files', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->foreignId('submission_id')->constrained('submissions')->cascadeOnDelete();
            $table->integer('status')->default(0); // 0-pending, 1-Approved, 2-Reject
            $table->longText('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pre_publication_files');
    }
};
