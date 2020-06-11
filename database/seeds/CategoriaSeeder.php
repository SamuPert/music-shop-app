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
                'percorso_foto'         => '/img/Categorie/Chitarre.jpg'
            ],
            [
                'nome_categoria'        => 'Bassi',
                'percorso_foto'         => '/img/Categorie/Bassi.jpg'
            ],
            [
                'nome_categoria'        => 'Tastiere',
                'percorso_foto'         => '/img/Categorie/Tastiere.jpg'
            ],
            [
                'nome_categoria'        => 'Batterie',
                'percorso_foto'         => '/img/Categorie/Batterie.jpg'
            ],
            [
                'nome_categoria'        => 'Fiati',
                'percorso_foto'         => '/img/Categorie/Fiati.jpg'
            ],
            [
                'nome_categoria'        => 'Attrezzature',
                'percorso_foto'         => '/img/Categorie/Attrezzature.jpg'
            ],
        ];

        foreach ($categorie as $categoria)
            DB::table('categoria')->insert($categoria);
    }
}
