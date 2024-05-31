<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            ['name' => 'Administrator'],
            ['name' => 'Editorial Board Member'],
            ['name' => 'Author'],
        ]);

        User::insert([
            'email' => 'admin@gmail.com',
            'title' => 'Mr.',
            'first_name' => 'Admin',
            'last_name' => '.',
            'current_job_title' => 'Software Developer',
            'department' => 'Engineering',
            'institution' => 'Example Institution',
            'country' => 'UK',
            'contact_number' => '+1234567890',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}