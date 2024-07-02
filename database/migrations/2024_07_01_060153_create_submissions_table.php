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
            $table->string('submission_id')->unique();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('abstract');
            $table->text('references')->nullable();
            $table->integer('current_status'); // Pending, Approved, Rejected
            $table->integer('current_stage'); // Initial QA, APC, Peer Review, Publication
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('journal_id')->constrained('journals')->onDelete('cascade');
            $table->softDeletes();
        });

        Schema::create('submission_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained('submissions')->onDelete('cascade');
            $table->string('file_path');
            $table->string('file_type');
            $table->string('feedback')->nullable();
            $table->integer('status'); // Pending, Approved, Rejected
            $table->integer('stage'); // Initial QA, APC, Peer Review, Publication
            $table->timestamps();
        });

        Schema::create('submission_keywords', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained('submissions')->onDelete('cascade');
            $table->string('keyword');
            $table->timestamps();
        });

        Schema::create('submission_authors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained('submissions')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('orcid');
            $table->string('is_primary_contact')->default(false);
            $table->timestamps();
        });

        Schema::create('submission_status_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained('submissions')->onDelete('cascade');
            $table->integer('status'); // Pending, Approved, Rejected
            $table->integer('stage'); // Initial QA, APC, Peer Review, Publication
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submission_status_history');
        Schema::dropIfExists('submission_authors');
        Schema::dropIfExists('submission_keywords');
        Schema::dropIfExists('submission_files');
        Schema::dropIfExists('submissions');
    }
};
