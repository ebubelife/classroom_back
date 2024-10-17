<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin_users')->insert([
            'name' => 'Super Admin',
            'username' => 'admin',
            'password' => Hash::make('minister'), // Use a secure password here
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
