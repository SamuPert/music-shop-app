<?php

namespace App\Http\Controllers;

use App\Prodotto;
use Illuminate\Http\Request;

class ProdottoController extends Controller
{

    public function visualizza_prodotto($id_prodotto)
    {
        return "<b> TODO: Implementa ProdottoController::visualizza_prodotto </b>";


        // Visualizza prodotto
        $prodotto = Prodotto::find($id_prodotto);

        if($prodotto == null)
        {
            // Prodotto non trovato
            dd("Prodotto non trovato");
            return "";
        }

    }
}
