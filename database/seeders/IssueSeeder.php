<?php

namespace Database\Seeders;

use App\Models\VolumeIssue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1- jblm v1 -1 --
        //1- jblm v2 -2 --
        //2- CLI v1- 3 --
        //2- CLI v2- 4 --
        // 3- SEER v1- 5
        // 3- SEER v2- 6
        // 4- CIE v1- 7
        // 4- CIE v2- 8
        // 5- JBLM v1- 9
        // 5- JBLM v2-10
        // 6- RER v1-11
        // 6- RER v2-12
        // 7- PB v1-13
        // 8- SFE v1-14

        VolumeIssue::insert([
            [
                'name' => '1',
                'volume_id' => '1',
                'issue_id' => '1001',
                'journal_id' => '1',
                'is_active' => true,
            ], [
                'name' => '2',
                'volume_id' => '1',
                'issue_id' => '1002',
                'journal_id' => '1',
                'is_active' => true,
            ], [
                'name' => '1',
                'volume_id' => '2',
                'issue_id' => '2001',
                'journal_id' => '1',
                'is_active' => true,
            ], [
                'name' => '1',
                'volume_id' => '3',
                'issue_id' => '1001',
                'journal_id' => '2',
                'is_active' => true,
            ], [
                'name' => '2',
                'volume_id' => '3',
                'issue_id' => '1002',
                'journal_id' => '2',
                'is_active' => true,
            ],
            [
                'name' => '1',
                'volume_id' => '4',
                'issue_id' => '2001',
                'journal_id' => '2',
                'is_active' => true,
            ],
            [
                'name' => '1',
                'volume_id' => '6',
                'issue_id' => '2001',
                'journal_id' => '3',
                'is_active' => true,
            ],
            [
                'name' => '1',
                'volume_id' => '5',
                'issue_id' => '1001',
                'journal_id' => '3',
                'is_active' => true,
            ],
            [
                'name' => '1',
                'volume_id' => '7',
                'issue_id' => '1001',
                'journal_id' => '4',
                'is_active' => true,
            ],
            [
                'name' => '2',
                'volume_id' => '8',
                'issue_id' => '2001',
                'journal_id' => '4',
                'is_active' => true,
            ],
            [
                'name' => '1',
                'volume_id' => '9',
                'issue_id' => '1001',
                'journal_id' => '5',
                'is_active' => true,
            ],
            [
                'name' => '2',
                'volume_id' => '9',
                'issue_id' => '1002',
                'journal_id' => '5',
                'is_active' => true,
            ],
            [
                'name' => '1',
                'volume_id' => '10',
                'issue_id' => '2001',
                'journal_id' => '5',
                'is_active' => true,
            ],
            [
                'name' => '1',
                'volume_id' => '11',
                'issue_id' => '1001',
                'journal_id' => '6',
                'is_active' => true,
            ],
            [
                'name' => '2',
                'volume_id' => '11',
                'issue_id' => '1002',
                'journal_id' => '6',
                'is_active' => true,
            ],
            [
                'name' => '1',
                'volume_id' => '12',
                'issue_id' => '2001',
                'journal_id' => '6',
                'is_active' => true,
            ],
            [
                'name' => '1',
                'volume_id' => '13',
                'issue_id' => '1001',
                'journal_id' => '7',
                'is_active' => true,
            ],
            [
                'name' => '1',
                'volume_id' => '14',
                'issue_id' => '1001',
                'journal_id' => '8',
                'is_active' => true,
            ],
        ]);
    }
}