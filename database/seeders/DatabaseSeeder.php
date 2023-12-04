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

        // Created multi videos
        \App\Models\Video::factory()->create([
            'title' => 'Curso de Secretaria Escolar ',
            'slug' => 'cillum-picanha-adipisicing-beef',
            'description' => 'Curso de Secretaria Escolar',
            'url' => 'https://www.youtube.com/embed/tyOysfVac20?si=_gFYjXL-dJxdKIXc',
            'user_id' => 1,
        ]);

        \App\Models\Video::factory()->create([
            'title' => 'O Papel da Escola',
            'slug' => 'o-papel-da-escola',
            'description' => 'O Papel da Escola',
            'url' => 'https://www.youtube.com/embed/ZQ3WciCeAR0?si=hVOeng3qhXSeeW73',
            'user_id' => 1,
        ]);

        \App\Models\Video::factory()->create([
            'title' => 'CURSO SECRETARIA ESCOLAR',
            'slug' => 'curso-secretaria-escolar',
            'description' => 'CURSO SECRETARIA ESCOLAR ',
            'url' => 'https://www.youtube.com/embed/pl2poFzP8v0?si=Mf9jvSgOhF99yefb',
            'user_id' => 1,
        ]);
    }
}
