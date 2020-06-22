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

        $image = $request->file('percorso_foto', null);
        if( $image ) {
            $full_path = 'storage' . ltrim( $image->store('public/img'), 'public');
        }else{
            $full_path = '';
        }

        $inputdata = $request->only(['nome_prodotto','descrizione_breve','descrizione_estesa','prezzo','sconto','id_categoria','id_sotto_categoria']);
		if( $full_path !== '' )
			$inputdata['percorso_foto'] = $full_path;

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
        return redirect()->route('modifica_prodotti')->with('messages',[['title'=>'Prodotto cancellato','type'=>'success','message'=>'Prodotto cancellato con successo.']]);
    }


    public function lista_prodotti()
    {
        $prodotti = Prodotto::paginate(10);

        return view('modificaProdotti', compact('prodotti'));
    }

    public function updateProdotto(Request $request){
        if( !Auth::check() || !Auth::user()->isStaff() )
        {
            return response()->json([
                "success" => false,
                "error_message" => "Operazione non consentita."
            ]);
        }

        $image = $request->file('percorso_foto', null);
        if( $image ) {
            $full_path = 'storage' . ltrim( $image->store('public/img'), 'public');
        }else{
            $full_path = '';
        }

        $inputdata = $request->only(['id_prodotto','nome_prodotto','descrizione_breve','descrizione_estesa','prezzo','sconto','id_categoria','id_sotto_categoria']);
        if( $full_path !== '' )
			$inputdata['percorso_foto'] = $full_path;
			

        $validator=self::validator($inputdata);
        if($validator->fails()){
            return response()->json([
                "success" => false,
                "error_message" => "Inserire tutti i dati per modificare l'elemento."
            ]);
        }

        $updateOk = Prodotto::updateProdotto($inputdata);

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

    }
}
