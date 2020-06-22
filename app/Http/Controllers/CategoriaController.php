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
            ->select('prodotto.*');

        $nomeProdotto = request()->get('nomeProdotto', '');
        $prezzoMin = request()->get('prezzoMin', '');
        $prezzoMax = request()->get('prezzoMax', '');

        if( strlen($prezzoMin) != 0 && strlen($prezzoMax) != 0 && $prezzoMax < $prezzoMin) {
            $tmp = $prezzoMax;
            $prezzoMax = $prezzoMin;
            $prezzoMin = $tmp;
        }

        $prodotti->where(function ($query) use ($nomeProdotto, $prezzoMin, $prezzoMax)
        {
            if( strlen($nomeProdotto) != 0 ) {
                $query->where(function ($q) use ($nomeProdotto)
                {
                    $q->orWhere('prodotto.nome_prodotto', 'LIKE', '%'.$nomeProdotto.'%');
                    $q->orWhere('prodotto.descrizione_breve', 'LIKE', '%'.$nomeProdotto.'%');
                    $q->orWhere('prodotto.descrizione_estesa', 'LIKE', '%'.$nomeProdotto.'%');
                });
            }
            if( strlen($prezzoMin) != 0 ) $query->where('prodotto.prezzo', '>=', $prezzoMin);
            if( strlen($prezzoMax) != 0 ) $query->where('prodotto.prezzo', '<=', $prezzoMax);
        });

        $prodotti = $prodotti
            ->where('sotto_categoria.id_categoria', '=', $id_categoria)
            ->orderBy('prodotto.nome_prodotto')
            ->paginate(5);

        return view('listaSottoCategorie', compact(['categoria', 'sotto_categorie', 'prodotti']));
    }

    public function insertCategory(Request $request)
    {
        $image = $request->file('percorso_foto_categoria', null);

        if( $image ) {
            $full_path = 'storage' . ltrim( $image->store('public/img'), 'public');
        }else{
            $full_path = '';
        }

        $inputdataCategoria = $request->only(['nome_categoria']);
		if( $full_path !== '' )
			$inputdataCategoria['percorso_foto'] = $full_path;

        $categoria = Categoria::creaCategoria($inputdataCategoria);
        if ($categoria === null) {
            return redirect()->route('staff.homepage')->with('messages',[['title'=>'Aggiunta della Categoria fallita','type'=>'error','message'=>'Non è stato possibile registrare questa categoria']]);
        }
        return redirect()->route('staff.homepage')->with('messages',[['title'=>'Aggiunta Categoria','type'=>'success','message'=>'Categoria inserita correttamente']]);
    }
}
