<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AdminAuthMiddleware;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware(AdminAuthMiddleware::class);
    }

    public function homepage()
    {
        // Lista utenti con auth_level 3 (staff)
        $utente = User::all()->where('auth_level',3);
        $utenteRegistrato = User::all()->where('auth_level',2);

        return view('adminPage', compact(['utente', 'utenteRegistrato']));
    }
    public function gestione_staff()
    {
        // Lista utenti con auth_level 3 (staff)
        $utente = User::all()->where('auth_level',3);
        $utenteRegistrato = User::all()->where('auth_level',2);

        return view('gestioneStaff', compact(['utente', 'utenteRegistrato']));
    }

    // delete user
    public function removeMember(Request $request)
    {
        $user = User::where('id', $request);
        $user->delete();

        return view('admin.homepage' , compact('username'));
    }
}
