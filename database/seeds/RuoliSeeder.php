<?php

use Illuminate\Database\Seeder;

class RuoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ruoli = [
            [
                'id' => 1,
                'nome' => "Guest",
                'descrizione' => "Livello 1 - Area pubblica del sito.",
            ],
            [
                'id' => 2,
                'nome' => "Utente",
                'descrizione' => "Livelo 2 - Area riservata agli utenti registrati.",
            ],
            [
                'id' => 3,
                'nome' => "Staff",
                'descrizione' => "Livelo 3 - Area riservata ai membri dello staff aziendale.",
            ],
            [
                'id' => 4,
                'nome' => "Admin",
                'descrizione' => "Livelo 4 - Area ad accesso esclusivo dell’amministratore.",
            ]
        ];

        foreach ($ruoli as $ruolo)
            DB::table('ruoli')->insert($ruolo);
    }
}
