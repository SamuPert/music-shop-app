<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function lista_categorie()
    {
        // Lista categorie
        $categorie = Categoria::all();

        return view('homeCatalogo', compact('categorie'));
    }
}
