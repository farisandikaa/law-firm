<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Jalankan seeder.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'josh@gmail.com'],
            [
                'name' => 'Josh',
                'password' => Hash::make('naninuneno'),
            ]
        );
    }
}
