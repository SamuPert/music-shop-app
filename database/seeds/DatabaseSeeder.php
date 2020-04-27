<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ruoli')->insert([
            'id' => 1,
            'nome' => "Livello 1",
            'descrizione' => "Area pubblica del sito.",
        ]);
        DB::table('ruoli')->insert([
            'id' => 2,
            'nome' => "Livello 2",
            'descrizione' => "Area riservata agli utenti registrati.",
        ]);
        DB::table('ruoli')->insert([
            'id' => 3,
            'nome' => "Livello 3",
            'descrizione' => "Area riservata ai membri dello staff aziendale.",
        ]);
        DB::table('ruoli')->insert([
            'id' => 4,
            'nome' => "Livello 4",
            'descrizione' => "Area ad accesso esclusivo dell’amministratore.",
        ]);


        DB::table('occupazioni')->insert([
            'occupazione' => "Studente",
        ]);
        DB::table('occupazioni')->insert([
            'occupazione' => "Operaio",
        ]);
        DB::table('occupazioni')->insert([
            'occupazione' => "Impiegato",
        ]);
        DB::table('occupazioni')->insert([
            'occupazione' => "Libero Professionista",
        ]);
        DB::table('occupazioni')->insert([
            'occupazione' => "Altro",
        ]);

        // $this->call(UserSeeder::class);
    }
}
