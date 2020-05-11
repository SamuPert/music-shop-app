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
                    'descrizione' => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Classiche',
                    'descrizione' => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Acustiche',
                    'descrizione' => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Semiacustiche',
                    'descrizione' => ''
                ],
            ],
            'Bassi' => [
                [
                    'nome_sotto_categoria'        => 'Elettrici',
                    'descrizione' => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Acustici',
                    'descrizione' => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Contrabbassi',
                    'descrizione' => ''
                ],
            ],
            'Tastiere' => [
                [
                    'nome_sotto_categoria'        => 'Workstation',
                    'descrizione' => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Fisarmoniche',
                    'descrizione' => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Pianoforti digitali',
                    'descrizione' => ''
                ],
            ],
            'Batterie' => [
                [
                    'nome_sotto_categoria'        => 'Acustiche',
                    'descrizione' => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Elettroniche',
                    'descrizione' => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Percussioni',
                    'descrizione' => ''
                ],
            ],
            'Fiati' => [
                [
                    'nome_sotto_categoria'        => 'Sax',
                    'descrizione' => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Trombe',
                    'descrizione' => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Flauti',
                    'descrizione' => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Clarinetti',
                    'descrizione' => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Altri strumenti a fiato',
                    'descrizione' => ''
                ],
            ],
            'Attrezzature' => [
                [
                    'nome_sotto_categoria'        => 'Amplificatori',
                    'descrizione' => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Cavi e connettori',
                    'descrizione' => ''
                ],
                [
                    'nome_sotto_categoria'        => 'Supporti',
                    'descrizione' => ''
                ],
            ]
        ];

        foreach ( $dati as $categoria => $dati_sottocategoria)
        {
            $id_categoria = DB::table('categoria')->where('nome_categoria', $categoria)->first()->id_categoria;
            foreach ($dati_sottocategoria as $sottocategoria) {

                DB::table('sotto_categoria')->insert($sottocategoria);
                $id_sottocategoria = DB::getPdo()->lastInsertId();

                DB::table('categoria_sottocategoria')->insert([
                    'id_categoria' => $id_categoria,
                    'id_sotto_categoria' => $id_sottocategoria
                ]);
            }
        }
    }
}
