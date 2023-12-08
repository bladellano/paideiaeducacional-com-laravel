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
            'show_title' => '1',
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

        // Created multi pages
        \App\Models\Page::factory()->create([ //1
            'title' => 'ASSESSORIA E CONSULTORIA EM PROJETOS EDUCACIONAIS E EMPRESARIAIS',
            'slug' => 'assessoria-e-consultoria-em-projetos-educacionais-e-empresariais',
            'description' => '<p>
            A Paideia Educacional é uma empresa de assessoria e consultoria na área de educação e
            empresarial formada por profissionais renomados na área, que atuaram no ensino superior,
            escolas na educação básica, profissionalizantes, técnicas, realizações de eventos
            educacionais e empresarias há mais de 15 anos, tendo exercido neste período diversas
            atividades e ocupando postos nas Instituições de Ensino, colhendo resultados positivos nos
            trabalhos realizados.
            </p>',
            'user_id' => 1,
        ]);

        \App\Models\Page::factory()->create([ //2
            'title' => 'SEJA BEM-VINDO AO CANAL DA PAIDEIA EDUCACIONAL',
            'slug' => 'seja-bem-vindo-ao-canal-da-paideia-educacional',
            'description' => '<p>Uma fonte inesgotável de aprendizado e descobertas educacionais! Na Paideia, acreditamos no poder transformador da educação e estamos comprometidos em oferecer conteúdos de qualidade que inspiram, ensinam e impulsionam o desenvolvimento intelectual.</p>
            <p>Em nosso canal no <a href="https://www.youtube.com/@paideiaeducacional6957" target="_blank">YouTube</a>, você encontrará uma extensa coleção de vídeos cuidadosamente elaborados por nossos educadores apaixonados. Desde aulas envolventes até dicas de estudo, passando por projetos educativos e eventos especiais, nosso objetivo é proporcionar uma experiência educacional única e acessível a todos.</p>',
            'user_id' => 1,
        ]);
    }
}
