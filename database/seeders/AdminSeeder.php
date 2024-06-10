<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\UserBasicInfo;
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
            ['name' => 'Administrator'], //
            ['name' => 'Editorial Board Member'],
            ['name' => 'Author'],
        ]);

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 1,
            'remember_token' => Str::random(10),
            'phone_number' => '123465789',
            'country' => 'USA',
            'is_active' => true
        ]);

    }
}
