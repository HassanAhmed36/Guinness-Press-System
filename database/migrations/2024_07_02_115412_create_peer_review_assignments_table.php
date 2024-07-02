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
        Schema::create('peer_review_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('journal_board_member_id')->nullable()->constrained('journal_board_members')->onDelete('cascade');
            $table->foreignId('submission_file_id')->constrained('submission_files')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('status')->default(0); // 0 - pending, 1 - approved, 2 - rejected
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peer_review_assignments');
    }
};
