<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name' => 'Eduardo',
            'email' => 'eduardo@example.com',
            'password' => '12345678',
        ]);

        User::query()->create([
            'name' => 'Zé',
            'email' => 'ze@example.com',
            'password' => '12345678',
        ]);
    }
}
