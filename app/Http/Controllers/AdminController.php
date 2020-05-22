<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_controller()
    {
        // Lista utenti con auth_level 3 (staff)
        $utente = User::all()->where('auth_level',3);
        $utenteRegistrato = User::all()->where('auth_level',2);




        return view('adminPage', compact(['utente', 'utenteRegistrato']));
    }
}
