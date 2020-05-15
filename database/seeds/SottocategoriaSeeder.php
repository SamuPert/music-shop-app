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
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/Elettrica.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Classiche',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/Classica.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Acustiche',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/Acustica.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Semiacustiche',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/Semiacustica.jpg'
                ],
            ],
            'Bassi' => [
                [
                    'nome_sotto_categoria'        => 'Elettrici',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/BassoElettrico.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Acustici',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/BassoAcustico.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Contrabbassi',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/contrabbasso.JPG'
                ],
            ],
            'Tastiere' => [
                [
                    'nome_sotto_categoria'        => 'Workstation',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/Tastiera.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Fisarmoniche',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/Fisarmonica.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Pianoforti digitali',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/Pianoforte.jpg'
                ],
            ],
            'Batterie' => [
                [
                    'nome_sotto_categoria'        => 'Acustiche',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/BatteriaAcustica.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Elettroniche',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/BatteriaElettronica.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Percussioni',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/Percussioni.jpg'
                ],
            ],
            'Fiati' => [
                [
                    'nome_sotto_categoria'        => 'Sax',
                    'descrizione'                 => '',
                    'percorso_foto'               => 'img/Sassofono.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Trombe',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/Trombe.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Flauti',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/Flauti.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Clarinetti',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/Clarinetto.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Altri strumenti a fiato',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/AltriFiati.jpg'
                ],
            ],
            'Attrezzature' => [
                [
                    'nome_sotto_categoria'        => 'Amplificatori',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/Amplificatori.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Cavi e connettori',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/Connettori.jpg'
                ],
                [
                    'nome_sotto_categoria'        => 'Supporti',
                    'descrizione'                 => '',
                    'percorso_foto'               => '/img/Supporti.jpg'
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
