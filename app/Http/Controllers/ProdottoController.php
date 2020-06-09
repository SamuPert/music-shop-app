<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Prodotto;
use App\Sottocategoria;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProdottoController extends Controller
{

    public function visualizza_prodotto($id_prodotto)
    {
        $prodotti = Prodotto::findOrFail($id_prodotto);
        $sotto_categoria = Sottocategoria::findOrFail($prodotti->id_sotto_categoria);
        $categoria = Categoria::findOrFail($sotto_categoria->id_categoria);


        return view('schedaprodotto', compact(['prodotti', 'sotto_categoria', 'categoria']));
    }

    public function gestione_prodotti($id_prodotto)
    {
        if(Auth::guest() || !Auth::user()->isStaff() ) {
            return redirect()->back()->with('messages',[['title'=>'Gestione prodotti fallita','type'=>'warning','message'=>'Non si dispone dei permessi per gestire i prodotti.']]);
        }

        $prodotti = Prodotto::findOrFail($id_prodotto);

        return view('gestioneProdotti', compact('prodotti'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome_prodotto' => ['required', 'string', 'max:75'],
            'descrizione_breve' => ['required', 'string', 'max:1500'],
            'percorso_foto' => ['string', 'max:255'],
            'prezzo' => ['required']

        ]);
    }

    public function insertNewProduct(Request $request)
    {
        if(Auth::guest() || !( Auth::user()->isStaff() || Auth::user()->isAdmin() )) {
            return redirect()->route('staff.homepage')->with('messages',[['title'=>'Inserimento Fallito','type'=>'warning','message'=>'Non si dispone dei permessi per inserire il prodotto.']]);
        }

        $inputdata=array_merge($request->all());
        $validator=self::validator($inputdata);
        if($validator->fails()){
            return redirect()->route('staff.homepage')->withErrors($validator);
        }
        $prodotto = Prodotto::create($inputdata);
        if ($prodotto === null) {
            return redirect()->route('staff.homepage')->with('messages',[['title'=>'Inserimento Fallito','type'=>'error','message'=>'Non è stato possibile inserire il prodotto']]);
        }
        return redirect()->route('staff.homepage')->with('messages',[['title'=>'Inserimento Riuscito','type'=>'success','message'=>'Il prodotto è stato inserito correttamente nel catalogo']]);
    }

    public function removeProdotto(Request $request, $id_prodotto)
    {
        if(Auth::guest() || !( Auth::user()->isStaff() || Auth::user()->isAdmin() )) {
            return redirect()->back()->with('messages',[['title'=>'Prodotto non cancellato','type'=>'warning','message'=>'Non si dispone dei permessi per cancellare il prodotto.']]);
        }

        $prodotto = Prodotto::find( $id_prodotto);
        $prodotto->delete();
        redirect()->back()->with('messages',[['title'=>'Prodotto cancellato','type'=>'success','message'=>'Prodotto cancellato con successo.']]);
    }


    public function lista_prodotti()
    {
        $prodotti = Prodotto::paginate(10);

        return view('modificaProdotti', compact('prodotti'));
    }

    public function updateProdotto(Request $request){

        if( !Auth::check() || Auth::user()->isStaff() )
        {
            return response()->json([
                "success" => false,
                "error_message" => "Operazione non consentita."
            ]);
        }

        $id_prodotto = $request->input('id_prodotto', '');
        $nome_prodotto = $request->input('nome_prodotto', '');
        $desc_breve = $request->input('desc_breve', '');
        $desc_estesa = $request->input('desc_estesa', '');
        $percorso_foto = $request->input('percorso_foto', '');
        $prezzo = $request->input('prezzo', '');
        $sconto = $request->input('sconto', '');
        $sotto_cat = $request->input('sotto_cat', '');

        if( $id_prodotto!== '' && $nome_prodotto !== '' && $desc_breve !== '' && $desc_estesa !== '' && $percorso_foto !== '' && $prezzo !== '' && $sconto !== '' && $sotto_cat !== ''){

            $data = array('id_prodotto' => $id_prodotto, 'nome_prodotto'=>$nome_prodotto,"desc_breve"=>$desc_breve, 'desc_estesa' => $desc_estesa, 'percorso_foto' => $percorso_foto, 'prezzo' => $prezzo, 'sconto' => $sconto, 'sotto_cat' => $sotto_cat );
            $updateOk = Prodotto::updateProdotto($data);

            if( !$updateOk )
            {
                return response()->json([
                    "success" => false,
                    "error_message" => "Aggiornamento dei dati non riuscito"
                ]);
            }

            return response()->json([
                "success" => true,
                "message" => "Aggiornamento dei dati effettuato"
            ]);

        }else{
            return response()->json([
                "success" => false,
                "error_message" => "Riempi tutti i campi"
            ]);
        }
    }
}
