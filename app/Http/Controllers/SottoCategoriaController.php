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
    public function insertNuovaSubCategory(Request $request)
    {
        $inputdata=array_merge($request->all());
        $subCategoria = Sottocategoria::create($inputdata);
        if ($subCategoria === null) {
            return redirect()->route('staff.homepage')->with('messages',[['title'=>'Registrazione fallita','type'=>'error','message'=>'Non è stato possibile registrare questa categoria']]);
        }
        return redirect()->route('staff.homepage')->with('messages',[['title'=>'Registrazione effettuata','type'=>'success','message'=>'Categoria registrata correttamente']]);
    }
}
