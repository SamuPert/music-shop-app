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
                'percorso_foto'         => '/img/Chitarre.jpg',
                'descrizione_categoria' => ''
            ],
            [
                'nome_categoria'        => 'Bassi',
                'percorso_foto'         => '/img/Bassi.jpg',
                'descrizione_categoria' => ''
            ],
            [
                'nome_categoria'        => 'Tastiere',
                'percorso_foto'         => '/img/Tastiere.jpg',
                'descrizione_categoria' => ''
            ],
            [
                'nome_categoria'        => 'Batterie',
                'percorso_foto'         => '/img/Batterie.jpg',
                'descrizione_categoria' => ''
            ],
            [
                'nome_categoria'        => 'Fiati',
                'percorso_foto'         => '/img/Fiati.jpg',
                'descrizione_categoria' => ''
            ],
            [
                'nome_categoria'        => 'Attrezzature',
                'percorso_foto'         => '/img/Attrezzature.jpg',
                'descrizione_categoria' => ''
            ],
        ];

        foreach ($categorie as $categoria)
            DB::table('categoria')->insert($categoria);
    }
}
