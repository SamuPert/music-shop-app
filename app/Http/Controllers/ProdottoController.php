<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Prodotto;
use App\Sottocategoria;
use Illuminate\Http\Request;

class ProdottoController extends Controller
{

    public function visualizza_prodotto($id_prodotto)
    {
        $prodotti = Prodotto::findOrFail($id_prodotto);
        $sotto_categoria = Sottocategoria::findOrFail($prodotti->id_sotto_categoria);
        $categoria = Categoria::findOrFail($sotto_categoria->id_categoria);


        return view('schedaprodotto', compact(['prodotti', 'sotto_categoria', 'categoria']));


    }

    public function gestione_prodotti()
    {
        $prodotti = Prodotto::paginate(3);

        return view('gestioneProdotti', compact('prodotti'));
    }

    public function insertNewProduct(Request $request)
    {
        $inputdata=array_merge($request->all());
        $prodotto = Prodotto::create($inputdata);
        if ($prodotto === null) {
            return redirect()->route('staff.homepage')->with('messages',[['title'=>'Inserimento Fallito','type'=>'error','message'=>'Non è stato possibile inserire il prodotto']]);
        }
        return redirect()->route('staff.homepage')->with('messages',[['title'=>'Inserimento Riuscito','type'=>'success','message'=>'Il prodotto è stato inserito correttamente nel catalogo']]);
    }

    public function removeProdotto(Request $request, $id_prodotto)
    {
        $prodotto = Prodotto::find( $id_prodotto);
        $prodotto->delete();
        return redirect()->action('ProdottoController@gestione_prodotti');


    }
}
