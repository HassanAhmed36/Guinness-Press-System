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
        Schema::create('article_details', function (Blueprint $table) {
            $table->id();
            $table->longText('abstract');
            $table->longText('references');
            $table->longText('extra_meta_tag');
            $table->json('authors');
            $table->json('affiliations');
            $table->foreignId('article_id')->constrained('articles')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_details');
    }
};
