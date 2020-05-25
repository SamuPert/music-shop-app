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
        $prodotti = Prodotto::where('id_sotto_categoria', $id_sotto_categoria)
        ->paginate(5);

        return view('listaProdotti', compact(['categoria', 'sotto_categoria', 'prodotti']));
    }
}
