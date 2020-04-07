<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('ag')->insert([
            'titre' => Str::random(15),
            'image' => "img/premiere.jpg",
            'audio' => Str::random(10).'.mp3',
            'contenu' => Str::random(105),     
        ]);

        DB::table('ag')->insert([
            'titre' => Str::random(15),
            'image' => "img/premiere.jpg",
            'audio' => Str::random(10).'.mp3',
            'contenu' => Str::random(105),     
        ]);

        DB::table('ag')->insert([
            'titre' => Str::random(15),
            'image' => "img/premiere.jpg",
            'audio' => Str::random(10).'.mp3',
            'contenu' => Str::random(105),     
        ]);

        DB::table('ag')->insert([
            'titre' => Str::random(15),
            'image' => "img/premiere.jpg",
            'audio' => Str::random(10).'.mp3',
            'contenu' => Str::random(105),     
        ]);

        DB::table('ag')->insert([
            'titre' => Str::random(15),
            'image' => "img/premiere.jpg",
            'audio' => Str::random(10).'.mp3',
            'contenu' => Str::random(105),     
        ]);
    }
}
