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
}
