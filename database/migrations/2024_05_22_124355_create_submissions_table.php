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
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->string('menuscript_id')->unique();
            $table->string('title');
            $table->text('abstract');
            $table->string('journal');
            $table->string('manuscript_name');
            $table->string('manuscript_path');
            $table->string('cover_letter_name');
            $table->string('cover_letter_path');
            $table->string('author_message')->nullable();
            $table->string('reviewer_message')->nullable();
            $table->integer('status')->default(0); // 0 - submitted , 1 - Approved , 3 - Rejected
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};
