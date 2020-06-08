<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Prodotto;
use App\Sottocategoria;
use Illuminate\Http\Request;

class SottoCategoriaController extends Controller
{
    public function lista_prodotti($id_sotto_categoria)
    {
        // Lista sotto categorie per categoria
        $sotto_categoria = Sottocategoria::findOrFail($id_sotto_categoria);
        $categoria = Categoria::findOrFail($sotto_categoria->id_categoria);

        $nomeProdotto = request()->get('nomeProdotto', '');
        $prezzoMin = request()->get('prezzoMin', '');
        $prezzoMax = request()->get('prezzoMax', '');

        if( strlen($prezzoMin) != 0 && strlen($prezzoMax) != 0 && $prezzoMax < $prezzoMin) {
            $tmp = $prezzoMax;
            $prezzoMax = $prezzoMin;
            $prezzoMin = $tmp;
        }

        $prodotti = Prodotto::where(function ($query) use ($nomeProdotto, $prezzoMin, $prezzoMax, $id_sotto_categoria)
        {
            $query->where('id_sotto_categoria', $id_sotto_categoria);
            if( strlen($nomeProdotto) != 0 ) $query->where('nome_prodotto', 'LIKE', '%'.$nomeProdotto.'%');
            if( strlen($prezzoMin) != 0 ) $query->where('prezzo', '>=', $prezzoMin);
            if( strlen($prezzoMax) != 0 ) $query->where('prezzo', '<=', $prezzoMax);
        });

        $prodotti = $prodotti->paginate(5);

        return view('listaProdotti', compact(['categoria', 'sotto_categoria', 'prodotti']));
    }
    public function insertNuovaSubCategory(Request $request)
    {
        $inputdata=array_merge($request->all());
        $subCategoria = Sottocategoria::create($inputdata);
        if ($subCategoria === null) {
            return redirect()->route('staff.homepage')->with('messages',[['title'=>'Registrazione fallita','type'=>'error','message'=>'Non è stato possibile registrare questa categoria']]);
        }
        return redirect()->route('staff.homepage')->with('messages',[['title'=>'Registrazione effettuata','type'=>'success','message'=>'Categoria registrata correttamente']]);
    }
}
