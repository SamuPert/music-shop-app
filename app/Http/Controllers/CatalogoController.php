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
        $prodotti = Prodotto::paginate(5);


        return view('homeCatalogo', compact(['categorie', 'prodotti']));
    }
}
