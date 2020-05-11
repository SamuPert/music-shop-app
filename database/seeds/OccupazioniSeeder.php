<?php

use Illuminate\Database\Seeder;

class OccupazioniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $occupazioni = [
            [
                'occupazione' => "Studente",
            ],
            [
                'occupazione' => "Operaio",
            ],
            [
                'occupazione' => "Impiegato",
            ],
            [
                'occupazione' => "Libero Professionista",
            ],
            [
                'occupazione' => "Altro",
            ]
        ];

        foreach ($occupazioni as $occupazione)
            DB::table('occupazioni')->insert($occupazione);
    }
}
