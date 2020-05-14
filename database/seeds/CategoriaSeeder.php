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
                'percorso_foto'         => '',
                'descrizione_categoria' => ''
            ],
            [
                'nome_categoria'        => 'Bassi',
                'percorso_foto'         => '',
                'descrizione_categoria' => ''
            ],
            [
                'nome_categoria'        => 'Tastiere',
                'percorso_foto'         => '',
                'descrizione_categoria' => ''
            ],
            [
                'nome_categoria'        => 'Batterie',
                'percorso_foto'         => '',
                'descrizione_categoria' => ''
            ],
            [
                'nome_categoria'        => 'Fiati',
                'percorso_foto'         => '',
                'descrizione_categoria' => ''
            ],
            [
                'nome_categoria'        => 'Attrezzature',
                'percorso_foto'         => '',
                'descrizione_categoria' => ''
            ],
        ];

        foreach ($categorie as $categoria)
            DB::table('categoria')->insert($categoria);
    }
}
