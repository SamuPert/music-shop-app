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
        $this->call(\CategoriaSeeder::class);
        $this->call(\SottocategoriaSeeder::class);
        $this->call(\ProdottoSeeder::class);

        $this->call(\OccupazioniSeeder::class);
        $this->call(\RuoliSeeder::class);

        $this->call(\UserSeeder::class);
    }
}
