<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToJournalBoardMembersTable extends Migration
{
    public function up()
    {
        Schema::table('journal_board_members', function (Blueprint $table) {
            if (!Schema::hasColumn('journal_board_members', 'google_scholar')) {
                $table->string('google_scholar')->nullable()->after('journal_id');
            }
            if (!Schema::hasColumn('journal_board_members', 'scopus')) {
                $table->string('scopus')->nullable()->after('google_scholar');
            }
            if (!Schema::hasColumn('journal_board_members', 'orcid')) {
                $table->string('orcid')->nullable()->after('scopus');
            }
            if (!Schema::hasColumn('journal_board_members', 'email')) {
                $table->string('email')->nullable()->after('name');
            }
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
            if (Schema::hasColumn('journal_board_members', 'google_scholar')) {
                $table->dropColumn('google_scholar');
            }
            if (Schema::hasColumn('journal_board_members', 'scopus')) {
                $table->dropColumn('scopus');
            }
            if (Schema::hasColumn('journal_board_members', 'orcid')) {
                $table->dropColumn('orcid');
            }
            if (Schema::hasColumn('journal_board_members', 'email')) {
                $table->dropColumn('email');
            }
            // Drop additional columns if needed
        });
    }
}
