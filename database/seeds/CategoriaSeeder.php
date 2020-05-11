<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie = [
            [
                'nome_categoria'        => 'Chitarre',
                'descrizione_categoria' => ''
            ],
            [
                'nome_categoria'        => 'Bassi',
                'descrizione_categoria' => ''
            ],
            [
                'nome_categoria'        => 'Tastiere',
                'descrizione_categoria' => ''
            ],
            [
                'nome_categoria'        => 'Batterie',
                'descrizione_categoria' => ''
            ],
            [
                'nome_categoria'        => 'Fiati',
                'descrizione_categoria' => ''
            ],
            [
                'nome_categoria'        => 'Attrezzature',
                'descrizione_categoria' => ''
            ],
        ];

        foreach ($categorie as $categoria)
            DB::table('categoria')->insert($categoria);
    }
}
