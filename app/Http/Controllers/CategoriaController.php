<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Prodotto;
use App\Sottocategoria;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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

    public function insertCategory(Request $request)
    {
        $inputdataCategoria=array_merge($request->all());
        $categoria = Categoria::createCat($inputdataCategoria);
        if ($categoria === null) {
            return redirect()->route('staff.homepage')->with('messages',[['title'=>'Aggiunta della Categoria fallita','type'=>'error','message'=>'Non è stato possibile registrare questa categoria']]);
        }
        return redirect()->route('staff.homepage')->with('messages',[['title'=>'Aggiunta Categoria','type'=>'success','message'=>'Categoria registrato correttamente'],['title'=>'Log-in Effettuato','type'=>'success','message'=>'Log-in effettuato correttamente']]);
    }
}
