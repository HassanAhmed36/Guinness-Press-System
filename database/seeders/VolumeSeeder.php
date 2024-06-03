<?php

namespace Database\Seeders;

use App\Models\JournalVolume;
use Illuminate\Database\Seeder;

class VolumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JournalVolume::insert([
            [
                'name' => '1',
                'journal_id' => 1,
                'is_active' => true,
                'created_at' => '2023-1-1 00:00:00',
            ],
            [
                'name' => '2',
                'journal_id' => 1,
                'is_active' => true,
                'created_at' => '2024-1-1 00:00:00',
            ],
            [
                'name' => '1',
                'journal_id' => 2,
                'is_active' => true,
                'created_at' => '2023-1-1 00:00:00',
            ],
            [
                'name' => '2',
                'journal_id' => 2,
                'is_active' => true,
                'created_at' => '2024-1-1 00:00:00',
            ],
            [
                'name' => '1',
                'journal_id' => 3,
                'is_active' => true,
                'created_at' => '2023-1-1 00:00:00',
            ],
            [
                'name' => '2',
                'journal_id' => 3,
                'is_active' => true,
                'created_at' => '2024-1-1 00:00:00',
            ],
            [
                'name' => '1',
                'journal_id' => 4,
                'is_active' => true,
                'created_at' => '2023-1-1 00:00:00',
            ],
            [
                'name' => '2',
                'journal_id' => 4,
                'is_active' => true,
                'created_at' => '2024-1-1 00:00:00',
            ],
            [
                'name' => '1',
                'journal_id' => 5,
                'is_active' => true,
                'created_at' => '2023-1-1 00:00:00',
            ],
            [
                'name' => '2',
                'journal_id' => 5,
                'is_active' => true,
                'created_at' => '2024-1-1 00:00:00',
            ],
            [
                'name' => '1',
                'journal_id' => 6,
                'is_active' => true,
                'created_at' => '2023-1-1 00:00:00',
            ],
            [
                'name' => '2',
                'journal_id' => 6,
                'is_active' => true,
                'created_at' => '2024-1-1 00:00:00',
            ],
            [
                'name' => '1',
                'journal_id' => 7,
                'is_active' => true,
                'created_at' => '2023-1-1 00:00:00',
            ],
            [
                'name' => '1',
                'journal_id' => 9,
                'is_active' => true,
                'created_at' => '2024-1-1 00:00:00',
            ],
        ]);
    }
}