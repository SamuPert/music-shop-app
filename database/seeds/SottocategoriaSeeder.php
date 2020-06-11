<?php

use Illuminate\Database\Seeder;

class SottocategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $dati = [
            'Chitarre' => [
                [
                    'nome_sotto_categoria'        => 'Elettriche',
                    'percorso_foto'               => '/img/Sottocategorie/Elettrica.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Classiche',
                    'percorso_foto'               => '/img/Sottocategorie/Classica.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Acustiche',
                    'percorso_foto'               => '/img/Sottocategorie/Acustica.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Semiacustiche',
                    'percorso_foto'               => '/img/Sottocategorie/Semiacustica.jpg'
                ],
            ],
            'Bassi' => [
                [
                    'nome_sotto_categoria'        => 'Elettrici',
                    'percorso_foto'               => '/img/Sottocategorie/BassoElettrico.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Acustici',
                    'percorso_foto'               => '/img/Sottocategorie/BassoAcustico.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Contrabbassi',
                    'percorso_foto'               => '/img/Sottocategorie/contrabbasso.JPG'
                ],
            ],
            'Tastiere' => [
                [
                    'nome_sotto_categoria'        => 'Workstation',
                    'percorso_foto'               => '/img/Sottocategorie/Tastiera.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Fisarmoniche',
                    'percorso_foto'               => '/img/Sottocategorie/Fisarmonica.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Pianoforti digitali',
                    'percorso_foto'               => '/img/Sottocategorie/Pianoforte.jpg'
                ],
            ],
            'Batterie' => [
                [
                    'nome_sotto_categoria'        => 'Acustiche',
                    'percorso_foto'               => '/img/Sottocategorie/BatteriaAcustica.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Elettroniche',
                    'percorso_foto'               => '/img/Sottocategorie/BatteriaElettronica.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Percussioni',
                    'percorso_foto'               => '/img/Sottocategorie/Percussioni.jpg'
                ],
            ],
            'Fiati' => [
                [
                    'nome_sotto_categoria'        => 'Sax',
                    'percorso_foto'               => 'img/Sottocategorie/Sassofono.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Trombe',
                    'percorso_foto'               => '/img/Sottocategorie/Trombe.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Flauti',
                    'percorso_foto'               => '/img/Sottocategorie/Flauti.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Clarinetti',
                    'percorso_foto'               => '/img/Sottocategorie/Clarinetto.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Altri strumenti a fiato',
                    'percorso_foto'               => '/img/Sottocategorie/AltriFiati.jpg'
                ],
            ],
            'Attrezzature' => [
                [
                    'nome_sotto_categoria'        => 'Amplificatori',
                    'percorso_foto'               => '/img/Sottocategorie/Amplificatori.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Cavi e connettori',
                    'percorso_foto'               => '/img/Sottocategorie/Connettori.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Supporti',
                    'percorso_foto'               => '/img/Sottocategorie/Supporti.jpg'
                ],
            ]
        ];

        foreach ( $dati as $categoria => $dati_sottocategoria)
        {
            $id_categoria = DB::table('categoria')->where('nome_categoria', $categoria)->first()->id_categoria;
            foreach ($dati_sottocategoria as $sottocategoria) {

                $sottocategoria['id_categoria'] = $id_categoria;

                DB::table('sotto_categoria')->insert($sottocategoria);

//                $id_sottocategoria = DB::getPdo()->lastInsertId();
//
//                DB::table('categoria_sottocategoria')->insert([
//                    'id_categoria' => $id_categoria,
//                    'id_sotto_categoria' => $id_sottocategoria
//                ]);
            }
        }
    }
}
