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
        Schema::create('initial_feed_backs', function (Blueprint $table) {
            $table->id();
            $table->boolean('initial_status')->default(true);
            $table->longText('feedback_message');
            $table->foreignId('submission_file_id')->constrained('submission_files')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('initial_feed_backs');
    }
};
