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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('article_code');
            $table->string('title');
            $table->string('first_page');
            $table->string('last_page');
            $table->string('article_type')->nullable();
            $table->date('recived_date')->nullable();
            $table->date('revised_date')->nullable();  // Corrected from `data` to `date`
            $table->date('accepted_date')->nullable(); // Changed to `date` for consistency
            $table->date('published_date')->nullable(); // Changed to `date` for consistency
            $table->string('dio');
            $table->integer('views_count')->default(0);
            $table->integer('download_count')->default(0);
            $table->boolean('is_active')->default(true);
            $table->string('file_name');
            $table->string('file_path');
            $table->foreignId('issue_id')->constrained('volume_issues')->cascadeOnDelete();
            $table->foreignId('volume_id')->constrained('journal_volumes')->cascadeOnDelete();
            $table->foreignId('journal_id')->constrained('journals')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
