<?php

namespace App\Http\Controllers;

use App\Http\Middleware\UserMiddleware;
use App\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware(UserMiddleware::class);
    }


    public function editprofile() {
        return view('showUser');
    }

    public function updateUserStaff(Request $request){

//        dd($request->all());

        if( !Auth::check() || Auth::user()->auth_level !== 4 )
        {
            return response()->json([
                "success" => false,
                "error_message" => "Operazione non consentita."
            ]);
        }

        $nome = $request->input('nome', '');
        $cognome = $request->input('cognome', '');
        $id_utente = $request->input('id', '');

        if( $nome !== '' && $cognome !== '' && $id_utente !== '' ){

            $data = array('nome'=>$nome,"cognome"=>$cognome, 'id' => $id_utente);
            $updateOk = User::updateUserStaff($data);

            if( !$updateOk )
            {
                return response()->json([
                    "success" => false,
                    "error_message" => "Aggiornamento dei dati non riuscito"
                ]);
            }

            return response()->json([
                "success" => true,
                "message" => "Aggiornamento dei dati effettuato"
            ]);

        }else{
            return response()->json([
                "success" => false,
                "error_message" => "Riempi tutti i campi"
            ]);
        }
    }

}
