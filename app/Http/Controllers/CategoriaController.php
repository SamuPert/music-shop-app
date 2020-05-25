<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Prodotto;
use App\Sottocategoria;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function lista_sotto_categorie($id_categoria)
    {
        // Lista sotto categorie per categoria
        $categoria = Categoria::findOrFail($id_categoria);
        $sotto_categorie = Sottocategoria::where('id_categoria', $id_categoria)->get();


        $prodotti = DB::table('prodotto')
            ->join('sotto_categoria', 'prodotto.id_sotto_categoria', '=', 'sotto_categoria.id_sotto_categoria')
            ->select('prodotto.*')
            ->where('sotto_categoria.id_categoria', '=', $id_categoria)
            ->orderBy('prodotto.nome_prodotto')
            ->paginate(5);

        return view('listaSottoCategorie', compact(['categoria', 'sotto_categorie', 'prodotti']));
    }
}
