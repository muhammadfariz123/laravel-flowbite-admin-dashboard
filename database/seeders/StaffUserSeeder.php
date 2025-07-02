<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StaffUserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'staff@example.com'],
            [
                'name' => 'Staff Gudang',
                'password' => Hash::make('password'),
                'role' => 'Staff Gudang',
            ]
        );
    }
}
