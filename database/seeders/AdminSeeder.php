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
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 1,
            'is_active' => true,
        ]);

        UserBasicInfo::create([
            'name' => 'Admin',
            'surname' => 'User',
            'affiliation' => 'Admin Affiliation',
            'country' => 'Admin Country',
            'announcement_notify' => true,
            'primary_author' => true,
            'user_id' => $user->id,
        ]);


        $user2 = User::create([
            'email' => 'hassanahmed3652@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 3,
            'is_active' => true,
        ]);

        UserBasicInfo::create([
            'name' => 'Hassan',
            'surname' => 'Ahmed',
            'affiliation' => 'New  Affiliation',
            'country' => 'new Country',
            'announcement_notify' => true,
            'primary_author' => true,
            'user_id' => $user2->id,
        ]);
    }
}
