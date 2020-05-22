<?php

namespace App\Http\Controllers;

use App\Prodotto;
use Illuminate\Http\Request;

class ProdottoController extends Controller
{

    public function visualizza_prodotto($id_prodotto)
    {
        $prodotti = Prodotto::findOrFail($id_prodotto);
        return view('schedaprodotto', compact('prodotti'));


    }
}
