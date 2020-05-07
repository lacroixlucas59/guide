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
            'titre' => "Madrid",
            'image' => "d/madrid.jpg",
            'audio' => 'd/andalousie.mp3',
            'contenu' => "Proinde die funestis interrogationibus praestituto imaginarius  adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim  cuius imperio truci, stimulis reginae exsertantis aurem subinde per aulaeum, nec diluere obiecta permissi nec defensi periere conplures.",     
        ]);

        DB::table('ag')->insert([
            'titre' => "Séville",
            'image' => "d/seville.jpg",
            'audio' => 'd/espagne.mp3',
            'contenu' => "Iam quae essent agenda praedoctis, et adsistebant hinc inde notarii,  cursim ad Caesarem perferentes, cuius imperio truci, stimulis reginae exsertantis aurem subinde per aulaeum, nec diluere obiecta permissi nec defensi periere conplures.",     
        ]);

        DB::table('ag')->insert([
            'titre' => "Barcelone",
            'image' => "d/barcelone.jpg",
            'audio' => 'd/andalousie.mp3',
            'contenu' => "Adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim ad Caesarem perferentes, reginae exsertantis aurem subinde per aulaeum, nec diluere obiecta permissi nec defensi periere conplures.",     
        ]);

        DB::table('ag')->insert([
            'titre' => "Ibiza",
            'image' => "d/ibiza.jpg",
            'audio' => 'd/espagne.mp3',
            'contenu' => "Praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim ad Caesarem perferentes, exsertantis aurem subinde per aulaeum",     
        ]);

        DB::table('ag')->insert([
            'titre' => "Grenade",
            'image' => "d/grenade.jpg",
            'audio' => 'd/andalousie.mp3',
            'contenu' => "Equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim ad Caesarem perferentes, cuius imperio truci, stimulis reginae exsertantis aurem subinde per aulaeum, nec diluere obiecta permissi nec defensi periere conplures.",     
        ]);

        DB::table('ag')->insert([
            'titre' => "Bilbao",
            'image' => "d/bilbao.jpg",
            'audio' => 'd/espagne.mp3',
            'contenu' => "Aredt Praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim ad Caesarem perferentes, exsertantis aurem subinde per aulaeum",     
        ]);

        DB::table('ag')->insert([
            'titre' => "Saragosse",
            'image' => "d/saragosse.jpg",
            'audio' => 'd/andalousie.mp3',
            'contenu' => "Aredt Praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim ad Caesarem perferentes, exsertantis aurem subinde per aulaeum",     
        ]);
    }
}
