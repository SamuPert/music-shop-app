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
                    'BOX SDC 33K' => [
                        'descrizione_breve' => 'Le chitarre elettriche ELG sono realizzate con prodotti selezionati e sono ideali per lo studente o l\'amatore che si approccia alla chitarra elettrica',
                        'descrizione_estesa' => 'Le chitarre elettriche ELG sono realizzate con prodotti selezionati e sono ideali per lo studente o l\'amatore che si approccia alla chitarra elettrica. Le caratteristiche tecniche dello strumento si rifanno alle linee professionali.Caratteristiche principali',
                        'percorso_foto' => 'img/Prodotti/Elettrica1.jpg',
                    ],
                    'DARESTONE ELG Black' => [
                        'descrizione_breve' => 'Le chitarre elettriche ELG sono realizzate con prodotti selezionati e sono ideali per lo studente o l\'amatore che si approccia alla chitarra elettrica',
                        'descrizione_estesa' => 'Le chitarre elettriche ELG sono realizzate con prodotti selezionati e sono ideali per lo studente o l\'amatore che si approccia alla chitarra elettrica. Le caratteristiche tecniche dello strumento si rifanno alle linee professionali.Caratteristiche principali',
                        'percorso_foto' => 'img/Prodotti/Elettrica2.jpg',
                    ],
                    'EKO S300 Black' => [
                        'descrizione_breve' => 'Dopo la ricerca e le sperimentazioni del nostro laboratorio di liuteria abbiamo trovato interessante proporre strumenti dallo stile vintage, stile che non perde mai il suo fascino.',
                        'descrizione_estesa' => 'Dopo la ricerca e le sperimentazioni del nostro laboratorio di liuteria abbiamo trovato interessante proporre strumenti dallo stile vintage, stile che non perde mai il suo fascino. Grazie a particolari colorazioni e finiture potrai vivere l\'esperienza di suonare uno strumento dallo stile vintage intramontabile ad un prezzo contenuto.',
                        'percorso_foto' => 'img/Prodotti/Elettrica3.jpg',
                    ]
                ],
                'Classiche' => [
                    'YAMAHA CX40' => [
                        'descrizione_breve' => 'La CX40 è la scelta ideale per chi si avvicina per la prima volta alla chitarra e desidera uno strumento dalle buone doti estetiche e sonore.',
                        'descrizione_estesa' => 'La CX40 è la scelta ideale per chi si avvicina per la prima volta alla chitarra e desidera uno strumento dalle buone doti estetiche e sonore. I legni che la compongono e le rifiniture le conferiscono delle qualità di suono e maneggevolezza conservando un prezzo altamente abbordabile. E\' inoltre dotata del sistema di pick-up passivo Yamaha System 49, che permette il collegamento a qualunque amplificatore.
                            ',
                        'percorso_foto' => 'img/Prodotti/Classica1.jpg',
                    ],
                    'EKO CS5 Natural' => [
                        'descrizione_breve' => 'La CS 5 è una chitarra classica con body da 36\'\', top, fondo e fasce in Tiglio. Il manico e la tastiera sono invece in Betulla.',
                        'descrizione_estesa' => 'La CS 5 è una chitarra classica con body da 36\'\', top, fondo e fasce in Tiglio. Il manico e la tastiera sono invece in Betulla.
                            ',
                        'percorso_foto' => 'img/Prodotti/Classica2.jpg',
                    ],
                    'VALENCIA VC104 Natural' => [
                        'descrizione_breve' => 'Un\'eccellente prima chitarra con corde di nylon. La Valencia Series 100 è una chitarra classica con corde in nylon abbastanza conveniente per qualsiasi chitarrista. La lunghezza della scala del manico consente di suonare con il vero stile classico delle dita. ',
                        'descrizione_estesa' => 'Un\'eccellente prima chitarra con corde di nylon. La Valencia Series 100 è una chitarra classica con corde in nylon abbastanza conveniente per qualsiasi chitarrista. La lunghezza della scala del manico consente di suonare con il vero stile classico delle dita. Di conseguenza, è proprio ciò di cui hai bisogno per sviluppare una corretta tecnica di esecuzione. Che tu sia un musicista molto giovane o un pò più grande, la gamma Serie 100 offre un\'ampia scelta di dimensioni dello strumento.
                            ',
                        'percorso_foto' => 'img/Prodotti/Classica3.jpg',
                    ],
                ],
                'Acustiche' => [
                    'EASTMAN ACDR1' => [
                        'descrizione_breve' => 'Le chitarre acustiche Darestone AG1 sono state progettate per soddisfare la passione del chitarrista che si approccia per la prima volta allo strumento. ',
                        'descrizione_estesa' => 'Le chitarre acustiche Darestone AG1 sono state progettate per soddisfare la passione del chitarrista che si approccia per la prima volta allo strumento. La selezione dei materiali e la precisione dei dettagli ne fa emergere la notevole sonorità della cassa armonica, rendendo più agevole l\'approccio allo strumento.
                            ',
                        'percorso_foto' => 'img/Prodotti/Acustiche1.jpg',
                    ],
                    'DARESTONE AG1 Natural' => [
                        'descrizione_breve' => 'Le chitarre acustiche Darestone AG1 sono state progettate per soddisfare la passione del chitarrista che si approccia per la prima volta allo strumento. ',
                        'descrizione_estesa' => 'Le chitarre acustiche Darestone AG1 sono state progettate per soddisfare la passione del chitarrista che si approccia per la prima volta allo strumento. La selezione dei materiali e la precisione dei dettagli ne fa emergere la notevole sonorità della cassa armonica, rendendo più agevole l\'approccio allo strumento.
                            ',
                        'percorso_foto' => 'img/Prodotti/Acustiche2.jpg',
                    ],
                    'FENDER CD60S Black' => [
                        'descrizione_breve' => 'La FA-125 è una chitarra sbalorditiva con un prezzo accessibile. La costruzione in laminato di qualità con una moderna paletta Fender 3+3 ed il ponte Viking creano uno strumento facile da suonare e che suona alla grande.',
                        'descrizione_estesa' => 'La FA-125 è una chitarra sbalorditiva con un prezzo accessibile. La costruzione in laminato di qualità con una moderna paletta Fender 3+3 ed il ponte Viking creano uno strumento facile da suonare e che suona alla grande. I principianti ed i chitarristi in evoluzione apprezzeranno questa chitarra, che presenta un manico Nato che conferisce alla chitarra un suono vivace ed una esecuzione fluida. La moderna paletta 3+3 non solo crea una suonabilità fluida, ma aggiunge un tocco tradizionale allo stile della tua chitarra. La gigbag Fender è un modo elegante e comodo per proteggere la tua chitarra durante il viaggio. Caratterizzato dall\'iconica forma Fender asimmetrica, il suo resistente strato esterno è realizzato in poliestere 600 denari che protegge dagli impatti. L\'interno ha un imbottitura da 10mm rivestita in microfibra soft touch che mantiene lo strumento sicuro prevenendo danni alla finitura. La custodia è inoltre dotata di una comoda maniglia e di cinghie ergonomiche in air mesh con fibbie facilmente regolabili.
                            ',
                        'percorso_foto' => 'img/Prodotti/Acustiche3.jpg',
                    ],
                ],
                'Semiacustiche' => [
                    'IBANEZ AS53 TF Tobacco Flat' => [
                        'descrizione_breve' => 'Ibanez ha introdotto la serie Artcore nel 2002 ed è diventata la chitarra hollow-body preferita dai musicisti degli ultimi 10 anni. ',
                        'descrizione_estesa' => 'Ibanez ha introdotto la serie Artcore nel 2002 ed è diventata la chitarra hollow-body preferita dai musicisti degli ultimi 10 anni. La combinazione Artcore di qualità di lavorazione e convenienza ha creato schiere di fan da diversi generi musicali come blues, country, rock e jazz. Artcore è molto stimata per il suo suono, il sustain ed il modo in cui tiene l\'accordatura.
                            ',
                        'percorso_foto' => 'img/Prodotti/SemiAcustiche1.jpg',
                    ],
                    'GRETSCH G2420 Streamliner LR Walnut' => [
                        'descrizione_breve' => 'Il segreto del suono della Streamliner è una nuova offerta di Gretsch: il pickup humbucking Broad\'Tron BT-2S. ',
                        'descrizione_estesa' => 'Il segreto del suono della Streamliner è una nuova offerta di Gretsch: il pickup humbucking Broad\'Tron BT-2S. Progettato appositamente per la Collezione Streamliner, il pickup Broad\'Tron ad elevato output genera una definizione migliorata con una risposta dei bassi più stretta per bassi robusti, alti incontaminati e una gamma media gutturale. Questa potenza sonora è imbrigliata e modellata da un layout di controllo tradizionale: controlli del volume pickup al manico e al ponte, un controllo del tono principale, controllo del volume principale e selettore del pickup a tre vie. Una tastiera veloce in alloro con raggio 12" ed eleganti intarsi Hump Block madreperlati e 22 tasti jumbo medi si trova sopra il manico in Nato con binding bianco con un sottile profilo a forma di" U ", ideale per gli accordi o per eseguire riff veloci. Goditi una stabilità dell\'accordatura solida grazie all\'elegante cordiera Gretsch Chromatic II, al ponte Adjusto-Matic con base in Alloro fissata e capotasto in osso sintetico.',
                        'percorso_foto' => 'img/Prodotti/SemiAcustiche2.jpg',
                    ],
                    'FENDER Squier Affinity Starcaster MN Black' => [
                        'descrizione_breve' => 'Lo Starcaster ha cambiato per sempre il design della chitarra semi-acustica con la forma del suo body asimmetrico quando venne introdotta negli anni \'70, offrendo un suono versatile e uno stile fuori dal mondo per i musicisti più avventurosi',
                        'descrizione_estesa' => 'Lo Starcaster ha cambiato per sempre il design della chitarra semi-acustica con la forma del suo body asimmetrico quando venne introdotta negli anni \'70, offrendo un suono versatile e uno stile fuori dal mondo per i musicisti più avventurosi. Lo Starcaster della serie Affinity crea un suono massiccio grazie ai suoi doppi pickup Squier humbucking ed è facile da suonare grazie al profilo del manico a "C" sottile e comodo. Questo modello Squier presenta anche una paletta sagomata unica, un ponte regolabile con cordiera per un\'accordatura stabile, robusto hardware cromato ed una finitura del manico satinata per una sensazione naturale.',
                        'percorso_foto' => 'img/Prodotti/SemiAcustiche3.jpg',
                    ],
                ],
            ],
            'Bassi' => [
                'Elettrici' => [
                    'EKO VJB200 Black' => [
                        'descrizione_breve' => 'Il basso adatto a vari stili di musica.',
                        'descrizione_estesa' => 'Con il suo design alla moda, questo basso elettrico offre un aspetto accattivante, bello e nuovo. Il basso adatto a vari stili di musica. Con due pickup e due manopole di regolazione. Ti offriranno prestazioni sonore molto più armoniche e più ricche.',
                        'percorso_foto' => 'img/Prodotti/BassoElettrico1.jpg',
                    ],
                    'JACKSON JS1X Concert Minion AH Bass Black' => [
                        'descrizione_breve' => 'Due pickup e due manopole di regolazione',
                        'descrizione_estesa' => 'Con il suo design alla moda, questo basso elettrico offre un aspetto accattivante, bello e nuovo. Il basso adatto a vari stili di musica. Con due pickup e due manopole di regolazione. Ti offriranno prestazioni sonore molto più armoniche e più ricche.',
                        'percorso_foto' => 'img/Prodotti/BassoElettrico2.jpg',
                    ],
                    'YAMAHA TRBX305 White' => [
                        'descrizione_breve' => 'Prodotto con tastiera in legno massello',
                        'descrizione_estesa' => 'Con il suo design alla moda, questo basso elettrico offre un aspetto accattivante, bello e nuovo. Il basso adatto a vari stili di musica. Con due pickup e due manopole di regolazione. Ti offriranno prestazioni sonore molto più armoniche e più ricche.',
                        'percorso_foto' => 'img/Prodotti/BassoElettrico3.jpg',
                    ],
                    'EKO MM305 Black' => [
                        'descrizione_breve' => 'Prodotto costruito con un corpo in legno, che lo rende solido e robusto in modo da poterlo suonare liberamente',
                        'descrizione_estesa' => 'Con il suo design alla moda, questo basso elettrico offre un aspetto accattivante, bello e nuovo. Il basso adatto a vari stili di musica. Con due pickup e due manopole di regolazione. Ti offriranno prestazioni sonore molto più armoniche e più ricche.',
                        'percorso_foto' => 'img/Prodotti/BassoElettrico4.jpg',
                    ],
                ],
                'Acustici' => [
                    'KALA U-BASS Wanderer Acoustic-Electric' => [
                        'descrizione_breve' => 'Ottimo regalo per principianti e avanzati, bambini e studenti',
                        'descrizione_estesa' => 'La manopola chiusa è facile da regolare ed è stabile, la manopola è in metallo cromato, non si arrugginisce mai, è anche con una sensazione di mano comoda, la nostra superficie in ukulele cambered con buona risonanza, la il suono è più profondo e più chiaro confrontando con la tavola dritta, e il suono sarà circondato per molto tempo.',
                        'percorso_foto' => 'img/Prodotti/BassoAcustico.jpg',
                    ],
                    'IBANEZ PCBE12 OPN' => [
                        'descrizione_breve' => 'Non sarà mai fuori forma anche in condizioni di sforzo. La legna può produrre una voce calda e profonda, è con un midrange e una risonanza perfetti.',
                        'descrizione_estesa' => 'Il viso / schiena / lato realizzato in legno di alta qualità import-ecologica sapele, è salubre e sicuro per le persone, ad alta intensità con la superficie lucida, resistente e alla corrosione, rende il nostro ukulele pieno con artistico.',
                        'percorso_foto' => 'img/Prodotti/BassoAcustico2.jpg',
                    ],
                    'TAKAMINE GB72CE Natural' => [
                        'descrizione_breve' => 'La legna può produrre una voce calda e profonda, è con un midrange e una risonanza perfetti.',
                        'descrizione_estesa' => 'Il viso / schiena / lato realizzato in legno di alta qualità import-ecologica sapele, è salubre e sicuro per le persone, ad alta intensità con la superficie lucida, resistente e alla corrosione, rende il nostro ukulele pieno con artistico.',
                        'percorso_foto' => 'img/Prodotti/BassoAcustico3.jpg',
                    ],
                ],
                'Contrabbassi' => [
                    'DIAMOND HB6076I Maestro 3/4' => [
                        'descrizione_breve' => 'Misura il posizionamento, il cuore degli artigiani, il processo di lucidatura.',
                        'descrizione_estesa' => 'Un buon contrabbasso con eccellente qualità audio, aiuto per i principianti a stabilire un buon senso della musica e la determinazione di aderire alla pratica del violino può essere adattato a una varietà di palcoscenico e ha giocato una varietà di scenari. ',
                        'percorso_foto' => 'img/Prodotti/Contrabbasso1.jpg',
                    ],
                    'VOX MEISTER DBASS34' => [
                        'descrizione_breve' => 'Buon contrabbasso con eccellente qualità audio',
                        'descrizione_estesa' => 'Solo divertimento violino notevolmente contribuito alla creatività dei bambini, la concentrazione e l\'intelligenza, ma anche promuovere i talenti musicali dei bambini, coordinazione occhio-mano e il ritmo, aiutandoli a sviluppare le capacità musicali dei bambini. Sviluppare e migliorare il loro senso del ritmo.',
                        'percorso_foto' => 'img/Prodotti/Contrabbasso2.jpg',
                    ],
                    'YAMAHA SLB200 Silent Bass' => [
                        'descrizione_breve' => 'Progettato per i bambini più grandi e gli adolescenti e disegno del violino è l\'ideale per il primo violino',
                        'descrizione_estesa' => 'Sia la bellezza e la consistenza, suono dettagliato dolce, selezione superba, eccellente e di processo, il tradizionale processo, misura il posizionamento, il cuore degli artigiani, il processo di lucidatura',
                        'percorso_foto' => 'img/Prodotti/Contrabbasso3.jpg',
                    ],
                ],
            ],
            'Tastiere' => [
                'Workstation' => [
                    'KORG Krome EX 61' => [
                        'descrizione_breve' => 'Stare al passo in una scena musicale mondiale in continua evoluzione è una sfida per qualsiasi progettista di strumenti elettronici.',
                        'descrizione_estesa' => 'Stare al passo in una scena musicale mondiale in continua evoluzione è una sfida per qualsiasi progettista di strumenti elettronici. Con Krome EX, i progettisti di Korg hanno meticolosamente selezionato i suoni che dovrebbero essere inclusi in una workstation synth di oggi. In primo luogo, si sono concentrati su EDM, con suoni polifonici di forte impatto, lead synth accesi e kit di batteria incisivi che fanna alzare in piedi i fan della musica. Anche gli strumenti etnici come kalimba, pan in acciaio e kokyu - così come effetti sonori come quelli usati nei film trailer e negli spot pubblicitari sono a bordo. Anche i classici suoni "pane e burro" che non passano mai di moda sono una priorità assoluta per i sound designer di Korg. I suoni di piano, piano elettrico e batteria sono il fondamento di tanta musica e sono ben rappresentati nel Krome EX 61. Non dovrai mai cercare o immergerti nei menu per trovare il suono perfetto per ogni occasione. Avere suoni di pianoforte fantastici è di fondamentale importanza per qualsiasi workstation seria. I suoni di pianoforte del Krome EX sono stati registrati sotto la supervisione di Seigen Ono, autorità riconosciuta della registrazione e masterizzazione DSD. Questi sono suoni meravigliosamente vibranti basati sul successo del D Grand nel Krome originale, espandendo ulteriormente la gamma di suoni di pianoforte nel Krome EX. E\' stato anche incluso un pianoforte verticale usato frequentemente nella musica pop.',
                        'percorso_foto' => 'img/Prodotti/Work1.jpg',
                    ],
                    'ROLAND FA-06' => [
                        'descrizione_breve' => 'Compatibile con iPhone, iPad e Mac',
                        'descrizione_estesa' => 'Compatibile con: iPhone, iPad e Mac, offre una gamma completa di funzionalità professionali, ma mantiene la tua installazione pulita e semplice per aiutarti a concentrarti sulla musica',
                        'percorso_foto' => 'img/Prodotti/Work2.jpg',
                    ],
                    'YAMAHA MONTAGE 7' => [
                        'descrizione_breve' => 'Solo MacBook o notebook fino a 3 cm di altezza',
                        'descrizione_estesa' => 'Completamente imbottito interno mantiene controller & 2 cinghie di fissaggio tenere ben protetto durante il trasporto per notebook (solo MacBook o notebook fino a 3 cm di altezza)',
                        'percorso_foto' => 'img/Prodotti/Work3.jpg',
                    ],
                ],
                'Fisarmoniche' => [
                    'SOUNDSATION Voce I 2648-RD' => [
                        'descrizione_breve' => 'Particolarmente precisa, tastiera in legno e madreperla',
                        'descrizione_estesa' => 'Jewel serie, 38 tasti a 4 voci, registri 9 +1, 96 bassi a 4 voci, registri 3 +1. Particolarmente precisa, tastiera in legno e madreperla. Scala molto larga, bottone d\'aria in madreperla, mantice speciale. Protezione imbottita del mantice, 2 chiusure, dimensioni: 450 x 200 mm, Peso: 9,9 kg',
                        'percorso_foto' => 'img/Prodotti/Fisarmonica1.jpg',
                    ],
                    'HOHNER Bravo III 72 Black' => [
                        'descrizione_breve' => 'Scala molto larga, bottone d\'aria in madreperla, mantice speciale',
                        'descrizione_estesa' => 'Jewel serie, 38 tasti a 4 voci, registri 9 +1, 96 bassi a 4 voci, registri 3 +1. Particolarmente precisa, tastiera in legno e madreperla. Scala molto larga, bottone d\'aria in madreperla, mantice speciale. Protezione imbottita del mantice, 2 chiusure, dimensioni: 450 x 200 mm, Peso: 9,9 kg',
                        'percorso_foto' => 'img/Prodotti/Fisarmonica2.jpg',
                    ],
                    'ROLAND FR-1XB Black' => [
                        'descrizione_breve' => 'Tracolle con cinghia trasversale, panno per lucidatura e custodia di lusso',
                        'descrizione_estesa' => 'Jewel serie, 38 tasti a 4 voci, registri 9 +1, 96 bassi a 4 voci, registri 3 +1. Particolarmente precisa, tastiera in legno e madreperla. Scala molto larga, bottone d\'aria in madreperla, mantice speciale. Protezione imbottita del mantice, 2 chiusure, dimensioni: 450 x 200 mm, Peso: 9,9 kg',
                        'percorso_foto' => 'img/Prodotti/Fisarmonica3.jpg',
                    ],
                ],
                'Pianoforti digitali' => [
                    'CASIO Casiotone CT S300' => [
                        'descrizione_breve' => '88 tasti semipesati di dimensioni standard con risposta al tocco regolabile in base al proprio stile di esecuzione preferito',
                        'descrizione_estesa' => 'Un pianoforte digitale creato su misura per te: 88 tasti semipesati di dimensioni standard con risposta al tocco regolabile in base al proprio stile di esecuzione preferito',
                        'percorso_foto' => 'img/Prodotti/Digitale1.jpg',
                    ],
                    'KORG B2N' => [
                        'descrizione_breve' => 'Suono Superiore: 5 suoni (Acoustic Piano, Electric Piano, Organ, Synth e Bass), effetti integrati',
                        'descrizione_estesa' => 'Suono Superiore: 5 suoni (Acoustic Piano, Electric Piano, Organ, Synth e Bass), effetti integrati: chorus e riverbero e due altoparlanti integrati da 20 W',
                        'percorso_foto' => 'img/Prodotti/Digitale2.jpg',
                    ],
                    'YAMAHA YDPS54 Black' => [
                        'descrizione_breve' => 'Impara Divertendoti: Modalità Standart, Split, Layer e Lezione',
                        'descrizione_estesa' => 'Connettività garantita: ingresso di pedale sustain da 1/4" (pedale non incluso), uscita stereo cuffie da 1/4" per esercitarsi in privato e uscite RCA per poter collegarsi a qualsiasi impianto audio',
                        'percorso_foto' => 'img/Prodotti/Digitale3.jpg',
                    ],
                ],
            ],
            'Batterie' => [
                'Acustiche' => [
                    'PEARL Export 16x16 Floor Tom Jet Black' => [
                        'descrizione_breve' => 'Il primo kit di batteria ideale: include piatti hardware bacchette e sgabello',
                        'descrizione_estesa' => 'Tutti gli stand sono a doppio rinforzo, altezza e inclinazione regolabili, e sono dotati di gambe a doppia staffa per resistere agli assalti del batterista. Oltre all’hardware a lunga durata, la Roadshow include un portabacchette professionale, un paio di bacchette 5A in acero e uno sgabello.Composizione del set di piatti:Bass da 22” x 16”, Tom Tom da 10” x 7”, Tom Tom da 12” x 8” Floor Tom da 16” x 16”, rullante da 14” x 5,5”. Include stand per rullante, stand per charleston, stand per piatti, piatti charleston e crash, sgabello, pacchette e pedale.',
                        'percorso_foto' => 'img/Prodotti/BatteriaAcustica1.jpg',
                    ],
                    'DARESTONE CLDRUM White' => [
                        'descrizione_breve' => 'Suoni di batteria profondi e risonanti con fusti in pioppo',
                        'descrizione_estesa' => 'Tutti gli stand sono a doppio rinforzo, altezza e inclinazione regolabili, e sono dotati di gambe a doppia staffa per resistere agli assalti del batterista. Oltre all’hardware a lunga durata, la Roadshow include un portabacchette professionale, un paio di bacchette 5A in acero e uno sgabello.Composizione del set di piatti:Bass da 22” x 16”, Tom Tom da 10” x 7”, Tom Tom da 12” x 8” Floor Tom da 16” x 16”, rullante da 14” x 5,5”. Include stand per rullante, stand per charleston, stand per piatti, piatti charleston e crash, sgabello, pacchette e pedale.',
                        'percorso_foto' => 'img/Prodotti/BatteriaAcustica2.jpg',
                    ],
                    'TAMA LJL48S SBO - Club Jam Kit' => [
                        'descrizione_breve' => 'Costruita per durare con hardware resistente a doppio rinforzo',
                        'descrizione_estesa' => 'Tutti gli stand sono a doppio rinforzo, altezza e inclinazione regolabili, e sono dotati di gambe a doppia staffa per resistere agli assalti del batterista. Oltre all’hardware a lunga durata, la Roadshow include un portabacchette professionale, un paio di bacchette 5A in acero e uno sgabello.Composizione del set di piatti:Bass da 22” x 16”, Tom Tom da 10” x 7”, Tom Tom da 12” x 8” Floor Tom da 16” x 16”, rullante da 14” x 5,5”. Include stand per rullante, stand per charleston, stand per piatti, piatti charleston e crash, sgabello, pacchette e pedale.',
                        'percorso_foto' => 'img/Prodotti/BatteriaAcustica3.jpg',
                    ],
                ],
                'Elettroniche' => [
                    'ALESIS CompactKit 4' => [
                        'descrizione_breve' => 'Con diversi suoni di batteria e piatti, 5 tonalità, 8 brani demo e opzione metronomo a diverse velocità.',
                        'descrizione_estesa' => 'Una delle migliori caratteristiche di questo kit è la sua leggerezza e il comfort di trasporto. Il suo design consente di posizionare questo kit in una varietà di spazi limitati. Portalo con te ovunque tu vada!Questo kit funziona con la batteria ricaricabile, che offre fino a 10 ore di riproduzione e riproduzione alla massima qualità.Design leggero, pieghevole e facile da trasportare. Goditi questo magnifico set musicale ovunque!',
                        'percorso_foto' => 'img/Prodotti/BatteriaElettronica1.jpg',
                    ],
                    'KORG Stageman 80' => [
                        'descrizione_breve' => '1 Kit, 7 modelli che rappresentano tamburi e piatti. Altoparlanti integrati. Pedali e bacchette inclusi.',
                        'descrizione_estesa' => 'Una delle migliori caratteristiche di questo kit è la sua leggerezza e il comfort di trasporto. Il suo design consente di posizionare questo kit in una varietà di spazi limitati. Portalo con te ovunque tu vada!Questo kit funziona con la batteria ricaricabile, che offre fino a 10 ore di riproduzione e riproduzione alla massima qualità.Design leggero, pieghevole e facile da trasportare. Goditi questo magnifico set musicale ovunque!',
                        'percorso_foto' => 'img/Prodotti/BatteriaElettronica2.jpg',
                    ],
                ],
                'Percussioni' => [
                    'Triangolo 10 cm. con battente' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Percussione1.jpg',
                    ],
                    'MEINL SH51 Mini Cajon Shaker' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Percussione2.jpg',
                    ],
                ],
            ],
            'Fiati' => [
                'Sax' => [
                    'YAMAHA Venova YVS120' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Sax1.jpg',
                    ],
                    'GRASSI BS210' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Sax2.jpg',
                    ],
                ],
                'Trombe' => [
                    'PTRUMPET Red' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Tromba1.jpg',
                    ],
                    'YAMAHA YTR2330' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Tromba2.jpg',
                    ],
                ],
                'Flauti' => [
                    'AULOS G302A' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Flauto1.jpg',
                    ],
                    'GRASSI 720MKII' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Flauto2.jpg',
                    ],
                    'HOHNER 9556' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Flauto3.jpg',
                    ],
                ],
                'Clarinetti' => [
                    'GRASSI SCL390' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Clarinetto1.jpg',
                    ],
                    'YAMAHA YCL450E' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Clarinetto2.jpg',
                    ],
                ],
                'Altri strumenti a fiato' => [
                    'Kazoo in Metallo' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/kazoo.jpg',
                    ],
                    'Flauto di Pan 8 Toni DO-DO' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/AltroFiato.jpg',
                    ],
                    'YAMAHA YBB321 Gold Laquered' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/AltroFiato2.jpg',
                    ],
                ],
            ],
            'Attrezzature' => [
                'Amplificatori' => [
                    'FENDER Champion 40' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Amplificatore.jpg',
                    ],
                    'VOX AC2 RhythmVOX Bass' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Amplificatore2.jpg',
                    ],
                    'BEHRINGER AMP800 MiniAmp' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Amplificatore3.jpg',
                    ],
                ],
                'Cavi e connettori' => [
                    'Female RCA / Male Jack 6.35 Mono Adapter' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Cavo.jpg',
                    ],
                    'Electraline 10839 Cavo Hi-Fi 03VH-H per Altoparlanti' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Cavo2.jpg',
                    ],
                    'QUIKLOK G108' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Cavo3.jpg',
                    ],
                ],
                'Supporti' => [
                    'Supporto Ripiegabile per 5 Chitarre' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Supporto1.jpg',
                    ],
                    'KONIG & MEYER 15240 Flugelhorn Stand Black' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Supporto2.jpg',
                    ],
                    'YAMAHA Supporto per Stagepas' => [
                        'descrizione_breve' => '',
                        'descrizione_estesa' => '',
                        'percorso_foto' => 'img/Prodotti/Supporto3.jpg',
                    ],
                ],
            ],
        ];

        foreach ($dati as $categoria => $sottocategorie) {
            foreach ($sottocategorie as $sottocategoria => $prodotti) {
                $id_sotto_categoria = DB::table('sotto_categoria')
                    ->join('categoria', 'categoria.id_categoria', '=', 'sotto_categoria.id_categoria')
                    ->where('nome_categoria', $categoria)
                    ->where('nome_sotto_categoria', $sottocategoria)
                    ->select('sotto_categoria.*')
                    ->first()
                    ->id_sotto_categoria;

                foreach ($prodotti as $prodotto => $dati_prodotto) {

                    DB::table('prodotto')->insert([
                        'nome_prodotto' => $prodotto,
                        'descrizione_breve' => $dati_prodotto['descrizione_breve'],
                        'descrizione_estesa' => $dati_prodotto['descrizione_estesa'],
                        'id_sotto_categoria' => $id_sotto_categoria,
                        'percorso_foto' => $dati_prodotto['percorso_foto'],
                        'prezzo' => rand(200, 2000),
                        'sconto' => rand(1, 10) * 5,
                    ]);
                }
            }
        }

    }
}
