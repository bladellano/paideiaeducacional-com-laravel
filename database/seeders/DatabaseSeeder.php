<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
        // Created at user
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'bladellano@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
