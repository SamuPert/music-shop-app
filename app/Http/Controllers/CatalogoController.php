<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Prodotto;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function lista_categorie()
    {
        // Lista categorie
        $categorie = Categoria::all();

        $nomeProdotto = request()->get('nomeProdotto', '');
        $prezzoMin = request()->get('prezzoMin', '');
        $prezzoMax = request()->get('prezzoMax', '');

        if( strlen($prezzoMin) != 0 && strlen($prezzoMax) != 0 && $prezzoMax < $prezzoMin) {
            $tmp = $prezzoMax;
            $prezzoMax = $prezzoMin;
            $prezzoMin = $tmp;
        }

        $prodotti = Prodotto::where(function ($query) use ($nomeProdotto, $prezzoMin, $prezzoMax)
        {
            if( strlen($nomeProdotto) != 0 ) $query->where('nome_prodotto', 'LIKE', '%'.$nomeProdotto.'%');
            if( strlen($prezzoMin) != 0 ) $query->where('prezzo', '>=', $prezzoMin);
            if( strlen($prezzoMax) != 0 ) $query->where('prezzo', '<=', $prezzoMax);
        });

        $prodotti = $prodotti->paginate(5);

        return view('homeCatalogo', compact(['categorie', 'prodotti']));
    }
}
