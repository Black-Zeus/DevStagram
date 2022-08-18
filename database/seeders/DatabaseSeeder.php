<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\Comentario;
use Illuminate\Database\Seeder;
use Database\Factories\PostFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Ejecucion de Seeders
        $this->call([
            UserSeeder::class,
            PostSeeder::class,
        ]);

        //Ejecucion de Factoris
        Post::factory()->count(25)->create();
        Comentario::factory()->count(10)->create();
    }
}
