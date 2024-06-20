<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToJournalBoardMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('journal_board_members', function (Blueprint $table) {
            $table->string('google_scholar')->nullable()->after('journal_id');
            $table->string('scopus')->nullable()->after('google_scholar');
            $table->string('orcid')->nullable()->after('scopus');
            $table->string('email')->nullable()->after('name');
            // Add more columns as needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('journal_board_members', function (Blueprint $table) {
            $table->dropColumn('google_scholar');
            $table->dropColumn('scopus');
            $table->dropColumn('orcid');
            $table->dropColumn('email');
            // Drop additional columns if needed
        });
    }
}
