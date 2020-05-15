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
                    'percorso_foto'               => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Classiche',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Acustiche',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Semiacustiche',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
            ],
            'Bassi' => [
                [
                    'nome_sotto_categoria'        => 'Elettrici',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Acustici',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Contrabbassi',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
            ],
            'Tastiere' => [
                [
                    'nome_sotto_categoria'        => 'Workstation',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Fisarmoniche',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Pianoforti digitali',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
            ],
            'Batterie' => [
                [
                    'nome_sotto_categoria'        => 'Acustiche',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Elettroniche',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Percussioni',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
            ],
            'Fiati' => [
                [
                    'nome_sotto_categoria'        => 'Sax',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Trombe',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Flauti',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Clarinetti',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Altri strumenti a fiato',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
            ],
            'Attrezzature' => [
                [
                    'nome_sotto_categoria'        => 'Amplificatori',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Cavi e connettori',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Supporti',
                    'descrizione'                 => '',
                    'percorso_foto'               => ''
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
