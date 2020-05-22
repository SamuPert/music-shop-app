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
            ->join('sotto_categoria', function ($join) use ($id_categoria) {
                $join->on('prodotto.id_sotto_categoria', '=', 'sotto_categoria.id_sotto_categoria')
                    ->where('id_categoria', $id_categoria)
                    ->select('prodotto.*');
            })
            ->paginate(5);
        return view('listaSottoCategorie', compact(['categoria', 'sotto_categorie', 'prodotti']));
    }
}
