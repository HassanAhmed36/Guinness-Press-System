<?php

namespace Database\Seeders;

use App\Models\JournalBoardMember;
use App\Models\Role;
use App\Models\User;
use App\Models\VolumeIssue;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PHPUnit\Runner\Baseline\Issue;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdminSeeder::class);
        $this->call(JournalSeeder::class);
        $this->call(VolumeSeeder::class);
        $this->call(IssueSeeder::class);
        $this->call(EditorialBoardMemberSeeder::class);
        $this->call(IndexBodySeeder::class);
    }
}
