<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Sottocategoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function lista_sotto_categorie($id_categoria)
    {
        // Lista sotto categorie per categoria
        $categoria = Categoria::findOrFail($id_categoria);
        $sotto_categorie = Sottocategoria::where('id_categoria', $id_categoria)->get();

        return view('listaSottoCategorie', compact(['categoria', 'sotto_categorie']));
    }
}
