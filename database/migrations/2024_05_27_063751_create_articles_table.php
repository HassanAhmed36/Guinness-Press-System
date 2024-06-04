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
            $table->string('title');
            $table->string('page');
            $table->string('published_date');
            $table->string('doi');
            $table->integer('views_count');
            $table->integer('download_count');
            $table->boolean('is_active');
            $table->string('file');
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
