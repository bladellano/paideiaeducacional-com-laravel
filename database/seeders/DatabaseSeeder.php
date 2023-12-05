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

        \App\Models\Video::factory()->create([
            'title' => 'Entrevista Pimpolinho',
            'slug' => 'entrevista-pimpolinho',
            'description' => 'Entrevista Pimpolinho',
            'url' => 'https://www.youtube.com/embed/sYqu77wz_To?si=iJN75ENE75FI7dLc',
            'user_id' => 1,
        ]);

        // Created multi banners
        \App\Models\Banner::factory()->create([
            'title' => 'Primeiro Banner',
            'slug' => 'primeiro-banner',
            'description' => 'Biltong pastrami buffalo, ribeye pork chop shank corned beef pancetta aliquip meatloaf',
            'image' => 'images/banners/banner-01.jpg',
            'user_id' => 1,
        ]);

        \App\Models\Banner::factory()->create([
            'title' => 'Segundo Banner',
            'slug' => 'segundo-banner',
            'description' => 'Beef commodo est, shoulder elit frankfurter cupim nisi ipsum laboris strip steak pastrami consequat',
            'image' => 'images/banners/banner-02.jpg',
            'user_id' => 1,
        ]);

        // Created multi events
        \App\Models\Event::factory()->create([
            'title' => 'Vendas Poderoas Kotaro Tuji - Santarém',
            'slug' => 'vendas-poderosas-kotaro-tuji-santarem',
            'description' => 'Biltong pastrami buffalo, ribeye pork chop shank corned beef pancetta aliquip meatloaf',
            'event_date' => '2020-12-10',
            'image' => 'images/events/evento-02.jpg',
            'user_id' => 1,
        ]);

        \App\Models\Event::factory()->create([
            'title' => 'Workshop - Conversando sobre a BNCC',
            'slug' => 'workshop-conversando-sobre-a-bncc',
            'description' => 'Pastrami buffalo, ribeye pork chop shank corned beef pancetta aliquip meatloaf',
            'event_date' => '2020-12-15',
            'image' => 'images/events/evento-03.jpg',
            'user_id' => 1,
        ]);

        \App\Models\Event::factory()->create([
            'title' => 'XVII Semana da Pedagogica',
            'slug' => 'xvii-semana-da-pedagogica',
            'description' => 'Buffalo, ribeye pork chop shank corned beef pancetta aliquip meatloaf',
            'event_date' => '2020-12-15',
            'image' => 'images/events/evento-04.jpg',
            'user_id' => 1,
        ]);

        \App\Models\Event::factory()->create([
            'title' => 'Jornada pedagógica nas escolas',
            'slug' => 'jornada-pedagogica-nas-escolas',
            'description' => 'Pork chop shank corned beef pancetta aliquip meatloaf',
            'event_date' => '2020-12-15',
            'image' => 'images/events/evento-01.jpg',
            'user_id' => 1,
        ]);
    }
}
