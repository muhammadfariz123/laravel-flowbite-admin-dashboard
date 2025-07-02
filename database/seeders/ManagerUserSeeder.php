<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ManagerUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'Manajer Gudang',
            'email'    => 'manager@example.com',
            'password' => Hash::make('password'), // login pakai: password
            'role'     => 'Manajer Gudang',
        ]);
    }
}
