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
            if( strlen($nomeProdotto) != 0 ){
                $query->where(function ($q) use ($nomeProdotto)
                {
                    $q->orWhere('nome_prodotto', 'LIKE', '%'.$nomeProdotto.'%');
                    $q->orWhere('descrizione_breve', 'LIKE', '%'.$nomeProdotto.'%');
                    $q->orWhere('descrizione_estesa', 'LIKE', '%'.$nomeProdotto.'%');
                });
            }
            if( strlen($prezzoMin) != 0 ) $query->where('prezzo', '>=', $prezzoMin);
            if( strlen($prezzoMax) != 0 ) $query->where('prezzo', '<=', $prezzoMax);
        });

        $prodotti = $prodotti->paginate(5);

        return view('listaProdotti', compact(['categoria', 'sotto_categoria', 'prodotti']));
    }
    public function insertNuovaSubCategory(Request $request)
    {
        $image = $request->file('percorso_foto_sotto_categoria', null);
        if( $image ) {
            $full_path = 'storage' . ltrim( $image->store('public/img'), 'public');
        }else{
            $full_path = '';
        }

        $inputdata = $request->only(['nome_sotto_categoria','id_categoria']);
		if( $full_path !== '' )
			$inputdata['percorso_foto'] = $full_path;
		
		
        $subCategoria = Sottocategoria::create($inputdata);
        if ($subCategoria === null) {
            return redirect()->route('staff.homepage')->with('messages',[['title'=>'Registrazione fallita','type'=>'error','message'=>'Non è stato possibile registrare questa categoria']]);
        }
        return redirect()->route('staff.homepage')->with('messages',[['title'=>'Registrazione effettuata','type'=>'success','message'=>'Categoria registrata correttamente']]);
    }


}
