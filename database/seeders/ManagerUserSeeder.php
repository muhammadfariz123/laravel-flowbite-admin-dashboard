<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ManagerUserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'manager@example.com'],
            [
                'name' => 'Manajer Gudang',
                'password' => Hash::make('password'),
                'role' => 'Manajer Gudang',
            ]
        );

    }
}
