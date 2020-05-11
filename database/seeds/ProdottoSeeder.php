<?php

use Illuminate\Database\Seeder;

class ProdottoSeeder extends Seeder
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
                'Elettriche' => [
                    'BOX SDC 33K',
                    'DARESTONE ELG Black',
                    'EKO S300 Black'
                ],
                'Classiche' => [
                    'YAMAHA CX40',
                    'EKO CS5 Natural',
                    'VALENCIA VC104 Natural',
                ],
                'Acustiche' => [
                    'EASTMAN ACDR1',
                    'DARESTONE AG1 Natural',
                    'FENDER CD60S Black',
                ],
                'Semiacustiche' => [
                    'IBANEZ AS53 TF Tobacco Flat',
                    'GRETSCH G2420 Streamliner LR Walnut',
                    'FENDER Squier Affinity Starcaster MN Black',
                ],
            ],
            'Bassi' => [
                'Elettrici' => [
                    'EKO VJB200 Black',
                    'JACKSON JS1X Concert Minion AH Bass Black',
                    'YAMAHA TRBX305 White',
                    'EKO MM305 Black',
                ],
                'Acustici' => [
                    'KALA U-BASS Wanderer Acoustic-Electric',
                    'IBANEZ PCBE12 OPN',
                    'TAKAMINE GB72CE Natural',
                ],
                'Contrabbassi' => [
                    'DIAMOND HB6076I Maestro 3/4',
                    'VOX MEISTER DBASS34',
                    'YAMAHA SLB200 Silent Bass',
                ],
            ],
            'Tastiere' => [
                'Workstation' => [
                    'KORG Krome EX 61',
                    'ROLAND FA-06',
                    'YAMAHA MONTAGE 7',
                ],
                'Fisarmoniche' => [
                    'SOUNDSATION Voce I 2648-RD',
                    'HOHNER Bravo III 72 Black',
                    'ROLAND FR-1XB Black',
                ],
                'Pianoforti digitali' => [
                    'CASIO Casiotone CT S300',
                    'KORG B2N',
                    'YAMAHA YDPS54 Black',
                ],
            ],
            'Batterie' => [
                'Acustiche' => [
                    'PEARL Export 16x16 Floor Tom Jet Black',
                    'DARESTONE CLDRUM White',
                    'TAMA LJL48S SBO - Club Jam Kit',
                ],
                'Elettroniche' => [
                    'ALESIS CompactKit 4',
                    'KORG Stageman 80',
                ],
                'Percussioni' => [
                    'Triangolo 10 cm. con battente',
                    'MEINL SH51 Mini Cajon Shaker',
                ],
            ],
            'Fiati' => [
                'Sax' => [
                    'YAMAHA Venova YVS120',
                    'GRASSI BS210',
                ],
                'Trombe' => [
                    'PTRUMPET Red',
                    'YAMAHA YTR2330',
                ],
                'Flauti' => [
                    'AULOS G302A',
                    'GRASSI 720MKII',
                    'HOHNER 9556',
                ],
                'Clarinetti' => [
                    'GRASSI SCL390',
                    'YAMAHA YCL450E',
                ],
                'Altri strumenti a fiato' => [
                    'Kazoo in Metallo',
                    'Flauto di Pan 8 Toni DO-DO',
                    'YAMAHA YBB321 Gold Laquered',
                ],
            ],
            'Attrezzature' => [
                'Amplificatori' => [
                    'FENDER Champion 40',
                    'VOX AC2 RhythmVOX Bass',
                    'BEHRINGER AMP800 MiniAmp',
                ],
                'Cavi e connettori' => [
                    'Female RCA / Male Jack 6.35 Mono Adapter',
                    'Electraline 10839 Cavo Hi-Fi 03VH-H per Altoparlanti',
                    'QUIKLOK G108',
                ],
                'Supporti' => [
                    'Supporto Ripiegabile per 5 Chitarre',
                    'KONIG & MEYER 15240 Flugelhorn Stand Black',
                    'YAMAHA Supporto per Stagepas',
                ],
            ],
        ];

        foreach ($dati as $categoria => $sottocategorie )
        {
            foreach ( $sottocategorie as $sottocategoria => $prodotti)
            {
                $id_sotto_categoria = DB::table('categoria_sottocategoria')
                    ->join('categoria', 'categoria.id_categoria', '=', 'categoria_sottocategoria.id_categoria')
                    ->join('sotto_categoria', 'sotto_categoria.id_sotto_categoria', '=', 'categoria_sottocategoria.id_sotto_categoria')
                    ->select('users.*', 'contacts.phone', 'orders.price')
                    ->where('nome_categoria', $categoria)
                    ->where('nome_sotto_categoria', $sottocategoria)
                    ->select('categoria_sottocategoria.*')
                    ->first()->id_sotto_categoria;

                foreach ($prodotti as $prodotto) {

                    DB::table('prodotto')->insert([
                        'nome_prodotto' => $prodotto,
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => '',
                        'prezzo' => rand(200,2000),
                    ]);
                    $id_prodotto = DB::getPdo()->lastInsertId();

                    DB::table('prodotto_sottocategoria')->insert([
                        'id_prodotto' => $id_prodotto,
                        'id_sotto_categoria' => $id_sotto_categoria
                    ]);
                }
            }
        }

    }
}
